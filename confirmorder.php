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
		if (empty($_POST["orderName"])
			|| empty($_POST["orderEmail"])
			|| empty($_POST["orderAddress"])
			|| empty($_POST["orderPhone"])
			|| empty($_SESSION["cart_item"])) {

			header("Location: products.php");
		}

		require_once("GetMenu.php");
		$menu = new Menu();

		echo $menu->getMenu();
	?>

	<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px">
		<?php
			$conn = mysql_connect("localhost","root","");
			mysql_select_db("purplejug",$conn);
			$insertstatus = "";
			if($conn) {
				$result = mysql_query("select max(id) from orderbill", $conn);
				$row = mysql_fetch_row($result);
				$nextorderbillid = "";
				if (!$row
					|| !$row["0"]) {

					$nextorderbillid = 1;
				}
				else {
					$nextorderbillid = $row["0"] + 1;
				}

				$name = preg_replace('/[^A-Za-z0-9\-\s\,]/', '', $_POST["orderName"]);
				$address = preg_replace('/[^A-Za-z0-9\-\s\,]/', '', $_POST["orderAddress"]);
				$phone = preg_replace('/[^A-Za-z0-9\-\s\,]/', '', $_POST["orderPhone"]);
				$query = "insert into orderbill values($nextorderbillid, '$name', '" . $_POST["orderEmail"] . "', '$address', '$phone')";
				$insertstatus = mysql_query($query, $conn);

				if ($insertstatus) {
					$result = mysql_query("select max(id) from orderproduct", $conn);
					$row = mysql_fetch_row($result);
					$nextorderproductid = "";
					if (!$row
						|| !$row["0"]) {

						$nextorderproductid = 1;
					}
					else {
						$nextorderproductid = $row["0"] + 1;
					}
					#echo "Omg the session is ";
					#print_r( $_SESSION);
					foreach ($_SESSION["cart_item"] as $item) {
						#echo "\nitem here is " ;
						#print_r( $item);
						$query = "insert into orderproduct values($nextorderproductid, $nextorderbillid, " . $item["id"] . ", '" . $item["quantity"] . "', '" . $item["customtext"] . "')";
						#print_r("\nquery is ". $query);
						$insertstatus = mysql_query($query, $conn);
						if (!$insertstatus) {
							break;
						}
						$nextorderproductid++;
					}
				}
			}
		?>
		<h2 class="w3-wide">
			<?php
				if ($insertstatus) {
					echo "Thanks! Your order will be processed soon! :) We'll get in touch with you.";
					unset($_SESSION["cart_item"]);
				}
				else {
					echo "Psst, we're running into some trouble. Please email <a href='mailto:thepurplejug@gmail.com'>thepurplejug@gmail.com</a>. Sorry!";
				}
			?>
		</h2>
	</div>
	</div>

	<?php
		echo $menu->getFooter();
	?>
</body>
</html>