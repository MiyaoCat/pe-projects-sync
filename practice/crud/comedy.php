
<h1>Comedy</h1>
<h2><a href="?page=home">home</a></h2>

<?php 
	//get movie data
	include('movie-data.php');

	//loop through movie data


	foreach ($movies as $movie) {

		$title = $movie['title'];
		$genre = $movie['genre'];
	
		if ($genre == 'comedy') {

?>		
	<ul>
		<li><?=$title?></li>
		<a href="?page=details&id=<?=$movie['id']?>">Details</a>
	</ul>

<?php } } ?>	
