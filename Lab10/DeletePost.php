<?php

$mysqli =new mysqli("mysql.eecs.ku.edu", "j009m525", "Udoo3ni7", "j009m525");
$result = $mysqli->query($query);
$select=$_POST['select'];

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

foreach ($select as $delete)
{
	$query="DELETE FROM Posts WHERE user_id = '$delete'";

	if($result = $mysqli->query($query))
	{
		echo "Sucessful delete";
	}
}
$mysqli->close();
?>
