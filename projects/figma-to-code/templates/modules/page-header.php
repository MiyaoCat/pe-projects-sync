<?php  
	if ($type == "page-header") {
		$header = $module["header"];
		$subHeader = $module["subHeader"];
			
?>

	<h1 class="loud-voice"><?=$header?></h1>
	<p class="normal-voice">
	<?=$subHeader?></p>

<?php } ?>