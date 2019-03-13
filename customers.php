<?php

include("config.php");
include("header.php");

$query = mysqli_query($db_conn,"SELECT * FROM customers");

?>

<h1>Customers</h1>

<a href="add_customer.php">Add Customer</a>

<br><br>

<table>
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th></th>
	</tr>
		
	<?php 

	while($row = mysqli_fetch_array($query)){
	
	$customer_id = $row['customer_id'];
	$first_name = $row['first_name'];
	$last_name = $row['last_name'];
	$email = $row['email'];
	
	?>
	
	<tr>	
		<td> <?php echo $first_name; ?> </td> 
	 	<td> <?php echo $last_name; ?> </td>
	 	<td> <?php echo $email; ?> </td>
	 	<td> 
	 		<a href="edit_customer.php?customer_id=<?php echo $customer_id; ?>">Edit</a>
	 		<a href="post.php?delete_customer=<?php echo $customer_id; ?>">Delete</a>
	 	</td>
	</tr>
	
	<?php 
	
	} 

	?>
	
</table>

<?php 

include("footer.php");

?>
