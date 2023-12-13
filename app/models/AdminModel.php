<?php
// Include the database connection file or define database connection here
// Example: include('connection.php');
// Ensure your database connection is established
include ("../core/connection.php");
//include ("../core/config.php");
//include ("../core/Database.php");

class AdminModel {
    private $connection;

    public function __construct($conn) {
        $this->connection = $conn;
        // You can also establish the database connection within the constructor
         $this->connection = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
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
        $updateStatement = $this->connection->prepare("UPDATE admins SET $column = ? WHERE Admin_ID = ?");
        $updateStatement->bind_param("ss", $value, $id);

        if ($updateStatement->execute()) {
            echo '<script type="text/javascript">';
            echo 'alert("Updated Sucessfully");';
            echo 'window.location.href = "'.$_SERVER['PHP_SELF'].'";'; 
            echo '</script>';
            return true;
        } else {
            echo '<script type="text/javascript">';
            echo 'alert("Updated Sucessfully");';
            echo 'window.location.href = "'.$_SERVER['PHP_SELF'].'";'; 
            echo '</script>';
            return false; // Update failed   
        }
    }
    
    public function getAllProfiles() {
            $sql = 'SELECT Resume,Status,CGPA,Email,FirstName,LastName,Phone FROM Students';
            $result = mysqli_query($this->connection, $sql);
            $profiles = mysqli_fetch_all($result, MYSQLI_ASSOC);
            mysqli_free_result($result);
            return $profiles;
        }

    public function getComplaints() {
        $sql = 'SELECT * FROM Feedback';
        $result = mysqli_query($this->connection, $sql);
        $complaints = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_free_result($result);
        return $complaints;
    }
}
    

    // Other methods for CRUD operations on admins can be added here
    // Examples: createAdmin(), deleteAdmin(), getAdminById(), etc.
?>
