code-save.php

<?php 
	if ( is_page("actors-4") ) {
		$parameters = array(
			'post_type' => 'actors',
		);

		$query = new WP_Query ( $parameters );

		while ( $query->have_posts() ) : $query->the_post();
			include( getFile('templates/pages/actors.php') );
			
		endwhile;
		
		wp_reset_postdata();	
	}

	if ( is_singular('actors') ) {
		echo "<h1>" . the_field('name') . "</h1>";
	}

	if ( is_page("movies") ) {
		$parameters = array(
			'post_type' => 'movies',
		);

		$query = new WP_Query ( $parameters );

		while ( $query->have_posts() ) : $query->the_post();
			include('movie-list.php');
			the_excerpt();
		endwhile;
		
		wp_reset_postdata();	
	}

	if ( is_singular('movies') ) {
		echo "<h1>" . the_field('movie_title') . "</h1>";
	}

 ?>