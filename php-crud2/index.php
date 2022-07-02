<!doctype HTML>

<?php 
	function decode() {
		$json = file_get_contents('data/players.json');
		$players = json_decode($json, true);
	}
	
	$page = null;

	if ( isset($_GET['page']) ) {
		$page = $_GET['page'];
	}	else {
		$page = 'home';
	}
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CRUD FUN</title>
		<meta property="og:image" content="https://peprojects.dev/alpha-4/john/"/>
		<link rel="stylesheet" href="css/site.css">
	</head>	

	<test-area>
			<?php 
				error_reporting(E_ALL);
				ini_set('display_errors', '1');

				function currentUrl() { 
			  	return $_SERVER['REQUEST_URI'];
				}
				echo currentUrl();

			 ?>
		</test-area>

	<body>
		<header>
			<?php include('site-menu.php') ?>
		</header>

		<main class="page-content">
			<?php 
			if ($page == 'home') {
				include('home.php');
			}

			if ($page == 'list') {
				include('list.php');
			}

			if ($page == 'detail') {
				include('detail.php');
			}

			if ($page == 'basketball') {
				include('basketball.php');
			}

			if ($page == 'football') {
				include('football.php');
			}

			if ($page == 'huskies') {
				include('huskies.php');
			}
		 ?>
		</main>
		

		<p><?=$page?> page</p>
	</body>
</html>