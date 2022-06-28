<!doctype HTML>
	<?php 
		error_reporting(E_ALL);
		ini_set('display_errors', '1');

		$uri= $_SERVER['REQUEST_URI'];
		echo $uri;

		// PAGE QUERY

		$page =  "huskies";

		if ( isset($_GET["page"]) ) {
			$page = $_GET["page"];
		} else {
			$page = "home";
		}
	?>

<html lang='en'>
	<head>

		<title>URL Queries</title>
	</head>

	<header>
		<nav>
			<a href="?page=home">Home</a>
			<a href="?page=basketball">Basketball</a>
			<a href="?page=football">Football</a>
			<a href="?page=huskies">Huskies</a>
	</header>

	<body>
		<?php if ($page == "home") { ?>
			<h1>WA Pro Athletes Home</h1>

		<?php } ?>
		
		<?php if ($page == "huskies") { ?>
			<h1>Pro Athletes from UW</h1>

		<?php } ?>

		<?php if ($page == "basketball") { ?>
			<h1>Pro Basketball Players from WA</h1>

		<?php } ?>

		<?php if ($page == "football") { ?>
			<h1>Pro Football Players from WA</h1>

		<?php } ?>

	</body>

</html>