
	<main>
		<section class="inner-column">
			<?php include('clubs.json'); ?> 
			<ol class="team-list">
				
					<?php foreach ($clubs as $club) { ?>
						<li>
							<team-card>
										
								<?=$club['location']?><
								
							</team-card>
						</li>

					<?php } ?>	
				
			</ol>	
		</section>

	</main>