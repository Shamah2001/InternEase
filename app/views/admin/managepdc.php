<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage pdc</title>
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
        include ('../PDC/controller/connection.php');
        include ('crud.php');
        $sql = "SELECT * FROM PDC_user";
        $result = $connection->query($sql);

        if ($result->num_rows > 0) {
            // Output data in a table
            echo "<table>
                    <caption> PDC Accounts </caption>
                    <tr>
                        <th>ID</th>
                        <th>email</th>
                        <th>first name</th>
                        <th>Last name</th>
                    </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["email"] . "</td>
                        <td>" . $row["first_name"] . "</td>
                        <td>" . $row["last_name"] . "</td>
                    </tr>";
            }

            echo "</table>";
        } else {
            echo "0 results<br>";
        }

        ?>

    <!--
        <form class="insert-form" method="post">

            <div class="formgroup">
            <label for="pdc_id">PDC ID:</label>
            <input class="input-text" type="text" name="pdc_id" id="pdc_id">
            </div>

            <div class="formgroup">
            <label for="pdc_fname">PDC first name:</label>
            <input class="input-text" type="text" name="pdc_fname" id="pdc_fname">
            </div>

            <div class="formgroup">
            <label for="pdc_lname">PDC last name:</label>
            <input class="input-text" type="text" name="pdc_lname" id="pdc_lname">
            </div>

            <div class="formgroup">
            <label for="pdc_email">PDC email:</label>
            <input class="input-text" type="text" name="pdc_email" id="pdc_email">
            </div>

            <div class="formgroup">
            <label for="pdc_pwd">PDC password:</label>
            <input class="input-text" type="password" name="pdc_pwd" id="pdc_pwd">
            </div>  
            
            <div class="formgroup">
            <label for="pdc_rpwd">re-password:</label>
            <input class="input-text" type="password" name="pdc_rpwd" id="pdc_rpwd">
            <input type="submit"  class="btn" value="INSERT" name="insertpdc">
            </div>   
        </form>
    -->

        <form class="update-form"  method="post">

            <div class="formgroup">
                <label for="col">Column:</label>
                    <select name="col" id="col" onchange="togglePasswordFields()">
                        <option value="first_name">First name</option>
                        <option value="last_name">Last name</option>
                        <option value="email">Email</option>
                        <option value="password">Password</option>
                    </select>

                <div  id="updatevalue">
                    <label for="updatevalue">Value</label>
                    <input class="input-text" type="text" name="updatevalue" id="updatevalue">
                 </div>

                <div id="confirmPassword" style="display: none;">
                        <label for="confirmPassword">Confirm Password:</label>
                        <input class="input-text" type="password" name="confirmPassword">
                </div>
            </div>  

            <div class="formgroup">
            <label for="pdcid">PDC ID:</label>
            <input class="input-text" type="text" name="pdcid" id="pdcid">
            <input type="submit" class="btn" value="Update" name="updatepdc">
            </div>
        </form>
    </div>
    <div class="userhover">
        <?php include ('logpopup.php')?>
    </div>

</div>
    
    

</body>
</html>
