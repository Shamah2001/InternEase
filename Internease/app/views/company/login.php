<?php include("../../controllers/constant.php") ?>

<?php
     if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        if(isset($_POST)){
        $username = $_POST['username'];
        $password = $_POST['password'];
        }else{
            $error = "Username or Password did not match";
        }
        
         //Step 02 - SQL Query to check the username and password existance
         $sql = "SELECT * FROM company WHERE email='$username'";

         //Step 03 - Execute the SQL Query
         $res = mysqli_query($conn,$sql);
 
         //Step 04 - Count rows to check the user exists or not
         $count = mysqli_num_rows($res);

         if($count == 1)
        {
            $row = mysqli_fetch_assoc($res);

            if(password_verify($password,$row['password']))
            {
                $userid = $row['id'];
                $_SESSION['id'] = $userid;
                $_SESSION['company_name'] = $row['company_name'];
                //Redirect to home page
                header('location:'.SITEURL.'dashboard.php');
            } else {
                $error = "Username or Password did not match";
            }
        } else {
            $error = "Username or Password did not match";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/company/login.css">

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <title>Login</title>
</head>

<body>
    <div class="main-div">
        <div class="leftpart">
            <img src="../../../public/images/logo.png" alt="" class="img1">
            <h1>Internship</h1>
            <h1>Management</h1>
            <h1>System</h1>
            <img src="../../../public/images/image.png" alt="" class="img2">                
        </div>

        <div class="rightpart">
            <form method="POST">
            <h2>Welcome to InternEase</h2>
                <div class="box">
                    <?php if (isset($error)) { ?>
                        <p class="error"><?= $error ?></p>
                    <?php } ?>
                    <div class="login-each-field"> 
                        <p class="label1">Username:<br></p>
                        <input name="username" type="text" placeholder="Enter your username" class="box1">
                    </div>

                    <div class="login-each-field login">
                        <p class="label1">Password:<br></p>
                        <div class="eye-icon-class">
                            <input name="password" type="password" placeholder="Enter your password" class="box2">
                            <i class='bx bxs-show eye-icon'></i>
                        </div>
                    </div>

                    <P class="fp">Forgot password?</P>

                </div>
                <div class="submit">
                    <button type="submit">Login</button>
                </div>
            </form>
            <div class="dontacc">
                Don't have an acoount? <a href="signup.php" class="">Sign Up</a>
            </div>
            </div>
        </div>  
    </div>

    <script src="../../../public/javascripts/company/login.js"></script>

</body>
</html>