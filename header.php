<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset=utf-8 />
	<title><?php echo $title;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- ask Dan about this line here -->
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	<script src="assets/javascript/style.js"></script>
</head>

<body>
	<div class="background">

		<div class="headerImg"> <!-- logo welcoming the user -->
			<a href="index.php">
				<img class="imgResp" src="assets/images/MontLogo10.png" alt="Montreal Logo">
				<!-- style="width: 75px; height: 75px;" -->
				<!-- width = "75px" height = "75px" -->
			</a>
		</div>


		<nav> <!-- Navbar created to navigate through the pages -->
			<div id="nav-inner">
				<ul>
					<li<?php echo (isset($page) && $page=='restaurants') ? ' class="active" ' :'' ?>> <a href="restaurants.php" title=""> Restaurants </a> </li>
					<li<?php echo (isset($page) && $page=='activities') ? ' class="active" ' :'' ?>> <a href="activities.php" title=""> Activities </a> </li>
					<li<?php echo (isset($page) && $page=='maps') ? ' class="active" ' :'' ?>> <a href="map.php" title=""> Map </a> </li>
					<li<?php echo (isset($page) && $page=='tourists') ? ' class="active" ' :'' ?>> <a href="tourist.php" title=""> Tour Spots </a> </li>
					<li<?php echo (isset($page) && $page=='culture') ? ' class="active" ' :'' ?>> <a href="culture.php" title =""> Culture </a> </li>
					<li<?php echo (isset($page) && $page=='government') ? ' class="active" ' :'' ?>> <a href="government.php" title=""> Government </a> </li>
					<li<?php echo (isset($page) && $page=='housing') ? ' class="active" ' :'' ?>> <a href="housing.php" title=""> Housing </a> </li>
					<li<?php echo (isset($page) && $page=='trivia') ? ' class="active" ' :'' ?>> <a href="trivia.php" title =""> Trivia </a> </li>
					<li<?php echo (isset($page) && $page=='history') ? ' class="active" ' :'' ?>> <a href="history.php" title =""> History </a> </li>
				</ul>
			</div>

			<div class="hamburger" onclick="mobileNav(this)">
				<div class="bar1"></div>
				<div class="bar2"></div>
				<div class="bar3"></div>
			</div>
		</nav>

		<!-- Paragraph descrbing myself -->

	</div><!-- background div ends here -->
