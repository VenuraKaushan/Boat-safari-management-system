<?php
include_once "harshadatabase.php";
$result = mysqli_query($conn,"SELECT * FROM customer_list");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Retrieve data</title>
  </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table>
    <tr>
	    <td>S1 no</td>
        <td>Name</td>	
		<td>Date Of Birth</td>
		<td>Email</td>
		<td>Phone number</td>	
		<td>Choose password</td>
		<td>Re enter password</td>
	</tr>
	     
		 <?php
		 $i=0;
		 while($row = mysqli_fetch_array($result)) {
		?>
        
     <tr>
	    <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["name"]; ?></td>	
		<td><?php echo $row["dateof_birth"]; ?></td>
		<td><?php echo $row["email"]; ?></td>
		<td><?php echo $row["phone_number"]; ?></td>
		<td><?php echo $row["choose_password"]; ?></td>
		<td><?php echo $row["reenter_password"]; ?></td>
		<td><a href="delete-process.php?id=<?php echo $row["id"]; ?>">cancle</a></td>
	</tr>
          <?php
          $i++;
		  }
          ?>
</table>
<?php
}
else
{
    echo "No result found";
}
?>
</body>
</html>	
		
		
		
		
		
		
		
		
		
		