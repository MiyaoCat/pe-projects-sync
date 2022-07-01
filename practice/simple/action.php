
<h1>Action</h1>
<?php include('movie-data.php'); 
	foreach ($movies as $movie) {

		$title = $movie['title'];
		$genre = $movie['genre'];
?>	
	<ul>
		<li><?=$title?></li>
		<a href="?page=details&id=<?=$movie['id']?>">Details</a>
	</ul>

<?php } ?>
	
