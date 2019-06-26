<?php
	$title = "Montreal Restaurants";
	$page = "restaurants";
	include "header.php";
 ?>
		<div>
			<h2 class = "heading">
				Restaurants
			</h2>
		</div>

		<div class = "headerLine"> </div>

		<div>

			<p class = "normText">
					There’s an unlimited number of choices when it comes to
					eating at Montreal. To be fair, I don’t remember where
					exactly we chose to eat at. All I can remember was that
					the food was good! I’ve gathered a few of the top choices
					I've gathered from review sites.
			</p>

		</div>

		<div class="imgContainer"> <!-- First restaurant -->
			<h2 class = "heading">
				 Les 400 Coups
			</h2>
			<img class="imgResp" src="assets/images/400-coups.jpg" alt="400 Coups Picture">
			<p class = "normText">
				This Old Montreal spot is a collaboration between two veterans of the
				city’s restaurant scene, Marc-André Jetté and Patrice Demers. Jetté’s
				modern French dishes all have some element of surprise—the signature
				coarse—chopped beef tartare, for instance, is topped with mustard ice cream.
				Demers handles the inventive desserts, including a lime curd with crispy
				Matcha tea cake and Thai basil. <a href = "http://www.les400coups.ca/"> les400coups.ca</a>
			<p>

		</div>

		<div class="imgContainer"><!-- Second restaurant -->
			<h2 class = "heading">
				Joe Beef
			</h2>
			<img class="imgResp" src="assets/images/joe-beef.jpg" alt="Joe Beef Picture">
			<p class = "normText">
				When chefs Frédéric Morin and David McMillan opened Joe Beef in 2005,
				they had a specific vision for the place: a small restaurant serving a
				very personal take on French bistro classics, focusing on the best local
				ingredients in a supercasual environment. What drives them is a more-is-more
				Québécois passion for smoked meat, cheese and wine, which has made them a
				favorite among internationally famous chefs like David Chang and Anthony Bourdain.
				<a href = "http://www.joebeef.ca/">joebeef.ca</a>
			</p>
		</div>

		<div class="imgContainer"><!-- Third restaurant -->
			<h2 class = "heading">
				Brasserie T!
			</h2>
			<img class="imgResp" src="assets/images/brasserie-t.jpg" alt="brasserie T Picture">
			<p class = "normText">
				Set inside what looks like a futuristic cargo container on the grounds
				of the Montreal Museum of Contemporary Art, star chef Norman Laprise’s
				brasserie has become a downtown favorite for its simple and well-priced
				bistro menu, including steak frites, slow-cooked dill-infused salmon and
				salt cod brandade on toast. The restaurant’s vast terrace overlooks the
				Quartier des Spectacles cultural center.
				<a href = "http://www.brasserie-t.com">brasserie-t.com</a>
			</p>
		</div>

		<?php
			include "footer.php";
		 ?>

	</body>

</html>
