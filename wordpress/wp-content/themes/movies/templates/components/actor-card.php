<?php 
	$name = get_field('name');
	$portrait = get_field('portrait');

	if ($portrait) {
		$portrait = $portrait["url"];
	} else {
		$portrait= "https:/peprojects.dev/images/portrait.jpg";
	}
?>

<actor-card>
	<h2 class="attention-voice"><?=$name?></h2>
	<picture>
		<img src="<?=$portrait?>" alt="<?php the_field('name'); ?> portrait">
	</picture>
	<a href="<?php the_permalink(); ?>">Actor Bio</a>
	
</actor-card>

