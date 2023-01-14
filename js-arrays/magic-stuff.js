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
		team.textContent = list.team + ": " + list.name;

		ol.appendChild(team);
	});

	document.body.appendChild(ol);

}

printList(players, "Best Players in Pacific Coast Division by Team");

printList(mvp, "MVP's");

printList(pointGuards, "Point Guards");

printList(smallForwards, "Small Forwards");















