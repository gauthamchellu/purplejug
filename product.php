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
		if (!$_GET["productid"]) {
			header("Location: products.php");
		}

		require_once("GetMenu.php");
		$menu = new Menu();

		echo $menu->getMenu();
		$conn = mysql_connect("localhost","root","");
		mysql_select_db("purplejug",$conn);
		$result = mysql_query("select * from product where id = " . $_GET["productid"], $conn);

		if (!$result) {
			header("Location: products.php");
		}
		$row = mysql_fetch_row($result);
		if (!$row) {
			header("Location: products.php");
		}

		echo "
			<div class='w3-container w3-content w3-center w3-padding-64' style='max-width:800px'>
				<h2 class='w3-wide'>" . $row["1"] . "</h2>
				<p class='w3-center'>" . $row["2"] . ". Made of " . $row["4"] . ", Height " . $row["5"] . " inches.</p>
				<h4>Price Rs. " . $row["3"] . "</h4>
				<form action='cart.php?productid=" . $_GET["productid"] . "' method='post'>
			";

		if ($row["6"] == 'Y') {
				echo "
					<div class='w3-row-padding w3-padding-16'>
						<div class='w3-half w3-right-align'>
							Custom Text Required on the Toy:
						</div>
						<div class='w3-half'>
							<input name='customtext' class='w3-input w3-border' type='text' placeholder='Say Something Sweet:)' style='width:80%' required>
						</div>
					</div>
				";
		}

		echo "
					<div class='w3-row-padding'>
						<div class='w3-half w3-right-align'>
							Quantity:
						</div>
						<div class='w3-half'>
							<input name='quantity' class='w3-input w3-border' type='text' placeholder='Quantity' value='1' style='width:30%' required>
						</div>
					</div>
					<br><button class='w3-btn w3-indigo w3-margin-bottom'>Add to Cart</button>
				</form>
				<a class='w3-btn w3-indigo w3-margin-bottom' href='products.php'>Continue Shopping</a>
			</div>
		";

		$result = mysql_query("select * from productimage where productid = " . $_GET["productid"], $conn);

		echo "<div class='w3-content' style='max-width:50%'>";
		while($row = mysql_fetch_row($result)) {
			echo "
				<img class='mySlides' src='" . $row["2"] . "' style='width:100%'>
			";
		}
		echo "</div>

		<div class='w3-center'>
			<div class='w3-section'>
				<button class='w3-btn' onclick='plusDivs(-1)'>&#10094; Prev</button>
				<button class='w3-btn' onclick='plusDivs(1)'>Next &#10095;</button>
			</div>
		";
		$num_rows = mysql_num_rows($result);

		for ($x = 1; $x <= $num_rows; $x++) {
			echo "<button class='w3-btn demo' onclick='currentDiv($x)'>$x</button>";
		}

	echo "</div>";
	?>

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