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

    <title> Blog-Details | Employment Portal</title>

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
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Single <em>blog post</em></h2>
                        <p></p>
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
            <section class='tabs-content'>
              <article>
                <h4>Hacks to Land your Dream Job in a month!!!!</h4>

                <p><i class="fa fa-user"></i> varun &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 27.09.2020 10:10 &nbsp;|&nbsp; <i class="fa fa-comments"></i> 1 comment</p>

                <div><img src="assets/images/blog-image-fullscren-1-1920x700.jpg" alt=""></div>

                <br>

                <p>The recent COVID-19 situation has cost many their jobs rendering them clueless and in despair.</p>

                <p>Whether due to loss of a job or a genuine search for a new job, we have listed these 9 hacks for you to land a job in a month.</p>

                <b>Let’s jump right into the steps to prepare for your dream job..</b>
                <br>
                <br>

<br>
                <p><b>Research the field you want to pursue</b></p>
                <p>To begin with, every candidate needs to have clarity regarding the field they want to tread.
<br>
Research the field and scopes it has to offer.
<br>
<br>
Next step, check if there are any specific skills the field requires that you lack.
<br>
<br>
In this case, pick up an online course to upgrade your skills. This will provide a higher chance for you to bag the interview of your dream job.<br>
<br>
<br>
</p>

                <p><b>Get clarity on what you are looking for</b></p>
                <p>Searching for a job requires utmost clarity and seriousness, after all, you would not want to feel stuck in a job you don’t enjoy.
<br>
<br>
To begin with, ask yourself what are your requirements in a job and list them down.
<br>
<br>
It will be a lengthy list, beginning with the industry you want to work in or whether you want to apply to a big or small company.
<br>
<br>
Next, every professional has different requirements and hence look for benefits accordingly. Some may prefer 6 days a week working, whereas others may prefer to work from home.</p>


                <p><b>Add relevant industry keywords to your profiles</b></p>
                <p>When on a job hunt, find yourself a listing of job openings on LinkedIn.
<br>
<br>
Similar to your CV, relevant keywords play an important role in your social media profiles as well.
<br>
<br>
So, when going through the job listings find the relevant keywords used in the job description and build up your profile using them.
<br>
<br>
You can use it both to understand the required skills and also how to use it to your advantage while job hunting.
</p>
                <p><b>Update your resume and skills</b></p>
                <p>The same size doesn't fit all, it’s a rather honest saying.
<br>
<br>
Similarly, you need to update your resume as per the requirements asked for by the company you want to apply for.
<br>
<br>
Also, update your resume with the relevant keywords as it attracts the recruiter’s attention easily.


<br>
<br>
Check the company’s social pages, research the company, and read the job descriptions thoroughly to highlight the keywords.
<br>
<br>
The reason for doing so is most times recruiters just scan through a CV and familiar keywords can attract them to a particular CV and get you shortlisted for the next round of interviews.</p>


                <p><b>Plan your course of action</b></p>
                <p>
                   Next, you need to plan your course of action since you want to bag your next job in 30 days. This means everything needs to be scheduled and stick to it.
<br>
<br>
When the aim is to land your dream job in 30 days, you need to allot time to research the job profiles, companies you want to apply to, updating resumes so on and so forth.
<br>
<br>
You cannot spend an entire day focussing on just one aspect of the entire job search procedure.
<br>
<br>
So, it’s best to dedicate the number of hours you want to spend on each task and work accordingly.
<br>
<br>
Take, for example, you can assign 2 hours for researching job profiles of the companies you have shortlisted, 3-4 hours to fix your resume according to the different job requirements, etc.


                </p>


                <ul class="social-icons">
                    <li>Share this:</li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                </ul>
              </article>
            </section>

            <br>
            <br>
            <br>
            
            <section class='tabs-content'>
                <div class="row">
                    <div class="col-md-8">
                        <h4>Comments</h4>
                        <ul class="features-items">
                            <li>
                                <div class="feature-item" style="margin-bottom:15px;">
                                    <div class="left-icon">
                                        <img src="assets/images/features-first-icon.png" alt="First One">
                                        
                                    </div>
                                    <div class="right-content">
                                        <h4>Hemanth <small>27.10.2020 10:10</small></h4>
                                        <p><em>"Thank you, so much!!!"</em></p>
                                    </div>
                                </div>


                            </li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <h4>Leave a comment</h4>
                
                        <div class="contact-form">
                            <form action="" method="post">
                              <div class="row">
                                <div class="col-lg-12">
                                  <fieldset>
                                    <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                                  </fieldset>
                                </div>
                                <div class="col-lg-12">
                                  <fieldset>
                                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required="">
                                  </fieldset>
                                </div>
                                <div class="col-lg-12">
                                  <fieldset>
                                    <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                                  </fieldset>
                                </div>
                                <div class="col-lg-12">
                                  <fieldset>
                                    <button type="submit" id="form-submit" class="main-button">Submit</button>
                                  </fieldset>
                                </div>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
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