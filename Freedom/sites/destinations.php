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
<body id="destinations-background">
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
  <section id="destinations-section">
        <div class="destinations-header">
            <h1 class="title">Our Destinations</h1>
            <p class="description">Explore our unlimited destinations with your Freedom pass</p>
            <h4 class="description">Click on each location to find more about the amenities we offer</h4>
        </div>

        <div class="scrolling-wrapper"></div>

	  
        <div id="popup-city" class="map-popup" style="display: none;">
            <!-- Content here will be filled dynamically with JavaScript -->
        </div>
    </section>
	

		<div id="popup-overlay" onclick="closePopup()" style="display: none;"></div>
		<script src="/js/script.js"></script>	
<script>
 let destinations = {
  destination1: {
      imgSrc: "/images/destination1.jpeg",
      title: "Amsterdam",
      description: "A blend of historical charm and contemporary work culture, Amsterdam offers a unique co-living and co-working experience. For professionals and digital nomads, Amsterdam's reputation as a tech and startup hub is enticing. The city boasts a strong, innovative business culture and a diverse, multi-lingual workforce. Our hotel's co-working spaces provide a flexible, creative environment where you can network with like-minded individuals and maybe even spark the next big idea.",
      roomsAvailable: "Starter - 18 beds | Pro - 20 rooms | Premium - 10 rooms",
      amenities: ["Free WiFi", "Social Events", "CoWork", "Lounge areas", "Swimming Pool", "Shared Kitchen", "Gym", "Rooftop terrace"],
      specialAmenities: "Bike Rental | Fitness Classes | Rooftop Bar",
      contact: {
          address: "Prinsengracht, 1, Amsterdam",
          phone: "+31 894724692",
          checkIn: "3:00 PM",
          checkOut: "11:00 AM"
      }
    },
  destinationRome: {
        imgSrc: "/images/destinationRome.jpeg",
        title: "Rome",
        description: "Rome, the Eternal City, offers a captivating blend of ancient history, vibrant culture, and irresistible charm, making it an ideal choice for your next destination. With its rich heritage and iconic landmarks, Rome presents a truly immersive experience that transports you back in time while embracing modern-day marvels. Choosing Rome as your destination means immersing yourself in a city that effortlessly blends antiquity with modernity, offering endless opportunities for exploration, discovery, and inspiration. Whether you are captivated by history, art, culinary delights, or simply the enchanting ambiance of the city, Rome promises an unforgettable experience.",
        roomsAvailable: "Starter - 24 beds | Pro - 15 rooms | Premium - 12 rooms",
        amenities: ["Free WiFi", "Social Events", "CoWork", "Lounge areas", "Swimming Pool", "Shared Kitchen", "Gym", "Rooftop terrace"],
        specialAmenities: "Cooking classes | Vespa tours | Gelato tastings",
        contact: {
            address: "Via Veneto, 8, Rome",
            phone: "+39 9472528496",
            checkIn: "3:00 PM",
            checkOut: "11:00 AM"
                 }
                },
  destinationMadrid: {
    imgSrc: "/images/madrid.jpeg",
    title: "Madrid",
    description: "Madrid, the bustling capital of Spain, is known for its vibrant nightlife, diverse cuisine and world-class museums. Choosing Madrid as your destination promises an unforgettable experience filled with endless attractions, cultural treasures, and a lively atmosphere that will leave you enchanted. Whether you are drawn to the city's historical landmarks, its artistic treasures, its lively festivals, or its infectious energy, Madrid will leave you with cherished memories. Come and embrace the vibrant allure of Madrid, where tradition meets modernity, and every moment is infused with the passion and zest for life that defines the Spanish capital.",
    roomsAvailable: "Starter - 12 beds | Pro - 28 rooms | Premium - 14 rooms",
    amenities: ["Free WiFi", "Social Events", "CoWork", "Lounge areas", "Swimming Pool", "Shared Kitchen", "Gym", "Rooftop terrace"],
    specialAmenities: "Tapas Tours | Wine Tastings | Artisan Workshops",
    contact: {
        address: "Paseo de la Castellana, 5, Madrid",
        phone: "+34 123456789",
        checkIn: "3:00 PM",
        checkOut: "11:00 AM"
    }
  },
  destinationStockholm: {
    imgSrc: "/images/stockholm.jpeg",
    title: "Stockholm",
    description: "Known for its beautiful archipelago and historic sites, Stockholm is also a modern city with a bustling tech scene. Choosing Stockholm as your destination promises a memorable experience filled with stunning architecture, captivating cultural attractions, and a unique Nordic charm. Whether you are drawn to its fascinating history, stunning architecture, lush greenery, or the renowned Scandinavian design, Stockholm promises an unforgettable experience that will leave you with lasting memories. Come and embrace the captivating allure of Stockholm, where the old meets the new, nature meets urbanity, and every corner reveals the distinct charm of this Scandinavian gem.",
    roomsAvailable: "Starter - 30 beds | Pro - 12 rooms | Premium - 5 rooms",
    amenities: ["Free WiFi", "Social Events", "CoWork", "Lounge areas", "Swimming Pool", "Shared Kitchen", "Gym", "Rooftop terrace"],
    specialAmenities: "Nordic Spa Experiences | Archipelago Cruises | Fika Experience",
    contact: {
        address: "Kungsgatan, 4, Stockholm",
        phone: "+46 123456789",
        checkIn: "3:00 PM",
        checkOut: "11:00 AM"
    }
  },
  destinationMadrid: {
    imgSrc: "/images/madrid.jpeg",
    title: "Madrid",
    description: "Madrid, the bustling capital of Spain, is known for its vibrant nightlife, diverse cuisine and world-class museums. Choosing Madrid as your destination promises an unforgettable experience filled with endless attractions, cultural treasures, and a lively atmosphere that will leave you enchanted. Whether you are drawn to the city's historical landmarks, its artistic treasures, its lively festivals, or its infectious energy, Madrid will leave you with cherished memories. Come and embrace the vibrant allure of Madrid, where tradition meets modernity, and every moment is infused with the passion and zest for life that defines the Spanish capital.",
    roomsAvailable: "Starter - 12 beds | Pro - 28 rooms | Premium - 14 rooms",
    amenities: ["Free WiFi", "Social Events", "CoWork", "Lounge areas", "Swimming Pool", "Shared Kitchen", "Gym", "Rooftop terrace"],
    specialAmenities: "Tapas Tours | Wine Tastings | Artisan Workshops",
    contact: {
        address: "Paseo de la Castellana, 5, Madrid",
        phone: "+34 123456789",
        checkIn: "3:00 PM",
        checkOut: "11:00 AM"
    }
  },
  destinationStockholm: {
    imgSrc: "/images/stockholm.jpeg",
    title: "Stockholm",
    description: "Known for its beautiful archipelago and historic sites, Stockholm is also a modern city with a bustling tech scene. Choosing Stockholm as your destination promises a memorable experience filled with stunning architecture, captivating cultural attractions, and a unique Nordic charm. Whether you are drawn to its fascinating history, stunning architecture, lush greenery, or the renowned Scandinavian design, Stockholm promises an unforgettable experience that will leave you with lasting memories. Come and embrace the captivating allure of Stockholm, where the old meets the new, nature meets urbanity, and every corner reveals the distinct charm of this Scandinavian gem.",
    roomsAvailable: "Starter - 30 beds | Pro - 12 rooms | Premium - 5 rooms",
    amenities: ["Free WiFi", "Social Events", "CoWork", "Lounge areas", "Swimming Pool", "Shared Kitchen", "Gym", "Rooftop terrace"],
    specialAmenities: "Nordic Spa Experiences | Archipelago Cruises | Fika Experience",
    contact: {
        address: "Kungsgatan, 4, Stockholm",
        phone: "+46 123456789",
        checkIn: "3:00 PM",
        checkOut: "11:00 AM"
    }
  },
  destinationSydney: {
    imgSrc: "/images/sydney.jpeg",
    title: "Sydney",
    description: "With its sunny beaches and vibrant arts scene, Sydney is an exciting place to live. Choosing Sydney as your destination promises an extraordinary experience filled with breathtaking landscapes, diverse cultural offerings, and an unbeatable coastal lifestyle. Immerse yourself in Sydney's world-famous harbor, where the sparkling waters meet the iconic Sydney Opera House and the grand Sydney Harbour Bridge. Explore the bustling Circular Quay, stroll along the picturesque Darling Harbour, and indulge in a leisurely ferry ride to Manly or Watsons Bay, offering panoramic views of the city's stunning skyline.",
    roomsAvailable: "Starter - 18 beds | Pro - 17 rooms | Premium - 8 rooms",
    amenities: ["Free WiFi", "Social Events", "CoWork", "Lounge areas", "Swimming Pool", "Shared Kitchen", "Gym", "Rooftop terrace"],
    specialAmenities: "Surfing Lessons | Outdoor Yoga | Beachfront Bar",
    contact: {
        address: "George Street, 11, Sydney",
        phone: "+61 234567890",
        checkIn: "3:00 PM",
        checkOut: "11:00 AM"
    }
  },
  destinationBali: {
    imgSrc: "/images/bali.jpeg",
    title: "Bali",
    description: "Known for its iconic rice paddies and ancient temples, Bali offers a unique experience. The enchanting island paradise of Indonesia, beckons with its stunning landscapes, vibrant culture, and a sense of tranquility that captivates the soul. Choosing Bali as your destination promises a remarkable experience filled with natural beauty, spiritual awakening, and warm hospitality. Come and discover the magical allure of Bali, where the spirit of the island invites you to connect with the essence of paradise.",
    roomsAvailable: "Starter - 12 beds | Pro - 34 rooms | Premium - 26 rooms",
    amenities: ["Free WiFi", "Social Events", "CoWork", "Lounge areas", "Swimming Pool", "Shared Kitchen", "Gym", "Rooftop terrace"],
    specialAmenities: "Yoga Classes | Traditional Cooking Classes | Island Tours",
    contact: {
        address: "Jalan Ray, 23, Ubud, Bali",
        phone: "+62 1234567890",
        checkIn: "3:00 PM",
        checkOut: "11:00 AM"
    }
  },
  destinationCancun: {
    imgSrc: "/images/cancun.jpeg",
    title: "Cancun",
    description: "Cancun, the dazzling coastal paradise of Mexico, invites travelers with its pristine white-sand beaches, turquoise waters, and a vibrant atmosphere that exudes both relaxation and adventure. Choosing Cancun as your destination promises an unforgettable experience filled with natural wonders, rich history, and a lively beachfront ambiance. Come and experience the captivating allure of Cancun, where the sun-drenched beaches, vibrant culture, and boundless adventures await.",
    roomsAvailable: "Starter - 18 beds | Pro - 23 rooms | Premium - 14 rooms",
    amenities: ["Free WiFi", "Social Events", "CoWork", "Lounge areas", "Swimming Pool", "Shared Kitchen", "Gym", "Rooftop terrace"],
    specialAmenities: "Beach Access | Snorkeling | Nightlife Entertainment",
    contact: {
        address: "Avenida Tulum, 14, Cancun",
        phone: "+52 1234567890",
        checkIn: "3:00 PM",
        checkOut: "11:00 AM"
    }
  },
};

