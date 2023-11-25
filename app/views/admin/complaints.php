<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Manage Admin</title>
    <link rel="stylesheet" type="text/css" href="../../../public/css/com.css?v=<?php echo time(); ?>">

</head>
<body>

<div class="container">
        <?php include_once('sidemenu.php') ?>
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

   <div class="details">
        <div class="companyList">
                <div class = "cardHeader">
                    <h2>Complaints</h2>
                    <!-- <a href="#" class="btn">View All</a>  -->
                </div>

            <table>
                <thead>
                    <tr>
                        <td>Review-status</td>
                        <td>Student Name</td>
                        <td>Email</td>
                        <td>Contact</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Not reviewed</td>
                        <td>Nirmal</td>
                        <td>hamsa@gmail.com</td>
                        <td>0763421345</td>
                        <td><a href="#" span class = "view"></span>View</td>
                    </tr>


                    <tr>
                        <td>Not reviewed</td>
                        <td>Kasun</td>
                        <td>nufdha@gmail.com</td>
                        <td>0713245678</td>
                        <td><a href="#" span class = "view"></span>View</td>
                    </tr>

                    <tr>
                        <td>Not reviewed</td>
                        <td>Kaalik</td>
                        <td>shama@gmail.com</td>
                        <td>1230543721</td>
                        <td><a href="#" span class = "view"></span>View</td>
                    </tr>

                    

                    <tr>
                        <td>Not reviewed</td>
                        <td>Gopika</td>
                        <td>shama@gmail.com</td>
                        <td>0734576123</td>
                        <td><a href="#" span class = "view"></span>View</td>
                    </tr>

                    <tr>
                        <td>Not reviewed</td>
                        <td>Salama</td>
                        <td>nufdha@gmail.com</td>
                        <td>0754329123</td>
                        <td><a href="#" span class = "view"></span>View</td>
                    </tr>

                    <tr>
                        <td>Not reviewed</td>
                        <td>Saktdi</td>
                        <td>gawesh@gmail.com</td>
                        <td>0987655455</td>
                    <td><a href="#" span class = "view"></span>View</td>
                    </tr>


                    <tr>
                        <td>Not reviewed</td>
                        <td>Khalid</td>
                        <td>hamsa@gmail.com</td>
                        <td>0876532123</td>
                    <td><a href="#" span class = "view"></span>View</td>
                    </tr>

                    <tr>
                        <td>Not reviewed</td>
                        <td>Nirush</td>
                        <td>gawesh@gmail.com</td>
                        <td>0764532123</td>
                    <td><a href="#" span class = "view"></span>View</td>
                    </tr>

                    <tr>
                        <td>Reviewed</td>
                        <td>Vikash</td>
                        <td>shama@gmail.com</td>
                        <td>0874532145</td>
                    <td><a href="#" span class = "view"></span>View</td>
                    </tr>

                    <tr>
                        <td>Reviewed</td>
                        <td>Chamal</td>
                        <td>hamsa@gmail.com</td>
                        <td>0763421567</td>
                    <td><a href="#" span class = "view"></span>View</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <div class="userhover">
        <?php include ('logpopup.php')?>
    </div>

</div>
    
   
</body>
</html>
