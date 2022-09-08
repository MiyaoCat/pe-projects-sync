<?php  
	if ($type == "page-header") {
		$header = $module["header"];
		$subHeader = $module["subHeader"];
			
?>

	<h1 class="loud-voice">PAGE HEADER HEADING <?=$header?></h1>
	<p class="normal-voice">PAGE HEADER SUB-HEADER 
	<?=$subHeader?></p>

<?php } ?>