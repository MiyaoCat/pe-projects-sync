

<?php 
	$json = file_get_contents("data/data-pages/resume.json");
	$resumeData = json_decode($json, true);

	$title = $resumeData["pageTitle"];
	$intro = $resumeData["introduction"];
	$sections = $resumeData["sections"];
?>

<?php  
	$pageTitle = "Read My Resume";
	$pageIntro = "Learn about my work history";
	include("modules/page-header/page-header.php");
?>  

<main class="resume">
	
		<header>
			<inner-column>
				<h1 class="attention-voice"><?=$title?></h1>
				<p><?=$intro?></p>
			</inner-column>
		</header>
		

		<?php 
			
			foreach($sections as $section) { ?>
			<section class="expereince">
				<inner-column>
					<h2 class="loud-voice"><?=$section["heading"];?></h2>
					
					<ol>
						<?php foreach($section["jobs"] as $job) { ?>
							<li>
								<h3><?=$job["company"]?></time>
								<h3><?=$job["role"]?></h3>
								<h4><?=$job["location"]?></h4>
								<p><?=$job["startDate"]?> - <?=$job["endDate"]?></p>
								<ul>
									<?php foreach($job["highlights"] as $highlight) { ?>
									<li><?=$highlight?></li>
									<?php } ?>
								</ul>
							</li>
						<?php } ?>
					</ol>
				</inner-column>
			</section>
		<?php } ?>

	
</main>

