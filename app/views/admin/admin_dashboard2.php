
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
        <div>
            <table >
                <tr>
                    <th>Component</th>
                    <th>Status</th>
                </tr>

                <tr>
                    <td>Database Connection</td>
                    <td>Sucess</td>
                </tr>

                <tr>
                    <td>Server</td>
                    <td>Active</td>
                </tr>

                <tr>
                    <td>Network Connectivity</td>
                    <td>Sucess</td>
                </tr>

                <tr>
                    <td>Exceptions Triggered</td>
                    <td>0</td>
                </tr>

                <tr>
                    <td>Firewall</td>
                    <td>Active</td>
                </tr>
            
            </table>
        </div>
    </div>
    <div class="userhover">
        <?php include ('logpopup.php')?>
    </div>

</div>

</body>
</html>
