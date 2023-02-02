<?php  
	$json = file_get_contents("data/site-footer.json");
	$footerData = json_decode($json, true);
?>

<?php  
	foreach ($footerData as $component) {
		$type = $component["type"];

		if($component["type"] == "product-list") { ?>
	?>
		<ul>
			<?php  
				foreach($component["items"] as $item) {
					$text = $item['text'];
			?>
			<li>
				<p class="alert-voice"><?=$text;?></p>
			</li>
		</ul>
			
		<?php } ?>
	<?php } ?>
<?php } ?>

