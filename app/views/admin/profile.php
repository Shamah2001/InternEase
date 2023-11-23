<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Admin</title>
    <link rel="stylesheet" type="text/css" href="css/com.css?v=<?php echo time(); ?>">
    <script>
        function togglePasswordFields() {
            var col = document.getElementById("col");
            var updatevalue = document.getElementById("updatevalue");
            var confirmPasswordField = document.getElementById("confirmPassword");

            if (col.value === "password") {
                confirmPasswordField.style.display = "block";
            } else {
                confirmPasswordField.style.display = "none";
            }
        }
    </script>
</head>
<body>

<div class="outer">
    <div class="container">
        <?php include_once('sidemenu.php') ?>
    </div>

    <div class="content">

            <?php
            include("crud.php");
            ?>
            <form class="update-form" method="post">

                <div class="formgroup">
                    <label for="col">Attribute:</label>
                    <select name="col" id="col" onchange="togglePasswordFields()">
                        <option value="email">Email</option>
                        <option value="password">Password</option>
                    </select>

                    <div id="updatevalue">
                        <label for="updatevalue">Value:</label>
                        <input class="input-text" type="text" name="updatevalue" id="updatevalue">
                    </div>

                    <div id="confirmPassword" style="display: none;">
                        <label for="confirmPassword">Retype Password:</label>
                        <input class="input-text" type="password" name="confirmPassword">
                    </div>
                </div>

                <div class="formgroup">
                    <input type="submit" class="btn" value="Update" name="updateadmin">
                </div>
            </form>
    </div>
    <div class="userhover">
        <?php include ('logpopup.php')?>
    </div>
</div>
</body>
</html>
