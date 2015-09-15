<?php
$positions = [];

$mock1 = ['title' => 'Sr Dev', 'description' => 'To develop software', 'date-posted'=>'2-SEP-2015'];
$positions[] = $mock1;

$mock2 = ['title' => 'DBA', 'description' => 'Somebody to maintain our DB', 'date-posted'=>'15-SEP-2015'];
$positions[] = $mock2;
?>
<?php include('header.php'); ?>
<?php include('navbar.php'); ?>

<h2>Recent Volunteer Positions</h2>

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