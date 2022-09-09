<?php  
	if ($type == "accordion") {
		foreach ($component["listItems"] as $item) {
			$question = $item["question"];
			$answer = $item["answer"];
?>
		<details>
			<summary>
				<h3 class="attention-voice"><?=$question?></h3>
			</summary>
			<p class="normal-voice"><?=$answer?></p>
		</details>
<?php } ?>
	<?php } ?>