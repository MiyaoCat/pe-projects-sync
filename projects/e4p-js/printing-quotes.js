// What is the quote?
// Who sait?
// Output: Author says, quote

// Prompt user to provide a quote
// Save the quote with a variable for recall
// Ask the user to provide the author of the quote
// Save the quote with a variable for recall
// Display a message that includes the author and the quote

function quote() {

	var getQuote = prompt("What's your favorite quote to recite?");

	if (getQuote) {

		var getAuthor = prompt("Who said that?");

		if (getAuthor) {
			var message = getAuthor + " once said \"" + getQuote + ".\"";
			alert(message);
		} else {
			alert("If you don't know who said it, just say so.");
		}
	} else {
		alert("We really need a quote");
		quote();
	}


}

var quoteButton = document.createElement('button');

quoteButton.addEventListener('click', quote);
quoteButton.textContent = "3. Quote";
document.querySelector('body').appendChild(quoteButton);


























