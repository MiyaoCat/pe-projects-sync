<?php $section = $section["content"] ?? "some other text"?>

<contact-form>
	<h2 class="attention-voice">A mini Contact Form</h2>
	<p><?=$section;?></p>
	<form method="POST">
		<input 
			type="textarea" 
			name="text"
			placeholder="make me laugh"
		>
	
		<button type="submit" name="submitted">Enter</button>
	</form>
</contact-form>