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
		<h2 class="w3-wide">Feeling Creative?</h2>
		<p class="w3-justify">Do you spend lot of time surfing through e commerce sites trying to find the perfect gift? And yet sometimes end up buying something your friend already has. Or wondered how perfect it would be to if you could to buy a gift you designed. This is the platform for that. Give your suggestions or ideas and see it come to life through PurpleJug. You never know the next best selling toy may be your design. Your name would be showcased as the designer. So write in your ideas and become the next PurpleJug designer.</p>
	</div>

	<form action="haveanidea.php" method="post">
		<!-- The Contact Section -->
		<div class="w3-container w3-content" style="max-width:800px">
			<h2 class="w3-wide w3-center">Have an idea?</h2>
			<p class="w3-opacity w3-center"><i>Let us know!</i></p>
			<div class="w3-row w3-padding-32">
				<div class="w3-col m6 w3-large w3-margin-bottom">
					Team PurpleJug<br>
					<i class="fa fa-map-marker" style="width:30px"></i> Chennai, Tamilnadu, India<br>
					<i class="fa fa-phone" style="width:30px"></i> Phone: +91-9791068921<br>
					<i class="fa fa-envelope" style="width:30px"> </i> Email: <a href="mailto:thepurplejug@gmail.com">thepurplejug@gmail.com</a><br>
				</div>
				<div class="w3-col m6">
					<div class="w3-row-padding" style="margin:0 -16px 8px -16px">
						<div class="w3-half">
							<input name="feelingCreativeName" class="w3-input w3-border" type="text" placeholder="Name" required>
						</div>
						<div class="w3-half">
							<input name="feelingCreativeEmail" class="w3-input w3-border" type="email" placeholder="Email" required>
						</div>
					</div>
					<input name="feelingCreativeIdea" class="w3-input w3-border" type="text" placeholder="A jist of your idea here :)" required>
					<button class="w3-btn w3-indigo w3-section w3-right">SEND</button>
				</div>
			</div>
		</div>
	</form>
	</div>

	<?php
		echo $menu->getFooter();
	?>
</body>
</html>