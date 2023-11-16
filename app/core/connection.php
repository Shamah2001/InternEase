 <?php

//connect to database
$conn = mysqli_connect('localhost', 'shamah', 'test1234','group_project');

if(!$conn){
    echo ' error: ' .mysqli_connect_error();
}

//write query for all profiles
$sql = 'SELECT Reg_no, Name, E-mail * FROM profile ORDER BY Status';

//make query to ge result
$result = mysqli_query($conn, $sql);

//fetch the resluting rows as an array
$proflie = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free result from memory
mysqli_free_result($result);

//close connection
mysqli_close($conn);

print_r($proflie)
?>