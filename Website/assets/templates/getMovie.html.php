			<h2 class="mTitle"><?php echo $mname; ?></h2>
			<div class="row">
				<div class="movieInfo">
					<div class="col-xs-12 col-sm-6 col-md-4">
							<div class="mImg">
								<?php echo '<img src="assets/images/' . $mimage .'">'; ?>
							</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-8">
						<button type="button" class="btn btn-default btn-youtube" data-toggle="modal" data-target="#trailer-modal"><i class="fa fa-youtube-play"> Sýnishorn</i></button><br>
						<label>Imdb: <span><?php echo $mrating?></span></label><br>
						<label>Rotten Tomatoes:</label>
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