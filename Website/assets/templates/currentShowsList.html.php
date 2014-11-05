<?php 

require_once 'app/init.php';
require_once 'app/loadCurrentShows.php';

?>
<div class="container">
	<div class="row">
		<?php foreach ($shows as $id => $show): ?>
		
		<div class="col-xs-12 col-sm-6 col-md-3">
			<div class="thumbnail">
				<img src="<?php echo $show->Image ?>" alt="#">
				<div class="caption">
					<h3><?php echo $show->MovieName; ?></h3>
					<p><?php echo $show->discription ?></p>
					<p><a href="movie.php?id=<?php echo $id ?>" class="btn btn-primary" role="button">button</a></p>
				</div>
			</div>
		</div>

		<?php endforeach ?>
	</div> <!-- row endar -->
</div> <!-- container endar -->