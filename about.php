<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="styles/slider.css">
<link rel="stylesheet" href="styles/about.css">
	<title>Никса Дизајн</title>
</head>
<body>
<?php
include('header.php');
 ?>
	<div class="container">
		<div class="top-content">
			<div class="p-holder">
			<h1>Никса Дизајн</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<h1>Проекти</h1>
			</div>
			<div class="slider">	
				<figure>
					<div class="slide">
						<img src="media/images/slider-project-five.jpg">
					</div>

					<div class="slide">
						<img src="media/images/slider-project-four.jpg">
					</div>

					<div class="slide">
						<img src="media/images/slider-project-three.jpg">
					</div>			

					<div class="slide">
						<img src="media/images/slider-project-two.jpg">
					</div>
					<div class="slide">
						<img src="media/images/slider-project-one.jpg">
					</div>
				</figure>
			</div>
			<div class="contact-hold">
				<h1>Контакт</h1>
				<div class="contact-content">
					<h2>Име</h2><input type="text">
					<h2>Презиме</h2><input type="text">
					<h2>Е-маил</h2><input type="email"><br>
					<h2>Порака</h2><textarea></textarea><br>
					<button type="submit">ИСПРАТИ</button>
				</div>
			</div>
			<div class="mapa">
				<h1>Локација</h1>
			</div>
			<div class="map-hold"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2966.5027357272597!2d21.44846391588504!3d41.96801477921529!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x135415e16d5d5915%3A0x57d177061fd67185!2s134%2C+Skopje+1000!5e0!3m2!1sen!2smk!4v1496219158402" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
<?php include('footer.php');?>
	</div>
</body>
</html>