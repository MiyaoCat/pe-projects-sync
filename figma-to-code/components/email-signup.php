<?php  
	if($component["type"] == "email-signup") {
		$placeholder = $component["placeholder-text"];
		$icon = $component["icon"];

?>

	<email-signup>
		<input type="email" placeholder="<?=$placeholder?>">
	</email-signup>

<?php } ?>