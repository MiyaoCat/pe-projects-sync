<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Oh CRUD</title>
	<meta property="og:image" content=""/>
	<link rel="stylesheet" href="style.css">
</head>	

<?php 
	$json = file_get_contents("word-list.json");
	$wordsData = json_decode($json, true);

	$addMessage = "";
	$failMessage = "";

	$hasWord = false;
	$wordInput = "";
	
	$formSubmitted = isset($_POST["submitted"]);

	if ($formSubmitted) {

		if ( isset($_POST["word"]) ) {
			$wordInput = trim($_POST["word"]);

			if (strlen($wordInput) > 0 ) {
				$hasWord = true;
				$addMessage = "<h4 class='success-message'>Your word has been added!</h4>";

				$id = count($wordsData) + 1;	

				// Create new word
				$newWord = [
						"id" => $id,
						"word" => $wordInput
					];	
				
				var_dump($newWord);

				//Add new word to database
				array_push($wordsData, $newWord); 

				//convert file back to JSON 	
				$wordJSON = json_encode($wordsData);

				//save JSON file with new record	
				file_put_contents("word-list.json", $wordJSON);
			} 

			else {
				$failMessage = "<h4 class='fail-message'>no word</h4>";
			}
		}
	} 
?>

<?php
	$message = "";

	//Form is submitted with the delete button
	$formDeleted = isset($_POST["deleted"]);
	//If form is submitted and there's a word to be removed
	if ( $formDeleted && isset($_POST["remove"]) ) {
	//Find entered word, create a new array without that word
			//Set an empty filtered array
			$filtered = [];

			//Look through the word list
			foreach ($wordsData as $word) {

				//Check if the entered word is not a match
				if ($_POST["remove"] !== $word["word"]) {

					//If not a match, add it to the new array.
					//Update the word list with the entered word filtered out
					array_push($filtered, $word);

					$message = "Your word <b>$_POST[remove]</b> was not found in the list";

				} else {

					$message = "Your word $_POST[remove] was deleted";
				} 
			}	
			var_dump($filtered);

			//convert file back to JSON 	
			$wordJSON = json_encode($filtered);

			//save JSON file with new record	
			file_put_contents("word-list.json", $wordJSON);

			//Reset list variable name;
			$wordsData = $filtered;
	} 

?>


<a href="?">
	<h1>Create. Read. Update. Delete</h1>
</a>

<h2 class="">Word List</h2>

<word-list>

	<ol>
		<?php foreach ($wordsData as $word) { ?>
			<li>
				<?=$word["word"];?>
			</li>
		<?php } ?>	
	</ol>	
	
</word-list>

<h2>Add More Words!</h2>



<form action="" method="POST">
	<label for="word">Type your word</label>
	<input type="text" name="word" value="<?=$wordInput?>">
	<?=$addMessage?><?=$failMessage?>
	
	<button type="submit" name="submitted">Add Word</button>
</form>


<form class="delete-word" action="" method="POST">
	<label for="word">Type the word you want deleted</label>
	<input type="text" name="remove" value="">
	
	<button class="delete" type="submit" name="deleted">Delete Word</button>
	<?=$message?>
</form>

