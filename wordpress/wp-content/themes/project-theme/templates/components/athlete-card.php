

<athlete-card>
	<h2 class="name"><?php the_field('athlete_name'); ?></h2>
	<h3 class="hometown">Hometown: <?php the_field('hometown'); ?></h3>
	<h3 class="high-school">High School: <?php the_field('high_school'); ?></h3>
	<h3 class="college">College: <?php the_field('college'); ?></h3>
	<a href="<?php the_permalink(); ?>">Player Bio</a>
	<h4 class="movies">Fave Movie: 

		<?php
			$favorite_movies = get_field('favorite_movies');
			if( $favorite_movies ): ?>

		    <ul>
		    	<?php foreach( $favorite_movies as $post ): 

		      // Setup this post for WP functions (variable must be named $post).
		      setup_postdata($post); ?>
		      <li>
		        <h4><?php the_title(); ?></h4>
		        <?php the_field( 'favorite_movies' ); ?>
		      </li>

		    <?php endforeach; ?>
		    </ul>

		    <?php 
		    // Reset the global post object so that the rest of the page works correctly.
		    wp_reset_postdata(); ?>
			<?php endif; ?>
	</h4>
	
	

</athlete-card>