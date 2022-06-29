<?php include('functions.php'); ?>

<!doctype HTML>

	<h1>URL View & Error</h1>

	<test-area>
		<?php current_url(); ?>
	</test-area>	

	<!-- 	// PAGE QUERY -->
	<?php 	
		$page =  "home";

		if ( isset($_GET["page"]) ) {
			$page = $_GET["page"];
		} 
	?>

<head>
	<?php include ('head.php') ?>
</head>

<header>
	<?php include ('site-menu.php') ?>
</header>

<body>
	<?php 
		if ($page == "home") {
			include("home.php");
		}
		if ($page == "huskies") {
			include("huskies.php");
		}
		if ($page == "football") {
			include("football.php");
		}
		if ($page == "basketball") {
			include("basketball.php");
		}
		if ($page == "detail") {
			include("pages/detail.php");
		}
	?>
		
</body>

</html>