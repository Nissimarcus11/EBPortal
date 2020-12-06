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

    <title>Add Job | Employment and Business Portal</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    </head>
    
    <body>
    <?php
        
    if(isset($_GET['s'])){
        $sc=$_GET['s'];
    }
    else{
    $sc="Enter details to upload job requirement <br> Jobname and Payscale are mandatory";
    }
    ?>
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
    <!-- <div class="main-banner" id="top">
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
    </div> -->
 <!-- ***** Main Banner Area End ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Add <em>Jobs</em></h2>
                        <p>Find skilled employees easily</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ***** Our Classes Start ***** -->
    <section class="section" id="add_job">
        <div class="container">
            <br>
            <br>
            <br>
            <!-- /<div class="row" id="tabs"> -->
              <!-- <div class="con"> -->
                <div class ="container" style = "padding-bottom: 30px;">
                    <div id="success_msg" style = "color:tomato; marigin-top:10px; margin-bottom:10px;">
                    <?php echo $sc; ?> 
                </div>
                    
            <form style="height: 60vh;" method="post" action="eval_jobs.php">
                <div class="form-group row">
                    <label for="jobname" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="jobname" placeholder="Name of the Job">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="payscale" class="col-sm-2 col-form-label">Pay scale</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="payscale" placeholder="Enter the pay scale range">
                    </div>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Type</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="true" name="contract">
                                <label class="form-check-label" for="defaultCheck1">
                                    Contract
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="true" name="fulltime">
                                <label class="form-check-label" for="fulltime">
                                    Full time
                                </label>
                            </div>
                        
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="true" name="internship" >
                                <label class="form-check-label" for="internship">
                                    Internship
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="form-group">
                    <div class="form-group row">
                        <div class="col-sm-2">Category</div>
                        <div class="col-sm-10">
                            <div class="form-select">
                                <select class="form-control custom-select" name = "category" >
                                    <option value="" selected disabled>Please select job category</option>
                                    <option value = "Accounting/finance Jobs">Accounting/finance Jobs</option>
                                    <option value = "Hotel/cooking Jobs">Hotel/cooking Jobs</option>
                                    <option value = "Cleaning/organizing Jobs">Cleaning/organizing Jobs</option>
                                    <option value = "Education/Tuitor Jobs">Education/Tuitor Jobs</option>
                                    <option value = "Medical/Health Jobs">Medical/Health Jobs</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </fieldset>
      
                <div class="form-group row" style = "margin-top:20px;">
                    <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button name = "reset" class="btn btn-primary" id="reset">Reset</button>
                    </div>
                </div>
            </form>           
                    
               
                
                </div>
            
        </div>
    </section>
    <!-- ***** Our Classes End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Send us a <em>message</em></h2>
                        <p>Feel free to contact us in any queries</p>
                        <div class="main-button">
                            <a href="contact.html">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->
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