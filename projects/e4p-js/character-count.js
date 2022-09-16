// What is the input string?
// "John"
// John has 4 characters

// Ask the user to type in a string of characters (a word or phrase)
// Retrieve the word or phrase and count the number of characters
// Return a message with the number of charcaters


function getCharacterLength() {
	var getString = prompt("Hi, write a word a phrase");
	
	if (getString) {
		var stringLength = getString.length;

		var message = "Your message, " + getString + " has " + stringLength + " characters.";

		alert(message);
	} else {
		alert("Type anything, anything!");
		getCharacterLength();
	}
}


var charCountButton = document.createElement('button');
charCountButton.addEventListener('click', getCharacterLength);
document.body.appendChild(startButton);
charCountButton.textContent = "2. Character count";
document.querySelector('body').appendChild(charCountButton);

var message = "Your message, " + getString + " has " + stringLength + " characters.";

		alert(message);