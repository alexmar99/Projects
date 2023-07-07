<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
		<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="/scripts/password-validator.min.js"></script> <!-- add this line -->
		<script src="/scripts/script.js"></script>
		<link rel="stylesheet" type="text/css" href="/css/styles.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<title>Freedom | One Pass - Unlimited Destinations</title>
		<script src="https://kit.fontawesome.com/d5a4941b87.js" crossorigin="anonymous"></script>
        <title>Signup</title>
    </head>
    <nav>
        <img src="/images/logo.png" id="logo">
        <ul class="nav-middle">
          <li><a href="/sites/index.php">Home</a></li>
          <li><a href="/sites/memberships.php">Memberships</a></li>
          <li><a href="/sites/destinations.php">Destinations</a></li>
          <li><a href="/sites/spaces.php">Spaces</a></li>
          <li><a href="/sites/reviews.php">Reviews</a></li>
          <li><a href="/sites/aboutus.php">About Us</a></li>
          <li><a href="/sites/contact.php">Contact Us</a></li>
        </ul>
    
		<div class="account-info">
			<?php 
			if (isset($_SESSION['username'])) {
				echo '<div class="dropdown">';
				echo '<button class="dropbtn">'.ucfirst($_SESSION['username']).'</button>';
				echo '<div class="dropdown-content">';

				echo '<a href="/php/reservations.php">Reservations</a>';
				echo '<a href="/php/user_settings.php">Settings</a>';
				echo '<a href="/php/logout.php">Exit</a>';
				echo '</div>';
				echo '</div>';
				echo '<script>document.getElementById("chatbot-container").classList.add("show");</script>';
			} else {
				echo '<a href="/sites/login.php" class="account-button">Login</a>';
				echo '<a href="/sites/signup.php" class="account-button">Signup</a>';
			}
			?>
		</div>
    </nav>
	<header>
        <h1> Sign Up to Freedom</h1>
        <p> Join our Community in a few simple steps!</p>
    </header>
<body>
<form class="form-register-reg" name="reg_user" method="POST" action="/php/user_reg.php" onsubmit="return validatePassword();">
	
    <div class="input-container">
        <input class="controls1" type="text" name="full_name" id="full_name" placeholder="Write your Full Name" required>
    </div>
    <div class="input-container">
        <input class="controls1" type="email" name="email" id="email" placeholder="Write your Email" required>
    </div>
    <div class="input-container">
        <input class="controls1" type="text" name="username" id="username2" placeholder="Write your Username" required>
    </div>
	<div class="input-container">
        <input class="controls_register" type="password" name="password" id="password-reg" placeholder="Write your Password" required>
        <span class="password-toggle2" id="password-toggle-reg">Show</span>
    </div>	
    <div class="input-container">
        <input class="controls1" type="text" name="country" id="country" placeholder="What country are you from?" required>
    </div>
    <div class="input-container">
        <input class="controls1" type="text" name="date_of_birth" id="date_of_birth" placeholder="Date of Birth" required>
    </div>
    <div class="input-container">
        <select class="controls1" name="gender" id="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
    </div>
    <div class="input-container">
        <select class="controls1" name="membership" id="membership" required>
            <option value="starter">Starter</option>
            <option value="pro">Pro</option>
            <option value="premium">Premium</option>
        </select>
    </div>
	<div class="input-container">
	<input class="botons" type="submit" value="Register">
	</div>
    <p><a href="/sites/login.php">Already have an account?</a></p>
</form>
    
	
</body>
<!-- Create the FAQ button -->
<button id="faq-button" onclick="toggleChatbot()"><b>FAQ</b></button>
	
<div class="chatbot-container" id="chatbot-container">
    <div class="chatbot-header">
        <h2>Frequently Asked Questions</h2>
        <button class="close-btn" onclick="toggleChatbot()">X</button>
    </div>
    <select id="question-dropdown" onchange="displayAnswer()">
        <option value="">Select a question...</option>
        <option value="1">How can I pay for my Freedom membership ?</option>
        <option value="2">Do you need assistance with cancellation or modification?</option>
        <option value="3">How do I reach you if I need assistance with my booking?</option>
        <option value="4">Is Freedom child-friendly?</option>
        <option value="5">Can I store my luggage at Freedom for a few days?</option>
    </select>
    <div id="answer"></div>
</div>
	<!-- Function that checks the password and results error if we dont meet the requirements -->
<script>
function validatePassword() {
    var password = document.getElementById('password-reg').value;

    // at least one number, one lowercase and one uppercase letter
    // at least six characters
    var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;

    if (!re.test(password)) {
        alert('Password must be at least 6 characters long and include at least one number, one lowercase and one uppercase letter.');
        return false;
    }

    return true;
}
</script>
<!-- Function for the chatbot  -->
<script>
    const answers = {
        1: "There are two online payment methods through your account : through deposit/bank transfer or through a valid credit card (Visa, Mastercard or American Express)",
        2: "If you need to cancel one of your upcoming trips, just sign in to your account and go to ‘My Bookings’, select the booking/s you need to cancel and proceed.",
        3: "You can call us at any of the numbers at the Contact us page by filling out this form. We will gladly get back to you as soon as possible!",
        4: "Freedom welcomes families and offers different policies for children's stays depending on the location and their age. Children cannot stay in bunk beds rooms unless the entire dorm is reserved for the same family. Please Contact the destinations to know more about the policies applied.",
        5: "Every Freedom offers a space to store your luggage for the first 24 hours, after that some locations apply a fee per extra hour/day.",
    };

    function displayAnswer() {
        const questionDropdown = document.getElementById("question-dropdown");
        const answerElement = document.getElementById("answer");
        const selectedQuestion = questionDropdown.value;

        answerElement.innerHTML = answers[selectedQuestion] || "";
    }

    function toggleChatbot() {
        const chatbotContainer = document.getElementById("chatbot-container");
        chatbotContainer.classList.toggle("show");
    }

$( function() {
    $( "#date_of_birth" ).datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: "-100:+0",
        dateFormat: "dd-mm-yy",
        maxDate: "-18y"
    });
} );
	<!-- function together with password validator -->
window.onload = function() {
  var passInputReg = document.getElementById('password-reg');
  var passToggleReg = document.getElementById('password-toggle-reg');

  passToggleReg.addEventListener('click', function () {
    if (passInputReg.type === "password") {
      passInputReg.type = "text";
      passToggleReg.textContent = "Hide";
    } else {
      passInputReg.type = "password";
      passToggleReg.textContent = "Show";
    }
  });
};
</script>
</html>