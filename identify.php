<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="description" content="Identify Page" />
	<meta name="keywords" content="Identify" />
	<meta name="author" content="Frankie Ling Tai Yaw" />
	<link rel="stylesheet" type="text/css" href="Style/style.css">
	<link rel="icon" type="image/x-icon" href="images/Logo_favicon.png">
	<link
		href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
		rel="stylesheet">
	<title>Identify</title>
</head>

<body>
	<!--Nav Bar-->
    <header class="header">
	<?php include 'menu.php';?>
    </header>

	<article>
		<h1>Identify Your Plant With a Photo</h1>
		<section class="upload">
			<h2>Let's Join the Exploration of Plants in GAIA</h2>
			<section class="description">
				<h3>Interested in exploring world of endangered plants? Gaia's identify tool can help you to identify
					the name of endangered plants by simply uploading a photo! Use the feature below to expand your
					understanding towards world endangered plants.</h3>
			</section>
			<aside class="uploadimg">
				<input type="file" accept=".jpg,.jpeg,.png,.svg,.webp,.tiff" id="file_upload" />
				<p>
					<a href="#result"><img src="Images/add_file.webp" alt="Add Image" id="add_file" /></a>
					<label for="file_upload" id="label_upload">Upload your photo to identify</label>
				</p>
			</aside>
			<p><a id="result" href="#show_popup">Show result</a></p>
			<a id="show_popup" href="#" class="popup"></a>
			<section class="popup">
				<h2>Plant Information</h2>
				<figure id="example">
					<img src="Images/Confertus.jpeg" alt="Dipterocarpus Confertus" />
					<figcaption>Dipterocarpus Confertus</figcaption>
				</figure>
				<dl class="description_popup">
					<dt>Scientific name</dt>
					<dd><em>Diperocarpaceae Dipterocarpus confertus</em></dd>
					<dt>Common name</dt>
					<dd>Keruing Kobis</dd>
					<dt>How to take care</dt>
					<dd>prefer:
						<ul>
							<li>ferralitic soil</li>
							<li>friable soil that is sandy</li>
						</ul>
					</dd>
					<dt>Preferred environment</dt>
					<dd>mixed depterocarp forests</dd>
					<dt>Main habitat</dt>
					<dd>Borneo</dd>
				</dl>
			</section>
		</section>
	</article>
	<footer>
		<hr />
		<p>&copy; GAIA website group 2023, credit to Swinburne University of Technology Sarawak</p>
		<section class="acknowledgement">
			<h2>ACKNOWLEDGEMENTS</h2>
			<p>Image & information credit to <a
					href="https://www.biodiversity4all.org/taxa/889889-Dipterocarpus-confertus">BioDiversity4All</a></p>
			<p>Extra information credit to <a
					href="https://uses.plantnet-project.org/en/Dipterocarpus_confertus_(PROSEA)">PlantUse English</a>
			</p>
		</section>
	</footer>
</body>

</html>