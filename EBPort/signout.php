
<?php
session_start();
if($_SESSION['login']==1){
    session_unset();
    session_destroy();
    
}
header("Location: index.php");

?>