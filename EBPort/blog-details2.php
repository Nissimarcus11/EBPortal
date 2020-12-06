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

    <title>Blog-Details | Employment Portal </title>

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
                <h4>How to Write Best Resume in 2020??</h4>

                <p><i class="fa fa-user"></i> marcus &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 27.07.2020 10:10 &nbsp;|&nbsp; <i class="fa fa-comments"></i> 1 comment</p>

                <div><img src="assets/images/blog-image-fullscren-1-1920x700.jpg" alt=""></div>

                <br>

                <p>2020 is a year which most of the people across the globe would remember as a year of the pandemic.</p>

                <p>While literally, the whole world starts living virtually, even employment avenues had to be retorted to virtual mode.</p>

                <b>Traditional face to face interviews seem to be an act of the past, nowadays its digital interviews which have taken over.</b>
                <br>
                <br>

                <b>What is a resume??</b>
                <br>
                <br>


                <p>A resume can be described as a document that provides an interviewer detailed information about the candidate.</p>

                <p>This information is relevant to the position an applicant has applied for.</p>

                <p>A resume carries details about previous professional experience, educational qualifications, achievements, personal details such as DOB, name, contact details, etc.
<br>
<br>

A resume is the first thing that any job seeker needs to work on before applying for a job position in a company.</p>

<b>How to write a resume in 2020</b><br>
<br>
                <p><b>Short&Crisp</b></p>
                <p>Too much information may make an employer lose interest in your resume.
<br>
After all, he/she has to go through so many of them.
<br>
<br>
The whole focus should be on providing information that is crisp yet effective.
<br>
<br>
Discourage the use of graphics, too much cluttering & so on. Keep it neat.
<br>
<br>
Rather than writing the details of the whole project you worked on previously, target some of the key takeaways.
<br>
<br>
Be clear about your role & responsibilities in clear listicles.</p>
                <p><b>Resume Summary</b></p>
                <p>It’s important that your resume says what you shall bring in if you are to be selected for the job.
<br>
<br>
This gives your resume an edge over the others.
<br>
<br>
Rather than explaining what you aim at professionally, it’s better to say what you shall bring in for the company if hired.
<br>
<br>
This is unique & great for recruiters to read on a resume.</p>
                <p><b>Skills</b></p>
                <p>This section weighs a little more in your resume than the rest. Make sure the job position you are applying for fits your skill.
<br>
<br>
Every recruiter has a clear understanding of the skills required for a position they are hiring.
<br>
<br>
Thus, it's highlighting your skillset is of immense importance.</p>
                <p><b>Professional Experience</b></p>
                <p>Mention your professional experience in descending order, starting from the latest, mention in clear liners what were in your responsibilities.
<br>
<br>
We advise you to be extra focused while writing this part of your resume.
<br>
<br>
Try to state all the job responsibilities you had in your previous position.
<br>
<br>
You never know which one of these responsibilities may be relevant to the position you apply for.
<br>
<br>
However, also keep in mind to be neat in this section. Don’t clutter with too much information.</p>
                <p><b>Strengths (Optional)</b></p>
                <p>
                    You may also mention your strengths. These strengths may also add to your chances of getting through as your strengths may coincidence with the requirement of the position.
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
                                        <h4>Rakesh <small>27.09.2020 10:10</small></h4>
                                        <p><em>"Thank you, you mentioned everything detailed.!!!"</em></p>
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