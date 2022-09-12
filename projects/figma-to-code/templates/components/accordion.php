<ul class="faqs-accordion">
	<?php  
		if ($type == "accordion") {
			foreach ($component["listItems"] as $item) {
				$question = $item["question"];
				$answer = $item["answer"];
				$open = "";
				if ($item["open"] == true) {
					$open = "open";
				}
	?>
			<li class="faqs-card">
				<details <?=$open?>>
					<summary >
						<h3 class="question normal-voice"><?=$question?></h3>
						<arrow><?php include("templates/icons/arrow/right-arrow.svg"); ?></arrow>
					</summary>
					<p class="answer calm-voice"><?=$answer?></p>
				</details>
			</li>
		<?php } ?>
	<?php } ?>
</ul>