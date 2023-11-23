<?php 
    session_start();
    include_once('connection.php');
  
    if(isset($_POST['submit']))
    {
  
        if(!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1)
        {
            $error = 'Please enter a valid email address';
        }
        if (!isset($_POST['password']) || strlen($_POST['password']) < 8 ) {
			$error = 'Password must be at least 8 characters long';
		}

        if (!isset($_POST['first_name']) || strlen(trim($_POST['first_name'])) < 1 ) {
			$error = 'Please enter a first name';
		}

        if (!isset($_POST['last_name']) || strlen(trim($_POST['last_name'])) < 1 ) {
			$error = 'Please enter a last name';
		}

        

        if(!isset($error))
        {
            
            $email = mysqli_real_escape_string($connection, trim($_POST['email']));
			$password = mysqli_real_escape_string($connection, $_POST['password']);
			$firstName=mysqli_real_escape_string($connection,trim($_POST['first_name']));
            $lastName=mysqli_real_escape_string($connection,trim($_POST['last_name']));
            
            $query = "SELECT * FROM pdc_user WHERE email = '{$email}' LIMIT 1";
            $result_set = mysqli_query($connection, $query);
           
            if ($result_set) {
             
                
                if (mysqli_num_rows($result_set) == 1) {
                    $error = 'Sorry, that email is already taken';
                    header("Location: ../views/pdc/signup.php?error=".$error);
                    exit();
                }
               
            }
            
            if (!isset($error)) {
                
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
                $query = "INSERT INTO pdc_user ( ";
                $query .= "email, password, first_name, last_name";
                $query .= ") VALUES (";
                $query .= "'{$email}', '{$hashed_password}','{$firstName}', '{$lastName}'";
                $query .= ")";
        
                $result = mysqli_query($connection, $query);
                
                if ($result) {
                    $query="SELECT * FROM pdc_user where email='{$email}' LIMIT 1";
                    $result_user=mysqli_query($connection, $query);
                    if($result_user)
                    {
                        $user=mysqli_fetch_assoc($result_user);
                        $_SESSION['user_id']=$user['id'];
                        header('Location: ../views/pdc/index.php');
                        exit();
                    }
                    
                } else {
                    $error = 'Failed to add the new record.';
                    header("Location: ../views/pdc/signup.php?error=".$error);
                    exit();
                }
            }
            else{
                header("Location: ../views/pdc/signup.php?error=".$error);
                exit();
            }

        }
        else
        {
            header("Location: ../views/pdc/signup.php?error=".$error);
            exit();
        }
    }
?>