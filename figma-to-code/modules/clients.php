<?php if($type == "clients") { ?>

	<h2 class="header attention-voice"><?=$header?></h2>
	<p class="teaser alert-voice"><?=$subHeader?></p>		

	<div class="review-card-wrap">
		<left-arrow>
			<?php include("./assets/icons/arrow-left.svg"); ?>
		</left-arrow>
		
			<?php  
				foreach($components as $component) {
					if($component["type"] == "client-review-card") {
						include("components/$component[type].php");
					}
				}
			?>
		
		<right-arrow>
			<?php include("./assets/icons/arrow-right.svg"); ?>
		</right-arrow>
	</div>
<?php } ?>