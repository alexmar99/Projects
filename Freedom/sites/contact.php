<?php
session_start();
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
        <section>
            <div id="back-contactus-image">
                <div class = "contactus-header">
                    <div id= "contactus-info">
                        <h1>Any questions ?</h1>
                        <div class="achievement-line"></div>
                        <p>We are here to answer all your doubts & questions so that you can enjoy our services worries free...</p>
                    </div><br>
                    <div class = "contactus-direction">
                        <div class = "contact-address" id="address">
                            <h4>Address details</h4>
                            <div class="achievement-line"></div><br>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.3887161019625!2d2.1648302529821155!3d41.38736392223298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a3b01de08c6f%3A0x3eeaaba63d5e9224!2sPlaza%20Catalu%C3%B1a!5e0!3m2!1sfr!2ses!4v1687388997334!5m2!1sfr!2ses" style="border:0;" border-radius="5px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <p> Pl. de Catalunya, 
                                08002 Barcelona</p>
                        </div>
                        <div class ="contact-address" id = "phone">
                            <h4>Contact details</h4>
                            <div class="achievement-line"></div><br>
                            <p><b>Phone contact</b></p>
                            <li>+34 93 221 10 00</li>
                            <li>+34 93 514 13 00</li><br>
                            <p><b>Email contact</b></p>
                            <p>guest.experience@freedom.com</p>
                        </div>
                    </div>
                    <div class= "contactus-form">
                        <h2>Contact Us</h2>
                        <div class="achievement-line"></div>
                        <form id="contact-form">
                            <div id="contactus-details">
                                <div id = "name-label">
                                <label for="name">Name:</label>
                                <input type="text" id="name" name="name" required>
                                </div>
                                <div id = "email-label">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" required>
                                </div>
                            </div>
                            <label for="enquiry">Enquiry type:</label>
                            <input type="text" id="enquiry" name="enquiry" required>
                            <label for="message">Message:</label>
                            <textarea id="message" name="message" rows="4" required></textarea>
                        
                            <input type="submit" value="Submit">
                        </form>
                    </div>
            
                </div>
                
            </div>
            
        <section> 
        <!--last header message -->
<div class="end_other_amenities_message">
</div>

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
    

<script>
    document.getElementById('contact-form').addEventListener('submit', function(event) {
        event.preventDefault();
        window.location.href = 'confirmation.php';
    });
</script>
	
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