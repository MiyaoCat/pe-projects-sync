<?php 

	$heading = $heading ?? "My Favorite Work";
	
	$json = file_get_contents("data/projects.json");
	$projects = json_decode($json, true);
	// $filtered = [];

	// foreach ($projects as $project) {
	// 	if ( isset($project["filtered"]) ) {
	// 		array_push($filtered, $project);
	// 	}
	// }
?>

<projects-spotlight>
	<h2 class="attention-voice"><?=$heading?></h2>

	<ul class="project-list">
		
		<?php foreach ($projects as $project) { ?>
			<?php if ( isset($project['featured']) ) { ?>
				<li class="project">
					<?php include("./modules/project-card/project-card.php"); ?>
				</li>
			<?php } ?>
	<?php } ?> 
	</ul>
</projects-spotlight>Lorem ipsum dolor sit amet.