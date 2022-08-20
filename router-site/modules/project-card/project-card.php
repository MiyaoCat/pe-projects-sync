<?php 
	$title = $project['title'];
	$teaser = $project['teaser'];
	$slug = $project['slug'];
?>

<project-card>
	<picture>
		<img src="https://peprojects.dev/images/landscape.jpg" alt="">
	</picture>
	<h3><?=$title?></h3>

	<p><?=$teaser?></p>

	<a href="?page=project&slug=<?=$slug?>">Learn more about the Project</a>
</project-card>