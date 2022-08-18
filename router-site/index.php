
<?php include("modules/header/header.php"); ?>

<?php echo "?" . queryString(); ?>
<hr>
<?php 
	$page = "home";
	if ( isset($_GET["page"]) ) {
		$page = $_GET["page"];
	}

	if ($page == "home") {
		echo "home";
	}

	if ($page == "projects") {
		echo "projects";
	}

	if ($page == "contact") {
		echo "contact";
	}

	if ($page == "about") {
		echo "about";
	}
 ?>



<?php include("modules/footer/footer.php"); ?>

</body>
</html>