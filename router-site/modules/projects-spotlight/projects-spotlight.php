<?php 

	$heading = $heading ?? "My Favorite Work";
	
	$projects = [
		[
			"title" => "Luxury Streetwear",
			"teaser" => "Lorem ipsum dolamite issit amet.",
			"linkText" => "Click to learn more",
			"url" => "#",
		],
		[
			"title" => "Starbucks Reserve",
			"teaser" => "Lorem ipsum dolamite issit amet.",
			"linkText" => "Click to learn more",
			"url" => "#",
		],
		[
			"title" => "Form Exercises",
			"teaser" => "Lorem ipsum dolamite issit amet.",
			"linkText" => "Click to learn more",
			"url" => "#",
		],
	];
?>

<projects-spotlight>
	<h2 class="attention-voice"><?=$heading?></h2>

	<ul class="project-list">
		
		<?php foreach ($projects as $project) { ?>
		<li class="project">
			<?php include("./modules/project-card/project-card.php"); ?>
		</li>

	<?php } ?>
	</ul>
</projects-spotlight>Lorem ipsum dolor sit amet.