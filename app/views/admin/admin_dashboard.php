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
                        <a href="">
                            <div>
                                <div>Download</div>
                                <div>advertisement</div>
                                <div>report</div>
                            </div>
                        </a>
                        <div class="iconBx">
                            <ion-icon name="document-text" size="large"></ion-icon>
                        </div>
                    </div>
                    <div class="notibutton">
                        <a href="">
                            <div>
                                <div>Download</div>
                                <div>Registration</div>
                                <div>report</div>
                            </div>
                        </a>
                        <div class="iconBx">
                            <ion-icon name="document-text" size="large"></ion-icon>
                        </div>
                    </div>  
                    <div class="notibutton">
                        <a href="">
                            <div>
                                <div>Most employed Position: </div>
                                <div>Software Enginner</div>
                                <div>Company with the highest recruit rate</div>
                                <div>99x</div>
                            </div>
                            <div class="iconBx">
                                <ion-icon  name="man-outline" size="large"></ion-icon>
                            </div>
                        </a>
                    </div>  
                         
        </div>
        <table>
            <caption>Advertisement report<caption>
                <tr>
                    <th>Company name</th>
                    <th>job position</th>
                    <th>interns</th>
                </tr>

                <tr>
                    <td>99x</td>
                    <td>Network Enginner</td>
                    <td>6</td>
                </tr>

                <tr>
                    <td>WSO2</td>
                    <td>Cyber secruity</td>
                    <td>4</td>
                </tr>

                <tr>
                    <td>Virtusa</td>
                    <td>IT officer</td>
                    <td>1</td>
                </tr>

                <tr>
                    <td>CodeGen</td>
                    <td>Software Enginner</td>
                    <td>12</td>
                </tr>
                    <td class="td-left" colspan="3">TOTAL = 23</td>
                <tr>

        </table>

        <table>
            <caption>Registration report<caption>
                <tr>
                    <th>Company</th>
                    <th>Contact Name</th>
                    <th>Contact</th>
                    <th>email</th>
                </tr>

                <tr>
                    <td>99x</td>
                    <td>Ruwan</td>
                    <td>077-8982122</td>
                    <td>Ruwan@gmail.com</td>
                </tr>

                <tr>
                    <td>WSO2</td>
                    <td>Ajith</td>
                    <td>077-8982122</td>
                    <td>Ajith@gmail.com</td>
                </tr>

                <tr>
                    <td>Virtusa</td>
                    <td>fernando</td>
                    <td>077-8982122</td>
                    <td>fernando@gmail.com</td>
                </tr>

                <tr>
                    <td>CodeGen</td>
                    <td>kanith</td>
                    <td>077-8982122</td>
                    <td>kanith@gmail.com</td>

        </table>
    </div>
    
    <div class="userhover">
        <?php include ('logpopup.php')?>
    </div>

</div>   
    
</body>
</html>
