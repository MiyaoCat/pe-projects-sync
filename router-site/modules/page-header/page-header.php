<?php 
	$pageTitle = $pageTitle ?? "This is the page-header title";
	$pageIntro = $pageIntro ?? "Utilize this 'page-header' module. It includes the main page title and a supporting paragraph that state's the page's goal(s)";
?>

<header class="page-header">
	<inner-column>
		<h1 class="loud-voice title"><?=$pageTitle?></h1>
		
	
			<p><?=$pageIntro?></p>
	
	</inner-column>
</header>