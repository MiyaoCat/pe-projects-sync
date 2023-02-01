<?php if($component["type"] == "feature-list") { ?>
	
	<ol class="feature-list">
		<?php  
			foreach($component["list"] as $listItem) {
				$title = $listItem["title"];
				$detail = $listItem["detail"];
				$source = $listItem["source"];
		?>
		<li class="feature-item">
			<feature-card>
				<div class="numbers icon"><?php include($source); ?></div>
				
				<div class="content-wrap">
					<h3 class="raised-voice"><?=$title?></h3>
					<p class="normal-voice"><?=$detail?></p>
				</div>
			</feature-card>
		</li>
		<?php } ?>
	</ol>
		
<?php } ?>