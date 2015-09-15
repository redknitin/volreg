<?php include('header.php'); ?>
<?php include('navbar.php'); ?>

<form id="profile-form">
	<input type="text" name="skills" class="form-control" placeholder="Skills"/>
	<select name="commitment" class="form-control">
		<option value="">Select your availability</option>
		<option value="">Full-time</option>
		<option value="">Part-time</option>
		<option value="">Weekends</option>
	</select>
	<input type="text" name="location" class="form-control" placeholder="Location"/>
	<input type="submit" value="Save" class="btn btn-primary"/>
	<a href="volunteer-dash.php" class="btn btn-default">Cancel</a>
</form>

<?php include('footer.php'); ?>