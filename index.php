<?php
session_start();
define('Olsson', true);
include("include/db_connect.php");
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Olson</title>

	<link href="css/reset.css" rel="stylesheet" />
	<link href="css/setka.css" rel="stylesheet" />
	<link href="css/main.css" rel="stylesheet" />

</head>

<body>

	<?php include("include/nav.php") ?>



	<section class="grid">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<img class="grid__img" src="img/Grid.svg" />
				</div>
			</div>
		</div>
	</section>


	<header class="header">
		<div class="container">

			<div class="header__absolut">

				<div class="row">
					<div class="col-auto">
						<img class="header__img" src="img/icon-women.png" />
					</div>
					<div class="col-auto">
						<h2 class="header__title">Lynn Olsson</h2>
						<h3 class="header__subtitle">Visual ARt Director</h3>
					</div>
				</div>

				<div class="row">
					<div class="col-11">
						<p class="header__text">Creating captivating video and motion designs that tell your brand's
							story and are sure to grab the attention of your audience.</p>
					</div>
				</div>

			</div>

		</div>
	</header>


	<section class="clients">
		<div class="container">
			<div class="row justify__content__between align__items__center">

				<div class="col-auto clients__item ">
					<h2 class="clients__title">Clients I’Ve worked with</h2>
				</div>

				<div class="col-auto clients__item">
					<img class="clients__img" src="img/clients/1.svg" alt="" />
				</div>

				<div class="col-auto clients__item">
					<img class="clients__img" src="img/clients/2.svg" alt="" />
				</div>

				<div class="col-auto clients__item">
					<img class="clients__img" src="img/clients/3.svg" alt="" />
				</div>

				<div class="col-auto clients__item">
					<img class="clients__img" src="img/clients/4.svg" alt="" />
				</div>
				<div class="col-auto clients__item">
					<img class="clients__img" src="img/clients/5.svg" alt="" />
				</div>
				<div class="col-auto clients__item">
					<img class="clients__img" src="img/clients/6.svg" alt="" />
				</div>

			</div>
		</div>
	</section>


	<section class="digital">
		<div class="container">
			<div class="row">
				<div class="col-6">
					<h2 class="title">Digital<br>Services</h2>
					<a class="digital__link" href="#">Explore Services</a>
				</div>
				<div class="col-6">

					<div class="digital__block">
						<h3 class="digital__title">Video Creation</h3>
						<p class="digital__text">Quis risus sed vulputate odio ut. Semper quis lectus nulla at volutpat
							diam. Sagittis orci a scelerisque purus semper eget duis at. </p>
					</div>

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

					<div class="digital__block">
						<h3 class="digital__title">Social Media</h3>
						<p class="digital__text">Ac tincidunt vitae semper quis lectus. Commodo elit at imperdiet dui
							accumsan sit. Integer vitae justo eget magna fermentum. </p>
					</div>



				</div>
			</div>
		</div>
	</section>


	<section class="work">
		<div class="container">

			<div class="row justify__content__center">
				<h2 class="title">Selected Work</h2>
			</div>

			<div class="row">

				<div class="col-work">
					<img class="work__img" src="img/work/1.png" />
					<div class="work__position">
						<h3 class="work__title">Cyberpunk</h3>
						<p class="work__txt">Invision Studio</p>
					</div>
				</div>

				<div class="col-work">
					<img class="work__img" src="img/work/2.png" />
					<div class="work__position">
						<h3 class="work__title">Virtual Reality</h3>
						<p class="work__txt">Vision Square</p>
					</div>
				</div>

				<div class="col-work">
					<img class="work__img" src="img/work/3.png" />
					<div class="work__position">
						<h3 class="work__title">Digital Future</h3>
						<p class="work__txt">Motion Agency</p>
					</div>
				</div>

			</div>

		</div>
	</section>



	<section class="say">
		<div class="container">
			<div class="row">
				<h2 class="title">What my<br>Clients say</h2>
			</div>

			<div class="row">

				<div class="col-4 say__item">
					<div class="say__border">
						<img class="say__img" src="img/clients/1.svg" />
						<p class="say__cit">“Porta nibh venenatis cras sed felis eget velit aliquet sagittis.”</p>
						<p class="say__txt">Ac tincidunt vitae semper quis lectus. Commodo elit at imperdiet dui
							accumsan sit. Integer vitae justo eget magna fermentum. </p>
						<h2 class="say__title">Emily Smith</h2>
						<h3 class="say__subtitle">Super Food</h3>
					</div>
				</div>

				<div class="col-4 say__item">
					<div class="say__border">
						<img class="say__img" src="img/clients/2.svg" />
						<p class="say__cit">“Velit sed ullamcorper morbi tincidunt”</p>
						<p class="say__txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Congue nisi vitae suscipit tellus mauris
							a diam maecenas sed. Placerat duis ultricies lacus sed turpis tincidunt.</p>
						<h2 class="say__title">Liam Johnson</h2>
						<h3 class="say__subtitle">Invision Studio</h3>
					</div>
				</div>

				<div class="col-4 say__item">
					<div class="say__border">
						<img class="say__img" src="img/clients/3.svg" />
						<p class="say__cit">“Porta nibh venenatis cras sed felis eget velit aliquet sagittis.”</p>
						<p class="say__txt">Ac tincidunt vitae semper quis lectus. Commodo elit at imperdiet dui
							accumsan sit. Integer vitae justo eget magna fermentum.</p>
						<h2 class="say__title">Olivia Williams</h2>
						<h3 class="say__subtitle">Vision Square</h3>
					</div>
				</div>

				<div class="col-4 say__item">
					<div class="say__border">
						<img class="say__img" src="img/clients/4.svg" />
						<p class="say__cit">“Porta nibh venenatis cras sed felis eget velit aliquet sagittis.”</p>
						<p class="say__txt">Congue nisi vitae suscipit tellus mauris a diam maecenas sed. Placerat duis
							ultricies lacus sed turpis tincidunt. Eget gravida cum sociis natoque penatibus et. Sapien
							eget mi proin sed. Quam id leo in vitae turpis massa sed elementum.
							<br>
							Scelerisque eleifend donec pretium vulputate sapien. Sodales ut etiam sit amet nisl purus in
							mollis.
						</p>
						<h2 class="say__title">Noah Brown</h2>
						<h3 class="say__subtitle">Motion Studio</h3>
					</div>
				</div>

				<div class="col-4 say__item">
					<div class="say__border">
						<img class="say__img" src="img/clients/5.svg" />
						<p class="say__cit">“Sodales ut etiam sit amet nisl purus”</p>
						<p class="say__txt">Eget gravida cum sociis natoque penatibus et. Sapien eget mi proin sed. Quam
							id leo in vitae turpis massa sed elementum. Scelerisque eleifend donec pretium vulputate
							sapien. Sodales ut etiam sit amet nisl purus in mollis.
							<br>
							Suspendisse faucibus interdum posuere lorem ipsum. Convallis posuere morbi leo urna molestie
							at elementum. Ut tellus elementum sagittis vitae.
						</p>
						<h2 class="say__title">Ava Jones</h2>
						<h3 class="say__subtitle">Video Creatives</h3>
					</div>
				</div>

				<div class="col-4 say__item">
					<div class="say__border">
						<img class="say__img" src="img/clients/6.svg" />
						<p class="say__cit">“Porta nibh venenatis cras sed felis eget velit aliquet sagittis.”</p>
						<p class="say__txt">Suspendisse faucibus interdum posuere lorem ipsum. Convallis posuere morbi
							leo urna molestie at elementum. Ut tellus elementum sagittis vitae. Ac tincidunt vitae
							semper quis lectus. Commodo elit at imperdiet dui accumsan sit. Integer vitae justo eget
							magna fermentum. </p>
						<h2 class="say__title">Isabella Davis</h2>
						<h3 class="say__subtitle">Invision Square</h3>
					</div>
				</div>

			</div>

		</div>
	</section>

	<?php include("include/connect.php") ?>

	<?php include("include/footer.php") ?>

	

</body>

</html>