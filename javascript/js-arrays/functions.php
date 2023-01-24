<header style="font-size: 20px; font-family: Helvetica" >

<?php 
	
	$bet = 2;
	$bet = $bet * 2;

	function double($money) {
		echo $money * 2;
	}
	
	double(2);
	echo "<br>";
	double($bet);
	echo "<br> <br>";
?>

<h2 class="">Pizza Function</h2>
<?php
	function recipe($crust, $sauce, $topping1, $topping2) {
		echo "<h2>Order</h2>";
		echo "<ol>";
		echo "<li>Use the " . $crust . " crust</li>";
		echo "<li>Use the " . $sauce . " sauce</li>";
		echo "<li>Use the " . $topping1 . " topping</li>";
		echo "<li>Use the " . $topping2 . " topping</li>";
		echo "</ol>";
	}

	recipe("Thin", "tomato", "pepp", "mush");
	recipe("Thick", "tomato", "olives", "mushroom");
?>


<h2>Monster Generator</h2>
<?php  
	function monsterMaker($name, $age, $faveFood, $color) {
		$monster = [
			"name" => $name,
			"age" => $age,
			"color" => $color,
			"favoriteFood" => $faveFood,
		];

		return $monster;
	}

	$scary = monsterMaker("Scary", 104, "Socks", "red");
	$hairy = monsterMaker("Hairy", 11, "fingers", "salmon");
	$crater = monsterMaker("Crater", 2, "kibble", "purple");
	$offset = monsterMaker("Offset", 33, "bread", "pink");

	$monsters = [$scary, $hairy, $crater, $offset];

	foreach($monsters as $monster) {
?>
	<ul>
		<li style="list-style: none; border: 1px solid black; padding: 10px">
			<div class="monster-card">
				<h3><?=$monster["name"];?></h3>
				<p>Age: <?=$monster["age"];?></p>
				<p>Color: <?=$monster["color"];?></p>
				<p>Favorite Food: <?=$monster["favoriteFood"];?></p>
			</div>
		</li>
	</ul>
<?php } ?>
</header>


















