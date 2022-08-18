
<?php include("modules/header/header.php"); ?>

<?php echo "?" . queryString(); ?>
<hr>
<?php 
	$page = "home";
	if ( isset($_GET["page"]) ) {
		$page = $_GET["page"];
	}

	$pageFilePath = "pages/" . $page . ".php";
	if ( file_exists($pageFilePath) ) {
		include($pageFilePath);
	} else {
		include("pages/404.php");
	}
 ?>




<?php include("modules/footer/footer.php"); ?>

</body>
</html>