<?php
include('db.php');

$username = $_SESSION['username'];

$query = "SELECT * FROM Bookings INNER JOIN Users ON Bookings.username = Users.username INNER JOIN Hotels ON Bookings.hotel_name = Hotels.hotel_name WHERE Users.username = ?;
";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $username);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $Bookings = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $Bookings = [];
}

$stmt->close();
$conn->close();
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Freedom | One Pass - Unlimited Destinations</title>
    <script src="https://kit.fontawesome.com/d5a4941b87.js" crossorigin="anonymous"></script>
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
  <main>
<h1 >Hey, <span id="username"><?php echo ucfirst($_SESSION['username']); ?></span></h1>
<h2 >These are all your reservations.</h2> 	  

    <table id="reservations-table" class="table-reservations">
        <thead>
            <tr>
                <th>Freedom City</th>
				<th>Freedom Hotel Address</th>
                <th>Check-In Date</th>
                <th>Check-Out Date</th>
                <th>Payment Method</th>
				<th>Booking Date</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($Bookings as $Booking) : ?>
            <tr>
                <td><?php echo $Booking['hotel_name']; ?></td>
				<td><?php echo $Booking['road_hotel'] . ', ' . $Booking['street_number']; ?></td>
                <td><?php echo $Booking['check_in_date']; ?></td>
                <td><?php echo $Booking['check_out_date']; ?></td>
                <td><?php echo $Booking['payment_method']; ?></td>
				<td><?php echo $Booking['date_booking']; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</main>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="/js/script.js"></script>

	
	
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
</body>
</html>
