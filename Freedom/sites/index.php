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
        <!-- Carousel has external classes from bootstrap -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img src="/images/amsterdam.png" alt="Chania">
                <div class="carousel-caption">
                  <h3>Amsterdam</h3>
                  <p>Stroll through the canals of Amsterdam while sipping coffee </p>
                </div>
              </div>

              <div class="carousel-item">
                <img src="/images/networking.png" alt="Chania">
                <div class="carousel-caption">
                  <h3>Networking with Friends</h3>
                  <p>Be part of a vibrant community</p>
                </div>
              </div>

              <div class="carousel-item">
                <img src="/images/stockholm.png" alt="Flower">
                <div class="carousel-caption">
                  <h3>Stockholm</h3>
                  <p>Enjoy a deicious Kanelbulle in Stockholm</p>
                </div>
              </div>

              <div class="carousel-item">
                <img src="/images/sydney.png" alt="Flower">
                <div class="carousel-caption">
                  <h3>Sydney</h3>
                  <p>Gaze upon Sydney's beautiful skyline</p>
                </div>
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
        
        <!-- The free text box that goes over the first carousel -->
        <div id="free-textbox">
          <h2>For a world that moves</h2>
          <p>Hybrid work is the new norm. With Freedom, you can work from anywhere, travel, and experience the world while maintaining your productivity. Welcome to the future of work.</p>
      </div>
        
        <section id="homepage-section">
            <div class="feature" id="box1" data-hover-text="... a unique and inclusive environment that caters to your every need. With all-inclusive amenities like fully-equipped offices, comfortable living areas, refreshing swimming pools, high-speed Wi-Fi, and unlimited coffee, you'll have everything at your fingertips to thrive in a productive and enjoyable work environment.">
              <div class="feature-image" style="background-image: url('/images/coworking.png');"></div>
              <div class="feature-overlay">
                <i class="icon fas fa-star"></i>
                <h2 class="feature-header">All-Inclusive</h2>
                <p class="feature-text">Our Co-Working spaces offer...</p>
              </div>
            </div>
            <div class="feature" id="box2" data-hover-text="... seamlessly transition from one city to another without any hassle. Need to relocate for a project or explore new business opportunities in a different city? No problem! Our interconnected coworking spaces provide a consistent experience across locations, allowing you to maintain your productivity and connection to a vibrant community, no matter where you go.">
              <div class="feature-image" style="background-image: url('/images/coworking2.png');"></div>
              <div class="feature-overlay">
                <i class="icon fas fa-globe"></i>
                <h2 class="feature-header">Global</h2>
                <p class="feature-text">With our global network of coworking spaces, you can ...</p>
              </div>
            </div>
            <div class="feature" id="box3" data-hover-text="... building a strong sense of community and fostering meaningful connections. Our vibrant community is filled with like-minded professionals from diverse backgrounds, creating opportunities for collaboration, networking, and lifelong friendships. We curate a range of community events, workshops, and networking sessions that cater to various interests and professional development needs.">
              <div class="feature-image" style="background-image: url('/images/coworking3.png');"></div>
              <div class="feature-overlay">
                <i class="icon fas fa-heart"></i>
                <h2 class="feature-header">Community</h2>
                <p class="feature-text">At our coworking spaces, we prioritize ...</p>
              </div>
            </div>
          </section>
        

        <!-- a mosaic of 2 carousels and 2 big Text boxes -->
        <section class="main-content-mosaic">
            <div class="mosaic-centered-text">
                <h2> Travel without restrictions </h2>
                <p> Have you ever worked while sipping on a coffee in the heart of Madrid? Or went straight to work after a techno rave in Berlin? No? - Then it is about time!</p>
            </div>
            <section class="carousel-container">
                <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel2" data-slide-to="1"></li>
                      <li data-target="#myCarousel2" data-slide-to="2"></li>
                      <li data-target="#myCarousel2" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                      <div class="carousel-item active">
                        <img src="/images/bali_main_page_final.jpeg" alt="Bali">
                        <div class="carousel-caption">
                            <h3>Bali</h3>
                            <p>Relax on the white beach sands, visit a temple or hike up a mountain - Bali has it all.</p>
                          </div>
                      </div>

                      <div class="carousel-item">
                        <img src="/images/Rome.png" alt="Rome">
                        <div class="carousel-caption">
                            <h3>Rome</h3>
                            <p> Gelato, Pizza and Pasta... need we say more? </p>
                          </div>
                      </div>

                      <div class="carousel-item">
                        <img src="/images/cancun_main_page.jpeg" alt="Cancun">
                        <div class="carousel-caption">
                            <h3>Cancun</h3>
                            <p>Indulge in the vibrant allure of Cancun's pristine beaches and vibrant nightlife. Unforgettable moments await!</p>
                          </div>
                      </div>

                      <div class="carousel-item">
                        <img src="/images/madrid.png" alt="Madrid">
                        <div class="carousel-caption">
                            <h3>Madrid</h3>
                            <p>Enjoy tapas and elegant rooftop parties in Spain</p>
                          </div>
                      </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#myCarousel2" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel2" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                </div>
            </section>
        </section>

        <!-- 3rd Carousel -->
        <section class="main-content-mosaic">
            <section class = carousel-container>
                <div id="myCarousel3" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel3" data-slide-to="1"></li>
                      <li data-target="#myCarousel3" data-slide-to="2"></li>
                      <li data-target="#myCarousel3" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                      <div class="carousel-item active">
                        <img class="carousel-img" src="/images/coworking.png" alt="Travel1">
                        <div class="carousel-caption">
                            <h3>High Speed Wifi</h3>
                            <p>Say goodbye to the hassle of managing separate locations for work, leisure, and relaxation - we've got it all covered under one roof.
                            </p>
                          </div>
                      </div>

                      <div class="carousel-item">
                        <img class="carousel-img" src="/images/coworking2.png" alt="Travel2">
                        <div class="carousel-caption">
                            <h3>Networking Events</h3>
                            <p>Say goodbye to loneliness and embrace the power of community!</p>
                          </div>
                      </div>

                      <div class="carousel-item">
                        <img class="carousel-img" src="/images/coworking3.png" alt="Travel3">
                        <div class="carousel-caption">
                            <h3>Comfort & Productivity</h3>
                            <p>Enjoy our comfortable working areas to make the most out of your day </p>
                          </div>
                      </div>

                      <div class="carousel-item">
                        <img class="carousel-img" src="/images/coworking4.png" alt="Travel4">
                        <div class="carousel-caption">
                            <h3>Community</h3>
                            <p>Our vibrant community is filled with like-minded professionals from diverse backgrounds, creating opportunities for collaboration, networking, and lifelong friendships</p>
                          </div>
                      </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#myCarousel3" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel3" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                </div>
            </section>
            <div class="mosaic-centered-text">
                <h2>Work how YOU like it</h2>
                <p> Design your own routine in our office spaces - You wanna kickstart your day with a coffee and get some emails done? 
                  Or rather start the day with a yoga workshop? We got you covered!</p>
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
