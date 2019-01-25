<?php
//header("refresh:4;index.php");
$con= new mysqli("localhost","root","","school");
$id1=$_GET['id'];
	echo $id1;
    echo "<br>";
if(isset($_POST['btn_delete']))
{
 	$sql="DELETE FROM tbl_student WHERE id='$id1'";
    if($con->query($sql)==true)
	{
		//echo "Data delete now";
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
	{ 
      echo $row['roll_no']." ". $row['first_name']." ".$row['last_name']; 
 }
}
echo "<br>";
 ?>
 
 <!DOCTYPE HTML>
<html>  
   <body>
       <form method="post">
          <input value="Delete" type="submit" name="btn_delete">
		  <a href="file.php"> Cancel </a>
       </form>
   </body>
</html>
 