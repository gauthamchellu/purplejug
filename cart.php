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

		if (!empty($_GET["productid"])
			&& !empty($_POST["quantity"])) {

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

			$customtext = "";
			if (!empty($_POST["customtext"])) {
				$customtext = $_POST["customtext"];
			}

			$item = array(
				$row["0"] => array(
					'id' => $row["0"],
					'name' => $row["1"],
					'quantity' => $_POST["quantity"],
					'price' => $row["3"],
					'customtext' =>$customtext
				)
			);

			if (!empty($_SESSION["cart_item"])) {
				if(in_array($row["0"], $_SESSION["cart_item"])) {
					foreach($_SESSION["cart_item"] as $k => $v) {
						if($row["0"] == $k) {
							$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							break;
						}
					}
				}
				else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $item);
				}
			}
			else {
				$_SESSION["cart_item"] = $item;
			}
		}
		elseif (!empty($_GET["clearcart"])
			&& !empty($_SESSION["cart_item"])) {

			unset($_SESSION["cart_item"]);
			header("Location: products.php");
		}

		if (empty($_SESSION["cart_item"])) {
			header("Location: products.php");
		}
	?>

	<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px">
		<h2 class="w3-wide">Your Shopping Cart</h2>
		<a class="w3-btn w3-indigo" href="products.php">Continue Shopping</a>
		&nbsp;&nbsp;&nbsp;&nbsp;<a class="w3-btn w3-indigo" href="cart.php?clearcart=1">Clear Cart</a>
		<br><br><div class="w3-content w3-center" style="max-width:70%">
			<ul class="w3-ul">
			<?php
				$totalprice = 0;
				foreach ($_SESSION["cart_item"] as $item) {
					echo "<li>" . $item["name"] . ", " . $item["quantity"] . " numbers, Rs. " . ($item["quantity"]*$item["price"]);
					$totalprice += ($item["quantity"]*$item["price"]);
				}
				echo "<li><h4>Total Price: Rs. $totalprice</h4></li>";
			?>
			</ul>
		</div>
		<h3>We are a sprouting startup, and we currently handle only Cash-on-Delivery across Chennai and Kochi. For other locations, we'll contact once the order is placed, to transfer the cash online. Thanks for cooperating with us! :)</h3>
		<form action="confirmorder.php" method="post">
			<div class="w3-row-padding">
				<div class="w3-half">
					<input name="orderName" class="w3-input w3-border" type="text" placeholder="Name" required>
				</div>
				<div class="w3-half">
					<input name="orderEmail" class="w3-input w3-border" type="email" placeholder="Email" required>
				</div>
			</div>
			<br><input name="orderAddress" class="w3-input w3-border" type="text" placeholder="Delivery Address" required>
			<br><input name="orderPhone" class="w3-input w3-border" type="text" placeholder="Phone" required>
			<br><button class="w3-btn w3-indigo">Order Now!</button>
		</form>
	</div>

	
	</div><br>
	<?php
		echo $menu->getFooter();
	?>
</body>
</html>