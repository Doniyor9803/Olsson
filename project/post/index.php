<?php
session_start();
define('Olsson', true);
include("../../include/db_connect.php");
$id = $_GET["id"];
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<title></title>
	<meta name="description" content="">

	<link href="../../css/reset.css" rel="stylesheet" />
	<link href="../../css/setka.css" rel="stylesheet" />
	<link href="../../css/main.css" rel="stylesheet" />

</head>

<body>

	<?php include("../../include/nav.php") ?>

	<?php

	$sql = "SELECT * FROM `project` WHERE `id` = '$id'";
	$res = $mysqli->query($sql);

	if ($res->num_rows === 1) {

		$resPost = $res->fetch_assoc()

			?>
		<section class="article">
			<div class="container">
				<div class="row justify__content__center">


					<div class="row article__row">

						<div class="col-auto">
							<p class="article__titledt">CLIENT</p>
							<p class="article__subtitledt">
								<?= $resPost['client'] ?>
							</p>
						</div>
						<div class="col-auto">
							<p class="article__titledt">TIMELINE</p>
							<p class="article__subtitledt">
								<?= $resPost['timeline'] ?>
							</p>
						</div>
						<div class="col-auto">
							<p class="article__titledt">SERVICES</p>
							<data class="article__subtitledt">
								<?= $resPost['services'] ?>
							</data>
						</div>

						<div class="col-auto">
							<p class="article__titledt">WEBSAIT</p>
							<p class="article__subtitledt">
								<?= $resPost['websait'] ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="projects">
			<div class="container">
				<div class="row">

					<div class="col-12 projects__item">
						<img class="projects__img" src="../../img/work/1.png" />
						<div class="projects__absolute">
							<h2 class="projects__title">
								<?= $resPost['title'] ?>
							</h2>
						</div>
					</div>

				</div>
			</div>
		</section>

		<header class="post__header">
			<div class="container">
				<div class="">
					<div class="row">
						<div class="col-auto">
							<img class="header__img" src="../../img/icon-women.png" />
						</div>
						<div class="col-auto">
							<h2 class="header__title">
								<?= $resPost['icon_title'] ?>
							</h2>
							<h3 class="header__subtitle">
								<?= $resPost['icon_subtitle'] ?>
							</h3>
						</div>
					</div>

					<div class="row">
						<div class="col-12">
							<p class="header__text">
								<?= $resPost['icon_txt'] ?>
							</p>
						</div>
					</div>

				</div>

			</div>
		</header>

	<?php } ?>

	<section class="digital">
		<div class="container">
			<div class="row">
				<div class="col-6">
					<h2 class="title">OUR<br>SOLUTION</h2>
				</div>
				<div class="col-6">

					<?php
					$sql = "SELECT * FROM `solution` WHERE `project_id` = '$id' ";
					$res = $mysqli->query($sql);

					if ($res->num_rows > 0) {
						while ($resArticle = $res->fetch_assoc()) {


							?>

							<div class="digital__block">
								<h3 class="digital__title">
									<?php $resArticle['title'] ?>
								</h3>
								<p class="digital__text">
									<?php $resArticle['text'] ?>
								</p>
							</div>

						<?php }
					} ?>
					<div class="digital__block">
						<h3 class="digital__title">Motion Design</h3>
						<p class="digital__text">Ac tincidunt vitae semper quis lectus. Commodo elit at imperdiet dui
							accumsan sit. Integer vitae justo eget magna fermentum. </p>
					</div>

					<div class="digital__block">
						<h3 class="digital__title">Art Direction</h3>
						<p class="digital__text">Dolor magna eget est lorem ipsum dolor sit amet consectetur. Bibendum
							est ultricies integer quis auctor elit sed. Odio morbi quis commodo odio aenean sed.</p>
					</div>


				</div>
			</div>
		</div>
	</section>

	<section class="post__gallary">
		<div class="container">
			<div class="row">
				<?php
				$sql = "SELECT * FROM `gallary_project` WHERE `project_id` = '$id' ";
				$res = $mysqli->query($sql);

				if ($res->num_rows > 0) {
					while ($resArticle = $res->fetch_assoc()) {


						?>

						<div class="col-12">
							<img class="post__gallary__img" src="../../uploads_images/<?= $resPost['image'] ?>" />
						</div>

					<?php }
				} ?>
				
			</div>
		</div>
	</section>




	<?php include("../../include/connect.php") ?>


	<?php include("../../include/footer.php") ?>




</body>

</html>