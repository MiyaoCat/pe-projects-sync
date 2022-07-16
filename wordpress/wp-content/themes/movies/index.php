<?php get_header() ?>

<?php 
	if ( is_page("home-page") ) {
		include("templates/pages/home.php");
	}

	if ( is_page("movies") ) {
		include("templates/pages/movie-list.php");
	}

	if ( is_singular("movies") ) {
		include("templates/components/movie-detail.php");
	}

	if ( is_page("actors-4") ) {
		include("templates/pages/actor-list.php");
	}

	if ( is_singular("actors") ) {
		include("templates/components/actor-detail.php");
	}

	if ( is_404() ) {
		include("templates/pages/404-page.php");
	}
?>

<?php get_footer(); ?>