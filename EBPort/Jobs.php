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

    <title>Jobs | Employment and Business Portal</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    </head>
    
    <body>
        <script>
            
            //   var name = document.getElementById("name").value;
            //   var job = document.getElementById("job").value;
              var xmlhttp = new XMLHttpRequest();
            
              xmlhttp.open("GET","fetchjobs.php",true);
              xmlhttp.send();
                
                xmlhttp.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("job_detail").innerHTML = this.responseText;
                  }
                };
                
              
            
            </script>
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

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Our <em>Jobs</em></h2>
                        <p>Explore the genuine verified jobs</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>

            <div class="row">
                <div class="col-lg-4">
                    <form action="#">
                         <h5 style="margin-bottom: 15px">Type</h5>

                         <div>
                              <label>
                                   <input type="checkbox">

                                   <span>Contract (5)</span>
                              </label>
                         </div>

                         <div>
                              <label>
                                   <input type="checkbox">

                                   <span>Full time (5)</span>
                              </label>
                         </div>

                         <div>
                              <label>
                                   <input type="checkbox">

                                   <span>Internship (5)</span>
                              </label>
                         </div>

                         <br>

                         <h5 style="margin-bottom: 15px">Category</h5>

                         <div>
                              <label>
                                   <input type="checkbox">

                                   <span>Accounting / Finance / Insurance Jobs (5)</span>
                              </label>
                         </div>

                         <div>
                              <label>
                                   <input type="checkbox">

                                   <span>Accounting / Finance / Insurance Jobs (5)</span>
                              </label>
                         </div>

                         <div>
                              <label>
                                   <input type="checkbox">

                                   <span>Accounting / Finance / Insurance Jobs (5)</span>
                              </label>
                         </div>

                         <br>

                         <!-- <h5 style="margin-bottom: 15px">Career levels</h5>

                         <div>
                              <label>
                                   <input type="checkbox">

                                   <span>Entry Level (5)</span>
                              </label>
                         </div>

                         <div>
                              <label>
                                   <input type="checkbox">

                                   <span>Entry Level (5)</span>
                              </label>
                         </div>

                         <div>
                              <label>
                                   <input type="checkbox">

                                   <span>Entry Level (5)</span>
                              </label>
                         </div>

                         <br> -->

                         <!-- <h5 style="margin-bottom: 15px">Education levels</h5>

                         <div>
                              <label>
                                   <input type="checkbox">

                                   <span>Associate Degree (5)</span>
                              </label>
                         </div>

                         <div>
                              <label>
                                   <input type="checkbox">

                                   <span>Associate Degree (5)</span>
                              </label>
                         </div>

                         <div>
                              <label>
                                   <input type="checkbox">

                                   <span>Associate Degree (5)</span>
                              </label>
                         </div>

                         <br>
 -->

                         <!-- <h5 style="margin-bottom: 15px">Years of experience</h5>

                         <div>
                              <label>
                                   <input type="checkbox">

                                    <span>&lt; 1 (5)</span>
                              </label>
                         </div>

                         <div>
                              <label>
                                   <input type="checkbox">

                                    <span>&lt; 1 (5)</span>
                              </label>
                         </div>

                         <div>
                              <label>
                                   <input type="checkbox">

                                    <span>&lt; 1 (5)</span>
                              </label>
                         </div> -->
                    </form>
                    
                    <br>
                </div>

                <div class="col-lg-8">
                    <div class="row" id="job_detail">
                        <!-- <div class="col-md-6" >
                            <div class="trainer-item">
                                <div class="image-thumb">
                                    <img src="assets/images/product-1-720x480.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <span> <sup>$</sup>50 per hour </span>

                                    <h4>Chef needed. Expert in Biryanis</h4>

                                    <p>Hotel &nbsp;/&nbsp; cooking Jobs</p>

                                    <ul class="social-icons">
                                        <li><a href="job-details.html">+ View More</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="col-md-6">
                            <div class="trainer-item">
                                <div class="image-thumb">
                                    <img src="assets/images/product-2-720x480.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <span> <sup>$</sup>40 per hour </span>

                                    <h4>Claners required</h4>

                                    <p>Cleaning &nbsp;/&nbsp; organizing Jobs</p>

                                    <ul class="social-icons">
                                        <li><a href="job-details.html">+ View More</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="trainer-item">
                                <div class="image-thumb">
                                    <img src="assets/images/product-3-720x480.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <span> <sup>$</sup>70 000 </span>

                                    <h4>Personal tuitors required</h4>

                                    <p>Education &nbsp;/&nbsp; Tuitor Jobs</p>

                                    <ul class="social-icons">
                                        <li><a href="job-details.html">+ View More</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="trainer-item">
                                <div class="image-thumb">
                                    <img src="assets/images/product-4-720x480.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <span> <sup>$</sup>70 000 </span>

                                    <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                                    <p>Medical &nbsp;/&nbsp; Health Jobs</p>

                                    <ul class="social-icons">
                                        <li><a href="job-details.html">+ View More</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="trainer-item">
                                <div class="image-thumb">
                                    <img src="assets/images/product-5-720x480.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <span> <sup>$</sup>70 000 </span>

                                    <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                                    <p>Medical &nbsp;/&nbsp; Health Jobs</p>

                                    <ul class="social-icons">
                                        <li><a href="job-details.html">+ View More</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="trainer-item">
                                <div class="image-thumb">
                                    <img src="assets/images/product-6-720x480.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <span> <sup>$</sup>70 000 </span>

                                    <h4>Lorem ipsum dolor sit amet, consectetur</h4>

                                    <p>Medical &nbsp;/&nbsp; Health Jobs</p>

                                    <ul class="social-icons">
                                        <li><a href="job-details.html">+ View More</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>

            

            <br>
                
            <nav>
              <ul class="pagination pagination-lg justify-content-center">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>

        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->

    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Copyright © 2020 Company Name
                        - Project by: Marcus and Siddhu
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