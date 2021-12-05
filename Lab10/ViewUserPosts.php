<?php

$mysqli =new mysqli("mysql.eecs.ku.edu", "j009m525", "Udoo3ni7", "j009m525");
$result = $mysqli->query($query);
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$user_id = $_POST['select'];
$post = "SELECT content FROM Posts WHERE author_id= '$user_id'";


echo "<table>";
echo "<tr>";
echo "<th>Posts</th>";
echo "</tr>";
if($result = $mysqli->query($post))
{

    while($row = $result->fetch_assoc())
    {
      echo "<tr>";
      echo "<td>".$row["content"]."</td>";
      echo "</tr>";
    }

    $result->free();
}

        echo "</table>";

$mysqli->close();
?>
