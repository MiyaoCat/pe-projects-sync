<!doctype HTML>
<?php 
//User lands on homepage
//There are 3 Genres; Comedy, Action, Drama
// Click on Comedy
//Displays list of comedy movies
// Click on movie title
// Displays movie info; movie title, release date, actors (limit 3), awards, star rating

 ?>

<head>
	<style>
		test-area {
			border: 2px solid black;
			background-color: lightgray;
			color: red;
			padding: 5px;
		}
	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Movie Directory</title>
</head>

<test-area>
	<?php 
	error_reporting(E_ALL);
	ini_set('display_errors', '1');

	function currentUrl() { 
  	return $_SERVER['REQUEST_URI'];
	}
	echo currentUrl();

	include('movie-data.php');
	foreach ($movies as $movie);
	?>
 </test-area>

<!--  PAGE QUERY -->

<nav>
	<ul>
 		<li><a href="?page=home">home</a></li>
 		<li><a href="?page=action&genre=action">action</a></li>
 		<li><a href="?page=comedy&genre=comedy">comedy</a></li>
 		<li><a href="?page=drama&genre=drama">drama</a></li>
 		<li><a href="?page=drama2&genre=drama">drama2</a></li>
	</ul>
</nav>


<nav>
	<ul>
		<li><a href="?page=home&genre=action">Action</a></li>
		<li><a href="?page=home&genre=comedy">Comedy</a></li>
		<li><a href="?page=home&genre=drama">Drama</a></li>
	</ul>
</nav>
	<?php 
		if ( isset($_GET['page']) ) { 
			$page = $_GET['page']; //get URL page string
		} else {
			$page = 'page'; //default page
		}

		$genre = null;
		$filtered = [];
		
		if ( isset($_GET['genre']) ) {
			$genre = $_GET['genre'];
		}

		if ($genre) {
			
			foreach ($movies as $movie) {
				if ($movie['genre'] == $_GET['genre']) {

					array_push($filtered, $genre);
				}
			}
			$movies = $filtered;
		}

		if ($page == 'home') {
			include ('home.php');
		}
		if ($page == 'action') {
			include ('action.php');
		}
		if ($page == 'comedy') {
			include ('comedy.php');
		}
		if ($page == 'drama') {
			include ('drama.php');
		}
		if ($page == 'details') {
			include ('details.php');
		}
		if ($page == 'drama2') {
			include ('drama2.php');
		}
	?>







 







 







 







