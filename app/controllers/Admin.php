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
?>
