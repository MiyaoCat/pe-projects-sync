<?php 
	$title = $project['title'];
	$url = $project['url'];
	$teaser = $project['teaser'];
	
?>

<project-card>
	<picture>
		<img src="https://peprojects.dev/images/landscape.jpg" alt="">
	</picture>
	<h3><?=$title?></h3>

	<p><?=$teaser?></p>

	<a href="<?=$url?>">Learn more about the Project</a>
</project-card>