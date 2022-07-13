<?php 
	$name = get_field('name');
	$portrait = get_field('portrait');
	$birthdate = get_field('birth_date');
	$zodiac = get_field('zodiac_sign');
	$awards = get_field('awards');

	if ($portrait) {
		$portrait = $portrait["url"];
	} else {
		$portrait= "https:/peprojects.dev/images/portrait.jpg";
	}
?>

<section class="page-section actor-info">
	<inner-column>
		<picture class='portrait'>
			<img class='link' src="<?=$portrait?>" alt="<?php the_field('name'); ?> portrait">
		</picture>

		<info>
			<h1 class="name attention-voice"><?=$name?></h1>
			<h2>Bio</h2>
			<ul>
				<?php if ($awards) { ?> 
				<li>
					Awards: <?=$awards?>
				</li>	
				
				<?php } ?>	
				<li>Birthdate: <?=$birthdate?></li>
				<?php if ( is_user_logged_in() && $zodiac) {?>
					
				<li>Zodiac Sign: <?=$zodiac?></li>
				<?php } ?>	
				
				<li>
					Movies: 
					<?php
					$movies = get_field('movies');
					if( $movies ): ?>

			   	 <ul>
				    	<?php foreach( $movies as $post ): 

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
