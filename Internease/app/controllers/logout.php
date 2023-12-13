<?php

    //Inlcude Constants
    include('constant.php');

    //Destroy the session and redirect to  login page
    session_destroy();  //unsets $_SESSION['user']
    
    header('location:'.SITEURL.'../views/company/login.php');
    
?>