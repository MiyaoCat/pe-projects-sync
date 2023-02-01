<?php if($component["type"] == "feature-list") { ?>
	
	<ol>
		<?php  
			foreach($component["list"] as $listItem) {
				$title = $listItem["title"];
				$detail = $listItem["detail"];
				$source = $listItem["source"];
		?>
		<li>
			<feature-card>
				<div class="icon"><?php include($source); ?></div>
				
				<div class="content-wrap">
					<p class="attention-voice"><?=$title?></p>
					<p class="normal-voice"><?=$detail?></p>
				</div>
			</feature-card>
		</li>
		<?php } ?>
	</ol>
		
<?php } ?>