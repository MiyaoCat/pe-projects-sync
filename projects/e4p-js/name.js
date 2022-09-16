// SAYING HELLOW
// What is your name?

// Ask user their name with a message prompt
// User enters a name
// Return a message with the user's name


function intro() {
	var name = prompt("Hey there, what's your name?");
	
	if (name) {
		var message = "Hi, " + name + "! Great to meetchya!";
			alert(message);
	
	} if (name == null) {
		alert("Fine, we won't greet you then!");	

	} else {
		alert("We're not leaving you without getting your name!");
		intro();
	}
}

var startButton = document.querySelector(".name");
startButton.addEventListener("click", intro);