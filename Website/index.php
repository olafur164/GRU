<?php
require_once 'app/init.php';
require_once 'app/loadEvents.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Radstefna</title>
	<link rel="stylesheet" href="assets/styles/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<div class="jumbotron">
		<div class="container">
			<h1 class="header-title">Forritunarskólinn<br />Hörpunni</h1>
		</div>
	</div>

	<div class="container">
		<form action="reserve.php" method="post" class="order" id="order-form">
			<div class="order-days">
				<table>
					<thead>
						<td>&nbsp;</td>
						<th>Dagsetning</th>
						<th>Viðburður</th>
						<th>Lýsing</th>
						<th>Tími</th>
					</thead>
					<tbody>

					<?php foreach ($events as $id => $event):?>
						<tr>
							<td><input type="checkbox" name="checked[]" required value="<?php echo $id ?>" <?php echo $full[$id]; ?>></td>

							<?php foreach ($event as $singleEvent => $value): ?>
							<td><?php echo $value ?></td>
							<?php endforeach ?>

						</tr>
					<?php endforeach; ?>

					</tbody>
				</table>
				<label for="checked[]" class="error"></label>
			</div>	<!-- order-days -->

			<div class="order-customer">
				<label>
					<h4>Nafn</h4>
					<input type="text" name="name" minLength="3" required placeholder="Nafnið þitt..." autocomplete="off">
				</label>

				<label>
					<h4>Netfang</h4>
					<input type="email" name="email" placeholder="Netfangið þitt..." required autocomplete="off">
				</label>

				<label>
					<h4>Sími</h4>
					<input type="tel" name="tel" maxLength="7" minLength="7" pattern="\d{7}/" required placeholder="Símanúmerið þitt..." autocomplete="off">
				</label>

				<div class="btn btn-confirm">
					<input type="submit" value="Staðfesta skráningu">
				</div>
			</div> <!-- order-customer -->

		</form>
		<form action="change.php" class="order" id="change-form">
			<div class="order-customer">
				<label>
					<h4>Breyta skráningu</h4>
					<input type="email" name="email" placeholder="Netfangið þitt..." autocomplete="off" required>
				</label>
				<div class="btn btn-confirm">
					<input type="submit" value="Breyta skráningu">
				</div>
			</div>
		</form>
	</div> <!-- container -->
	<footer>
		<div class="container">
			<a href="admin/">Stafsmannaaðgangur</a>
		</div>
	</footer>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script src="assets/scripts/jquery.validate.min.js"></script>
<script src="assets/scripts/jquery.fittext.js"></script>
<script src="../assets/scripts/hideShowPassword/hideShowPassword.min.js"></script>
<script src="assets/scripts/main.js"></script>
</body>
</html>
