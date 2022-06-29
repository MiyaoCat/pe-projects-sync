
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

<h4>Genre: <?=ucfirst($currentMovie['genre'])?></h4>



<h4>Cast:</h4>
 <ul>
 	<li><?=$currentMovie['actors'][0]?></li>

 	<?php if ( isset($currentMovie['actors'][0]) ) {
 	?>	
  	
  	<li><?=$currentMovie['actors'][1]?></li>	

	<?php } ?>
	<?php if ( isset($currentMovie['actors'][1]) ) {
 	?>	
  	
  	<li><?=$currentMovie['actors'][2]?></li>	

	<?php } ?>

 </ul>

<?php 
	//create a link
	//when it's clicked it takes the user to the previously visited page
	// user clicks on link
	// link GETS the previous page
 ?>

