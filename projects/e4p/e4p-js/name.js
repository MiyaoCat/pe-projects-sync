// SAYING HELLOW
// What is your name?

// Ask user their name with a message prompt
//if the user clicks 'cancel', end the prompt
// if the user leaves the prompt blank and clicks "ok", ask for their name again
// if the User enters a name
// Return a message with the user's name



function intro() {
	var name = prompt("Hey there, what's your name?");
	
	if (name) {
		var message = "Hi, " + name + "! Great to meetchya!";
			alert(message);
	
	} if (name == null) {
		alert("Fine, we won't greet you then!");	

	} if (name == 0) {
		alert("We're not leaving you without getting your name!");
		intro();
	}
}

var startButton = document.querySelector(".name");
startButton.textContent = "1. Name";
startButton.addEventListener("click", intro);
