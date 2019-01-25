<?php
 $con = new mysqli("localhost","root","","school");
 //------------------------------------------------ Code for showing existing data
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
						   <th> Show Detail </th>
						   <th> Update </th>
						   <th> Delete</th>
					  </tr>
			<?php
			while($row=$result->fetch_assoc())
			{ ?>
					   <tr>
					       <td> <?php echo $row['roll_no'];  ?> </td>
						   <td> <?php echo $row['first_name']; ?>  </td>
						   <td> <?php echo $row['last_name']; ?>  </td>
						   <td> <a href="show.php?id=<?php echo $row['id']; ?>">Detail</a> </td>
						   <td> <a href="update.php?id=<?php echo $row['id']; ?>">Update </a> <td>
						   <td> <a href="delete.php?id=<?php echo $row['id']; ?>">Delete </a> <td>
					  </tr>
			<?php
			}
			?> </table> <?php
			}
			else
			{
				echo "No record found in this table";
			}
// ------------------------------------------------ Code for adding new record			
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
				       header("Location: home.php");
			        }
			        else
			        {
				       echo $con->error;
			        }
				}
			}
		
	function test_input($data)  // function for further validation
	{
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
     }
}
?>
<!DOCTYPE HTML>
<html>  
   <body>
   	<h2> Please fill information here to add record </h2>
       <form action="home.php" method="post">
          Roll No : <input type="text" name="roll_no" required="true"><br>
		  First Name : <input type="text" name="first_name" required="true"><br>
		  Last Name : <input type="text" name="last_name" required="true"><br>
          <input type="submit" name="btn" value="Add Data">
       </form>
   </body>
</html>
