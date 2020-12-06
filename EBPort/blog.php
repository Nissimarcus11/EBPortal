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

    <title>Blog | Employment and Business Portal</title>

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
                            <!-- <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Log in</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="signin.php">Sign in </a>
                                    <a class="dropdown-item" href="signup.php">Sign up</a>
                                    
                                </div>
                            </li> -->
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


    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Read our <em>Blog</em></h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Blog Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <br>
            <br>
            <div class="row">
                <div class="col-lg-8">
                    <section class='tabs-content'>
                      <article>
                        <img src="assets/images/blog-image-1-940x460.jpg" alt="">
                        <h4>Investment Banking Interview Questions and Answers</h4>

                        <p><i class="fa fa-user"></i> sidwick &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 06.12.2020 10:10 &nbsp;|&nbsp; <i class="fa fa-comments"></i></p>

                        <p>Investment banking interviews can be a nightmare for people that are going for the first time.
                            <br>
                            <br>

A simple Google search will lead you down a rabbit hole of bad interviews or horror stories about interviewers taking their job a little too seriously.</p>
                        <div class="main-button">
                            <a href="blog-details.html">Continue Reading</a>
                        </div>
                      </article>

                      <br>
                      <br>

                      <article>
                        <img src="assets/images/blog-image-2-940x460.jpg" alt="">
                        <h4>We works when talented, passionate people come together.</h4>
                        <p><i class="fa fa-user"></i> John Doe &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 27.07.2020 10:10 &nbsp;|&nbsp; <i class="fa fa-comments"></i>  </p>
                        <p>Come help Indeed work. We are looking to grow our teams with people who share our energy and enthusiasm for creating the best experience for job seekers.</p>
                        <div class="main-button">
                            <a href="blog-details.html">Continue Reading</a>
                        </div>
                      </article>

                      <br>
                      <br>

                      <article>
                        <img src="assets/images/blog-image-3-940x460.jpg" alt="">
                        <h4>A Guide to properly Asking for an Internship by Email</h4>
                        <p><i class="fa fa-user"></i> Marcus &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 06.07.2020 10:10 &nbsp;|&nbsp; <i class="fa fa-comments"></i></p>
                        <p>It can be stressful to try to line up an internship because so many students and new graduates are looking for the same positions.
<br>
<br>
It’s not impossible though, especially if you personalize your applications.
<br>
<br>
Regardless of your reasons for seeking an internship position, this guide will help you from start to finish to create a successful internship request email.</p>
                        <div class="main-button">
                            <a href="blog-details.html">Continue Reading</a>
                        </div>
                      </article>
                    </section>
                </div>

                <div class="col-lg-4">
                    <h5 class="h5">Search</h5>
                    
                    <div class="contact-form">
                        <form id="search_form" name="gs" method="GET" action="#">
                          <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                        </form>
                    </div>

                    <h5 class="h5">Recent posts</h5>

                    <ul>
                        <li>
                            <p><a href="blog-details.html">Everything you need to know about Cybersecurity</a></p>
                            <small><i class="fa fa-user"></i> Rakesh &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 27.07.2020 10:10</small>
                        </li>

                        <li><br></li>

                        <li>
                            <p><a href="blog-details.html">How Emotions are contagious and what that means at the workplace.</a></p>
                            <small><i class="fa fa-user"></i> Varun &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 13.07.2020 11:27</small>
                        </li>

                        <li><br></li>

                        <li>
                          <p><a href="blog-details.html">How to think about your carrer from VP of product Design at Facebook</a></p>

                          <small><i class="fa fa-user"></i> Sairaj &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 30.07.2020 22:10</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog End ***** -->

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