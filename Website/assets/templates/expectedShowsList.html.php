<?php 

require_once 'app/init.php';
require_once 'app/loadExpectedShows.php';
?>
<div class="container">
	<div class="row">
		<?php $counter = 0 ?>
		<?php foreach ($expected as $id => $expect): ?>
		<?php 	$counter++; ?>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="thumbnail">
				<a href="movie.php?id=<?php echo $id; ?>"><img src="<?php echo $expect['Image']; ?>" alt="#"></a>
				<div class="caption">
					<h3><?php echo $expect['MovieName'] . '<small class="pull-right">' . $expect['Starts'] . '</small>'; ?></h3>
					<p><?php echo $expect['Descriptions'] ?></p>
					<p><a href="movie.php?id=<?php echo $id ?>" class="btn btn-primary pull-right" role="button">Skoða nánar</a></p>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<?php if($counter % 4 == 0): ?>
			<div class="clearfix visible-md"></div>
		<?php endif; ?>
		<?php if ($counter % 2 == 0): ?>
			<div class="clearfix visible-sm"></div>
		<?php endif ?>
		<?php 	endforeach; ?>
	</div> <!-- row endar -->
</div> <!-- container endar -->