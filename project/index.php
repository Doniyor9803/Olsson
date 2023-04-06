<?php 
session_start();
define('Olsson', true);
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
		
	</head>
	<body>
		
		<?php include("../include/nav.php") ?>
		
		
		<section class="section__title">
			<div class="container">
				<div class="row justify__content__center">
					<h2 class="section__titles">PROJECT</h2>
				</div>
			</div>
		</section>
		
		
		<section class="projects">
			<div class="container">
				<div class="row">
				
				<?php 
				
				$sql = "SELECT * FROM `Project`";
				$res = $mysqli -> query($sql);
				
				if ($res -> num_rows>0) {
					while($resArticle = $res -> fetch_assoc()) {
				
								
				?>
				
					<div class="col-12 projects__item">
						<img class="projects__img" src="../uploads_images/<?= $resArticle['image'] ?>"/>
						<div class="projects__absolute">
							<h2 class="projects__title"><?= $resArticle['title'] ?></h2>
							<a class="projects__btn" href="../project/post/index.php?id=<?= $resArticle['id'] ?>">EXPLORE</a>
						</div>
					</div>
					
				<?php 
				
					}}
				
				?>	
					
					
				</div>
			</div>
		</section>
		
		
	
		<?php include("../include/connect.php") ?>
		
		
		<?php include("../include/footer.php") ?>
		
		
		
		
	</body>
</html>