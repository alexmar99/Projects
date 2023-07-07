<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Freedom | One Pass - Unlimited Destinations</title>
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
        <h1>Flexible Membership Options</h1>
        <p>We know decision-making is hard...But don't sweat it - Simply choose the membership that is right for you and begin your journey!</p>
    </header>
    <main>
        <section id="membership-plans">
            <div id="starter" class="membership">
                <div class="top-section">
                    <h1>Starter</h1>
                    <p class="price">$399.99/month</p>
                    <hr>
                    <a href="/sites/signup.php" class="signup-btn">Sign Up</a>
                </div>
                <div class="bottom-section">
                    <h4>What is included?</h4>
                    <ul class="amenities">
                        <li>Access to the coworking space during regular business hours</li>
                        <li>High-speed Wi-Fi connection</li>
                        <li>Complimentary coffee and tea</li>
                        <li>Priority booking for meeting rooms (subject to availability)</li>
                        <li>Networking events and workshops</li>
                    </ul>
                </div>
            </div>
            <!-- Silver and Gold membership boxes follow the same structure -->
            <div id="pro" class="membership">
                <div class="top-section">
                    <h1>Pro</h1>
                    <p class="price">$549.99/month</p>
                    <hr>
                    <a href="/sites/signup.php" class="signup-btn">Sign Up</a>
                </div>
                <div class="bottom-section">
                    <h4>What is included?</h4>
                    <ul class="amenities">
                        <li>24/7 access to the coworking space</li>
                        <li>Reserved desk or designated workspace with lockable storage</li>
                        <li>Complimentary snacks and refreshments</li>
                        <li>Access to a dedicated member-only lounge area</li>
                        <li>Exclusive invites to premium networking events and industry-specific workshops</li>
                    </ul>
                </div>
            </div>
            <div id="premium" class="membership">
                <div class="top-section">
                    <h1>Premium</h1>
                    <p class="price">$999.99/month</p>
                    <hr>
                    <a href="/sites/signup.php" class="signup-btn">Sign Up</a>
                </div>
                <div class="bottom-section">
                    <h4>What is included?</h4>
                    <ul class="amenities">
                        <li>Priority access to premium workstations </li>
                        <li>Complimentary access to meeting rooms </li>
                        <li>Complimentary parking rates for nearby parking facilities</li>
                        <li>Access to a VIP executive lounge with additional amenities, such as a barista bar</li>
                        <li>Access to exclusive executive networking events and mentorship programs</li>
                    </ul>
                </div>
            </div>
        </section>
        
             

    </main>
	</body>
    <footer>
        <div class="container text-center">
            <span>Follow us on:</span>
            <div>
                <a href="#"><img src="/images/facebook.png" alt="Facebook" width="30" height="30"></a>
                <a href="#"><img src="/images/twitter.png" alt="Twitter" width="30" height="30"></a>
                <a href="#"><img src="/images/instagram.png" alt="Instagram" width="30" height="30"></a>
            </div>
            <p class= "copyright" >© 2023 Freedom. All rights reserved.</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="/js/script.js"></script>

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
</html>