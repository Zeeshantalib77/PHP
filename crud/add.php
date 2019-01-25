<?php
$con = new mysqli("localhost","root","","school");

if(isset($_POST['btn']))
{	

	$roll_no=$_POST["roll_no"];
	$first_name=$_POST["first_name"];
	$last_name=$_POST["last_name"];

	if($con->connect_error)
	{
		die("Connection failed : " .$con->connect_error);
	}
	else
	{
		$query1="SELECT * FROM tbl_student WHERE roll_no='$roll_no'";
		$result1=$con->query($query1);
		if( $result1->num_rows >0)
		{
			echo "User With this Roll No already exist";
		}
		else
		{
			$sql="INSERT INTO tbl_student (roll_no,first_name,last_name) 
			VALUES ('$roll_no','$first_name','$last_name')";
			if($con->query($sql)==true)
			{
				//header("Location: file.php");
				echo "Record has been added successfully";
			}
			else
			{
				echo $con->error;
			}
		}
	}
}
?>
<!DOCTYPE HTML>
<html>  
<body>
	<form action="add.php" method="post">
		Roll No : <input type="text" name="roll_no"><br>
		First Name : <input type="text" name="first_name"><br>
		Last Name : <input type="text" name="last_name"><br>
		<input type="submit" name="btn" value="Add Data">
	</form>
</body>
</html>
