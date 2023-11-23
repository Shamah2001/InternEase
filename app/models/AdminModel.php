<?php
// Include the database connection file or define database connection here
// Example: include('connection.php');
// Ensure your database connection is established
include ("../core/connection.php");
include ("../core/config.php");
include ("../core/Database.php");

class AdminModel {
    private $connection;

    public function __construct($dbConnection) {
        $this->connection = $dbConnection;
        // You can also establish the database connection within the constructor
        // $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        // Check for connection errors here if applicable
    }

    // Update Admin Information
    public function updateAdmin($id, $column, $value, $confirmPassword) {
        // Perform necessary validations, hashing, and other checks here

        // Example: Check if column is 'password' and hash the value
        if ($column === 'password') {
            $value = password_hash($confirmPassword, PASSWORD_DEFAULT);
        }

        // Prepare and execute the SQL UPDATE statement
        $updateStatement = $this->connection->prepare("UPDATE admins SET $column = ? WHERE adminid = ?");
        $updateStatement->bind_param("ss", $value, $id);

        if ($updateStatement->execute()) {
            return true; // Update successful
        } else {
            return false; // Update failed
        }
    }

    // Other methods for CRUD operations on admins can be added here
    // Examples: createAdmin(), deleteAdmin(), getAdminById(), etc.
}
?>
