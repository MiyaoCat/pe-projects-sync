<?php get_header() ?>

<?php 
	if ( is_page('home-page') ) {
		include('templates/pages/home.php');
	}
	if ( is_page('list-page') ) {
		echo "<h1>Athlete Page</h1>";
	}

	if ( is_page('list-page') ) {
		$args = array(
			'post_type' => 'athletes',
		);

		$loop = new WP_Query ( $args );

		while ( $loop->have_posts() ) : $loop->the_post();
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

