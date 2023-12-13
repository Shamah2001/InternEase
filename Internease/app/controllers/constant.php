<?php 
    
    //Start Session
    session_start();
    
    //Create constants to store non repeating values
    define('SITEURL','http://localhost/Internease/app/views/company/');
    define('LOCALHOST','localhost:3307');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','');
    define('DB_NAME','intern_ease');
    
    $conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD,DB_NAME) or die(mysqli_error($conn)); //Database Connection
   
    $db_select = mysqli_select_db($conn, DB_NAME) or  die(mysqli_error($conn)); //Selecting Database
   
?>