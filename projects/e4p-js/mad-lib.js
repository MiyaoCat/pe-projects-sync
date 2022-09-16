// Prompt for a noun
// Prompt for a verb
// Prompt for an adjective
// Prompt for an adverb
// Return a message using all words collected from the prompts

function madlib () {
	var getNoun = prompt("Enter a plural noun");

	if (getNoun) {
		var getVerb = prompt("Enter a verb ending in 'ing'");

} 

var madlibButton = document.createElement("button");
madlibButton.addEventListener("click", madlib);
document.body.appendChild(madlibButton);
madlibButton.textContent = "4. Madlib?";
document.querySelector('body').appendChild(madlibButton);