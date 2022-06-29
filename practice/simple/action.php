
<h1>Action</h1>

<?php 
	//get movie data
	include('movie-data.php');

	//loop through movie data


	foreach ($movies as $movie) {

		$title = $movie['title'];
		$genre = $movie['genre'];
		// $id = $movie['id'];
	
		if ($genre == 'action') {
	
?>		
	<ul>
		<li><?=$title?></li>
		<a href="?page=details&id=<?=$movie['id']?>">Details</a>
	</ul>

<?php } } ?>	

	
