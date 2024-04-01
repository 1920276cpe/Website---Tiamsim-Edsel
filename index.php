<?php
session_start();

// Function to check if the user is logged in
function checkUserLoggedIn() {
    // Implement your own logic here to check if the user is logged in
    // For example, you can check if a session variable is set or if the user has a valid authentication token

    // Return true if the user is logged in, otherwise return false
    return isset($_SESSION['loggedin']);
}

// Check if the user is logged in
$isLoggedIn = checkUserLoggedIn();

?>
<!DOCTYPE html>
<html lang="en">
<head>

<title>Studio Ni Mang Kanor</title>

<!--

Template 2099 Scenic

http://www.tooplate.com/view/2099-scenic

-->

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">


<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">


<!-- MAIN CSS -->
<link rel="stylesheet" href="css/tooplate-style.css">
<style>
    .modal {
        display: none;
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.6);
    }

    .modal-content {
        background-color: #34495e;
        margin: 10% auto;
        padding: 20px;
        border-radius: 5px;
        width: 400px;
        max-width: 90%;
        color: #fff;
        text-align: center;
    }

    .modal-title {
        margin-bottom: 20px;
    }

    .modal-form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .modal-form .inline-label {
        display: flex;
        align-items: center;
    }

    .modal-form .inline-label label {
        margin-right: 10px;
    }

    .modal-form input[type="text"],
    .modal-form input[type="password"],
    .modal-form input[type="email"] {
        width: 100%;
        padding: 10px;
        font-size: 18px;
        border-radius: 5px;
        margin-bottom: 10px;
        display: block;
        color:black;
    }

    .modal-form input[type="submit"] {
        width: 150px;
        margin: 0 auto;
        display: block;
        padding: 10px;
        font-size: 18px;
        border-radius: 5px;
        background-color: #1abc9c;
        color: #fff;
        border: none;
        cursor: pointer;
    }
</style>
</head>
<body>

<!-- PRE LOADER -->
<div class="preloader">
     <div class="spinner">
          <span class="sk-inner-circle"></span>
     </div>
</div>


<!-- MENU -->
<div class="navbar custom-navbar navbar-fixed-top" role="navigation">
     <div class="container">

          <!-- NAVBAR HEADER -->
          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <!-- lOGO -->
               <a href="index.html" class="navbar-brand">KAru</a>
          </div>

          <!-- MENU LINKS -->
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home" class="smoothScroll">Home</a></li>
                    <li><a href="/phonebook.php" class="smoothScroll">Phonebook</a></li>
                    <li><a href="#about" class="smoothScroll">Studio</a></li>
                    <li><a href="#team" class="smoothScroll">Our People</a></li>
                    <li><a href="#contact" class="smoothScroll">Let's talk</a></li>
                    <?php
                         if ($isLoggedIn) {
                             echo '<li><a href="/logout.php" class="smoothScroll">Logout</a></li>';
                         } else {
                             echo '<li><a href="#" class="smoothScroll" onclick="openLoginModal()">Login</a></li>';
                             echo '<li><a href="#" class="smoothScroll" onclick="openRegisterModal()">Register</a></li>';
                         }
                    ?>
               </ul>
          </div>

     </div>
</div>


<!-- HOME -->
<section id="home" class="parallax-section">
     <div class="overlay"></div>
     <div class="container">
          <div class="row">

               <div class="col-md-8 col-sm-12">
                    <div class="home-text">
                         <h1>Welcome to the Phonebook Website!</h1>
                         <p>Manage your contacts with ease using our intuitive phonebook.</p>
                         <ul class="section-btn">
                              <a href="#about" class="smoothScroll"><span data-hover="Learn More">Learn More</span></a>
                         </ul>
                    </div>
               </div>


          </div>
     </div>

     <!-- Video -->
     <video controls autoplay loop muted>
          <source src="videos/video.mp4" type="video/mp4">
          Your browser does not support the video tag.
     </video>
</section>


<!-- ABOUT -->
<section id="about" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    <div class="about-info">
                         <h3>Introducing Studio Project</h3>
                         <h1> Live concert tuwing Gabi sa Tabi ng ministop sa Levi Town.</h1>
                    </div>
               </div>

          </div>
     </div>
