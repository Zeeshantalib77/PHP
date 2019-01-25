<?php
$con = new mysqli("localhost","root","","school");

// ------------------------------------ Code to show all data from table
$query="SELECT * FROM tbl_student";
$result=$con->query($query);
if($result->num_rows >0)
{
?>
<table>
<tr>
	<th> Roll No </th>
	<th> First Name </th>
	<th> Last Name </th>
</tr>
<?php
while($row=$result->fetch_assoc())
	{ ?>
		<tr>
			<td> <?php echo $row['roll_no'];  ?> </td>
			<td> <?php echo $row['first_name']; ?>  </td>
			<td> <?php echo $row['last_name']; ?>  </td>
		</tr>
		<?php
	}
	?> </table> <?php
}
else
{
	echo "No record found in this table";
}

// -------------------------------------------- code to delete a specific record

if(isset($_POST['btn']))
{	

	$roll_no=$_POST["roll_no"];
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
			$sql="DELETE FROM tbl_student WHERE roll_no='$roll_no'";
			if($con->query($sql)==true)
			{
				//echo "Record has been deleted successfully. => Pleae Refresh this page";
				header("Location: delete.php");
			}
			else
			{
				echo $con->error;
			}
			
		}
		else
		{
			echo "Sorry ! this roll no is not exist in database. => Pleae Refresh this page ";
		}
	}
}

?>

<!DOCTYPE HTML>
<html>  
<body>
	<form action="delete.php" method="post"> <br>
		Enter roll no to delete a student record: <br>
		Roll No : <input type="text" name="roll_no"> <br>
		<input type="submit" name="btn" value="Delete Data">
	</form>
</body>
</html>