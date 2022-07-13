
<section class="page-section">
<inner-column>
	<h1 class="loud-voice">Actor List Page</h1>
	
	<ul class="actor-list">
		<?php 
			$parameters = array(
				'post_type' => 'actors',
			);

			$query = new WP_Query ( $parameters );

			while ( $query->have_posts() ) : $query->the_post();
				echo "<li class='actor'>";
				include( getFile('templates/components/actor-card.php') );
				echo "</li>";
			endwhile;
			
			wp_reset_postdata();	

		?>
	</ul>



	
	
	
</inner-column>
</section>