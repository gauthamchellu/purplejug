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
		<h2 class="w3-wide">Trendy Collection</h2>
		<a class="w3-btn w3-indigo" href="products.php">Order Now!</a>
		<p class="w3-justify">
			Inspired collection has been specially designed and conceptualised by PurpleJug. Anything and everything can inspire art and this collection is an ode to that. Traditional art need not always be traditional; it could be made different with a contemporary twist.<br>This idea is explored through 3 lines of products:
		</p>
		<div class="w3-content w3-center" style="max-width:50%">
			<ul class="w3-ul">
				<li>International</li>
				<li>Cartoons</li>
				<li>People</li>
			</ul>
		</div>
	</div>

	<div class="w3-content" style="max-width:50%">
		<img class="mySlides" src="/purplejug/images/trendy/trendy1.jpg" style="width:100%">
		<img class="mySlides" src="/purplejug/images/trendy/trendy2.jpg" style="width:100%">
		<img class="mySlides" src="/purplejug/images/trendy/trendy3.jpg" style="width:100%">
	</div>

	<div class="w3-center">
		<div class="w3-section">
		<button class="w3-btn" onclick="plusDivs(-1)">&#10094; Prev</button>
		<button class="w3-btn" onclick="plusDivs(1)">Next &#10095;</button>
	</div>
		<button class="w3-btn demo" onclick="currentDiv(1)">1</button>
		<button class="w3-btn demo" onclick="currentDiv(2)">2</button>
		<button class="w3-btn demo" onclick="currentDiv(3)">3</button>
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