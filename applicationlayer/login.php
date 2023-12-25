<?php include('../datalayer/server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background-image="https://lh6.googleusercontent.com/proxy/lG91O7Ux34WDtpLFsBaEugWPvXBekxIdWHYTBk03nqsro_0YJNfvfvh4N1qLEE0yso1bNv8QJ4qYuQRoDwEbI6uG7x4FzGXH3DzdapUadfJ4rRhsrwaKZNEaiZVD">
	<div class="header">
	<h2>Patient Login</h2>
</div>
<form method="post" action="login.php">

	<?php include ('../datalayer/errors.php')?>

	<div class="input-group">
		<label>User ID</label>
		<input type="text" name="UserID">

	</div>




	<div class="input-group">
		<label>Password</label>
		<input type="Password" name="password">



	<div class="input-group">
		<button type="submit" name="Login" class="btn"> Login</button>
	</div>

	<p>
		Not a member? <a href="1st.php">Sign Up </a>
	</p>
	




</form>

</body>
</html>