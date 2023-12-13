<?php include("../../controllers/constant.php") ?>
<?php include("../../controllers/loginAccess.php") ?>

<?php

        if (isset($_GET['id'])) {
        
            $record_id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
            
            $sql = "SELECT * FROM company_ad WHERE ad_id = $record_id";
            $result = mysqli_query($conn, $sql);
            $record = mysqli_fetch_assoc($result);
        }


        $company_id = $_SESSION['id'];

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            if(isset($_POST)){
                $position = $_POST['position'];
                $requirements = $_POST['requirement'];
                $qualifications = $_POST['qualifications'];
                $start_date = $_POST['start_date'];
                $end_date = $_POST['end_date'];
                $no_of_interns = $_POST['no_of_intern'];
                $working_mode = $_POST['working_mode']; 
                $company_id = $_SESSION['id'];
    
            
                $sql = "UPDATE `company_ad`
                            SET
                            `position` = '$position',
                            `requirements` = '$requirements',
                            `qualification` = '$qualifications',
                            `from_date` = '$start_date',
                            `to_date` = '$end_date',
                            `no_of_intern` = '$no_of_interns',
                            `working_mode` = '$working_mode'
                            WHERE
                            `company_id` = '$record_id';";
    
                $result = mysqli_query($conn, $sql);
    
                if($result){
                    $_SESSION['ad_addition'] = "Advertisement updated successfully!";
                    header('location:'.SITEURL.'ad.php');
                }   
                else{
                    header('location:'.SITEURL.'ad.php');
                }
            }
        }    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Advertisement</title>
    <link rel="stylesheet" type="text/css" href="../../../public/css/company/addAd.css">
</head>
<body>
    <div class="container">
    <?php include_once('../includes/menubar.php')?>
        
        <div class ="main">
            <div class = "topbar">
                
                <div class = "toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div class = "user">
                    <ion-icon class="bell-icon" name="notifications-circle-outline"></ion-icon>
                    <span><?php echo $_SESSION['company_name']; ?></span>
                    <ion-icon class="profile-icon" name="person-circle-outline"></ion-icon>
                </div>

            </div>

            <form method="POST">    
                <div class="details">
                    <div class="heading-advertisement">
                            <h2>Edit Advertisements</h2>
                    </div>
        
                        <div class="compdetails">
                                <h4>Positions</h4>
                                <select name="position">
                                    <?php if($record['position']=="se"){ ?>        
                                        <option selected value = "se">Sofware Engineer</option>
                                        <option value = "qa">Quality Assuarance</option>
                                        <option value = "ba">Business Analyst</option>
                                    <?php } ?>
                                    <?php if($record['position']=="qa"){ ?>        
                                        <option value = "se">Sofware Engineer</option>
                                        <option selected value = "qa">Quality Assuarance</option>
                                        <option value = "ba">Business Analyst</option>
                                    <?php } ?>
                                    <?php if($record['position']=="ba"){ ?>        
                                        <option value = "se">Sofware Engineer</option>
                                        <option value = "qa">Quality Assuarance</option>
                                        <option selected value = "ba">Business Analyst</option>
                                    <?php } ?>
                                </select>
                            
                                <h4>Requirements</h4>
                                <input name="requirement" value="<?php echo $record['requirements'] ?>" type = "text" class = "bx1">
                            
                                <h4>Qualifications</h4>
                                <input name="qualifications" value="<?php echo $record['qualification'] ?>" type = "text" class = "bx1">
                                
                                <h4>Internship Period</h4>
                                <div class = "card">
                                    <input name="start_date" value="<?php echo $record['from_date'] ?>" class="ad-date" type = "month" class = "bx1">
                                    <h4 class = "h4">to</h4>
                                    <input name="end_date" value="<?php echo $record['to_date'] ?>"  class="ad-date" type = "month" class = "bx1">
                                </div>

                                <div class = "card">
                                    <h4>No. of Interns</h4>
                                    <h4 class = "spaceleft" style="margin-left:150px">Working Mode</h4>
                                </div>
                                <div class = "card">
                                    <input name="no_of_intern" value="<?php echo $record['no_of_intern'] ?>" type = "number" class = "bx1" style="margin-right:15px;">
                                    <select name="working_mode">
                                        <?php if($record['working_mode']=="Online"){ ?>        
                                            <option selected value = "Online">Online</option>
                                            <option value = "Physical">Physical</option>
                                            <option value = "Hybrid">Hybrid</option>
                                        <?php } ?>
                                        <?php if($record['working_mode']=="Physical"){ ?>        
                                            <option value = "Online">Online</option>
                                            <option selected value = "Physical">Physical</option>
                                            <option value = "Hybrid">Hybrid</option>
                                        <?php } ?>
                                        <?php if($record['working_mode']=="Hybrid"){ ?>        
                                            <option value = "Online">Online</option>
                                            <option value = "Physical">Physical</option>
                                            <option selected value = "Hybrid">Hybrid</option>
                                        <?php }?>
                                    </select>
                                </div>
                                <div class="submit">
                                    <button type="submit">Save</button>
                                </div>
                        </div>      
                </div>
            </form>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>