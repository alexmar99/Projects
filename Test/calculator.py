import sys

class Operation:
    """The base class for all operations. Each operation takes a variable number of operands."""
    def __init__(self, *operands):
        """Initialize the operands.""" 
        self.operands = operands

    def evaluate(self):
        """Placeholder method to be overridden by subclasses."""
        pass


class Addition(Operation):
    """The class for all addition operations."""
    def evaluate(self):
        """Returns the sum of all operands."""
        return sum(self.operands)

class Subtraction(Operation):
    """The class for all subtraction operations."""
    def evaluate(self):
        """Subtracts each operand from the initial result."""
        result = self.operands[0]
        for operand in self.operands[1:]:
            result -= operand
        return result

class Multiplication(Operation):
    """The class for all multiplication operations."""
    def evaluate(self):
        """Multiplies all operands together."""
        result = 1
        for operand in self.operands:
            result *= operand
        return result

class Division(Operation):
    """The class for all division operations."""
    def evaluate(self):
        """Divides the result by each operand. Raises ValueError if we try to divide by zero."""
        result = self.operands[0]
        for operand in self.operands[1:]:
            if operand == 0:
                raise ValueError("Sorry, but you cannot divide by 0.")
            result /= operand
        return result

def evaluate(expression):
    """
    Evaluates an expression using stack based evaluation.

    The expression is split into tokens. The tokens are processed in reverse for easy stack operation. 
    If a token is an operation, it pops the necessary operands from the stack, performs the operation and pushes 
    the result back to the stack. If a token is a number, it is pushed to the stack. 
    At the end, there should be exactly one result remaining in the stack. If not, a value error is raised.

    Parameters:
        expression (str): The expression to be evaluated.

    Returns:
        float: The result of the evaluation.

    Extra: Remember that spaces separate operands and operators (+3 != + 3). A corrext expression must provide spaces where necessary to separate operands and operators.
    """
    assert isinstance(expression, str), "Expression should be a string"
    tokens = expression.split()
    stack = []

    operations = {
        '+': Addition,
        '-': Subtraction,
        '*': Multiplication,
        '/': Division
    }

    for token in reversed(tokens):
        if token in operations:
            if len(stack) < 2:
                raise ValueError("Invalid input: not enough operands.")
            operation = operations[token](stack.pop(), stack.pop())
            assert isinstance(operation, Operation), "Failed to create a valid Operation instance, check the classes"
            stack.append(operation.evaluate())
        else:
            try:
                stack.append(float(token))
            except ValueError:
                raise ValueError("We don't currently support this token: '{}'.".format(token))
  
#These expressions are all mutually exclusive, thus we use an if,elif,else structure for readibility and code interpretability.
    if len(stack) == 0:
        raise ValueError("You forgot to input an expression, try again")
    elif len(stack) != 1:
        raise ValueError("Invalid input: The expression you have input contains too many operands or too few operators")
    else:
        return stack[0]  # Return the final result

def main():
    """
    The main function that gets called when the script is run from the command line.
    Expects exactly one command line argument which is the expression to be evaluated.
    """
    if len(sys.argv) != 2:
        raise SystemExit("Please, use the correct input criteria. Usage: python calculator.py \"<expression>\"")

    expression = sys.argv[1]
    try:
        result = evaluate(expression)
        print(f"Evaluating expression: {expression} result: {result}")
        
    except ValueError as e:
        print(f"Error: {e}")

if __name__ == "__main__":
    main()
