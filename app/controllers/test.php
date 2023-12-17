<?php

include_once("../core/connection.php");
include_once("../core/config.php");
include_once("../core/Database.php");
require_once('../core/Controller.php');
include_once("../models/AdminModel.php"); 
include_once("adminprofile.php"); 
//include_once("ViewComplaints.php"); 

/*
$new2 = new ViewComplaints();
$complaintsArray = $new2->viewcomplaints();
echo '<pre>';
print_r($complaintsArray);
*/

$new = new adminprofile();
$new->changeprofile();

?>