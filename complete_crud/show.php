<?php

echo "<h2> Detail information of this person is </h2> <br>";

$con = new mysqli("localhost","root","","school");
if(isset($_GET['id']))
{
	$id=$_GET['id'];
    $query="SELECT * FROM tbl_student WHERE id='$id'";
	$result=$con->query($query);
	while($row=$result->fetch_assoc())
	{
		echo $row['roll_no']." ". $row['first_name']." ". $row['last_name']. "<br>";
	}
}

echo "<br>";

?>

<a href="home.php"> Click here to move on Main Page</a>