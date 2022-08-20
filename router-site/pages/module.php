<inner-column>
	<?php 
		$name = $_GET["slug"];
		include("modules/$name/$name.php");
	?>
</inner-column>