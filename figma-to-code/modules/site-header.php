<?php 
	$json = file_get_contents("data/site-header.json");
	$headerComponents = json_decode($json, true);

	foreach ($headerComponents as $component) {
		$type = $component["type"];
?>
	<?php if($type == 'logo') { ?>

		<div class=<?=$type?>>
			<?php include($component["source"]); ?>	
		</div>

	<?php } ?>
 		
 	<?php if($type == 'navigation') { ?>

 		<nav>
 			<ul>
 				<?php foreach($component["listItems"] as $item) { ?>
 					<li>
 						<?=$item['page']?>
 					</li>
 				<?php } ?>	
 			</ul>
		</nav>

 	<?php } ?>

 	
	<?php if($type == "language") { ?> 
	
		<div class="language">
			<?php include($component["source"]); ?>
			<p class="calm-voice"><?=$component['text']?></p>
		</div>
 	<?php } ?>		

 	<?php if($type == "button"){ 
 		include("components/$type.php"); 
 	} ?>
<?php } ?>
