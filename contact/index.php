<?php
session_start();
define('olson', true);
include("../include/db_connect.php");

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Olson</title>

	<link href="../css/reset.css" rel="stylesheet" />
	<link href="../css/setka.css" rel="stylesheet" />
	<link href="../css/main.css" rel="stylesheet" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />


</head>

<body>

	<?php include("../include/nav.php") ?>



	<section class="talk">
		<div class="container">
			<div class="row">
				<div class="col-6">
					<h2 class="title">LET'S<br>TALK</h2>
				</div>
				<div class="col-6">
					<div class="forma">
						<div class="form-at">
							<div class="validate-input-at w-50" data-validate="Обязательное поле">
								<input class="input-at" type="text" name="name-at" placeholder="Name" />
								<span class="focus-input-at"></span>
							</div>
							<div class="validate-input-at w-50" data-validate="Обязательное поле">
								<input class="input-at" type="tel" name="email-at" placeholder="Phone" />
								<span class="focus-input-at"></span>
							</div>
							<div class="validate-input-at" data-validate="Обязательное поле">
								<textarea class="input-at" name="message-at" placeholder="Message"></textarea>
								<span class="focus-input-at"></span>
							</div>

							<input type="hidden" name="subject-at" value="Тема формы">
							<button id="submit-at" class="form-at-btn">Отправить</button>
							<div class="contact__br"></div>
							<input checked="checked" class="input-at" id="checkbox-at" type="checkbox"
								name="checkbox-at"
								onchange="document.getElementById('submit-at').disabled = !this.checked;" />
							<label for="checkbox-at">
								Настоящим подтверждаю, что я ознакомлен и согласен с <a class="contact__police"
									href="police">пользовательским соглашением</a>
							</label>


						</div>
						<div class="result-at"></div>
					</div>
				</div>


			</div>



		</div>
	</section>

	<?php include("../include/connect.php") ?>

	<?php include("../include/footer.php") ?>

	<script src="../js/jquery-3.6.0.min.js"></script>
	<script src="../js/forms.js"></script>
	<script src="../js/jquery.inputmask.js"></script>
	<script>
		$(document).ready(function() {
			$("input[type='tel']").mask("+9(999) 999 999-9999")
		});
	</script>


</body>

</html>