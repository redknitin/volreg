<?php


$positions = [];

$mock1 = ['title' => 'Sr Dev', 'description' => 'To develop software', 'date-posted'=>'2-SEP-2015'];
$positions[] = $mock1;

$mock2 = ['title' => 'DBA', 'description' => 'Somebody to maintain our DB', 'date-posted'=>'15-SEP-2015'];
$positions[] = $mock2;
?>
<?php include('header.php'); ?>
<?php include('navbar.php'); ?>

<h2>Search for Volunteer Positions</h2>

<form id="search-form">
	<input type="text" name="skill" placeholder="Skill" class="form-control"/>
	<div>
		<span>Availability</span>
		<input type="checkbox" name="commitment" value="fulltime"/><label>Full-time<label/>
		<input type="checkbox" name="commitment" value="parttime"/><label>Part-time<label/>
		<input type="checkbox" name="commitment" value="weekends"/><label>Weekends<label/>
	</div>
	<input type="text" name="location" placeholder="Location" class="form-control"/>
	<input type="submit" value="Search" class="btn btn-primary"/>
</form>

<ul class="position-listing">
	<?php foreach($positions as $iter_pos): ?>
		<li>
			<div>
				<span class="position-title"><?= $iter_pos['title'] ?></span>
			</div>
			<div>
				<span class="position-meta"><?= $iter_pos['date-posted'] ?></span>
			</div>
			<div>
				<?= $iter_pos['description'] ?>
			</div>
		</li>
	<?php endforeach; ?>
</ul>


<?php include('footer.php'); ?>