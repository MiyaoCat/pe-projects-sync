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

<!--  PAGE QUERY -->
<?php 
	$page = null;

	if ( isset($_GET['page']) ) { 
		$page = $_GET['page']; //get URL page string
	} else {
		$page = 'page'; //default page
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

?>

<!--  <nav>
 	<ul>
 		<li><a href="?page=home">home</a></li>
 		<li><a href="?page=action">action</a></li>
 		<li><a href="?page=comedy">comedy</a></li>
 		<li><a href="?page=drama">drama</a></li>
 	</ul>
 </nav> -->









 







 







 







