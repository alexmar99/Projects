
// Get the current URL path
var path = window.location.pathname;

// Get all navigation links
var links = document.querySelectorAll('nav ul li a');

// Loop through the links and add the 'active' class to the matching link
for (var i = 0; i < links.length; i++) {
    if (links[i].getAttribute('href') === path) {
        links[i].classList.add('active');
        break; // Stop the loop once the link is found
    }
}

document.getElementById('login').addEventListener('click', function () {
    window.location.href = "/sites/login.html";
  });

  document.getElementById('signup').addEventListener('click', function () {
    window.location.href = "/sites/signup.html";
  });


window.onload = function() {
    var passwordToggle = document.getElementById("password-toggle");
    passwordToggle.addEventListener("click", togglePassword);
};

<script>
window.onload = function() {
  // Login form
  var passInputLogin = document.getElementById('pass');
  var passToggleLogin = document.getElementById('password-toggle');

  passToggleLogin.addEventListener('click', function () {
    togglePassword(passInputLogin, passToggleLogin);
  });

  // Registration form
  var passInputReg = document.getElementById('password');
  var passToggleReg = document.getElementById('password-toggle-reg');

  passToggleReg.addEventListener('click', function () {
    togglePassword(passInputReg, passToggleReg);
  });
};

// Function to toggle password visibility
function togglePassword(inputField, toggleButton) {
  if (inputField.type === "password") {
    inputField.type = "text";
    toggleButton.textContent = "Hide";
  } else {
    inputField.type = "password";
    toggleButton.textContent = "Show";
  }
}


