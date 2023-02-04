<email-signup>

	<?php  
		if($component["type"] == "email-signup") {
			$placeholder = $component["placeholder-text"];
			$icon = $component["icon"];
			
			include($icon);
	?>
			<input type="email" placeholder=" <?=$placeholder?>"> 
			
	<?php } ?>

</email-signup>