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

<!--First header -->
    <header>
        <h1>Free to choose your living experience</h1>
        <p>Our destinations offer all kinds of spaces to work, eat and relax to your heart's content.</p>
    </header>

<!-- part of amenities section on SLEEPING -->
<section id="amenities-eating-section">
    <div class= "image-container-amenities" id="container3">
            <div class="img-amenities-box" id="sleeping-amenities-box0" style="background-image: url('/images/bunk-beds.jpg')";>
                <div class="capacity_tag">
                    <i class="icon fas fa-euro-sign"></i>
                </div>
                <div class="amenities-overlay" id="text-box0" data-hover-text="Rooms size: 6 people max. Lockers, bed sheets and bathroom available.">
                    <h2 class="amenities-header">Our Bunk beds</h2>
                    <p class="feature-text">Share your room with fellow nomads for a cheaper alternative.</p>
                </div>    
            </div>

            <div class="img-amenities-box" id="sleeping-amenities-box00" style="background-image:url('/images/single_room.jpg')";>
                <div class="capacity_tag">
                    <i class="icon fas fa-euro-sign"></i>
                    <i class="icon fas fa-euro-sign"></i>
                </div>
                <div class="amenities-overlay" id="text-box00" data-hover-text="Double bed & private bathroom with shower. No desk space. ">
                    <h2 class="amenities-header">Single Room</h2>
                    <p class="feature-text">Enjoy your own quiet space.</p>
                </div>  
            </div>

            <div class="img-amenities-box" id="sleeping-amenities-box000" style="background-image:url('/images/double-room.jpg')";>
                <div class="capacity_tag">
                    <i class="icon fas fa-euro-sign"></i>
                    <i class="icon fas fa-euro-sign"></i>
                    <i class="icon fas fa-euro-sign"></i>
                </div>
                <div class="amenities-overlay" id="text-box000" data-hover-text="Double bed,bathroom with bathtub,work space available.">
                    <h2 class="amenities-header">Premium Room</h2>
                    <p class="feature-text">Need more space and comfort? This room is made for you.</p>
                </div>  
            </div>
    </div>
    <div class= "story-container" id="container4">
        <div class="story-text" id ="sleeping-text">
            <h2>Our rooms options</h2><br>
            <p>Discover a variety of comfortable room options tailored to suit your preferences. </p> 
            <p> Whether you're seeking budget-friendly accommodations or a touch of luxury, we have you covered. 
                Our selection includes cozy bunk beds for those looking for a cost-effective stay, small single rooms with private showers for a cozy retreat, and premium rooms with dedicated workspaces and luxurious amenities.
                Whichever option you choose, rest assured that our accommodations are thoughtfully designed to ensure a comfortable and enjoyable stay during your time with us. 
            </p>
        </div>
    </div>                     

</section>

<!-- part of amenities section on work  -->
    <section id="amenities-working-section">
        <div class= "story-container" id="container1">
            <div class="story-text" id ="working-text">
                <h2>Our working spaces</h2><br>
                <p> 
                    Discover our hotel's exceptional working amenities designed exclusively for digital nomads.
                    Choose the space out of our three offereing that suits best your needs to achieve all your goals and tasks.</p>
                <p>
                    Network with like-minded professionals, enjoy complimentary refreshments, and access state-of-the-art meeting rooms. 
                    Elevate your productivity and embrace the freedom to work remotely in a stimulating and supportive environment.
                </p>
            </div>
        </div>
        <div class= "image-container-amenities" id="container2">
                <div class="img-amenities-box" id="amenities-box1" style="background-image: url('/images/Coworking-space2.jpg')";>
                    <div class="capacity_tag">
                        <i class="icon fas fa-user"></i>
                        <span>100</span>
                    </div>
                    <div class="amenities-overlay" id="text-box1" data-hover-text="Available equipment: electric sockets, free wifi, tables, free water dispensers.">
                        <h2 class="amenities-header">Our Open-spaces</h2>
                        <p class="feature-text">Our Co-Working spaces offer...</p>
                    </div>    
                </div>

                <div class="img-amenities-box" id="amenities-box2" style="background-image:url('/images/Private-booth.jpg')";>
                    <div class="capacity_tag">
                        <i class="icon fas fa-user"></i>
                        <span>5max</span>
                    </div>
                    <div class="amenities-overlay" id="text-box2" data-hover-text="Available equipment: Wifi, private & quiet desk, second screen to work.">
                        <h2 class="amenities-header">Our Private Offices</h2>
                        <p class="feature-text">Book your own individual office space...</p>
                    </div>  
                </div>

                <div class="img-amenities-box" id="amenities-box3" style="background-image:url('/images/workshop_stage.jpg')";>
                    <div class="capacity_tag">
                        <i class="icon fas fa-user"></i>
                        <span>100+</span>
                    </div>
                    <div class="amenities-overlay" id="text-box3" data-hover-text="Available equipment: agora seating, mics, projector.">
                        <h2 class="amenities-header">Our Conference & Event space</h2>
                        <p class="feature-text">Organise and attend workshop in our agora space...</p>
                    </div>  
                </div>
        </div>              
    </section>


