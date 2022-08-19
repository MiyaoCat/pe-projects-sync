
<?php  
	include("modules/page-header/page-header.php");
?>  

<?php foreach ($pageData["section"] as $section) {
	$module = $section["module"];
?>
<section class="">
	<inner-column>
		<?php 
			include("modules/$module/$module.php"); 
		?>
	</inner-column>
</section>

<?php } ?>

