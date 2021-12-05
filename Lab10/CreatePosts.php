<?php

$mysqli =new mysqli("mysql.eecs.ku.edu", "j009m525", "Udoo3ni7", "j009m525");

$result = $mysqli->query($query);
 
if ($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);exit();
}

$user=$_POST["user_id"];
$content = $_POST["content"];

$query = "SELECT user_id FROM Users WHERE user_id='$user'";

if($content=="")
{
	echo "empty post";
}
else
{
if($result=$mysqli->query($query))
{
	if($row=$result->fetch_assoc())
	{
		$query="INSERT INTO Posts(content,author_id) VALUES ('$content','$user')";
		if($mysqli->query($query))
		{
			echo "Sucessfully added post";
		}
	}
	
	else 
	{
		echo "Cannot Find User";
	}
}
}

$result->free();
$mysqli->close();

?>
