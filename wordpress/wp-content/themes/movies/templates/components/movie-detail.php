<?php 
	$title = get_field('movie_title');
	$portrait = get_field('movie_poster');
	$awards = get_field('awards');

	if ($portrait) {
		$portrait = $portrait["url"];
	} else {
		$portrait= "https:/peprojects.dev/images/portrait.jpg";
	}
?>

<section class="page-section movie-info">
	<inner-column>
		<picture class='portrait'>
			<img class='link' src="<?=$portrait?>" alt="<?php the_field('name'); ?> portrait">
		</picture>

		<info>
			<h1 class="name attention-voice"><?=$title?></h1>
			<h2>Bio</h2>
			<ul>
				<?php if ($awards) { ?> 
				<li>
					Awards: <?=$awards?>
				</li>	
				
				<?php } ?>	
				
				<li>
					Actors: 
					<?php
					$actors = get_field('actors');
					if( $actors ): ?>

			   	 <ul>
				    	<?php foreach( $actors as $post ): 

				      setup_postdata($post); ?>
				      
				      <li>
				        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				      </li>

				    	<?php endforeach; ?>
				    </ul>

				    	<?php wp_reset_postdata(); ?>

						<?php endif; ?>
				</li>

			</ul>
		</info>
	</inner-column>
</section>