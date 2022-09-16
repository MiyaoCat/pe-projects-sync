// What is the quote?
// Who sait?
// Output: Author says, quote

// Prompt user to provide a quote
// Save the quote with a variable for recall
// if the user clicks "cancel", they can end the questioning
// if the user does not provide a quote and clicks OK, ask the user to provide a quote again

// If the user provides a quote, ask the user to provide the author of the quote
// if the user clicks "cancel", they can end the questioning
// if the user does not provide an authoer and clicks OK, ask the user to provide an authoer again
// Save the author with a variable for recall

// Display a message that includes the author and the quote


function quote() {
	var getQuote = prompt("What's your favorite quote to recite?");

	if (getQuote) {
		function author() {
			var getAuthor = prompt("Who said that?");

			if (getAuthor) {
				var message = alert(getAuthor + " said \"" + getQuote + ".\"");
			}
			
			if (getAuthor == null) {
				alert("Okay, byeee");

			} if (getAuthor == 0) {
				alert("Tell us who said that!!!");
				author();
			}
		}
		author();
	} 

	if (getQuote == null) {
		alert("byeee");

	} if (getQuote == 0) {
		alert("We really need a quote");
		quote();
	}
} 


function author() {
	var getAuthor = prompt("Who said that?");

	if (getAuthor) {
		var getQuote = prompt("What's your favorite quote to recite?");
	}
	
	if (getAuthor == null) {
		alert("Okay, byeee");

	} if (getAuthor == 0) {
		alert("Tell us who said it");
		getAuthor();
	}
}

var quoteButton = document.createElement('button');

quoteButton.addEventListener('click', quote);
quoteButton.textContent = "3. Quote";
document.querySelector('body').appendChild(quoteButton);



















