<?php
	session_start();
	if(!isset($_SESSION['email'])||!isset($_SESSION['password'])){
        header("Location: login.php", true, 301);
    }
?>

<!DOCTYPE html>
<html lang="en" class="index-logo">

<head>
	<meta charset="utf-8" />
	<meta name="description" content="Index page" />
	<meta name="keywords" content="Home Page" />
	<meta name="author" content="Muhammad Ashrull" />
	<title>Home page</title>
	<link rel="stylesheet" type="text/css" href="Style/style.css">
	<link rel="icon" type="image/x-icon" href="images/Logo_favicon.png">
	<link
		href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
		rel="stylesheet">
</head>

<body class="index-logo">
	<?php include 'menu_index.php';?>
	<div class="homepage-bg"></div>
	<div class="homepage-caption">
		<span class="caption-border">BE THE VOICE FOR THE VOICELESS</span>
	</div>
	<article>
		<div class="homepage-obj-contena">
			<div class="homepage-obj">
				<h1 class="homepage-obj-info">OBJECTIVE OF THIS PROJECT</h1>
				<p class="homepage-obj-info">The objective of this program is to spread awareness amongst people on
					endangered plants. This project happens in Malaysia as Malaysia is one of the notable biodiversity
					hotspots in the world. By using an approach based on citizen science, it has profoundly transformed
					the way we see the biodiversity monitoring </p>
			</div>

			<!--Flip card-->
			<h2 class="h2-index">OVERVIEW</h2>

			<div class="flip-card-contenna">
				<div class="flipcard-contain">
					<a href="explorer.html">
						<div class="flip-card">
							<div class="flip-card-inner">
								<div class="flip-card-front">
									<img src="Images/Dipterocarpaceae/Dipterocarpaceae.webp" alt="Family">
								</div>
								<div class="flip-card-back">
									<h1>FAMILY</h1>
									<p>DIPTEROCARPACEAE</p>
									<p>LAURACEAE</p>
									<p>BURSERACEAE</p>
								</div>
							</div>
						</div>
					</a>
				</div>

				<div class="flipcard-contain">
					<a href="genera.html">
						<div class="flip-card">
							<div class="flip-card-inner">
								<div class="flip-card-front">
									<img src="Images/Dipterocarpaceae/Dipterocarpus/dipterocarpus.jpeg" alt="Genera">
								</div>
								<div class="flip-card-back">
									<h1>GENERA: DIPTEROCARPACEAE</h1>
									<p>DIPTEROCARPUS</p>
									<p>HOPEA</p>
									<p>VATICA</p>
								</div>
							</div>
						</div>
					</a>
				</div>

				<div class="flipcard-contain">
					<a href="species.html">
						<div class="flip-card">
							<div class="flip-card-inner">
								<div class="flip-card-front">
									<img src="Images/Dipterocarpaceae/Dipterocarpus/Caudiferus.jpg" alt="Species">
								</div>
								<div class="flip-card-back">
									<h1>SPECIES: DIPTEROCARPUS</h1>
									<p>DIPTEROCARPUS APPLANATUS</p>
									<p>DIPTEROCARPUS CAUDIFERUS</p>
									<p>DIPTEROCARPUS CONFERTUS</p>
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>

	</article>
	<footer id="index-footer">
		<hr />
		<?php include 'footer.php';?>
		<p>YOUTUBE PRESENTATION <a href="https://youtu.be/OJOLVAD3K04">HERE</a></p>
		<section class="acknowledgement">
			<h2>ACKNOWLEDGEMENTS</h2>
			<p>Image & information credit to <a href="https://www.theearthissue.com/news/new-yorks-extinction"
					target="_blank">the earth issue</a></p>
			<p>Image & information credit to <a
				href="https://www.biodiversity4all.org/taxa/889889-Dipterocarpus-confertus">BioDiversity4All</a></p>
			<p>Image & information credit to <a href="https://en.wikipedia.org">Wikipedia</a></p>
		</section>
	</footer>
</body>

</html>