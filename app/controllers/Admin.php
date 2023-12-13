<?php
// Include necessary files and classes
include_once("../core/connection.php");
include_once("../core/config.php");
include_once("../core/Database.php");
include_once("../models/AdminModel.php"); // Assuming AdminModel.php contains your AdminModel class

// Handle the form submission for updating admin attributes
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["updateadmin"])) {
    // Initialize or include necessary components (such as database connection) here
    var_dump($_POST);
    // Validate and sanitize form inputs
    $id = $_POST['id']; // Get the admin ID from session or wherever it's stored
    $column = $_POST["col"];
    $updateValue = $_POST["updatevalue"];
    $confirmPassword = $_POST["confirmPassword"];

    // Create an instance of AdminModel
    $dbconnection = new Database;
    $adminModel = new AdminModel(connect()); // Pass the database connection to the model

    // Check if the input is valid and update the admin attribute accordingly
    if ($adminModel->updateAdmin($id, $column, $updateValue, $confirmPassword)) {
        // Handle successful update - redirect or show success message
        // Example: Redirect to a success page or show a success message
        echo ("SUCESS");
        exit();
    } else {
        // Handle update failure - redirect or show error message
        // Example: Redirect to an error page or show an error message
        echo("FAIL");
        exit();
    }
}

function viewcomplaints() {
    // Initialize or include necessary components (such as database connection) here
    $dbconnection = new Database;

    // Create an instance of AdminModel
    $adminModel = new AdminModel(connect()); // Pass the database connection to the model

    // Fetch all entries from the 'feedback' table using the model
    $feedbackEntries = $adminModel->getComplaints();

    // Pass the fetched data to your view for displaying (You may use your view rendering logic here)
    // For example, you can use var_dump or loop through the entries and display them in HTML
    if ($feedbackEntries) {
        foreach ($feedbackEntries as $entry) {
            var_dump($entry); // Display each entry (You should replace this with your view logic)
        }
    } else {
        echo "No feedback entries found.";
    }
}


?>
