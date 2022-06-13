<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:image" content="[IMAGE URL]">
	<meta name="description" content="[SHORT PAGE DESCRIPTION]">
	<title></title>

	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		<section class='inner-column'>
			
		</section>
	</header>

	<main>
		<?php include('pocket-monsters.php') ?>

		<section class="inner-column">
			<ol>
				<?php foreach ($pocket_monsters as $pm) { 
					$name = $pm['name']['english'];
					$jname = $pm['name']['japanese'];
					$type0 = $pm['type'][0];
					$type1 = $pm['type'][1];
					$id = $pm['id'];


					if ($type0 == "Normal" or $type1 == "Normal") {
						continue; 
					}

				?>
					<li id="<?=$id?>">
						<pokemon-card>
							<h2 class="name"><?=$name?></h2>
							<h3 class="j-name"><?=$jname?></h3>
							<p>Type: <?=$type0?>, <?=$type1?> </p>

							<?php 
								$length = count($pm['type']); //count is built in function. Gets length of array
					
								$count = 1; //set counter to help us know how long we've gone through array

								foreach ($pm['type'] as $type) { //loops through all types in array
							
									
									echo $length;
									echo $type;


									if ($count < $length) { //if count is less than total length of array, then it must not be last item in array. THEN print comma
									echo ", ";
									}

									$count++; // $count = $count + 1;
							 	} ?>
						</pokemon-card>
					</li>

				<?php } ?>

			</ol>
		</section>

	</main>

	<footer>
		<section class="inner-column">
			
		</section>
	</footer>
	
</body>
</html>