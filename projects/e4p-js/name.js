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
	} else {
		alert("We're not leaving you without getting your name!");
		intro();
	}
}

var startButton = document.createElement("button");
startButton.addEventListener("click", intro);
document.body.appendChild(startButton);
startButton.textContent = "1. What's ya name?";
document.querySelector('body').appendChild(startButton);