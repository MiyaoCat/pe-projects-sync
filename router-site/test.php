<nav class="site-menu">
	<a href="?">Home</a>
	<a href="?page=money">money</a>
	<a href="?page=cash">Cash</a>
	<a href="?page=hopes">hopes</a>
</nav>

<hr>

<?php 

	function queryString() {
		return $_SERVER['QUERY_STRING'];
	}

	$page = "home";

	function pageSelected() {
		if ( isset($_GET["page"]) ) {
			$page = $_GET["page"];
			include("$page.php");
		} 
	}

	

?> 

<body>
	<div class="wrapper" style="border:4px dashed red">
		<?php pageSelected(); ?>
		<p><?php echo queryString(); ?></p>
	</div>
</body>
