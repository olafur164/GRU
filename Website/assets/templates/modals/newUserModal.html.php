		<!-- new user modal -->
		<div class="modal fade" id="newUser-modal" tabindex="-1" role="dialog" aria-labelledby="newUser-modalLabel" ariahidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title" id="newUser-modalLabel">Nýskrá</h4>
					</div>
					<div class="modal-body">
						<form role="form">

							<!-- Name -->
							<div class="form-group">
								<label for="newUserName">Nafn</label>
								<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-user"></i></div>
									<input name="newUserName" type="text" class="form-control" id="newUserName" placeholder="Nafnið þitt..." required>
								</div>
							</div>

							<!-- Email -->
							<div class="form-group">
								<label for="newUserEmailAddress">Netfang</label>
								<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-at"></i></div>
									<input name="newUserEmail" type="email" class="form-control" id="newUserEmailAddress" placeholder="Netfangið þitt..." required>
								</div>
							</div>

							<!-- Phone number -->
							<div class="form-group">
								<label for="newUserPhoneNumber">Símanúmer</label>
								<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-phone"></i></div>
									<input name="newUserPhone" type="tel" class="form-control" id="newUserPhoneNumber" placeholder="Símanúmerið þitt..." required>
								</div>
							</div>

							<!-- Birthday -->
							<div class="form-group">
								<label for="newUserBirthday">Afmælisdagur</label>
								<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-birthday-cake"></i></div>
									<input name="newUserBirthday" type="date" class="form-control" id="newUserBirthday" placeholder="Afmælisdagurinn þinn..." required>
								</div>
							</div>

							<!-- zipcode -->
							<div class="form-group">
								<label for="newUserZipCode">Póstnúmer</label>
								<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-lock"></i></div>
									<input name="newUserZipCode" type="text" class="form-control" id="newUserZipCode" placeholder="Póstnúmerið þitt..." max="3" min="3" required>
								</div>
							</div>

							<!-- Password -->
							<div class="form-group">
								<label for="newUserPassword">Lykilorð</label>
								<div class="input-group">
									<div class="input-group-addon"><i class="fa fa-lock"></i></div>
									<input name="newUserPassword" type="password" class="form-control" id="newUserPassword" placeholder="Lykilorðið þitt..." required>
								</div>
							</div>

							<!-- Gender -->
							<div class="radio">
								<label>
									<input type="radio" name="newUserGender" id="newUserGenderMale" value="male">
									Karl
								</label>
							</div>

							<div class="radio">
								<label>
									<input type="radio" name="newUserGender" id="newUserGenderFemale" value="female">
									Kona
								</label>
							</div>



							<button type="submit" class="btn btn-default pull-left">Nýskrá</button>

							<div class="clearfix"></div>
						</form>
					</div>

				</div>
			</div>

		</div>