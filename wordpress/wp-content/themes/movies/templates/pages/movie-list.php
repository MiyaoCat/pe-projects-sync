<section class="page-section">
<inner-column>
	<h1 class="loud-voice">Movie List Page</h1>
	
	<ul class="actor-list">
		<?php 
			$parameters = array(
				'post_type' => 'movies',
			);

			$query = new WP_Query ( $parameters );

			while ( $query->have_posts() ) : $query->the_post();
				echo "<li class='movies'>";
				include( getFile('templates/components/movie-card.php') );
				echo "</li>";
			endwhile;
			
			wp_reset_postdata();	

		?>
	</ul>
	
</inner-column>
</section>