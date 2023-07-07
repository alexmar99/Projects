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
        <h1>But don't take it from us...</h1>
        <p>Listen to our many happy customers</p>
    </header>
    <main>
        <section id="grey-banner">
            <div class="container">
                <p>Freedom is for you</p>
                <h2>Trusted by thousands of employees and employers worldwide</h2>
                <p class="section-paragraph">Work, Live, Explore, Repeat - For 2 years already we have been transforming the lives of our clients. </p>
                <a href="/sites/signup.php" class="button">Signup</a>
            </div>
        </section>
    
        <section class="exemplary-achievements">
            <div class="container">
                <div class="achievement-boxes">
                    <div class="achievement-box">
                        <h3 class="achievement-number">10k</h3>
                        <div class="achievement-line"></div>
                        <p class="achievement-description">Happy Users since launch in 2022</p>
                    </div>
                    <div class="achievement-box">
                        <h3 class="achievement-number">#1</h3>
                        <div class="achievement-line"></div>
                        <p class="achievement-description">Placed first on this year's Future of Work Conference Innovation Award </p>
                    </div>
                    <div class="achievement-box">
                        <h3 class="achievement-number">7</h3>
                        <div class="achievement-line"></div>
                        <p class="achievement-description">Locations worldwide</p>
                    </div>
                </div>
            </div>
        </section>
    
        <section id="mission-section">
            <div class="container">
                <p class="testimonial-text">Testimonials</p>
                <h2 class="mission-header">For maximum flexibility at utmost ease </h2>
                <div class="testimonial-grid">
                    <div class="testimonial-card">
                        <img src="/images/review_samuel_navarre.png" alt="Testimonial 1" class="testimonial-picture">
                        <h3 class="testimonial-name">Samuel Navarre</h3>
                        <h4 class="testimonial-job ">35 years, Writer </h4>
                        <p class="testimonial-description">"This coworking space is a productivity paradise with its vibrant atmosphere, ample amenities, and inspiring community."</p>
                        <p class="testimonial-stars">★★★★★</p>
                    </div>
                    <div class="testimonial-card">
                        <img src="/images/review_jane_smith.png" alt="Testimonial 2" class="testimonial-picture">
                        <h3 class="testimonial-name">Jane Smith</h3>
                        <h4 class="testimonial-job ">28 years, Software Developer</h4>
                        <p class="testimonial-description">"I'm in awe of the exceptional services and flexibility provided by this coworking space, making it a dream workspace for entrepreneurs like me."</p>
                        <p class="testimonial-stars">★★★★★</p>
                    </div>
                    <div class="testimonial-card">
                        <img src="/images/review_mark_johnson.png" alt="Testimonial 3" class="testimonial-picture">
                        <h3 class="testimonial-name">Mark Johnson</h3>
                        <h4 class="testimonial-job ">32 years, Entrepreneur</h4>
                        <p class="testimonial-description">"Choosing this coworking space was the best decision for my business—the seamless experience, stunning design, and supportive network have exceeded my expectations."</p>
                        <p class="testimonial-stars">★★★★★</p>
                    </div>
                    <div class="testimonial-card">
                        <img src="/images/review_destiny_honeycomb.png" alt="Testimonial 4" class="testimonial-picture">
                        <h3 class="testimonial-name">Destiny Honeycomb</h3>
                        <h4 class="testimonial-job ">26 years, Content Creator</h4>
                        <p class="testimonial-description">"The combination of comfortable workstations, state-of-the-art technology, and a fantastic work-life balance initiative make this coworking space the ultimate professional haven."</p>
                        <p class="testimonial-stars">★★★★★</p>
                    </div>
                    <div class="testimonial-card">
                        <img src="/images/review_chad_bronswick.png" alt="Testimonial 5" class="testimonial-picture">
                        <h3 class="testimonial-name">Chad Bronswick</h3>
                        <h4 class="testimonial-job ">24 years, Sales Manager </h4>
                        <p class="testimonial-description">"From the moment I stepped into this coworking space, I knew I had found my creative sanctuary—the energetic vibe and collaborative spirit here are truly unmatched.".</p>
                        <p class="testimonial-stars">★★★★★</p>
                    </div>
                    <div class="testimonial-card">
                        <img src="/images/review_amy_whittaker.png" alt="Testimonial 6" class="testimonial-picture">
                        <h3 class="testimonial-name">Amy Witthaker</h3>
                        <h4 class="testimonial-job ">25 years, Journalists</h4>
                        <p class="testimonial-description">"A game-changer for startups and freelancers alike, this coworking space offers an unbeatable blend of affordability, networking opportunities, and a genuinely inspiring atmosphere."</p>
                        <p class="testimonial-stars">★★★★★</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="company-testimonial">
            <div class = company-container>
                <p class="company-header-small">Testimonials</p>
                <h2 class="company-header-big">Our Happy Enterprise Customers</h2>
            </div>
            <div class="company-container">
                <div class="testimonial-logos">
                    <img src="/images/google.png" alt="Company Logo 1" class="testimonial-logo">
                    <img src="/images/nike.png" alt="Company Logo 2" class="testimonial-logo">
                    <img src="/images/patagonia.png" alt="Company Logo 3" class="testimonial-logo">
                    <img src="/images/hellofresh.png" alt="Company Logo 4" class="testimonial-logo">
                    <img src="/images/glovo.png" alt="Company Logo 6" class="testimonial-logo">
                </div>
            </div>
            
        </section>
              

    </main>
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