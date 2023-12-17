<?php

include_once("../core/connection.php");
include_once("../core/config.php");
include_once("../core/Database.php");
require_once('../core/Controller.php');
include_once("../models/AdminModel.php"); 


class ViewComplaints extends Controller {
    

    function viewcomplaints() {
        
        $dbconnection = new Database;

        $complaintsArray = $dbconnection->query('SELECT * FROM complaints');


        $this->view('admin','ViewComplaints',array('complaintsArray' => $complaintsArray));
        

    }

    function viewDescription()
    {
        // Check if the 'id' parameter exists in the URL
        if (isset($_GET['id'])) {
            // Assuming you have a method in AdminModel to fetch complaint details by ID
            $complaintID = $_GET['id'];
            $adminModel = new AdminModel(connect()); // Assuming 'connect()' returns a database connection
            $complaintDetails = $adminModel->getComplaintDetails($complaintID);

            if ($complaintDetails) {
                // Load the view and pass the complaint details to display
                $this->view('admin', 'description', array('complaintDetails' => $complaintDetails));
            }
         }
    }
    

    
        /*if ($complaintsArray){
           
            echo 'succ';
            return $complaintsArray;
        } else {
            view('views', 'NULL');
        }
        */
    /*
    public function viewcomplaints() {
        // Initialize or include necessary components (such as database connection) here
        $dbconnection = new Database;

        // Create an instance of AdminModel
        $adminModel = new AdminModel(connect()); // Pass the database connection to the model

        // Fetch all entries from the 'complaints' table using the model
        $complaintsArray = $adminModel->getComplaints();

        // Pass the fetched data to the view for displaying
       
    }
    */
    
}

?>
