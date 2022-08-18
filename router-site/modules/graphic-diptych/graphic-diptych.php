<?php 
	$heading = $heading ?? "Section Heading (Default)";
	$flipped = $flipped ?? "";
	
	$isFlipped = "";
	if ($flipped) {
		$isFlipped = "flipped";
	} 
 ?>

<graphic-diptych class="<?=$isFlipped?>">
	<picture>
		<img src="https://peprojects.dev/images/landscape.jpg" alt="">
	</picture>


	<div class="content">
		<h2 class="loud-voice"><?=$heading?></h2>
		<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed voluptas, sunt cupiditate totam non, dolor aut impedit quidem et nulla!</p>
	</div>
</graphic-diptych>