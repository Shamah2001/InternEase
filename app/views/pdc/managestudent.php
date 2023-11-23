<?php 
    session_start();
    if(!isset($_SESSION['user_id']))
    {
        header('Location: login.php');
    }
?>

<?php 
    include_once('../../controllers/connection.php');

    $query="SELECT * FROM student";

    $result = mysqli_query($connection,$query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDC Manage Student</title>
    <link rel="stylesheet" type="text/css" href="../../../public/css/stu.css">
</head>
<body>
    <div class="container">
        <?php include_once('../includes/sidemenu.php') ?>
        <div class ="main">
            <div class = "topbar">
                <div class = "toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div class = "user">
                    <ion-icon name="notifications-circle-outline"></ion-icon>
                    <span>Hamsayini</span>
                    <ion-icon name="person-circle-outline"></ion-icon>
                    
                </div>

            </div>
            
        <!--order data list-->
        <div class="details">
            <div class="studentList">
                <div class = "cardHeader">
                    <h2>Students List</h2>
                    <a href="addstudent.php" class="btn">Add</a> 
                </div>
                <table>
                    <thead>
                        <tr>
                            <td>Student Name</td>
                            <td>Registration No</td>
                            <td>Email</td>
                            <td>Index no</td>
                            <td>Action</td>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                            while ($row = mysqli_fetch_assoc($result))
                            { ?>
                                <tr>
                                    <td><?php echo $row['first_name'].' '.$row['last_name']; ?></td>
                                    <td><?php echo $row['reg_no']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['index_no']; ?></td>
                                    <td>
                                        <a href="viewstudent.php?id=<?php echo $row['id']; ?>" class = "view">View</a>
                                        <a href="#" onclick="deleteStudent(<?php echo $row['id']; ?>)" class = "delete">Delete</a>
                                    </td>
                                </tr>
                        <?php
                            }
                        ?>
                
                    </tbody>
                </table>

            </div>
        </div>
        <div class = "selection">
            <div class = "first">
                
            </div>
        </div>
        
        
            
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../../../public/javascripts/managestudent.js"></script>
</body>
</html>