<!DOCTYPE html>
<html>
<head>
<?php include(THEME_DIR_PHP.'head.php'); ?>
</head>
<body>

	<!-- Load Bludit Plugins: Site Body Begin -->
	<?php Theme::plugins('siteBodyBegin'); ?>

	<!-- Navbar -->
	<?php include(THEME_DIR_PHP.'topbar.php'); ?>

	<!-- Content -->
	<?php
		// $WHERE_AM_I variable detect where the user is browsing
		// If the user is watching a particular page the variable takes the value "page"
		// If the user is watching the frontpage the variable takes the value "home"
		// $items = getCategories();

		if ($WHERE_AM_I == 'page') {
			include(THEME_DIR_PHP.'page.php');
		}
		elseif ($WHERE_AM_I == 'category') { //anders doet home t niet
				if ($categoryKey == 'work') {
				include(THEME_DIR_PHP.'work.php');
			} if ($categoryKey != 'work') {
				include(THEME_DIR_PHP.'home.php'); //voorheen home.php was categories.php
				exclude(THEME_DIR_PHP.'work.php');
			}
		} else {
			include(THEME_DIR_PHP.'home.php');
		}

	?>

	<!-- Javascript -->
	<script>
	// function randombg(){
	//   var random = Math.floor(Math.random() * 3) + 0;
	//     var images = ["url('https://jrsvs.nl/bl-content/uploads/newnamesmall3.jpg')",
	// 									"url('https://jrsvs.nl/bl-content/uploads/n508220180202.jpg')",
	// 									"url('https://media.giphy.com/media/1lAMJymzEcNNqmaFHo/giphy.gif')",
	// 									"url('https://jrsvs.nl/bl-content/uploads/img5006.jpg')",
	//                   "url('https://jrsvs.nl/bl-content/uploads/img3.jpg')"];
	//
	// document.getElementById("mainheading").style.backgroundImage=images[random];
	// }
	// window.onload = randombg;
	</script>
	<?php
		// Include Jquery file from Bludit Core
		echo Theme::jquery();

		echo Theme::js('js/tether.min.js');

		// Include javascript Bootstrap file from Bludit Core
		echo Theme::jsBootstrap();

		echo Theme::js('js/ie10-viewport-bug-workaround.js');
	?>

	<!-- Load Bludit Plugins: Site Body End -->
	<?php Theme::plugins('siteBodyEnd'); ?>

</body>
</html>