<!-- part of amenities section on eating  -->
    <section id="amenities-eating-section">
        <div class= "image-container-amenities" id="container3">
            <div class="img-amenities-box" id="eating-amenities-box6" style="background-image:url('/images/cafeteria-snacks.jpg')";>
                <div class="capacity_tag">
                    <i class="icon fas fa-euro-sign"></i>
                </div>
                <div class="amenities-overlay" id="text-box6" data-hover-text="Healthy snacks,salads, sandwiches and quick brunch options available.">
                    <h2 class="amenities-header">Our Quick snacks options</h2>
                    <p class="feature-text">Want a quick break ? Our cafeteria will cater your needs.</p>
                </div>  
            </div>

                <div class="img-amenities-box" id="eating-amenities-box4" style="background-image: url('/images/bar.jpg')";>
                    <div class="capacity_tag">
                        <i class="icon fas fa-euro-sign"></i>
                        <i class="icon fas fa-euro-sign"></i>
                    </div>
                    <div class="amenities-overlay" id="text-box4" data-hover-text="Taste and try our signature free cocktails as well as our healthy mocktails options.">
                        <h2 class="amenities-header">Our Bar</h2>
                        <p class="feature-text">Meet people around a late night drink at our bar...</p>
                    </div>    
                </div>

                <div class="img-amenities-box" id="eating-amenities-box5" style="background-image:url('/images/restaurant.jpg')";>
                    <div class="capacity_tag">
                        <i class="icon fas fa-euro-sign"></i>
                        <i class="icon fas fa-euro-sign"></i>
                        <i class="icon fas fa-euro-sign"></i>
                    </div>
                    <div class="amenities-overlay" id="text-box5" data-hover-text="Local & international food options are available for anyone. All dietary restrictions are included in our menus.">
                        <h2 class="amenities-header">Our Restaurant</h2>
                        <p class="feature-text">Treat yourself in our healthy and high quality restaurant...</p>
                    </div>  
                </div>
            
        </div>
        <div class= "story-container" id="container4">
            <div class="story-text" id ="eating-text">
                <h2>Our restaurants</h2><br>
                <p> Indulge in a delightful culinary experience at our hotel, offering an array of restoration options catering to your discerning tastes.</p> 
                <p> Unwind with a refreshing drink and vibrant ambiance at our trendy bar, where you can connect with fellow nomads.
                    Enjoy a quick bite or catch up on work at our cozy cafeteria, serving delectable snacks and beverages throughout the day. 
                    Opt for a truly exquisite dining experience by treating  yourself to our high-end restaurant, where culinary masterpieces await. 
                </p>
            </div>
        </div>                     

    </section>


<!-- part of amenities section on relax/sport  -->
<section id="amenities-working-section">
    <div class= "story-container" id="container5">
        <div class="story-text" id ="sports-text">
            <h2>Our Gyms & Spa </h2><br>
            <p> 
                Discover the perfect oasis for digital nomads at our hotel.
                Experience ultimate relaxation and wellness during your stay with us.</p> 
            <p>
                
                Stay in shape and energized at our modern gym. 
                Recharge and pamper yourself in our serene spa.
                Take a refreshing dip in our sparkling pool. 
            </p>
        </div>
    </div>
    <div class= "image-container-amenities" id="container6">
            <div class="img-amenities-box" id="amenities-box7" style="background-image: url('/images/gym.jpg')";>
                <div class="capacity_tag">
                    <i class="fas fa-dumbbell"></i>
                    <span>All</span>
                </div>
                <div class="amenities-overlay" id="text-box7" data-hover-text="Fully equipped gym space.Coach and collective sports classes available.">
                    <h2 class="amenities-header">Our Gym</h2>
                    <p class="feature-text">Need to blow some steam off in between meetings? The Gym is there for you...</p>
                </div>    
            </div>

            <div class="img-amenities-box" id="amenities-box8" style="background-image:url('/images/spa.jpg')";>
                <div class="capacity_tag">
                    <i class="fas fa-spa"></i>
                </div>
                <div class="amenities-overlay" id="text-box8" data-hover-text="Hammam, massages and steam room available.">
                    <h2 class="amenities-header">Our Spa options</h2>
                    <p class="feature-text">Relax in our spa after your long day.</p>
                </div>  
            </div>

            <div class="img-amenities-box" id="amenities-box9" style="background-image:url('/images/pool.jpg')";>
                <div class="capacity_tag">
                    <i class="fas fa-swimmer"></i>
                    <span>25m</span>
                </div>
                <div class="amenities-overlay" id="text-box9" data-hover-text="Inside pool for cold destinations and Infinity pool.Lounge area & Jacuzzi available.">
                    <h2 class="amenities-header">Our Infinity pools</h2>
                    <p class="feature-text">Take a dive in the pool to freshen up and enjoy...</p>
                </div>  
            </div>
    </div>              
</section>
<!--last header message -->
<div class="end_other_amenities_message">
    <h2> Discover our other amenities depending on the location</h2>
    <p>More equipment and facilities are available depending on your Freedom destination.</p>
    <p>Go to <a href="contact.php" >Contact us</a> to ask your questions & discover more about them.</p>
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
            <p class= "copyright" >© 2023 Freedom. All rights reserved.</p>
        </div>
    </footer>

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