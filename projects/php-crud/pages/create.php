<?php 
	
	$firstName = "";
	$firstNameError = false;
	$hasfirstName = false;
	$firstNameMessage = "";

	$lastName = "";
	$lastNameError = false;
	$haslastName = false;
	$lastNameMessage = "";

	if ( isset($_POST["add"]) ) {

		if ( isset($_POST["firstName"]) ) {
			$firstName = $_POST["firstName"];
		
			if ( strlen($firstName) > 0) {
				$hasfirstName = true;
			} else {
				$firstNameError = "Please add a first name";
			}
		}	

		if ($hasfirstName) {
			$firstNameMessage = "Thank you!";
		}

		if ( isset($_POST["lastName"]) ) {
			$lastName = $_POST["lastName"];
		
			if ( strlen($lastName) > 0) {
				$haslastName = true;
			} else {
				$lastNameError = "Please add a last name";
			}
		}	

		if ($haslastName) {
			$lastNameMessage = "Thank you!";
		}
	}
 ?>

<h1>Add an Athlete</h1>

<form method="post">
	<field>
		<label for="firstName">Athlete First Name</label>
		
		<input name="firstName">
		
		<?php 
			if ($firstNameError) { ?>
			<p class="error"><?=$firstNameError?></p>
		<?php } ?>

		<?php 
			if ($firstNameMessage) { ?>
			<p class="success"><?=$firstNameMessage?></p>
		<?php } ?>

	</field>

	<field>
		<label for="lastName">Athlete Last Name</label>
		
		<input name="lastName">
		
		<?php 
			if ($lastNameError) { ?>
			<p class="error"><?=$lastNameError?></p>
		<?php } ?>

		<?php 
			if ($lastNameMessage) { ?>
			<p class="sucess"><?=$lastNameMessage?></p>
		<?php } ?>

	</field>
	<field method="post">
		
		<h3 class="attention-voice">What Sport do they play?</h3>

		<p class="quiet-voice">Please select all that apply</p>

		<label for="mens-basketball">Men's Basketball
			<input type="checkbox" name="mens-basksetball"></label>
			
		<label for="football">Football<input type="checkbox" name="football"></label>
		
	</field>

	<field method="post">

		<label for="city-select">What city are they from?</label>
		
		<select name="city" id="city">
			<option for="city-select" value="">--Please choose a city</option>
			<option value="seattle">Seattle</option>
			<option value="spokane">Spokane</option>
			<option value="Tacoma">Tacoma</option>
			<option value="Vancouver">Vancouver</option>
			<option value="Bellevue">Bellevue</option>
			<option value="other">Other</option>
		</select>	

	</field>

	<fieldset method="post">
		<div>
			<input type="radio" name="retired" value="yes">
			<label for="retired">Yes</label>
		
			<input type="radio" name="active" value="no">
			<label for="active">No</label>
		
			<input type="radio" name="unsure" value="not sure">
			<label for="unsure">Not Sure</label>
		</div>
	</fieldset>

	<button type="submit" name="add">Submit</button>
</form>








