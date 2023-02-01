<div class="mast-head">
	<?php 
		$json = file_get_contents("data/site-header.json");
		$headerComponents = json_decode($json, true);
	
		foreach ($headerComponents as $component) {
			$type = $component["type"];
	?>
		
		<?php 
			if($type == 'logo') { 
				$link = $component['link'];
		?>
			<div class=<?=$type?>>
				<a href="<?=$link?>"><?php include($component["source"]); ?></a>
			</div>
		<?php } ?>
	 		
	 	<?php if($type == 'navigation') { ?>
	 		<nav>
	 			<ul>
	 				<?php foreach($component["listItems"] as $item) { 
	 					$link = $item['link'];
	 					$page = $item['page'];
	 				?>
	 					<li>
	 						<a class="calm-voice" href="<?=$link?>"><?=$page?></a>
	 					</li>
	 				<?php } ?>	
	 			</ul>
			</nav>
	 	<?php } ?>
	
	 	
		
			<?php 
				if($type == "language") { 
					$text = $component['text'];
			?> 
				<div class="login-wrap">
	
					<div class="language">
						<?php include($component["source"]); ?>
						<p class="calm-voice"><?=$text?></p>
					</div>
				 	<?php } ?>		
				
				 	<?php if($type == "button"){ 
				 		include("components/$type.php"); 
				 	} ?>
				 	
				</div>
	<?php } ?>
</div>