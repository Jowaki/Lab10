<?php
$mysqli =new mysqli("mysql.eecs.ku.edu", "j009m525", "Udoo3ni7", "j009m525");
if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);exit();
}
$user_id = $_POST['user_id'];
$query1 = "INSERT INTO Users(user_id) VALUES ('$user_id')";
if($user_id ==""){
    echo("Enter a valid username");
}
elseif($result = $mysqli->query($query1)){
    echo('Successfully added a new username');
}
    $result->free();
$mysqli->close();
?>
