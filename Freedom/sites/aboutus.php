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
<body id = "aboutus-background">
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
    <main>
        <section>
            <div id="hero-image">
                <div id = "aboutus-header">
                    <h1>Get to know our Story</h1>
                    <p>... and let us revolutionize modern work together</p>

                </div>
                <div class="word-container">
                    <h1 class="word">Passion<span class="word-text">for a new and dynamic world</span></h1>
                    <h1 class="word"> Flexibility<span class="word-text">to live your best life - personally and professionally</span></h1>
                    <h1 class="word"> Community<span class="word-text">across the globe</span></h1>
                  </div>
                
                
            </div>
        <section> 
            
           
            <section id="story-section">
                <div class="story-text">
                    <h2> It all started with an idea</h2>
                    <p> What if there was a way you could travel the world and still keep on working? If you could flexibly change your location 
                        and discover a new place in a heartbeat? If you knew that wherever you go, you would find different but like-minded people 
                        that welcome you into their community?
                     </p>
                </div>
                
                <div id="video-container-aboutus">
                    <iframe src="https://www.youtube.com/embed/HgWE7GXoIhU?rel=0&amp;autoplay=1&amp;mute=1" frameborder="10" allowfullscreen></iframe>
                </div>
                
                <div class="story-text">
                    <h2> & 4 passionate students</h2>
                    <p>What started out as a fun project for four friends turned into a business idea. After sharing our experiences about past 
                        internships and how companies struggled to offer the flexibility needed to compete in a globalized world, we came up with a concept 
                    that allows us to reshape the way we work & live </p>
                </div>
             </section>


             <section class="exemplary-achievements">
                <div class="container">
                    <div class="achievement-boxes">
                        
                        <div class="achievement-box">
                            <img class="aboutus-small-box-image" src="/images/aboutus_workshop.png" alt="workshops">
                            <div class="achievement-line"></div>
                            <p class="achievement-description"> Enjoy some fun workshops with your peers  </p>
                        </div>

                        <div class="achievement-box">
                            <img class="aboutus-small-box-image" src="/images/aboutus_work.png" alt="working">
                            <div class="achievement-line"></div>
                            <p class="achievement-description"> Work in your office of choice </p>
                        </div>

                        <div class="achievement-box">
                            <img class="aboutus-small-box-image" src="/images/aboutus_travel.png" alt="traveling">
                            <div class="achievement-line"></div>
                            <p class="achievement-description"> Go see the world while traveling</p>
                        </div>
                    </div>
                </div>
            </section>


   <section> 
    
    <h4 class = "aboutus-team-header">Our Team</h4>
    <div class="achievement-line"></div>


    <div class="aboutus-container">
      <div class="aboutus-block">
        <div class="avatar avatar-juliette">
          <img src="/images/juliette_norm.png" alt="Juliette">
        </div>
        <h3>Juliette</h3>
        <p>CEO and everyone's energy boost, Juliette ensures that our coworking space is buzzing with fruitful partnerships and collaborative projects. When she is not bouncing off ideas, she is definitely robbing the snack cabinet.</p>
      </div>
      
      <div class="aboutus-block">
        <div class="avatar avatar-paula">
          <img src="/images/paula_norm.png" alt="Paula">
        </div>
        <h3>Paula</h3>
        <p>To make sure that we are not going bankrupt in the process, Paula is crunching our numbers as CFO to help us make Freedom better everyday. You can recognize her by her big earphones that are blasting techno.</p>
      </div>
      
      <div class="aboutus-block">
        <div class="avatar avatar-alex">
          <img src="/images/alex_norm.png" alt="Alex">
        </div>
        <h3>Alex</h3>
        <p>As our CTO and Chief Tech Wizard (CTW), Alex conjures technological solutions that make our coworking experience seamless and hassle-free. When he is not in front of a laptop, find him napping with his 5 dogs.</p>
      </div>
      
      <div class="aboutus-block">
        <div class="avatar avatar-sophia">
          <img src="/images/sophia_norm.png" alt="Sophia">
        </div>
        <h3>Sophia</h3>
        <p>Sophia is taking care of all our Freedom members. As our Chief People Officer, it is her job to make sure you have everything you need, and you might even catch her in one of Freedom's yoga and dancing classes.</p>
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