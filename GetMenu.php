<?php

class Menu {
	public function getMenu() {

	return "
		<!-- Navbar -->
		<div class='w3-top'>
			<ul class='w3-navbar w3-white w3-card-2 w3-left-align'>
				<li class='w3-hide-medium w3-hide-large w3-opennav w3-right'>
					<a class='w3-padding-large' href='javascript:void(0)' onclick='myFunction()' title='Toggle Navigation Menu'>
						<i class='fa fa-bars'></i>
					</a>
				</li>
				<li class='w3-hide-small'><a href='index.php#' class='w3-padding-large'>Home</a></li>
				<li class='w3-hide-small'><a href='index.php#purplejug-whoarewe' class='w3-padding-large'>Who are we?</a></li>
				<li class='w3-hide-small w3-dropdown-hover'>
					<a href='products.php' class='w3-hover-none w3-padding-large' title='More'>Products <i class='fa fa-caret-down'></i></a>
					<div class='w3-dropdown-content w3-white w3-card-4'>
						<a href='tanjoredancingdolls.php#'>Tanjore Dancing Dolls</a>
						<a href='channapatnadolls.php#'>Channapatna Dolls</a>
						<a href='trendycollection.php#'>Trendy Collection</a>
						<a href='customiseddolls.php#'>Customised Dolls</a>
					</div>
				</li>
				<li class='w3-hide-small'><a href='index.php#purplejug-whyshouldyoubuy' class='w3-padding-large'>Why should you buy?</a></li>
				<li class='w3-hide-small'><a href='feelingcreative.php#' class='w3-padding-large'>Feeling Creative?</a></li>
				<li class='w3-hide-small'><a href='index.php#purplejug-corporateorders' class=' w3-padding-large'>Corporate Orders</a></li>
				<li class='w3-hide-small w3-dropdown-hover'>
					<a href='javascript:void(0)' class='w3-hover-none w3-padding-large' title='More'>How to order? <i class='fa fa-caret-down'></i></a>
					<div class='w3-dropdown-content w3-white w3-card-4'>
						<a href='products.php'>Order Now at purplejug.com!</a>
						<a href='#'><i class='fa fa-whatsapp'></i> WhatsApp at +91-9791068921</a>
					</div>
				</li>

				<li class='w3-hide-small w3-right'><a href='cart.php' class='w3-padding-large w3-hover-red'><i class='fa fa-shopping-cart'></i></a></li>
			</ul>
		</div>

		<!-- Navbar on small screens -->
		<div id='navDemo' class='w3-hide w3-hide-large w3-hide-medium w3-top' style='margin-top:46px'>
			<ul class='w3-navbar w3-left-align w3-black'>
				<li><a class='w3-padding-large' href='index.php#'>Home</a></li>
				<li><a class='w3-padding-large' href='index.php#purplejug-whoarewe'>Who are we?</a></li>
				<li><a class='w3-padding-large' href='#'>Products</a></li>
				<li><a class='w3-padding-large' href='index.php#purplejug-whyshouldyoubuy'>Why should you buy?</a></li>
				<li><a class='w3-padding-large' href='feelingcreative.php#'>Feeling Creative?</a></li>
				<li><a class='w3-padding-large' href='index.php#purplejug-corporateorders'>Corporate Orders</a></li>
			</ul>
		</div>

		<div class='w3-content' style='max-width:95%;margin-top:46px'>
			<div class='w3-center'>
				<a href='index.php#'>
					<img src='/purplejug/images/purplejug-mainlogo.png' style='width:30%'>
				</a>
			</div>
		";
	}

	public function getFooter() {

		return "
		<div class='w3-center'>
			<img src='/purplejug/images/kolam_withdots.jpg' style='width:10%'>
		</div>

		<footer class='w3-container w3-padding-16 w3-center w3-opacity w3-light-grey'>
			<div class='w3-row'>
				<div class='w3-half'>
					<p class='w3-medium'>Glad to get connected!<br>
					<a href='https://www.facebook.com/PurpleJug' target='_blank'><i class='fa fa-facebook-official w3-xxlarge' style='color:#3b5998;'></i></a>
					<a href='https://twitter.com/ThePurpleJug' target='_blank'><i class='fa fa-twitter-square w3-xxlarge' style='color:#00aced;'></i></a>
					<a href='https://www.instagram.com/thepurplejug/' target='_blank'><i class='fa fa-instagram w3-xxlarge' style='color:#fd1d1d;'></i></a><br>
					For orders, ping us at our WhatsApp number <i class='fa fa-whatsapp' style='color:#43d854;'></i> +91 97910 68921</p>
				</div>
				<div class='w3-half'>
					<p class='w3-medium'>Copyright <i class='fa fa-copyright'></i> 2016, PurpleJug<br>Team PurpleJug</p>
				</div>
			</div>
		</footer>";
	}
}
?>