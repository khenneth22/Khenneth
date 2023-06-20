<?php
include 'includes/header.php';
?>
    <div class="container">

      <h1><a href="index.php">Khenneth Puerto</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2>I'm a passionate <span>junior software developer</span></h2>

      <nav id="navbar" class="navbar">
        <ul>
          <!-- <li><a class="nav-link active" href="#header">Home</a></li> -->
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#resume">Resume</a></li>
          <!-- <li><a class="nav-link" href="#services">Services</a></li>-->
          <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="http://ph.linkedin.com/in/khennethpuerto" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End Header -->



  

  



<?php
include 'about.php';
include 'resume.php';
include 'services.php';
include 'portfolio.php';
include 'contact.php';
include 'includes/footer.php';
?>