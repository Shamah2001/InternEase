<?php 
    session_start();
    if(!isset($_SESSION['user_id']))
    {
        header('Location: ../views/pdc/login.php');
    }
    include_once('connection.php');

    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $query="DELETE FROM student WHERE id='{$id}'";
        $result=mysqli_query($connection,$query);
        if($result)
        {
            header('Location: ../views/pdc/managestudent.php');
        }
    }
?>