<?php session_start(); ?>
<?php require_once('../../controllers/connection.php')?>
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
    <link rel="stylesheet" href="../../../public/css/main.css">
    <link rel="stylesheet" href="../../../public/css/app.css">

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <title>Login</title>
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
            <form class="box" action="../../controllers/login_controller.php" method="post">
                <h2>Welcome to InternEase</h2>
                <p class="label1">Email:<br></p>
                <input type="text" name="email" placeholder="Enter your username" class="box1">
                <p class="label1">Password:<br></p>
                <input type="password" name="password" placeholder="Enter your password" class="box2">
                <!-- <i class='bx bxs-show eye-icon'></i> -->
                <P class="fp">Forgot password?</P>
                <p class="danger"><?php echo $error; ?></p>
                <div class="submit">
                    <button name="submit" type="submit">Login</button>
                    <!-- <br> <div class="dontacc">
                        Don't have an acoount? <a href="signup.php" class="su">Sign Up</a>
                    </br> -->
                </div>
                </div>
                
            </form>
        </div>  
    </div>

    <script src="../../../public/javascripts/script.js"></script>

</body>
</html>