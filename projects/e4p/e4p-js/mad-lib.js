// Prompt for a noun
// If we get the noun, then  ask for a verb
// If the user clicks 'cancel' then end the questions
// If the user clicks "ok" without entering anything, then ask for a noun again
// Prompt for a verb
// Prompt for an adjective
// Prompt for an adverb
// Return a message using all words collected from the prompts

function madlib () {
	var getNoun = prompt("Enter a noun");

	if (getNoun) {
		function noun() {
			var getVerb = prompt("Please enter a verb");

			if (getVerb == null) {
				alert("Suit yourself, cya!");
			} 

			if (getVerb == 0) {
				alert("We said, enter a VERB!");
				noun();
			}

			if (getVerb) {
				function adjective() {
					var getAdjective = prompt("Quick, first adjective that comes to mind");

					if (getAdjective == null) {
						alert("You're gonna leave, now?!");
					} 

					if (getAdjective == 0) {
						alert("Fine, think about it. Now give us an adjective");
						adjective();
					}

					if (getAdjective) {
						function adverb() {
							var getAdverb = prompt("Adverb time");

							if (getAdverb == null) {
								alert("Now's not the time to quit!");
							} 

							if (getAdverb == 0) {
								alert("adverb, remember??");
								adverb();
							}

							if (getAdverb) {
								var message = alert("When two minutes were left in the game, the fans in the " + getAdjective + " section started to " + getVerb + " and " + getAdverb + " leave the game. I followed suit and quickly grabbed my " + getNoun + " and dashed out of the gym.");
							}
						}
						adverb();
					}
				}
				adjective();
			}
		}
		noun();
	}

	if (getNoun == null) {
		alert("Fine, leave");
	}

	if (getNoun == 0) {
		alert("uhhh...you didn't give us a noun");
		madlib();
	}
}

var madlibButton = document.createElement("button");
madlibButton.addEventListener("click", madlib);
madlibButton.textContent = "4. Madlib?";
document.querySelector('body').appendChild(madlibButton);



