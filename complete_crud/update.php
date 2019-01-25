<?php
//header("refresh:4;index.php");
$con= new mysqli("localhost","root","","school");
if(isset($_POST['btn_update']))
{
	$roll_no=$_POST['roll_no'];
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	
	$sql="UPDATE tbl_student SET roll_no='$roll_no',first_name='$first_name',last_name='$last_name'
			WHERE roll_no='$roll_no' ";
    if($con->query($sql)==true)
	{
		header("Location: home.php");
	}
	else
	{
		echo $con->error;
	}
}
if(isset($_GET['id']))
{
	$id=$_GET['id'];
    $sql="SELECT * FROM tbl_student WHERE id='$id'";
    $result=$con->query($sql);
    while($row=$result->fetch_assoc())
	{ ?>
		<!DOCTYPE HTML>
<html>  
   <body>
   	<h2> Please update information here to update record </h2>
       <form action="update.php" method="post">
          Roll No : <input type="text" name="roll_no" value="<?php echo $row['roll_no'] ?>"><br>
		  First Name : <input type="text" name="first_name" value="<?php echo $row['first_name'] ?>"><br>
		  Last Name : <input type="text" name="last_name" value="<?php echo $row['last_name'] ?>"><br>
          <input value="Update" type="submit" name="btn_update" placeholder="Add Data">
		  <a href="home.php"> Cancel </a>
       </form>
   </body>
</html>
	<?php }
}
echo "<br>";
 ?>
 
 
 
 