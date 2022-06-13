<?php 
	$number = 32;
	$friend1 = "David";
	$friend2 = "Sean";

	echo "$number $friend1 $friend2";

	echo $number;
	echo $friend1;
	echo $friend2;

	echo $number . $friend1 . $friend2;
 ?>

 <p><?=$number?>, <?=$friend1?>, <?=$friend2?></p>

 <?php 
 	$array = [1, 2, 3, 4, 5]; //This is an array. Doesn't need a space after the comma

 	$cities = ["Seattle", "Sacramento", "San Francisco", "Oakland"];
 	$random = [24, "Churchill", 32, "Rebels", 14, "Hotspur", false];

 	echo $array[3] . " " . $cities[1] . " " . $random[0];

 	foreach ($array as $number) {
 		echo "hi";
 	}

 	foreach ($cities as $city) {
 		echo "<li>I lived in $city</li>";
 	}

 	foreach ($random as $thing) {
 		echo "<ol>$thing</ol>";
 	}

 	for ($i = 1; $i <= 20; $i++) {
 		echo "<li>$i\n</li>";
 	}
  ?>

<?php 
	$artists = ["Kanye", "Jay Z", "J Cole", "Drake", "Biggie", "Lil Wayne"];

	foreach ($artists as $artist) {
		echo "<li>One of my favorite artists is " . $artist . "</li>";
	};

	$favNumbers = [32, 24, 9, 27, 86, 3];

	foreach ($favNumbers as $fav) {
		if ($fav < 20) {
		echo "<li>$fav</li>";
		}
	};

	for ($i = 1; $i <=34 ; $i++) {
		if ($i != 12 and $i != 17 and $i != 23) {
			echo $i . "\n";
		}
	};

 ?>


















