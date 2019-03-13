<?php

include("config.php");
include("header.php");

if(isset($_GET['customer_id'])){
	$customer_id = $_GET['customer_id'];
	
	$query = mysqli_query($db_conn,"SELECT * FROM customers WHERE customer_id = $customer_id");
	
	$row = mysqli_fetch_array($query);
	
	$first_name = $row['first_name'];
	$last_name = $row['last_name'];
	$email = $row['email'];

?>

<h1>Edit Customer</h1>

<form action="post.php" method="post">
	<input type="hidden" name="customer_id" value="<?php echo $customer_id; ?>">
	<label>First Name</label>
	<input type="text" name="first_name" value="<?php echo $first_name; ?>">
	<label>Last Name</label>
	<input type="text" name="last_name" value="<?php echo $last_name; ?>">
	<label>Email</label>
	<input type="email" name="email" value="<?php echo $email; ?>">
	<button type="submit" name="edit_customer">Submit</button>
	<a href="customers.php">Go Back</a>
</form>

<?php 
	
}

include("footer.php");

?>
