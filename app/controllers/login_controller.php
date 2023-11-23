<?php 
    session_start();
    include_once('connection.php');

    if(isset($_POST['submit']))
    {
        if(!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1)
        {
            $error = 'Email is Invalid';
        }
        if (!isset($_POST['password']) || strlen($_POST['password']) < 1 ) {
			$error = 'Password is Invalid';
		}

        if(!isset($error)) {
            $email = mysqli_real_escape_string($connection, $_POST['email']);
			$password = mysqli_real_escape_string($connection, $_POST['password']);
            
            $query="SELECT * FROM pdc_user where email='{$email}' LIMIT 1";
            $result_user=mysqli_query($connection, $query);
            if($result_user)
            {
                if(mysqli_num_rows($result_user)==1)
                {
                    $user=mysqli_fetch_assoc($result_user);
                    $verify=password_verify($password,$user['password']);
                    if($verify)
                    {
                        $_SESSION['user_id']=$user['id'];
                        header('Location: ../views/pdc/index.php');
                        exit();
                    }
                    else
                    {
                        $error = 'Invalid Username / Password';
                        header("Location: ../views/pdc/login.php?error=$error");
                        exit();
                    }
                }
                else {
                    $error = 'Invalid Username / Password';
                    header("Location: ../views/pdc/login.php?error=$error");
                    exit();
                }
            }    
        }
    }
?>