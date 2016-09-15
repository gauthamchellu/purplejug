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

	<div class="w3-container w3-content w3-center w3-padding-64">
		<h2 class="w3-wide">World of adorable toys <i class='fa fa-smile-o'></i></h2>
		<?php
			$conn = mysql_connect("localhost","root","");
			mysql_select_db("purplejug",$conn);
			$result = mysql_query("select * from product", $conn);
			$num_rows = mysql_num_rows($result);
			for ($x = 0; $x < $num_rows/3; $x++) {
				echo "<div class='w3-row-padding'>";
				for ($y = 0; $y < 3; $y++) {
					$row = mysql_fetch_row($result);
					if ($row) {
						echo "
						<div class='w3-third w3-hover-shadow'>
							<img src='/purplejug/images/productimages/" . $row["0"] . "/a.jpg' style='width:100%' class='w3-hover-opacity'>
							<div class='w3-container w3-white'>
							<p><b>" . $row["1"] . "</b></p>
							<p class='w3-opacity'>" . $row["4"] . "</p>
							<p>Rs. " . $row["3"] . "</p>
							<a class='w3-btn w3-indigo w3-margin-bottom' href='product.php?productid=" . $row["0"] . "'>Buy Now</a>
							</div>
						</div>
						";
					}
					else {
						break;
					}
				}
				echo "</div><br>";
			}
		?>
	</div>

	</div><br>
	<?php
		echo $menu->getFooter();
	?>
</body>
</html>