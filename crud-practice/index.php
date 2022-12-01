<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Oh CRUD</title>
	<meta property="og:image" content="https://peprojects.dev/alpha-4/john/"/>
	<link rel="stylesheet" href="style.css">
</head>	

<?php 
	$json = file_get_contents("word-list.json");
	$words = json_decode($json, true);

	$addMessage = "";
	$failMessage = "";

	$hasWord = false;
	$wordInput = "";
	
	if ( isset($_POST["add"]) ) {

		if ( isset($_POST["word"]) ) {
			$wordInput = $_POST["word"];

			if (strlen($wordInput) > 0 ) {
				$hasWord = true;
				$addMessage = "<h4 class='success-message'>Your word has been added!</h4>";
			} 
			else {
				$failMessage = "<h4 class='fail-message'>no word</h4>";
			}

		} 

		if ($hasWord) {
			$newWord = [
				$_POST["word"]
			];

			var_dump($newWord);
		}

	} 
?>

<h1>Create. Read. Update. Delete</h1>

<h2 class="">Word List</h2>

<word-list>

	<ol>
		<?php foreach ($words as $word) { ?>
			<li>
				<?=$word?>
			</li>
		<?php } ?>	
	</ol>	
	
</word-list>

<h2>Add More Words!</h2>



<form action="" method="POST">
	<label for="word">Type your word</label>
	<input type="text" name="word" value="<?=$wordInput?>">
	<?=$addMessage?><?=$failMessage?>
	
	<button type="submit" name="add">Add Word</button>
</form>



