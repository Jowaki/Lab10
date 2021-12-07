<?php

$mysqli =new mysqli("mysql.eecs.ku.edu", "j009m525", "Udoo3ni7", "j009m525");
$result = $mysqli->query($query);
$select=$_POST['select'];
/*echo "$select";*/
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

if(empty($select))
{
	echo("Nothing selected to delete");
}
else{
	$N = count($select);

	echo "The posts with the post id's were deleted:<br>";

	for($i=0;$i<$N;$i++)
	{
		$query = "DELETE FROM Posts WHERE post_id ='". $select[$i]."'";
		
		if($result = $mysqli->query($query))
		{
			echo "$select[$i]";
			echo"<br>";
		}
	}
}

$mysqli->close();
?>
