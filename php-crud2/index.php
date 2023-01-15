<!doctype HTML>

<?php 
	$json = file_get_contents('data/players.json');
	$players = json_decode($json, true);

	$page = null;

	if ( isset($_GET['page']) ) {
		$page = $_GET['page'];
	}	else {
		$page = 'home';
	}

	if ( isset($_GET["sport"]) ) {
		$sport = $_GET["sport"];
	} else {
		$sport = false;
	}

	if ( isset($_GET["college"]) ) {
		$college = $_GET["college"];
	} else {
		$college = false;
	}

	$filtered = [];


	if ($sport) {
		foreach ($players as $player) {
			if ($player['sport'] == $_GET['sport']) {
				array_push($filtered, $player);
			}
		}

	$players = $filtered;	
	} 
	
	$filteredbyCollege = [];

	if ($college) {
		foreach ($players as $player) {
			if ($player['college'] == $_GET['college']) {
				array_push($filteredbyCollege, $player);
			}
		}

	$players = $filteredbyCollege;	
	} 			
?>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>CRUD FUN</title>
		<meta property="og:image" content=""/>
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

	<body class="<?=$page?>">
		<header>
			<inner-column>

				<?php include('site-menu.php') ?>

			</inner-column>
		</header>

		<main class="page-content">
			<inner-column>
				<page-templates>
					<?php 

					if ($page == 'home') {
						include('pages/home.php');
					}

					if ($page == 'list') {
						include('list.php');
					}

					if ($page == 'detail') {
						include('detail.php');
					}

					if ($page == 'create') {
						include('pages/create.php');
					}
				 ?>
			 </page-templates>	
		 </inner-column>
		</main>
		
		<footer>
			<inner-column>
				
				

			</inner-column>
		</footer>
		
	</body>

</html>