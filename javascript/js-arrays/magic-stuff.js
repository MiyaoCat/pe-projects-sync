var simplePlayers = [
		"De'Aaron Fox",
		"Damian Lillard",
		"Steph Curry",
		"LeBron James",
		"Kawhi Leonard",
		"Chris Paul",
	]

var players = [
	{
		name: "De'Aaron Fox",
		team: "Sacramento Kings",
		position: "Point Guard",
		mvp: false,
	},
	{
		name: "Damian Lillard",
		team: "Portland Trailblazers",
		position: "Point Guard",
		mvp: false,
	},
	{
		name: "Steph Curry",
		team: "Golden State Warriors",
		position: "Point Guard",
		mvp: true,
	},
	{
		name: "LeBron James",
		team: "LA Lakers",
		position: "Small Forward",
		mvp: true,
	},
	{
		name: "Kawhi Leonard",
		team: "LA Clippers",
		position: "Small Forward",
		mvp: false,
	},
	{
		name: "Chris Paul",
		team: "Phoenix Suns",
		position: "Point Guard",
		mvp: false,
	}
];

//THIS SEEMS A LITTLE LESS FLEXIBLE
// function displayItem(item, index, fullArray) {
// 	var number = index + 1;
// 	console.log(item.name);
// }

// players.forEach( displayItem );

// players.forEach( function(athlete) {
// 	console.log(athlete.name);
// 	console.log(athlete.team);
// 	console.log(athlete.position);
// 	console.log("---------------------");

// });

players.forEach( function(athlete) {
	//if the player is a point guard
	if (athlete.position == "Point Guard") {
	//put them on the list
		console.log(athlete.name);
	}
});

console.log("-----------------------------------");

players.forEach( function(athlete) {
	if (athlete.mvp) {
		console.log(athlete.name);
		console.log("You da real MVP! ");
	} 
});

console.log("-----------------------------------");

players.forEach( function(athlete) {
	if (athlete.position == "Small Forward") {
		console.log(athlete.team + ": Their best player is NOT a Point Gaurd, interesting");
	}
});


var pointGuards = players.filter( function(athlete) {
	return athlete.position == "Point Guard";
});

var smallForwards = players.filter( function(athlete) {
	return athlete.position == "Small Forward";
});

var mvp = players.filter( function(athlete) {
	return athlete.mvp;
});

//create function that accepts an array and generates markup
function printList(list, heading) {
	//must have heading 
	var h2 = document.createElement("h2");
	h2.textContent = heading;
	document.body.appendChild(h2);

	var ol = document.createElement("ol");

	list.forEach( function(list) {
		var team = document.createElement("li");
		team.textContent = list.name;

		ol.appendChild(team);
	});

	document.body.appendChild(ol);

	if (newPlayer) {

	}
}

printList(players, "Best Players in Pacific Coast Division by Team");

// printList(mvp, "MVP's");

// printList(pointGuards, "Point Guards");

// printList(smallForwards, "Small Forwards");

function createLine(){
	var line = document.createElement("div");
	line.style.border = "2px solid black";
	document.body.appendChild(line);
}

createLine();

var newPlayer = players.push(
	{
		name: "Domantas Sabonis",
		team: "Sacramento Kings",
		position: "Power Forward",
		mvp: false,
	});

// console.log(players);

printList(players, "Player Pushed to List");

createLine();

function createTitle(title) {
	var h2 = document.createElement("h2");
	h2.textContent = title;
	document.body.appendChild(h2);
};

createTitle("Is it an Array?");

function anArray(testArray) {
	var test = Array.isArray(testArray);

	if (test) {
		var p = document.createElement("p");
		p.textContent = "Yes. You are an Array";
		document.body.appendChild(p);
	} else {
		var p = document.createElement("p");
		p.textContent = "No. You are not an Array";
		document.body.appendChild(p);
	}
}

anArray(players);
anArray("one");
anArray(newPlayer);

createLine();

createTitle("How Many Objects in the Array?");

function arrayLength(array) {
	var length = array.length;
	message = "The array has " + length + " objects.";
	
	var p = document.createElement("p");
	p.textContent = message;
	document.body.appendChild(p);
};

arrayLength(players);

arrayLength([1, 2, 3, 4, 5,]);

arrayLength(simplePlayers);

createLine();

createTitle("Using Array.From");


