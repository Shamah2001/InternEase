<?php 
    session_start();
    include_once('connection.php');

    if(isset($_POST['submit']))
    {
        $errors=array();
        if(!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1)
        {
            $errors[] = 'Please enter Email';
        }
        if(!isset($_POST['first_name']) || strlen(trim($_POST['first_name'])) < 1)
        {
            $errors[] = 'Please enter first name';
        }
        if(!isset($_POST['last_name']) || strlen(trim($_POST['last_name'])) < 1)
        {
            $errors[] = 'Please enter last name';
        }
        if(!isset($_POST['reg_no']) || strlen(trim($_POST['reg_no'])) < 1)
        {
            $errors[] = 'Please enter register number';
        }
        if (!isset($_POST['index_no']) || strlen(trim($_POST['index_no'])) < 1 ) {
			$errors[] = 'Please enter index number';
		}

        if(empty($errors)) {
            $email = mysqli_real_escape_string($connection, $_POST['email']);
			$password = mysqli_real_escape_string($connection, $_POST['password']);
            $firstName=mysqli_real_escape_string($connection, $_POST['first_name']);
            $lastName=mysqli_real_escape_string($connection, $_POST['last_name']);
            $regNo=mysqli_real_escape_string($connection, $_POST['reg_no']);
            $indexNo=mysqli_real_escape_string($connection, $_POST['index_no']);

            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $query = "INSERT INTO student ( ";
                $query .= "email, password, first_name, last_name,reg_no,index_no";
                $query .= ") VALUES (";
                $query .= "'{$email}', '{$hashed_password}','{$firstName}', '{$lastName}','{$regNo}','{$indexNo}'";
                $query .= ")";

            $result=mysqli_query($connection, $query);
            if($result)
            {
                header('Location: ../views/pdc/managestudent.php');
            }    
        }
    }
?>