<?php
// ---------------------------------------- to show all data present in a table

$con = new mysqli("localhost","root","","school");
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

// ---------------------------------- button logic for getting specific roll no data for updatoin

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
			while($row=$result1->fetch_assoc())
				{ ?>
					<!DOCTYPE HTML>
					<html>  
					<body>
						<form action="update.php" method="post">
							Roll No : <input type="text" name="roll_no" value="<?php echo $row['roll_no'] ?>"><br>
							First Name : <input type="text" name="first_name" value="<?php echo $row['first_name'] ?>"><br>
							Last Name : <input type="text" name="last_name" value="<?php echo $row['last_name'] ?>"><br>
							<input value="Update" type="submit" name="btn_update" placeholder="Add Data">
							<a href="update.php"> Cancel </a>
						</form>
					</body>
					</html>
				<?php }	
		}
		else
		{
			echo "Sorry ! this roll no is not exist in database. => Pleae Refresh this page ";
		}
	}
}

// ---------------------------------- button update logic to update specific roll no data

if(isset($_POST['btn_update']))
{
	$roll_no=$_POST['roll_no'];
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	
	$sql="UPDATE tbl_student SET roll_no='$roll_no',first_name='$first_name',last_name='$last_name'
			WHERE roll_no='$roll_no' ";
    if($con->query($sql)==true)
	{
		header("Location: update.php");
	}
	else
	{
		echo $con->error;
	}
}

?>

<!DOCTYPE HTML>
<html>  
<body>
	<form action="update.php" method="post"> <br>
		Enter roll no to update a student record: <br>
		Roll No : <input type="text" name="roll_no"> <br>
		<input type="submit" name="btn" value="Get Data">
	</form>
</body>
</html>