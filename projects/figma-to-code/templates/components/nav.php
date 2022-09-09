
<?php 
	if ($type == "nav") {
		foreach ($component["listItems"] as $item) {
			$page = $item["page"];
			$link = $item["link"];
?>
	<ul>
		<li class="quiet-voice"><a href="?page=<?=$link?>"><?=$page?></a></li>
	</ul>
	<?php } ?>
<?php } ?>
