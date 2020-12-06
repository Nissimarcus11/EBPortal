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

    <title>Sign Up | Employment Portal</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  

    </head>
    
    <body>
    <?php 
       
       $server = "127.0.0.1";
       $user = "xme3";
       $db = "EBPortal";
       $conn = mysqli_connect($server,$user,'',$db);
        $sc=$fn=$cp=$p=$un=$e=$dob=$rl=null;
        if($_SERVER['REQUEST_METHOD']== "POST"){
            $fullname=htmlentities($_POST['fullname']);
            $username=htmlentities($_POST['username']);
            $email=htmlentities($_POST['email']);
            $password=htmlentities($_POST['password']);
            $cpassword=htmlentities($_POST['cpassword']);
            $dateofbirth = htmlentities($_POST['dob']);
            $role=htmlentities($_POST['role']);
            if(empty($fullname)){
                $fn=" Please enter fullname";
            }
            if(empty($username)){
                $un=" Please enter username";
            }
            // else{
                
            //     $result = mysqli_query($conn,"SELECT * FROM Employer WHERE username='$username'");
            //         if(mysqli_num_rows($result) > 0){
            //             $un = "Choose a different Username";
            //         }
            // }
            if(empty($email)){
                $e=" Please enter email";
            }

            else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $e = "Please enter valid email";
              }
            if(empty($password)){
                $p=" Please enter Password";
            }
            
            if(empty($cpassword)){
                $cp=" Please confirm Password";
            }
            else if($password <> $cpassword){
                $cp="passwords not matched";
            }

            if(empty($dateofbirth)){
                $dob=" Please select date";
                
            }
            if(empty($role)){
                $rl="Please select Role";
            }

            if(array_key_exists('reset', $_POST)) { 
                header("Location: signup.php");
            }

            if (empty($fn) && empty($rl) && empty($un) && empty($e) && empty($p) && empty($cp) && empty($dob)){
                if($role == "Employer"){
                $ins ="INSERT INTO Employer
                VALUES('$fullname','$username','$password', '$email','$dateofbirth')
                ";

                $res=mysqli_query($conn,$ins);
                if($res){
                    
                   $sc = "Your Acccount is created Successfully";
                    
                }
                // else{
                //     echo("unsuccess: ".mysqli_error($conn));
                // }
            }
            }
            
             
  
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
                        <a href="index.html" class="logo">Employment <em> Portal</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="index.html" class="active">Home</a></li>
                            <li><a href="jobs.html">Jobs</a></li>
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
                                    <a class="dropdown-item" href="about.html">About Us</a>
                                    <a class="dropdown-item" href="team.html">Team</a>
                                    <a class="dropdown-item" href="blog.html">Blog</a>
                                    <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                                    <a class="dropdown-item" href="terms.html">Terms</a>
                                </div>
                            </li>
                            <li><a href="contact.html">Contact</a></li> 
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
                        <h2>Join with <em>us</em></h2>
                        <p>Join with us to explore and create exclusive jobs</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Our Classes Start ***** -->
    <section class="section" id="signup">
        <div class="container">
            <br>
            <br>
            <br>
            <!-- /<div class="row" id="tabs"> -->
              <!-- <div class="con"> -->
                <div class ="container" style = "padding-bottom: 30px;">
                <div id="success_msg" style = "color:green; marigin-top:10px; margin-bottom:10px;">
                <?php echo $sc ?> 
                </div>
               
                <form class = "form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                    <div class="form-group"> 
                        <div id="form_left" class="control-label col-sm-6">Full Name: </div>
                        <div id="mid" class="col-sm-10"><input type = 'text' class="form-control" name = 'fullname'></div>
                        <?php echo $fn ?>
                    </div>
                    <div class="form-group"> 
                        <div id="form_left" class="control-label col-sm-6">User Name: </div>
                        <div id="mid" class="col-sm-10"><input type = 'text' class="form-control" name = 'username'></div>
                        <?php echo $un ?>
                       
                    </div>
                    <div class = "form-group" style="margin-top: 10px;">
                        <div id="form_left" class="control-label col-sm-6">
                            Select Role
                        </div>
                        <div id="form_mid" class="col-sm-10">
                            <select name="role" class="form-control">
                                <option>Employer</option>
                                <option>job Seeker</option>
                            </select>
                            <?php echo $rl ?>
                        </div>
                        
                    </div>
                
                    <div class="form-group">
                        <div id="form_left" class="control-label col-sm-6">Password: </div>
                        <div id="mid" class="col-sm-10"><input type = 'password' class="form-control" name = 'password'></div>
                        <?php echo $p ?>
                        
                    </div>
                    <div class="form-group">
                        <div id="form_left" class="control-label col-sm-6">Confirm Password: </div>
                        <div id="mid" class="col-sm-10"><input type = "password" class="form-control" name ="cpassword"></div>
                        <?php echo $cp ?>
                    </div>
                    <div class="form-group">
                        <div id="form_left" class="control-label col-sm-6">Email Id: </div>
                        <div id="mid" class="col-sm-10"><input type = 'text' class="form-control" name = 'email'></div>
                        <?php echo $e ?>
                    </div>
                    <div class="form-group">
                        <div id="form_left" class="control-label col-sm-6">Date of Birth: </div>
                        <div id="mid" class="col-sm-10" ><input type = 'date' class="form-control" name = 'dob'></div>
                        <?php echo $dob ?>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-secondary">Submit</button>
                        </div>
                    </div>
                    <!-- <button type = 'submit' class = "btn btn-secondary" name="submit">Submit</button> -->
                    <!-- <button name = "reset" id="reset">Reset</button> -->
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
                        No copyrights. A demo project.
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