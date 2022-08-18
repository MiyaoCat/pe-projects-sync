<?php 
	$title = $project['title'];
	$url = $project['url'];
	$teaser = $project['teaser'];
	$slug = $project['slug'];
?>

<project-card>
	<picture>
		<img src="https://peprojects.dev/images/landscape.jpg" alt="">
	</picture>
	<h3><?=$title?></h3>

	<p><?=$teaser?></p>

	<a href="?page=project&sulg<?=$slug?>">Learn more about the Project</a>
</project-card>