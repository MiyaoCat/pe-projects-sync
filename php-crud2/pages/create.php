<?php 
 
	$firstName = "";
	$firstNameError = false;
	$hasFirstName = false;
	$firstNameMessage = "";

	$lastName = "";
	$lastNameError = false;
	$haslastName = false;
	$lastNameMessage = "";

	

	//check if the form is submitted (did user click submit button?)		
	function allFieldsFull($fields) {
		foreach ($fields as $field) {
			
			if ( !isset($_POST[$field]) ) {
				return false;
				exit;
			} 
		}	
		return true;

	}	
	$fieldsToCheck = ['firstName', 'lastName', 'sport'];

	allFieldsFull($fieldsToCheck);

	if ( isset($_POST["submitted"]) ) {
		if ( allFieldsFull($fieldsToCheck) ) {

			//get the current JSON database (Convert JSON to PHP)
			$json = file_get_contents("data/players.json");
			$playersData = json_decode($json, true);

			$firstName = $_POST['firstName'];
			$lastName = $_POST['lastName'];	
			$sportSelected = $_POST['sport'];		

			//	Create a record of player
			$playerRecord = [
				"id" => uniqid("a_"),
				"firstName"=> $firstName,
				"lastName"=> $lastName,
				"slug"=> strtolower($firstName . "-" . "$lastName"),
				"sport" => $sport
			];

			//add new record to JSON file
			array_push($playersData, $playerRecord);

			//convert file back to JSON 	
			$json = json_encode($playersData);
			//save JSON file with new record	
			file_put_contents("data/players.json", $json);

			// header("Location: ?page=home");

		}
	
}

?>

<h1>Add an Athlete</h1>
<?php if ( isset($_POST["submitted"]) ) { 
	echo "player added";
	} ?>

<form method="post">
<field>
	<label for="firstName">*Athlete's First Name</label>
	
	<input name="firstName" required>

</field>

<field>
	<label for="lastName">Athlete's Last Name</label>
	
	<input name="lastName" >
	
	<?php 
		if ($lastNameError) { ?>
		<p class="error"><?=$lastNameError?></p>
	<?php } ?>

	<?php 
		if ($lastNameMessage) { ?>
		<p class="success"><?=$lastNameMessage?></p>
	<?php } ?>
</field>

<!-- - CHECK MARK - --> 

<field method="post">
	
	<h3 class="attention-voice">What Sport do they play?
	</h3>

	<label for="basketball">Men's Basketball
		<input type="checkbox" name="sport"></label>
		
	<label for="football">Football<input type="checkbox" name="sport"></label>
	<?php //checkbox
	
	$sportError = "";
	$sportSelected = "";

	if ( isset($_POST["submitted"]) ) {
		if ( isset($_POST["sport"]) ) {
			$sport = $_POST["sport"];
			$sportSelected = "Sweet!";
		} else {
			$sportError = "Please select a sport!";
		}
		
	}	
	if ($sportError) { ?>
		<p class="error"><?=$sportError?></p>
	<?php } ?>	

	<?php if ($sportSelected) { ?>
		<p><?=$sportSelected?></p>
	<?php } ?>
</field>

<!-- - DROPDOWN - --> 
<field method="post">

	<label for="city-select">What city are they from?</label>
	<?php 
	//name 'city' becomes whatever the selected value is
	 ?>
	<select name="city" id="city" >
		<option for="city-select" value="">--Please choose a city</option>
		<option value="seattle">Seattle</option>
		<option value="spokane">Spokane</option>
		<option value="Tacoma">Tacoma</option>
		<option value="Vancouver">Vancouver</option>
		<option value="Bellevue">Bellevue</option>
		<option value="other">Other</option>
	</select>	

</field>
<!-- - RADIO BUTTON - --> 
<?php 
	
	

 ?>

<fieldset method="post">
	<div>
		<?php //name 'retired' becomes name of selected input (retired, active, selected') ?>
		<input type="radio" name="retired" value="yes" >
		<label for="retired">Yes</label>
	
		<input type="radio" name="retired" value="no">
		<label for="active">No</label>
	
		<input type="radio" name="retired" value="not sure">
		<label for="unsure">Not Sure</label>
	</div>
</fieldset>

<button type="submit" name="submitted">Submit</button>
</form>








