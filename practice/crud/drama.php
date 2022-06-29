
<h1>Drama</h1>
<h2><a href="?page=home">home</a></h2>

<?php 
	include('movie-data.php');

	foreach ($movies as $movie) { 

		if ($movie['genre'] == 'drama') {
?>
	
	<ul>
		<li><?=$movie['title']?></li>
		<li><a href="?page=details&id=<?=$movie['id']?>">Details</a></li>
	</ul>

	
 <?php } } ?>