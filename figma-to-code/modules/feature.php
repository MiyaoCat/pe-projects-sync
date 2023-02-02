<?php if($type == "feature") { ?>
	
	<div class="main-content">
		<h2 class="sub-header attention-voice"><?=$header?></h2>
		<p class="info alert-voice"><?=$subHeader?></p>
		
		<div class="image-placeholder">
			<?php 
				foreach($components as $component) {
					if($component["type"] == "image-placeholder"){
						include("components/$component[type].php");
					}
				} ?>
		</div>
	</div>

	<div class="feature-cards">
		<?php 
			foreach($components as $component) {
				if($component["type"] == "feature-list") {
					include("components/$component[type].php");
				}
			} 
		?>
	</div>

<?php } ?>