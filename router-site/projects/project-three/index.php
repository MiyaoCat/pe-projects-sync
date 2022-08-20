<?php 
	include("../../functions.php"); 
?>

<?php echo queryString(); ?>
<h1 class="screaming-voice">Project Three</h1>

<nav>
	<ul>
		<li><a href="?view=list">All Pokemon</a></li>
	</ul>
</nav>

<?php 
	// API
	$endpoint = "https://pokeapi.co/api/v2/";

	// ROUTER
	$view = "list";
	if ( isset($_GET["view"]) ) {
		$view = $_GET["view"];
	}

	//LIST TEMPLATE
	if ($view == "list") {
		// GET LIST PAGE
		$json = file_get_contents("$endpoint/pokemon?limit=100");
		$data = json_decode($json, true);
		$monsters = $data["results"];

		echo "<ul>";
		foreach ($monsters as $monster) {
			$url = $monster["url"];
			$urlParts = explode("/", $url);
			$id = $urlParts[6];
			$link = "?view=detail&id=$id";

			echo "
				<li>
					<a href='?view=detail&id=$id'>$monster[name]</a>
				</li>
			";
		}
		echo "</ul>";
	}	
	// DETAIL TEMPLATE
	if ($view == "detail") {
		$id = $_GET["id"];
		$json = file_get_contents("$endpoint/pokemon/$id");
		$monster = json_decode($json, true);
		// formatCode($data);
		echo "<h1>$monster[name]</h1>";
	} 

?>
