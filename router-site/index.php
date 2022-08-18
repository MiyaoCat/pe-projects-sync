
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
		include("pages/projects.php");
	}

	if ($page == "contact") {
		include("pages/contact.php");
	}

	if ($page == "about") {
		include("pages/about.php");
	}

	if ($page == "style-guide") {
		include("pages/style-guide.php");
	}

	if ($page == "goals") {
		include("pages/goals.php");
	}
 ?>



<?php include("modules/footer/footer.php"); ?>

</body>
</html>