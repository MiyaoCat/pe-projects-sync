<?php
		$text = $component["text"];
		$buttonType = $component["buttonType"];
		$corners = $component["corners"];
		$arrows = $component["arrows"];
		$style = $component["style"];
		$size = $component["size"];
?>		
	<button class="<?=$buttonType?> <?=$corners?> <?=$arrows?> <?=$style?> <?=$size?>">
		<p class="normal-voice"><?=$text?></p>
	</button>

