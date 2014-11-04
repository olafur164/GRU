		<!-- login modal -->
		<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" ariahidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title" id="login-modalLabel">Innskráning</h4>
					</div>
					<div class="modal-body">
						<form role="form">

							<!-- Email -->
							<div class="form-group">
								<label for="loginEmailAddress">Netfang</label>
								<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-at"></i></div>
									<input name="loginEmail" type="email" class="form-control" id="loginEmailAddress" placeholder="Netfangið þitt..." required>
								</div>
							</div>

							<!-- Password -->
							<div class="form-group">
								<label for="loginPassword">Lykilorð</label>
								<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-lock"></i></div>
									<input name="loginPassword" type="password" class="form-control" id="loginPassword" placeholder="Lykilorðið þitt..." required>
								</div>
							</div>

							<!-- Remember Me -->
							<div class="checkbox">
								<label>
									<input name="loginRemember" type="checkbox"> Muna mig
								</label>
							</div>

							<!-- Submit -->
							<button type="submit" class="btn btn-default pull-left">Skrá inn</button>
							<a href="#newUser-modal" class="btn btn-default pull-right" data-dismiss="modal" data-toggle="modal" data-target="#newUser-modal">Nýskrá</a>

							<div class="clearfix"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- login modal ends -->