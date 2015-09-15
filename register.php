<?php
	$username = isset($_REQUEST['username']) ? $_REQUEST['username'] : '';
	$password = isset($_REQUEST['password']) ? $_REQUEST['password'] : '';
	$confirm = isset($_REQUEST['confirm']) ? $_REQUEST['confirm'] : '';
	$email = isset($_REQUEST['email']) ? $_REQUEST['email'] : '';

	//TODO: Define validation rules and set validation error messages in this array
	$validation_errors = [];

	if ($username && $password && $confirm && $email) {

		//TODO: Check validity of form values on the server side
		$is_valid = false;

		if ($is_valid)	{

			//TODO: Record the volunteer's details

			header('Location: registration-thanks.html');
		}
	}

?>
<?php include('header.php'); ?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<div>
		<input type="text" name="username" placeholder="Pick a username" required="required" class="form-control" value="<?= $username ?>"/>
	</div>
	<div>
		<input type="password" name="password" placeholder="Enter a password" required="required" class="form-control"/>
	</div>
	<div>
		<input type="password" name="confirm" placeholder="Confirm password" required="required" class="form-control"/>
	</div>
	<div>
		<input type="email" name="email" placeholder="Enter your email address" required="required" class="form-control" value="<?= $email ?>"/>
	</div>
	<div>
		<input type="submit" value="Register" class="btn btn-primary"/>
	</div>
</form>

<?php include('footer.php'); ?>