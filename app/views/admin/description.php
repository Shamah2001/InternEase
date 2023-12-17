<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Manage Admin</title>
    <link rel="stylesheet" type="text/css" href="../../../public/css/com.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="../../public/css/com.css?v=<?php echo time(); ?>">

</head>
<body>

    <div class="container">
       
        <?php
        if (isset($_GET['id'])) {
            $complaintId = $_GET['id'];

            
            $complaintDetails = getComplaintDetails($complaintId);

            if ($complaintDetails) {
                echo '<h2>Complaint Details</h2>';
                echo '<p>' . $complaintDetails['description'] . '</p>';
            } else {
                echo 'Complaint not found.';
            }
        } else {
            echo 'No complaint ID provided.';
        }
        ?>
    </div>
</body>
</html>