function openPopup(destinationId) {
  let destination = destinations[destinationId];
  if (destination) {
      let popup = document.getElementById('popup-city');

      // Start populating the popup with data
      let html = `
          <img src="${destination.imgSrc}" alt="${destination.title}">
          <h3>${destination.title}</h3>
          <p>${destination.description}</p>
          <div class="rooms-section">
              <h4>Rooms available</h4>
              <p class="room-types">${destination.roomsAvailable}</p>
          </div>
          <div class="amenities-section">
              <h4>Amenities provided</h4>
              <ul class="amenities-list">
      `;
      // Add each amenity to the list
      for (let amenity of destination.amenities) {
          html += `<li class="amenity">${amenity}</li>`;
      }
      html += `
              </ul>
              <div class="special-amenities-section">
                  <h4>Special Amenities for this Location</h4>
                  <p class="special-amenities">${destination.specialAmenities}</p>
              </div>
          </div>
          <div class="contact-section">
              <h4>Contact details</h4>
              <p>Address: ${destination.contact.address}</p>
              <p>Phone: ${destination.contact.phone}</p>
              <p>Check-in: ${destination.contact.checkIn} | Check-out: ${destination.contact.checkOut}</p>
          </div>
          <button id="book-destination" class="book-destination">Book this destination</button>
      `;

      // Set the HTML content of the popup
      popup.innerHTML = html;

      // Display the popup
      document.getElementById('popup-overlay').style.display = 'block';
      popup.style.display = 'block';

      // Now that the button exists in the DOM, attach a click event listener
      const bookButton = document.getElementById('book-destination');
      bookButton.addEventListener('click', function() {
        window.location.href = '/php/get_membership.php/';
      });
  }
}