</section>


<!-- PROJECT -->
<section id="project" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                         <a href="images/project-image1.jpg" class="image-popup">
                              <img src="images/project-image1.jpg" class="img-responsive" alt="">

                              <div class="project-overlay">
                                   <div class="project-info">
                                        <h1>pa lagyan ng 2nd Floor ung Cr sa Jolibee</h1>
                                        <h3>Renovation ng Cr</h3>
                                   </div>
                              </div>
                         </a>
                    </div>
               </div>

               <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                         <a href="images/project-image2.jpg" class="image-popup">
                              <img src="images/project-image2.jpg" class="img-responsive" alt="">

                              <div class="project-overlay">
                                   <div class="project-info">
                                        <h1>Bahala na</h1>
                                        <h3>Kung ano Maisipan</h3>
                                   </div>
                              </div>
                         </a>
                    </div>
               </div>

               <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                         <a href="images/project-image3.jpg" class="image-popup">
                              <img src="images/project-image3.jpg" class="img-responsive" alt="">

                              <div class="project-overlay">
                                   <div class="project-info">
                                        <h1>Depende Sayo</h1>
                                        <h3>Kahit Ano lang</h3>
                                   </div>
                              </div>
                         </a>
                    </div>
               </div>

               <div class="col-md-6 col-sm-6">
                    <!-- PROJECT ITEM -->
                    <div class="project-item">
                         <a href="images/project-image4.jpg" class="image-popup">
                              <img src="images/project-image4.jpg" class="img-responsive" alt="">

                              <div class="project-overlay">
                                   <div class="project-info">
                                        <h1>Concert Tuwing 12am sa tabi ng Kalsada</h1>
                                        <h3>Live Concert sa Tabi ng 7/11 Sa Levi Town</h3>
                                   </div>
                              </div>
                         </a>
                    </div>
               </div>

          </div>
     </div>
</section>


<!-- TEAM -->
<section id="team" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <!-- SECTION TITLE -->
                    <div class="section-title">
                         <h1>Meet Our People</h1>
                    </div>
               </div>

               <div class="clearfix"></div>

               <div id="owl-team" class="owl-carousel">
                    <div class="col-md-4 col-sm-4 item">
                         <div class="team-item">
                              <img src="images/team-image1.jpg" class="img-responsive" alt="">
                              <div class="team-overlay">
                                   <ul class="social-icon">
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                        <li><a href="#" class="fa fa-linkedin"></a></li>
                                   </ul>
                              </div>
                         </div>
                         <p>Eman Bathan</p>
                         <h3>Head Designer</h3>
                    </div>

                    <div class="col-md-4 col-sm-4 item">
                         <div class="team-item">
                              <img src="images/team-image2.jpg" class="img-responsive" alt="">
                              <div class="team-overlay">
                                   <ul class="social-icon">
                                        <li><a href="#" class="fa fa-instagram"></a></li>
                                        <li><a href="#" class="fa fa-github"></a></li>
                                        <li><a href="#" class="fa fa-facebook"></a></li>
                                   </ul>
                              </div>
                         </div>
                         <p>Joaquin Castillo</p>
                         <h3>Speciality Focus</h3>
                    </div>

                    <div class="col-md-4 col-sm-4 item">
                         <div class="team-item">
                              <img src="images/team-image3.jpg" class="img-responsive" alt="">
                              <div class="team-overlay">
                                   <ul class="social-icon">
                                        <li><a href="#" class="fa fa-instagram"></a></li>
                                        <li><a href="#" class="fa fa-dribbble"></a></li>
                                        <li><a href="#" class="fa fa-behance"></a></li>
                                   </ul>
                              </div>
                         </div>
                         <p>Mayor Gaba</p>
                         <h3>Art director</h3>
                    </div>

                    <div class="col-md-4 col-sm-4 item">
                         <div class="team-item">
                              <img src="images/team-image4.jpg" class="img-responsive" alt="">
                              <div class="team-overlay">
                                   <ul class="social-icon">
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                        <li><a href="#" class="fa fa-linkedin"></a></li>
                                   </ul>
                              </div>
                         </div>
                         <p>Bebic</p>
                         <h3>Support Specialist</h3>
                    </div>

               </div>

          </div>
     </div>
