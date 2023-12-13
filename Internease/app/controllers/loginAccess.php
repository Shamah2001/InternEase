<?php 
    
    //Authentication - Access Control
    //Check whether the user is logged in or not

    if(!isset($_SESSION['id'])) //User is not logged in 
    {
        //Redirect to login page
        header('location:'.SITEURL.'../views/company/login.php');
    }

?>