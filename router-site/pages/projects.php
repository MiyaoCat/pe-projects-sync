
<?php 
	$json = file_get_contents("data/projects.json");
	$projects = json_decode($json, true);
?>

<?php  
	$title = "My Projects";
	include("modules/page-header/page-header.php");
?>

<section class="projects-grid">
	<inner-column>

		<ul class="project-list">
			<?php foreach ($projects as $project) { ?>
				<li class="project">
					<?php include("./modules/project-card/project-card.php"); ?>
				</li>
			<?php } ?>
		</ul>

	</inner-column>
</section>
