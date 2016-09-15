<!DOCTYPE html>
<html>
<head>
	<title>Purple Jug - Tradition and Toys | Buy Handmade Wooden Toys | Traditional Toys | Toys from the Village Artisans | Thanjavur Dancing Dolls | Andhra Couple | Quirky Modern Toys with a Traditional Touch</title>
	<link rel="shortcut icon" href="/purplejug/images/icon/favicon.ico" />

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link rel='stylesheet' type='text/css' href="https://fonts.googleapis.com/css?family=Lato">
	<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Pacifico'>
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="styles/purplejug-styles.css">
	<style>
		body {font-family: "Lato", sans-serif}
		.mySlides {display: none}
	</style>
</head>
<body>
	<script src="scripts/purplejugscript.js">
	</script>

	<?php
		session_start();
		require_once("GetMenu.php");
		$menu = new Menu();

		echo $menu->getMenu();
	?>

	<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px">
		<h2 class="w3-wide">Tanjore Dancing Dolls</h2>
		<a class="w3-btn w3-indigo" href="products.php">Order Now!</a>
		<p class="w3-justify">
			Tanjore Dancing Dolls or popularly referred to as Thanjavur Thalaiaatti Bommai in Tamil is a part of history that provides a connection to the kingdom of Thanjavur. These dolls are known for their unique swaying movements and shaking heads that can enchant any onlooker.<br>They are made with cooked dough of paper mache, tapioca flour and plaster of Paris. The doll has four parts that are balanced on one another through a delicate yet sturdy metal wire. The doll highlights that it is just not pretty on the outside but also employs the science of pendulum behind it. It requires great finesse and expertise to create a piece of art that has the power to transform the aesthetics of any place. It would definitely bring out the child in each one of us as it moves in the slight breeze of wind.
		</p>
	</div>

	<div class="w3-content" style="max-width:50%">
		<img class="mySlides" src="/purplejug/images/tanjore/tanjore1.jpg" style="width:100%">
		<img class="mySlides" src="/purplejug/images/tanjore/tanjore2.jpg" style="width:100%">
		<img class="mySlides" src="/purplejug/images/tanjore/tanjore3.jpg" style="width:100%">
		<img class="mySlides" src="/purplejug/images/tanjore/tanjore4.jpg" style="width:100%">
	</div>

	<div class="w3-center">
		<div class="w3-section">
		<button class="w3-btn" onclick="plusDivs(-1)">&#10094; Prev</button>
		<button class="w3-btn" onclick="plusDivs(1)">Next &#10095;</button>
	</div>
		<button class="w3-btn demo" onclick="currentDiv(1)">1</button>
		<button class="w3-btn demo" onclick="currentDiv(2)">2</button>
		<button class="w3-btn demo" onclick="currentDiv(3)">3</button>
		<button class="w3-btn demo" onclick="currentDiv(4)">4</button>
	</div>

	<script>
		var slideIndex = 1;
		showDivs(slideIndex);
	</script>
	</div><br>

	<?php
		echo $menu->getFooter();
	?>
</body>
</html>