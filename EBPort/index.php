<?php
    session_start();
    $name="";
    if(isset($_SESSION["name"])){
        $name = $_SESSION["name"];
    }
    else{
        $name = "Sign in";
    }
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Home | Employment and Business Portal</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">Employment <em> Portal</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.php" class="active">Home</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Jobs</a>
                              
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="Jobs.php">Explore Jobs</a>
                                    <a class="dropdown-item" href="add_jobs.php">Add Jobs</a>
                                </div>
                            </li>
                           
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>
                              
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="about.php">About Us</a>
                                    <a class="dropdown-item" href="team.html">Team</a>
                                    <a class="dropdown-item" href="blog.php">Blog</a>
                                    <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                                    <a class="dropdown-item" href="terms.html">Terms</a>
                                </div>
                            </li>
                            <li><a href="contact.php">Contact</a></li> 
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class='fas fa-user-alt'></i></a>
                                <div class="dropdown-menu">
                                    <a class ="dropdown-item" href="#">Hello <b><?php echo $name; ?> </b></a>
                                    <?php 
                                    if(isset($_SESSION['login'])){
                                        if($_SESSION['login']==1){
                                        echo "<a class='dropdown-item'href='signout.php'>Sign out</a>";
                                    }}
                                    ?>
                                    <a class="dropdown-item" href="signin.php">Sign in </a>
                                    <a class="dropdown-item" href="signup.php">Sign up</a>
                                    
                                </div>
                            </li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6>Explore the wide range options</h6>
                <h2>Find the perfect <em>Job</em></h2>
                <div class="main-button">
                    <a href="contact.php">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ***** Main Banner Area End ***** -->

   <!-- ***** Cars Starts ***** -->
   <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Featured <em>Jobs</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>We hope that you are going to find suitable job for you.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/product-1-720x480.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span> <sup>$</sup>Starting from 20000 Rs. </span>

                            <h4>Restaurant</h4>

                            <p>Cooking &nbsp;/&nbsp; Bartender</p>

                            <ul class="social-icons">
                                <li><a href="job-details.html">+ View More</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/product-2-720x480.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span> <sup>$</sup> Starting From 15000Rs. </span>

                            <h4>Cleaning</h4>

                            <p> Sanitaization</p>

                            <ul class="social-icons">
                                <li><a href="job-details.html">+ View More</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="assets/images/product-3-720x480.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <span> <sup>$</sup>Starting from 30000 Rs. </span>

                            <h4>Teacher</h4>

                            <p>Teaching</p>

                            <ul class="social-icons">
                                <li><a href="job-details.html">+ View More</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <div class="main-button text-center">
                <a href="jobs.html">View Jobs</a>
            </div>
        </div>
    </section>
    <!-- ***** Cars Ends ***** -->

    <section class="section section-bg" id="schedule" style="background-image: url(assets/images/about-fullscreen-1-1920x700.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Read <em>About Us</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Our mission is to help people get jobs. We foster a collaborative workplace that strives to create the best experience for job seekers.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-content text-center">
                        <p>We strives to put job seekers first, giving them free access to search for jobs, post resumes and research companies.</p>

                        <p>Employment Portal is forever pushing the boundaries with new-edge innovations and technology. We have integrated the semantic search mechanism to significantly improve the job search of the site and make it more efficient for users</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Blog Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Read our <em>Blog</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'>How to introduce Yourself in an Interview??</a></li>
                  <li><a href='#tabs-2'>How to write best Resume in 2020</a></li>
                  <li><a href='#tabs-3'>Hacks to Land Your Dream Job in a Month.</a></li>
                  <div class="main-rounded-button"><a href="blog.php">Read More</a></div>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <img src="assets/images/blog-image-1-940x460.jpg" alt="">
                    <h4>How to introduce yourself in an Interview??</h4>

                    <p><i class="fa fa-user"></i> sidwick &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 06.12.2020 10:10 &nbsp;|&nbsp; <i class="fa fa-comments"></i>  1 comment</p>

                    <p>First impressions happen quickly. During the interview process, there may be several times when you’ll introduce yourself: at the front desk or reception area, to a recruiter, to the hiring manager and potentially additional interviewers. There are few guidelines you can follow on how to introduce yourself in any interview setting.</p>

                <p>To help you navigate the process, we’ll start by identifying best practices when introducing yourself, followed by examples from interviews where you can apply those skills.</p>

            
                    <div class="main-button">
                        <a href="blog-details1.php">Continue Reading</a>
                    </div>
                  </article>
                  <article id='tabs-2'>
                    <img src="assets/images/blog-image-2-940x460.jpg" alt="">
                    <h4>How to Write Best Resume in 2020??</h4>
                    <p><i class="fa fa-user"></i> Marcus &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 27.07.2020 10:10 &nbsp;|&nbsp; <i class="fa fa-comments"></i> 1 comment</p>
                    <p>2020 is a year which most of the people across the globe would remember as a year of the pandemic.While literally, the whole world starts living virtually, even employment avenues had to be retorted to virtual mode.Traditional face to face interviews seem to be an act of the past, nowadays its digital interviews which have taken over.Thus the insights about how to write a resume have its important more than ever. In this blog, we shall provide all you need to know insights about how to write a resume with resume/cv samples.</p>
                    <div class="main-button">
                        <a href="blog-details2.php">Continue Reading</a>
                    </div>
                  </article>
                  <article id='tabs-3'>
                    <img src="assets/images/blog-image-3-940x460.jpg" alt="">
                    <h4>Hacks to Land your Dream Job in a month!!!!</h4>
                    <p><i class="fa fa-user"></i> varun &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 27.09.2020 10:10 &nbsp;|&nbsp; <i class="fa fa-comments"></i> 1 comment</p>
                    <p>The recent COVID-19 situation has cost many their jobs rendering them clueless and in despair.</p>

                <p>Whether due to loss of a job or a genuine search for a new job, we have listed these 9 hacks for you to land a job in a month.</p>

                    <div class="main-button">
                        <a href="blog-details3.php">Continue Reading</a>
                    </div>
                  </article>
                </section>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Send us a <em>message</em></h2>
                        <p>We are here to help...!!</p>
                        <div class="main-button">
                            <a href="contact.php">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Testimonials Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Read our <em>Testimonials</em></h2>
                        <img src="assets/images/line-dec.png" alt="waves">
                        <p>Employee Reviews</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Davis Moore</h4>
                                <p><em>"Great ownership and lots of in-house creative talent. I felt under-utilized there, but it was a pleasure to work there. Location is great, too. Generous with paid time off and perks like great food and snacks."</em></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="second one">
                            </div>
                            <div class="right-content">
                                <h4>In-house sales</h4>
                                <p><em>"In-house sales department. Provide assistance in creating a better vacation portfolio for owners."</em></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="fourth muscle">
                            </div>
                            <div class="right-content">
                                <h4>Ravindra Baravkar</h4>
                                <p><em>"Eficaz is the best recruitment consultant which I have come across during my professional career. They are dedicated towards diversity hiring and help with the most relevant opportunities. They spend time with us and understand our needs, our challenges and our ambitions which is really appreciated. I would like to highly recommend Eficaz to you as it helped me yesterday and it will definitely support you today."</em></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="training fifth">
                            </div>
                            <div class="right-content">
                                <h4>Manjunath</h4>
                                <p><em>"I would like to wish all of you for doing this great job by providing an opportunity to PWD canidates with respect to the their abilities and helping them with care. I got a job opportunity in IT as Software Testing Analyst. Now I am very happy to be a part of IT industry with the help of eficaz consultants. Thank you so much team for your kind help. I wish all the success comes to you. Big thanks to those who are with me so far."</em></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <br>

            <div class="main-button text-center">
                <!-- <a href="testimonials.html">Read More</a> -->
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Item End ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © No-copyrights
                        - Project by Marcus and Siddhu</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>