</section>


<!-- CONTACT -->
<section id="contact" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-offset-3 col-md-6 col-sm-12">
                    <!-- SECTION TITLE -->
                    <div class="section-title">
                         <h1>Contact Information</h1>
                    </div>
               </div>

               <div class="clearfix"></div>

               <div class="col-md-offset-2 col-md-8 col-sm-12">
                    <!-- CONTACT FORM HERE -->
                    <form id="contact-form" role="form" action="#" method="post">
                         <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                         <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                         <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                         <button type="submit" class="form-control" id="cf-submit" name="submit">Send Message</button>
                    </form>
               </div>

          </div>
     </div>
</section>


<!-- FOOTER -->
<footer>
     <div class="container">
          <div class="row">

               <div class="col-md-4 col-sm-4">
                    <h2>Studio Location</h2>
                    <p>, Batangas Province, Philippines</p>
                    <p>Phone: 09687154127</p>
                    <p>Email: <a href="Shn@gmail.com">Xsheel@gmail.com</a></p>
               </div>

               <div class="col-md-4 col-sm-4">
                    <h2>Singerist sa CR.</h2>
                    <p>Kung Ano-Ano lang.</p>
                    <ul class="social-icon">
                         <li><a href="#" class="fa fa-facebook"></a></li>
                         <li><a href="#" class="fa fa-twitter"></a></li>
                         <li><a href="#" class="fa fa-behance"></a></li>
                         <li><a href="#" class="fa fa-dribbble"></a></li>
                         <li><a href="#" class="fa fa-github"></a></li>
                    </ul>
               </div>

               <div class="col-md-4 col-sm-4 newsletter">
                    <h2>Subscribe</h2>
                    <p>Subscribe to our newsletter for latest updates.</p>
                    <form action="#" method="post">
                         <input type="email" name="email" placeholder="Your Email Address" required>
                         <button type="submit">Subscribe</button>
                    </form>
               </div>

          </div>
     </div>
</footer>


<!-- MODALS -->
<div id="loginModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
    <h2 class="modal-title">Login</h2>
    <div class="modal-form">
      <form action="authenticate.php" method="post">
        <div class="inline-label">
          <label for="username">
            <i class="fas fa-user"></i>
          </label>
          <input type="text" name="username" placeholder="Username" id="username" required>
        </div>
        <div class="inline-label">
          <label for="password">
            <i class="fas fa-lock"></i>
          </label>
          <input type="password" name="password" placeholder="Password" id="password" required>
        </div>
        <input type="submit" value="Login">
      </form>
    </div>
  </div>
</div>

<!-- Success Login Modal -->
<div id="successModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Success!</h2>
        <p id="successMessage"></p>
    </div>
</div>

<!-- Modal for error message -->
<div id="errorModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Error!</h2>
        <p id="errorMessage"></p>
    </div>
</div>


<div id="registerModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
    <h2 class="modal-title">Register</h2>
    <div class="modal-form">
      <form action="register.php" method="post">
        <div class="inline-label">
          <label for="register-username">
            <i class="fas fa-user"></i>
          </label>
          <input type="text" id="register-username" name="username" placeholder="Username" required>
        </div>
        <div class="inline-label">
          <label for="register-password">
            <i class="fas fa-lock"></i>
          </label>
          <input type="password" id="register-password" name="password" placeholder="Password" required>
        </div>
        <div class="inline-label">
          <label for="register-email">
            <i class="fas fa-envelope"></i>
          </label>
          <input type="email" id="register-email" name="email" placeholder="Email" required>
        </div>
        <input type="submit" value="Register">
      </form>
    </div>
  </div>
</div>



<!-- SCRIPTS -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<script>
  // Function to open the login modal
  function openLoginModal() {
    document.getElementById("loginModal").style.display = "block";
  }

  // Function to open the register modal
  function openRegisterModal() {
    document.getElementById("registerModal").style.display = "block";
  }

  // Function to close the modals
  function closeModal() {
    document.getElementById("loginModal").style.display = "none";
    document.getElementById("registerModal").style.display = "none";
  }

  
</script>

<script src="js/custom.js"></script>

</body>
</html>
