<?php 
	$title = get_field('movie_title');
	$portrait = get_field('movie_poster');

	if ($portrait) {
		$portrait = $portrait["url"];
	} else {
		$portrait= "https:/peprojects.dev/images/portrait.jpg";
	}
?>

<movie-card>
	<h2 class="attention-voice"><?=$title?></h2>
	<picture>
		<img src="<?=$portrait?>" alt="<?php the_field('movie_title'); ?> portrait">
	</picture>
	<a href="<?php the_permalink(); ?>">More Info</a>
</movie-card>