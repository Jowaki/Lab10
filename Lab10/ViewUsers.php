<?php

$mysqli =new mysqli("mysql.eecs.ku.edu", "j009m525", "Udoo3ni7", "j009m525");
if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);exit();
}
$query = "select * from Users";
if($result = $mysqli->query($query)){
    echo"<table border ='1'>Users<tr>";
    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row['user_id']."</td></tr>";
    }
    echo "</table>";
}
$result->free();
$mysqli->close();

?>