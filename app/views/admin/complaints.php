<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Admin</title>
    <link rel="stylesheet" type="text/css" href="css/com.css?v=<?php echo time(); ?>">

</head>
<body>

<div class="outer">
    <div class="container">
        <?php include_once('sidemenu.php') ?>
   </div>


   

    <div class="content">
        <div class="notification">
                <div class="notibutton">
                        <a>
                            <div>
                                <div>8</div>
                                <div>Complaints to Review</div>
                            </div>
                        </a>
                        <div class="iconBx">
                            <ion-icon name="alert-circle" size="large"></ion-icon>
                        </div>
                            
                </div>
        </div>
        <table>
                <caption>Complaints</caption>
                <tr>
                    <th>Review-status</th>
                    <th>Student Name</th>
                    <th>Email</th>
                    <th colspan="2">Contact</th>
                </tr>

                <tr>
                    <td>Not reviewed</td>
                    <td>Nirmal</td>
                    <td>hamsa@gmail.com</td>
                    <td>0763421345</td>
                   <a href="" span class = "view"><td>View</td></a>
                </tr>
                </tr>

                <tr>
                    <td>Not reviewed</td>
                    <td>Kasun</td>
                    <td>nufdha@gmail.com</td>
                    <td>0713245678</td>
                    <a href="" span class = "view"><td>View</td></a>
                </tr>

                <tr>
                    <td>Not reviewed</td>
                    <td>Kaalik</td>
                    <td>shama@gmail.com</td>
                    <td>1230543721</td>
                    <a href="" span class = "view"><td>View</td></a>
                </tr>

                

                <tr>
                    <td>Not reviewed</td>
                    <td>Gopika</td>
                    <td>shama@gmail.com</td>
                    <td>0734576123</td>
                    <a href="" span class = "view"><td>View</td></a>
                </tr>

                <tr>
                    <td>Not reviewed</td>
                    <td>Salama</td>
                    <td>nufdha@gmail.com</td>
                    <td>0754329123</td>
                    <a href="" span class = "view"><td>View</td></a>
                </tr>

                <tr>
                    <td>Not reviewed</td>
                    <td>Sakthi</td>
                    <td>gawesh@gmail.com</td>
                    <td>0987655455</td>
                   <a href="" span class = "view"><td>View</td></a>
                </tr>
                </tr>

                <tr>
                    <td>Not reviewed</td>
                    <td>Khalid</td>
                    <td>hamsa@gmail.com</td>
                    <td>0876532123</td>
                   <a href="" span class = "view"><td>View</td></a>
                </tr>
                </tr>

                <tr>
                    <td>Not reviewed</td>
                    <td>Nirush</td>
                    <td>gawesh@gmail.com</td>
                    <td>0764532123</td>
                   <a href="" span class = "view"><td>View</td></a>
                </tr>
                </tr>

                <tr>
                    <td>Reviewed</td>
                    <td>Vikash</td>
                    <td>shama@gmail.com</td>
                    <td>0874532145</td>
                   <a href="" span class = "view"><td>View</td></a>
                </tr>
                </tr>

                <tr>
                    <td>Reviewed</td>
                    <td>Chamal</td>
                    <td>hamsa@gmail.com</td>
                    <td>0763421567</td>
                   <a href="" span class = "view"><td>View</td></a>
                </tr>
                </tr>
        </table>
    </div>
    <div class="userhover">
        <?php include ('logpopup.php')?>
    </div>

</div>
    
</div>
   
</body>
</html>
