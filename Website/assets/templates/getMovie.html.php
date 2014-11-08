<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-8 pull-right">
			<h2 class="mTitle"><?php echo $mname; echo '<small class="pull-right">&nbsp;<i class="fa fa-star"></i> ' . $mrating . '</small>';  if ($mrotten < 60 && $mrotten > 0) { echo '<small class="pull-right"><img class="rotten" src="assets/images/splat.png">' . $mrotten . '%</small>'; } else if($mrotten == 0) { } else { echo '<small class="pull-right"><img class="fresh" src="assets/images/tomato.png">' . $mrotten . '%</small>'; } ?></h2>
		</div>	
		<div class="movieInfo">
			<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="thumbnail">
					<?php echo '<img src="' . $mimage .'" class="img-responsive">'; ?>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-8">
				<p class="mDesc pull-md-right">
					<?php echo $mdesc; ?>
				</p>
				<?php
				if ($hasShows == true) 
				{
					echo '<h3>Sýningartímar:</h3>'
				?>
				<table class="table">
					<thead>
						<tr>
							<?php foreach ($showTimes as $show): ?>
							<th>
								<?php echo $show['Date']; ?>
							</th>
						<?php endforeach; ?>
					</tr>
					</thead>
					<tbody>
						<tr>
							<?php foreach ($showTimes as $show): ?>
							<th>
								<?php echo $show['Time']; ?>
							</th>
						<?php endforeach; ?>
						</tr>
					</tbody>
				</table>
				<?php
				}
				else 
				{
				}
				?>
				<button type="button" class="btn btn-default btn-youtube" data-toggle="modal" data-target="#trailer-modal"><i class="fa fa-youtube-play"> Sýnishorn</i></button> 
			</div>
		</div>
	</div>
</div>