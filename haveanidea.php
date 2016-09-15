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
		if (empty($_POST["feelingCreativeName"])
			|| empty($_POST["feelingCreativeEmail"])
			|| empty($_POST["feelingCreativeIdea"])) {

			header("Location: index.php");
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
				$name = preg_replace('/[^A-Za-z0-9\-]/', '', $_POST["feelingCreativeName"]);
				$idea = preg_replace('/[^A-Za-z0-9\-]/', '', $_POST["feelingCreativeIdea"]);
				$query = "insert into creativeidea(customername, customeremail, idea) values('" . $name . "', '" . $_POST["feelingCreativeEmail"] . "', '" . $idea . "')";
				$insertstatus = mysql_query($query, $conn);
			}
		?>
		<h2 class="w3-wide">
			<?php
				if ($insertstatus) {
					echo "Thanks! We'll get in touch with you soon.";
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