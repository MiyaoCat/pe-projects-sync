<?php if($type == "clients") { ?>

	<section class=<?=$type?>>
		<p class="attention-voice"><?=$header?></p>
		<p class="normal-voice"><?=$subHeader?></p>		

		<div class="review-card-wrap">
			<?php  
				foreach($components as $component) {
					if($component["type"] == "client-review-card") {
						include("components/$component[type].php");
					}
				}
			?>
		</div>
		
	</section>
<?php } ?>