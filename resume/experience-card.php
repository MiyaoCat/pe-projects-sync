<experience-card>
<?php 
	
		$company = $item['company'];
		$role = $item['role'];
		$location = $item['location'];
		$startDate = $item['startDate'];
		$endDate = $item['endDate'];
		$highlights = $item['highlights'];
 ?>

 	<ul>
 		<li><h3 class="company attention-voice"><?=$company?></h3></li>
 		<li class="sub">
 			<h4 class="role"><?=$role?></h4>
 			<h4 class="date"><?=$startDate?> - <?=$endDate?></h4>
 		</li>
 		

 		<?php foreach ($highlights as $highlight) { ?>
 			<ul>
 				<li><?=$highlight?></li>
 			</ul>

 		<?php } ?>
 	</ul>
</experience-card>
