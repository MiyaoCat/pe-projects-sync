<?php get_header() ?>

<?php 
	if ( is_page("home-page") ) {
		include("templates/pages/home.php");
	}

	if ( is_page("movies") ) {
		include("templates/pages/movies.php");
	}

	if ( is_page("actors-4") ) {
		include("templates/pages/actor-list.php");
	}

	if ( is_singular("actors") ) {
		include("templates/pages/actor-detail.php");
	}

	if ( is_404() ) {
		include("templates/pages/404-page.php");
	}
?>

<?php get_footer(); ?>