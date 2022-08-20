
<?php  
	include("modules/page-header/page-header.php");
?>  

<?php if ( isset($pageData["section"]) ) { ?>

	<?php foreach ($pageData["section"] as $section) {
		$module = $section["module"];
		$link = "?page=module&slug=$section[module]"
	?>
	<section class="">
		<inner-column>

			
	
			<?php styleGuideDetailLink($module, $pageData["slug"]); ?>
			
			<?php include("modules/$module/$module.php"); ?>

		</inner-column>
	</section>

	<?php } ?>
	
<?php } ?>
