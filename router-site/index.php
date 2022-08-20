<?php 
	//PAGE ROUTER
	$page = "home";
	if ( isset($_GET["page"]) ) {
		$page = $_GET["page"];
	}

	//Get page data file path
	$dataFilePath = "data/data-pages/$page.json";
	$pageData = null;

	if ( file_exists($dataFilePath) ) {
		$jsonData = file_get_contents($dataFilePath);
		$pageData = json_decode($jsonData, true);
	}  

?>

<?php include("modules/header/header.php"); ?>

<inner-column><?php echo "?" . queryString(); ?></inner-column>
<hr>
<?php 
	if ($pageData) {
	 
	 if ( !isset($pageData["template"]) ) {
	 	include("pages/default.php");
	 }	else {
	 	include("pages/$pageData[template].php");
	 }

	} else {
	 	include("pages/404.php");
	}
?> 


<?php include("modules/footer/footer.php"); ?>

</body>
</html>