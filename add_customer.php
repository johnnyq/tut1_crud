<?php

include("config.php");
include("header.php");	

?>

<h1>Add Customer</h1>

<form action="post.php" method="post">
	<label>First Name</label>
	<input type="text" name="first_name">
	<label>Last Name</label>
	<input type="text" name="last_name">
	<label>Email</label>
	<input type="email" name="email">
	<button type="submit" name="add_customer">Submit</button>
	<a href="customers.php">Go Back</a>
</form>

<?php 

include("footer.php");

?>
