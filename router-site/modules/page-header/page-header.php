<?php 
	$title = $pageData["title"] ?? "This is the page-header title";
	$intro = $pageData["intro"] ?? "Utilize this 'page-header' module. It includes the main page title and a supporting paragraph that state's the page's goal(s)";
?>

<header class="page-header">
	<inner-column>
		<h1 class="loud-voice title"><?=$title?></h1>
		
	
			<p><?=$intro?></p>
	
	</inner-column>
</header>