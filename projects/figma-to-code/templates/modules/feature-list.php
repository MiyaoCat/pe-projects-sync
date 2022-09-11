<?php  
	if ($type == "feature-list") {
		$listItems = $module["list"];

		foreach ($listItems as $item) {
			$number = $item["number"];
			$title = $item["title"];
			$detail = $item["detail"];
			$source = $item["source"];
?>
	<feature-card>
		<number-icon><?php include($source); ?></number-icon>	
		<feature-content>
			<h3 class="alert-voice"><?=$title?></h3>
			<p class="calm-voice"><?=$detail?></p>
		</feature-content>
	</feature-card>
		<?php } ?>
<?php } ?>