function closePopup() {
  
  document.getElementById('popup-overlay').style.display = 'none';
  document.getElementById('popup-city').style.display = 'none';
}

function generateCards() {
  // Get the container where you want to add the cards
  let container = document.querySelector('.scrolling-wrapper');

  // Create a card for each destination
  for (let destinationId in destinations) {
    let destination = destinations[destinationId];
    
    // Create a card div
    let card = document.createElement('div');
    card.className = 'scrolling-card';
    
    // Create an image for the card
    let img = document.createElement('img');
    img.src = destination.imgSrc;
    img.className = 'scrolling-img';
    img.alt = destination.title;
    img.onclick = function() {
      openPopup(destinationId);
    };
    
    // Create a div for the title
    let title = document.createElement('h3');
    title.className = 'scrolling-card-title';
    title.innerText = destination.title;
    
    // Append the image and title to the card
    card.appendChild(img);
    card.appendChild(title);
    
    // Append the card to the container
    container.appendChild(card);
  }
}

// Call generateCards() to add the cards to the page
generateCards();

	
function makePopupDraggable() {
  var popup = document.getElementById("popup-city");
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;

  popup.onmousedown = dragMouseDown;

  function dragMouseDown(e) {
    e = e || window.event;
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position:
    popup.style.top = (popup.offsetTop - pos2) + "px";
    popup.style.left = (popup.offsetLeft - pos1) + "px";
  }

  function closeDragElement() {
    // stop moving when mouse button is released:
    document.onmouseup = null;
    document.onmousemove = null;
  }
}


	
</script>

<!-- FAQ button -->
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
</html>



