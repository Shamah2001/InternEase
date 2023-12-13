<?php include("../../controllers/constant.php") ?>

<?php
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST)) {
        $company = $_POST["company_name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirm_password"];
    } else {
        $error = "Something went wrong! Try again later!";
    }

    // Validate Company Name
    if (empty($company)) {
        $errors['company_name'] = "Company name is required.";
    }

    // Validate Email
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email address.";
    }


    if(empty($_POST['password'])){
        $errors['password'] = "Password must be at least 8 characters.";
    } elseif(strlen($_POST['password']) < 8){
        $errors['password'] = "Password must be at least 8 characters.";
    } elseif(!preg_match("#[a-z]+#", $_POST['password'])){
        $errors['password'] = "Password must have lowercase letters.";
    } elseif(!preg_match("#[A-Z]+#", $_POST['password'])){
        $errors['password'] = "Password must have UPPERCASE letters.";
    } elseif(!preg_match("#[0-9]+#", $_POST['password'])){
        $errors['password'] = "Password must have numbers.";
    } elseif(!preg_match("#\W+#", $_POST['password'])){
        $errors['password'] = "Password must have characters.";
    }

    // Validate Password
    if (strlen($password) < 8 ||
        !preg_match("/[0-9]/", $password) ||
        !preg_match("/[A-Z]/", $password) ||
        !preg_match("/[^a-zA-Z0-9]/", $password)
    ) {
        $errors['password'] = "Password must be at least 8 characters.";
    }

    // Validate Confirm Password
    if ($password !== $confirmPassword) {
        $errors['confirm_password'] = "Passwords do not match.";
    }

    if (empty($errors)) {
        // Validation passed, you can proceed with the database insertion
            // Validation passed, insert data into the database

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO company (company_name, email, password)
                    VALUES ('$company', '$email', '$hashedPassword')";
        
            $res = mysqli_query($conn, $sql);
        
            if ($res == TRUE) {

                $sql = "SELECT * FROM company WHERE email='$email'";
                //Step 03 - Execute the SQL Query
                $res = mysqli_query($conn,$sql);
                $row = mysqli_fetch_assoc($res);
                $_SESSION['id'] = $userid;
                $_SESSION['company_name'] = $row['company_name'];
                // Data inserted successfully
                echo "<script> window.location.href='http://localhost/Internease/app/views/company/dashboard.php';</script>";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/company/signup.css">

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <title>Sign Up</title>
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
            
        <form class="box" method="POST">
            <h4>Create Account</h4>
                    <?php if (isset($error)) { ?>
                        <p class="error"><?= $error ?></p>
                    <?php } ?>
            <p class="label1">Company Name: 
                <?php if (isset($errors['company_name'])) { ?>
                    <span class="error"><?= $errors['company_name'] ?></span>
                <?php } ?><br></p>
            <input type="text"  name="company_name" class="box1" value="<?= isset($_POST['company_name']) ? $_POST['company_name'] : '' ?>">
            
            <p class="label1">Email:
                <?php if (isset($errors['email'])) { ?>
                    <span class="error"><?= $errors['email'] ?></span>
                <?php } ?><br></p>
            <input type="email"  name="email" class="box1" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>">
            
            <p class="label1">Password:
                <?php if (isset($errors['password'])) { ?>
                    <span class="error"><?= $errors['password'] ?></span>
                <?php } ?><br></p>
            <input type="password" name="password"  class="box2">
            <i class='bx bxs-show eye-icon'></i>
            
            <p class="label1">Confirm Password:
                <?php if (isset($errors['confirm_password'])) { ?>
                    <span class="error"><?= $errors['confirm_password'] ?></span>
                <?php } ?><br></p>
            <input type="password"  name="confirm_password" class="box2">
            
            <div class="member">
                <p class="mem">Already a member? <a href="login.php" class="login">Log In</a></p>
            </div>

            <div class="submit" align="center">
                <button type="submit">Sign Up</button>
            </div>

        </form>
        </div>  
    </div>
    
    <script src="../../../public/javascripts/company/login.js"></script>

</body>
</html>

                