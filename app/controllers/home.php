<?php
require_once('../core/Controller.php');
require_once('../core/Database.php');
class Home extends Controller
{
    function index()
    {
        $rows = array();
        $db = new Database();
        $data = $db->query("SELECT * FROM admins");
        $row = array();
        $rows = $data;

        $this->view('admins', 'test',  array('rows' => $data));
    }

}

if (!empty($rows)) {
    foreach ($rows as $row) {
        // Assuming $row is an object with properties representing the columns in your database
        echo "Admin ID: " . $row['admin_id'] . "<br>"; // Replace 'admin_id' with the actual column name
        echo "Name: " . $row['name'] . "<br>"; // Replace 'name' with the actual column name
        echo "Email: " . $row['email'] . "<br>"; // Replace 'email' with the actual column name
        // ... Continue displaying other properties as needed
        echo "<hr>"; // Add a separator between each row
    }
} else {
    echo "No data available";
}
?>