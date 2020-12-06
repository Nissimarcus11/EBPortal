<?php
        
        $server = "127.0.0.1";
            $user = "xme3";
            $db = "EBPortal";
            $conn = mysqli_connect($server,$user,'',$db);
           
        if($_SERVER['REQUEST_METHOD']== "POST"){
            if(array_key_exists('reset', $_POST)) { 
                $sc="Enter details to upload job requirement <br> Jobname and Payscale are mandatory";
                header("Location: add_jobs.php?s=".$sc);
            }
            else{
                $jobname=htmlentities($_POST['jobname']);
                $payscale=htmlentities($_POST['payscale']);
                $contract=0;
                $fulltime=0;
                $internship=0;
                if(isset($_POST['contract'])){
                    $contract=1;
                }
                if(isset($_POST['fulltime'])){
                $fulltime=1;
                }
                if(isset($_POST['internship'])){
                $internship = 1;
                }
                $category = htmlentities($_POST['category']);
                if((empty($jobname) or empty($payscale))){
                    $sc="Please fill Jobname and payscale they are empty ".$jobname." and ".$payscale;
                    header("Location: add_jobs.php?s=".$sc);
                }
                else{
                    
                    $ins = "INSERT INTO Jobs (`jobname`, `payscale`, `contract`, `fulltime`, `internship`, `category`)
                    VALUES ('$jobname','$payscale','$contract','$fulltime','$internship','$category')
                    ";
                    $res=mysqli_query($conn,$ins);
                    if($res){
                    $sc = "Your details inserted Successfully";

                    }
                    else{
                        $sc="insert failed".mysqli_error($conn);
                    }
                    header("Location: add_jobs.php?s=".$sc);
                }
            }
            
           
              
        }
    ?>