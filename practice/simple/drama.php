
<h1>Drama</h1>
<?php include('movie-data.php') ?>
<?php foreach ($movies as $genre) {

 ?>
	
	<ul>
		<li><?=$genre['title']?></li>
		<li><a href="?page=details&id=<?=$genre['id']?>">Details</a></li>
	</ul>

<?php } ?>