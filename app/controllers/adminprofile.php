<?php

include_once("../core/connection.php");
include_once("../core/config.php");
include_once("../core/Controller.php");
include_once("../core/Database.php");
include_once("../models/AdminModel.php"); 

class adminprofile extends Controller{

    function changeprofile(){
        
        $this->view('admin','profile');

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["updateadmin"])) {
        
            var_dump($_POST);
            
            $id = $_POST['id']; 
            $column = $_POST["col"];
            $updateValue = $_POST["updatevalue"];
            $confirmPassword = $_POST["confirmPassword"];
        
            
            $dbconnection = new Database;
            $adminModel = new AdminModel(connect()); 
        
            
            if ($adminModel->updateAdmin($id, $column, $updateValue, $confirmPassword)) {
                exit();
            } else {
                echo("FAIL");
                exit();
            }
        }

    }

}

?>
