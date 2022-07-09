<?php get_header() ?>

<?php 
	if ( is_page('home-page') ) {
		include('templates/pages/home.php');
	}
	if ( is_page('list-page') ) {
		echo "<h1>Athlete Page</h1>";
	}
	if ( is_page('third-page') ) {
		echo "<h1>Another Page of Stuff</h1>";
	}

	if ( is_page('list-page') ) {
		$parameters = array(
			'post_type' => 'athletes',
		);

		$query = new WP_Query ( $parameters );

		while ( $query->have_posts() ) : $query->the_post();
			include('templates/components/athlete-card.php');
			the_excerpt();
		endwhile;
		
		wp_reset_postdata();	
	}

	if ( is_singular('athletes') ) {
		echo "<h1>" . the_field('athlete_name') . "</h1>";
	}


?>


<?php get_footer(); ?>

