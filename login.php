<?php
	if (isset($_REQUEST['username']) && isset($_REQUEST['password'])) {
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		//TODO: Check login and then set the $is_valid variable
		$is_valid = true;
		$user_type = 'volunteer';

		if ($is_valid)	{
			if ('volunteer'==$user_type) {
				header('Location: volunteer-dash.php');
			} 
			else {
				header('Location: nonprofit-dash.php');
			}
		}
	}
?>
<?php include('header.php'); ?>

<h1>Login</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<div>
		<input type="text" name="username" placeholder="Username" class="form-control"/>
	</div>
	<div>
		<input type="password" name="password" placeholder="Password" class="form-control"/>
	</div>
	<div>
		<input type="submit" value="Login" class="btn btn-primary"/>
		<a href="register.php" class="btn btn-default">Register</a>
	</div>
</form>

<p>
	<a href="forgot.php">Forgot password?</a>
</p>

<?php include('footer.php'); ?>