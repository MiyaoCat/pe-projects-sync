<?php include('functions.php'); ?>

<!doctype HTML>

	<h1 class='shout-voice'>URL View & Error</h1>

	<test-area>
		<?php current_url(); ?>
	</test-area>	

	<!-- 	// PAGE QUERY -->
	<?php 	
		$page =  "home";

		if ( isset($_GET["page"]) ) {
			$page = $_GET["page"];
		} 
	?>

<head>
	<?php include ('head.php') ?>
</head>

<header>
	<?php include ('site-menu.php') ?>

</header>

<body>
	<section class="sports">

		<?php include('data/players.php');
		foreach ($playersData as $player);
		echo $player['city'];
		?>

		<nav class='test'>
			<h1 class="shout-voice">Filter by Sport</h1>
			<a href="?page=basketball&sport=basketball">Basketball</a>
			<a href="?page=football&sport=football">Football</a>
			<a href="?page=huskies">Huskies</a>
		</nav>


		<?php 
			$sport = null;
			$filtered = [];

			if ( isset($_GET['sport']) ) {
				$sport = $_GET['sport'];
			}

			if ($sport) {
				foreach ($playersData as $player) {
					if ($player['sport'] ==  $sport) {
						array_push($filtered, $player);
					}
				}

				$playersData = $filtered;
			}
		 ?>

	</section>	



	<?php 
		if ($page == "home") {
			include("home.php");
		}
		if ($page == "huskies") {
			include("huskies.php");
		}
		if ($page == "football") {
			include("football.php");
		}
		if ($page == "basketball") {
			include("basketball.php");
		}
		if ($page == "detail") {
			include("pages/detail.php");
		}
		if ($page == "create") {
			include("pages/create.php");
		}
	?>
		
</body>

</html>