<?php
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
?>