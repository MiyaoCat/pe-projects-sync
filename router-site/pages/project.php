<?php 

	//get the data file and give it a name aka variable that we can reference (we like to call it $json)
	$json = file_get_contents("data/projects.json");
	
	// convert/decode the data file to PHP. In the json_decode function we pass through the data file (now called $json) and the argument "true", which will return/change JSON objects into associative arrays. 

	//Give the function a name, that we can reference ($projects)
	$projects = json_decode($json, true);

	//Look (loop) through each object in the data file that has a set of key:value pairs. The data file is a bunch of objects with key:value pairs.

	//Rename the set of arrays ($projects) as individual objects ($page) so we can look at the key:value pairs in each object. 
	foreach ($projects as $page) {

	//If the array's slug is equal to the one the user selects
		if ($page["slug"] == $_GET["slug"]) {
	//	Then return the information associated with that slug's specific array and call it $selectedProject	
			$selectedProject = $page;
		}
	}

	$title = $selectedProject["title"];
	$teaser = $selectedProject["teaser"];

	//Call the case-study array within the $page array $caseStudies
	$caseStudies = $selectedProject["case-study"];	

	$url = $selectedProject["url"];
	$section = "";
?>

<article>
	<header class="page-header">
		<inner-column>
			<h1 class="loud-voice"><?=$title?></h1>
			<p>helo hello hola</p>
			<p><?=$teaser?></p>
		</inner-column>
	</header>

	<?php 
		//Loop through the case-study array that sit's inside the $page array. 
		foreach ($caseStudies as $caseStudy) { 

		//When the array has a key of 'module', give it a name/variable	
		$module = $caseStudy["module"];
		?>
		<section>
			<inner-column>
				<?php 
					//include the file path. The variable passed through is a value (key:value) from the array in the data file. The value is the same name used in the naming of my files.
					include("modules/$module/$module.php"); 
				?>
			</inner-column>
		</section>

	<?php } ?>	

	<footer>
		<inner-column><a href="<?=$url?>" target="_blank">Project Details</a></inner-column>
	</footer>
</article>