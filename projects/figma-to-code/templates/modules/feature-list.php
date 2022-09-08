<?php  
	if ($type == "feature-list") {
		$listItems = $module["list"];

		foreach ($listItems as $item) {
			$number = $item["number"];
			$title = $item["title"];
			$detail = $item["detail"];
?>
	<ol>
		<li><?=$number?></li>
		<li><?=$title?></li>
		<li><?=$detail?></li>
	</ol>
		<?php } ?>
<?php } ?>