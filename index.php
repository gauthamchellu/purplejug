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

	<!-- Automatic Slideshow Images -->
	<div class="mySlides w3-display-container">
		<img src="/purplejug/images/slideshow/Tanjore_Dancing_Dolls.jpg" style="width:100%">
		<div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
			<h3>Thanjavur Dancing Dolls</h3>
			<p><b>Brighten a dull day with their headshake!</b></p>
		</div>
	</div>
	<div class="mySlides w3-display-container">
		<img src="/purplejug/images/slideshow/Raja_Rani.jpg" style="width:100%">
		<div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
			<h3>Raja Rani</h3>
		</div>
	</div>
	<div class="mySlides w3-display-container">
		<img src="/purplejug/images/slideshow/Alpha_Dolls.jpg" style="width:100%">
		<div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
			<h3>Our Custom Alpha Dolls</h3>
		</div>
	</div>
	<div class="mySlides w3-display-container">
		<img src="/purplejug/images/slideshow/Minion_Heart.jpg" style="width:100%">
		<div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
			<h3>Minion with Heart</h3>
			<p><b>Statutory warning: Owning these dolls may lead to elevated levels of happiness</b></p>
		</div>
	</div>
	<div class="mySlides w3-display-container">
		<img src="/purplejug/images/slideshow/Cute_Boys.jpg" style="width:100%">
		<div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
			<h3>A cute set of boys playing the instruments</h3>
		</div>
	</div>
	<div class="mySlides w3-display-container">
		<img src="/purplejug/images/slideshow/Frame_Doll1.jpg" style="width:100%">
		<div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
			<h3>Frame Dolls</h3>
			<p><b>Ideal gift for couples</b></p>
		</div>
	</div>
	<div class="mySlides w3-display-container">
		<img src="/purplejug/images/slideshow/Frame_Doll2.jpg" style="width:100%">
		<div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
			<h3>Frame Dolls</h3>
			<p><b>Ideal gift for couples</b></p>
		</div>
	</div>

	<script>
		var myIndex = 0;
		carousel();
	</script>

	<div id="purplejug-description" class="w3-container w3-content w3-center w3-padding-64">
		<h2 class="w3-wide">Purple Jug</h2>
		<p class="w3-opacity"><i>Fill the Jug. Fill your Hearts.</i></p>
		<p class="w3-justify">We love mish mash, criss cross &amp; pot pourri!!! PurpleJug is an attempt to bridge the gap between traditional and modern art. How could there be ancient art or nouveau art? It is just Art!!!<br><br>Jugs are ancient, Purple is a new color that pops out from the spectrum and Yes we are PurpleJug where old meets new!<br><br>Have you seen a PurpleJug? Most probably not! It is a work in progress!</p>
	</div>

	<div class="w3-container w3-content w3-center w3-padding-64">
		<h2 class="w3-wide">Dolls and More!</h2>
		<div class="w3-row-padding">
			<div class="w3-third w3-hover-shadow">
				<img src="/purplejug/images/CoupleDollOfAndhra.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
				<div class="w3-container w3-white">
				<p><b>Soldier</b></p>
				<p class="w3-opacity">Softwood</p>
				<p>Rs. 299</p>
				<a class="w3-btn w3-indigo w3-margin-bottom" href="product.php?productid=1">Buy Now</a>
				</div>
			</div>
			<div class="w3-third w3-hover-shadow">
				<img src="/purplejug/images/MinionDolls.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
				<div class="w3-container w3-white">
				<p><b>Heart Minion Heart</b></p>
				<p class="w3-opacity">Softwood</p>
				<p>Rs. 333</p>
				<a class="w3-btn w3-indigo w3-margin-bottom" href="product.php?productid=2">Buy Now</a>
				</div>
			</div>
			<div class="w3-third w3-hover-shadow">
				<img src="/purplejug/images/penstandminion.JPG" alt="Norway" style="width:100%" class="w3-hover-opacity">
				<div class="w3-container w3-white">
				<p><b>Penstand Minion</b></p>
				<p class="w3-opacity">Softwood</p>
				<p>Rs. 369</p>
				<a class="w3-btn w3-indigo w3-margin-bottom" href="product.php?productid=3">Buy Now</a>
				</div>
			</div>
		</div>
		<br><a class="w3-btn w3-indigo w3-margin-bottom" href="products.php">Explore more products with us!</a>
	</div>

	<div id="purplejug-whoarewe" class="w3-container w3-content w3-center w3-padding-64">
		<h2 class="w3-wide">Who are we?</h2>
		<p class="w3-justify">We are a bunch of designers, art lovers who want to take Indian traditional arts to the global arena. We are in the process of resurrecting certain arts and making consumers understand the uniqueness of Indian art. Traditional art in a new avatar makes us look at our customs in an entirely different perspective.</p>
	</div>

	<div id="purplejug-whyshouldyoubuy" class="w3-container w3-content w3-center w3-padding-64">
		<h2 class="w3-wide">Why should you buy?</h2>
		<p class="w3-justify">PurpleJug is a platform for artisans to show their creativity and bring their skills to light. The people behind those beautiful creations require encouragement and support. A modern outlook and new designs will be in effect reflected in their art. This also helps you in owning products that are unique and available only in limited numbers.</p>
	</div>

	<div id="purplejug-corporateorders" class="w3-container w3-content w3-center w3-padding-64">
		<h2 class="w3-wide">Corporate Orders</h2>
		<p class="w3-justify">We also provide options for corporate gifting along with specialized packing. Corporate gifts for clients from foreign countries definitely need to stand out from the rest. It is a representation of India to the rest of world and PurpleJug will help in creating a unique identity. The pieces would stay testament to the great times they spent in India and a reminder of the sweet memories. We have provided dolls for corporate gifting and we must say it has been exciting listening to how their clients loved it. Please contact us for further details to amaze your clients. We will pay you a visit!</p>
	</div>
	</div>

	<?php
		echo $menu->getFooter();
	?>
</body>
</html>