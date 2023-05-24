import unittest
from calculator import evaluate


class BaseConversorTest(unittest.TestCase):
    def setUp(self) -> None:
        pass

#We added several new tests including any combination of operators as well as floats, integers, negative and positive numbers.
#There are 17 tests in total, including the base tests provided to us (11). We added a 0 divided by x test to the basic tests that the guidelines gave us to show we #handled a defined value (0 divided by x) and returned an error when X was divided by 0. We also tried to include more complex expressions with multiple operands and #operators to make sure the stack works as intended.

    def test_basic_and_dividing_zero(self):
        self.assertEqual(evaluate("+ 1 2"), 3)
        self.assertEqual(evaluate("* 1 2"), 2)
        self.assertEqual(evaluate("- 1 2"), -1)
        self.assertEqual(evaluate("/ 1 2"), 0.5)
        self.assertEqual(evaluate("+ 2 / 1 2"), 2.5)
        self.assertEqual(evaluate("/ 0 4"), 0)

    def test_malformed(self):
        with self.assertRaises(ValueError):
            evaluate("+ 2")

    def test_division_by_zero(self):
        with self.assertRaises(ValueError):
            evaluate("/ 2 0")

    def test_evaluate_addition(self):
        result = evaluate("+ 2 3")
        self.assertEqual(result, 5.0)

    def test_evaluate_subtraction(self):
        result = evaluate("- 7 4")
        self.assertEqual(result, 3.0)

    def test_evaluate_multiplication(self):
        result = evaluate("* 5 2")
        self.assertEqual(result, 10.0)

    def test_evaluate_division(self):
        result = evaluate("/ 12 3")
        self.assertEqual(result, 4.0)

    def test_evaluate_invalid_expression(self):
        with self.assertRaises(ValueError):
            evaluate("+ 2 3 *")

    def test_evaluate_division_by_zero(self):
        with self.assertRaises(ValueError):
            evaluate("/ 4 0")

    def test_evaluate_single_number(self):
        self.assertEqual(evaluate("+2"), 2)
        self.assertEqual(evaluate("2"), 2)
        self.assertEqual(evaluate("-2"), -2)

    def test_evaluate_complex_expression(self):
        result = evaluate("- + * 2 3 / 4 2 1")
        self.assertEqual(result, 7.0)

    def test_negative_numbers(self):
        self.assertEqual(evaluate("+ -1 -2"), -3)
        self.assertEqual(evaluate("* -1 2"), -2)
        self.assertEqual(evaluate("- -1 2"), -3)
        self.assertEqual(evaluate("/ -1 2"), -0.5)

    def test_decimal_numbers(self):
        self.assertEqual(evaluate("+ 1.5 2.5"), 4)
        self.assertEqual(evaluate("* 1.5 2.5"), 3.75)
        self.assertEqual(evaluate("- 1.5 2.5"), -1)
        self.assertEqual(evaluate("/ 1.5 2.5"), 0.6)

    def test_multiple_operators_1(self):
        self.assertEqual(evaluate("+ * 1 2 * 3 4"), 14)
        self.assertEqual(evaluate("- * 1 2 * 3 4"), -10)
        self.assertEqual(evaluate("* / 4 2 + 1 3"), 8)
        self.assertEqual(evaluate("+ * 2 3 * 4 5"), 26)

    def test_multiple_operators_2(self):
        self.assertEqual(evaluate("* + 2 3 + 4 5"), 45)
        self.assertEqual(evaluate("/ + 9 3 * 4 2"), 1.5)
        self.assertEqual(evaluate("+ / 6 2 * 4 5"), 23)
        
    def test_multiple_operators_3(self):
        self.assertEqual(evaluate("/ * 8 2 + 2 2"), 4)
        self.assertEqual(evaluate("* + 3 3 / 9 3"), 18)
        self.assertEqual(evaluate("- / 9 3 + 2 2"), -1)
        
    def test_most_complex_expressions(self):
        self.assertEqual(evaluate("- + 10 3 / * 2 4 -2"), 17)
        self.assertEqual(evaluate("/ * - 5 2 + 3 1 -0.5"), -24)