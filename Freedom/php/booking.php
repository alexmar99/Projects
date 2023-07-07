<?php
include 'db.php';

if (!isset($_SESSION['username']) || !isset($_SESSION['membership']) || !isset($_SESSION['hotel_names'])) {
    header("Location: /sites/login.php");
    exit();
}

$username = $_SESSION['username'];
$membership = $_SESSION['membership'];
$hotel_names = $_SESSION['hotel_names'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Book a room in our beautiful selection of hotels!</title>
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Freedom | One Pass - Unlimited Destinations</title>
    <script src="https://kit.fontawesome.com/d5a4941b87.js" crossorigin="anonymous"></script>

s
</head>
<body>
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
        <h1>Freedom</h1>
        <p>One Pass - Unlimited Destinations</p>
</header>
	
<div class="booking_form">
    <form method="POST" action="booking_processing.php">
        <label for="hotel_name">Hotel Name:</label>
		<select id="hotel_name" name="hotel_id" class="controls1" required>
			<?php
			foreach ($hotel_names as $hotel_id => $hotel_name) {
				echo "<option value=\"{$hotel_id}\">{$hotel_name}</option>";
			}
			?>
		</select>
        <label for="check_in_date">Check-In Date:</label>
        <input type="text" id="check_in_date" name="check_in_date" class="controls1" required>

        <label for="check_out_date">Check-Out Date:</label>
        <input type="text" id="check_out_date" name="check_out_date" class="controls1" required>

        <label for="payment_method">Payment Method</label>
        <select id="payment_method" name="payment_method" class="controls1" required>
            <option value="cash">Cash at Checkout</option>
            <option value="credit_card">Credit Card</option>
            <option value="debit_card">Debit Card</option>
            <option value="cheque">Cheque</option>
        </select>

        <input type="submit" value="Book Now" class="botons3">
    </form>
</div>
</body>
<footer>
        <div class="container text-center">
            <span>Follow us on:</span>
            <div>
                <a href="#"><img src="/images/facebook.png" alt="Facebook" width="30" height="30"></a>
                <a href="#"><img src="/images/twitter.png" alt="Twitter" width="30" height="30"></a>
                <a href="#"><img src="/images/instagram.png" alt="Instagram" width="30" height="30"></a>
            </div>
        </div>
</footer>
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
<script>
$(function() {
    var dateFormat = "yy-mm-dd",
        from = $("#check_in_date")
            .datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 1,
                minDate: 0,
                dateFormat: dateFormat
            })
            .on("change", function() {
                var date2 = $('#check_in_date').datepicker('getDate');
                date2.setMonth(date2.getMonth() + 1);
                to.datepicker("option", "minDate", getDate(this));
                to.datepicker("option", "maxDate", date2);
            }),
        to = $("#check_out_date")
            .datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 1,
                minDate: 0,
                maxDate: '+1M',
                dateFormat: dateFormat
            })
            .on("change", function() {
                from.datepicker("option", "maxDate", getDate(this));
            });

    function getDate(element) {
        var date;
        try {
            date = $.datepicker.parseDate(dateFormat, element.value);
        } catch (error) {
            date = null;
        }
        return date;
    }
});

	
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
</script>
</html>

