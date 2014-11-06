
<h2 class="mTitle"><?php echo $mname; ?></h2>
<div class="row">
	<div class="movieInfo">
		<div class="col-xs-12 col-sm-6 col-md-4">
				<div class="thumbnail">
					<?php echo '<img src="' . $mimage .'" class="img-responsive">'; ?>

			<h2 class="mTitle"><?php echo $mname; ?></h2>
			<div class="row">
				<div class="movieInfo">
					<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="mImg">
								<?php echo '<img src="' . $mimage .'">'; ?>
							</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-8">
						<button type="button" class="btn btn-default btn-youtube" data-toggle="modal" data-target="#trailer-modal"><i class="fa fa-youtube-play"> Sýnishorn</i></button><br>
						<label>Imdb: <span><?php echo $mrating?></span></label><br>
						<label>Rotten Tomatoes:<?php if ($mrotten < 60 && $mrotten > 0) { echo '<img class="rotten" src="assets/images/splat.png"><span>' . $mrotten . '%</span>'; } else if($mrotten == 0) { } else { echo '<img class="fresh" src="assets/images/tomato.png"><span>' . $mrotten . '%</span>'; }?></label>
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
						else {

						}
						?>
					</div>
				</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-8">
			<button type="button" class="btn btn-default btn-youtube" data-toggle="modal" data-target="#trailer-modal"><i class="fa fa-youtube-play"> Sýnishorn</i></button><br>
			<label>Imdb: <span><?php echo $mrating?></span></label><br>
			<label>Rotten Tomatoes:<?php if ($mrotten < 60) { echo '<img class="rotten" src="assets/images/splat.png"><span>' . $mrotten . '%</span>'; } else { echo '<img class="fresh" src="assets/images/tomato.png"><span>' . $mrotten . '%</span>'; }?></label>
			<p class="mDesc pull-md-right">
				<?php echo $mdesc; ?>
			</p>
			<h3>Sýningartímar:</h3>
			<table id="miyazaki" class="table">
				<thead>
					<tr>
						<?php
						foreach ($date as $fdate) {
							echo '<th>' . $fdate[0];
						}
						?>
					</tr>
				</thead>
				<tbody>
					<tr>
						<?php
						foreach ($time as $ftime) {
							echo '<td>' . $ftime[0] . '</td>';
						}
						?>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
