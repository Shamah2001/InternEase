<?php session_start(); ?>
<?php 
    if(isset($_SESSION['user_id']))
    {
        header('Location: index.php');
    }
?>

<?php
    $error="";
    if(isset($_GET['error']))
    {
        $error=$_GET['error'];
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/main2.css">
    <link rel="stylesheet" href="../../../public/css/app.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <title>Sign Up</title>
</head>

<body>
    <div class="main-div">
        <div class="leftpart">
            <img src="../../../public/images/InternEaseLogo.png" alt="" class="img1">
            <h1>Internship</h1>
            <h1>Management</h1>
            <h1>System</h1>
            <img src="../../../public/images/image.png" alt="" class="img2">                
        </div> 
        <div class="rightpart">
            <form class="box" action="../../controllers/signup_controller.php" method="post">
           
                <h4>Create Account</h4>
      
                    <p class="label1">First Name:<br></p>
                        <input type="text" required name="first_name" class="box1">
                    <p class="label1">Last Name:<br></p>
                        <input type="text" required name="last_name" class="box1">
                    <p class="label1">Email:<br></p>
                        <input type="email" required name="email" class="box1">
                    <p class="label1">Password:<br></p>
                        <input type="password" id="password" required name="password" class="box2">
                        <!-- <i  class='bx bxs-show eye-icon'></i> -->
                    <p class="label1">Confirm Password:<br></p>
                    <input type="password" id="confirm_password" required class="box2">
                    <!-- <i  class='bx bxs-show eye-icon'></i> -->
        
                    <div class="member">
                        <P class="mem">Already a member? <a href="login.php" class="login">Log In</a></P>
                    </div>
                    <p class="danger"><?php echo $error; ?></p>
                    <p class="danger" id="error"></p>
                    <div class="submit" align="center">
                        <button id="signup_btn" name="submit" type="submit">Sign Up</button>
                    </div>
      
            </form>
        </div>  
    </div>
    <!-- <script src="./js/script2.js"></script> -->
    <script src="../../../public/javascripts/signup.js"></script>


</body>
</html>