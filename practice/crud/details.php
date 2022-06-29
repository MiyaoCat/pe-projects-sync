<?php 
	include ('movie-data.php');

	$currentMovie = null;

	foreach ($movies as $movie) {
		if ($movie['id'] == $_GET['id']) {
			$currentMovie = $movie;
		}
	} 

 ?>

 <h2><?=$currentMovie['title']?></h2>

<h3>Year Released: <?=$currentMovie['year']?></h3>

 <ul>
 	<li><?=$currentMovie['actors']?></li>
 </ul>
