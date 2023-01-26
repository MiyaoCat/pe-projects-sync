var goals = [];
var count = 1;

function log(note = "") {
	console.log(`----${note}`);
	console.log('Goals: ', goals);
}

function findById(searchId) {
	return goals.find( function(specificGoal) {
		return specificGoal.id === searchId;
	});
}

function add(newItem) {
	const list = {
		id: `a${count++}`,
		goal: newItem,
	};
	goals.push(list);

	log(`Added: ${newItem}`);
};

function remove(customID) {
	const found = findById(customID); 
		if (found) {
			goals.splice(customID, 1);
			log(`Removed: ${found.goal}`);
		} else {
			console.log(customID + ' not found');
		}

	// log(`Removed: ${goals[id].goal}`)
	// goals.splice(id, 1);
}

function complete(searchID) {
	const found = findById(searchID);

	if (found) {
		found.complete = true;
		log(`Completed: ${found.goal}`)
	} else {
		console.log(searchID + ' not found');
	}

	// goals[searchID].complete = true;
	// log(`Completed: ${goals[searchID].goal}`)
}

function update(searchID, newGoal) {
	const found = findById(searchID);

	if (found) {
		log(`Updated goal: ${found.goal} changed to ${newGoal}`);
		found.goal = newGoal;
	} else {
		console.log(searchID + ' not found');
	}

	// log(`Updated goal: ${goals[id].goal} changed to ${newGoal}`)
	// goals[id].goal = newGoal;
	
}

add('Get a Front End Dev Job');
add('Cycle 200 miles in a month');
add('Create a JS list without help!');
complete('a1');
remove('a12');
update('a2', 'Complete a Century Ride');































































// function log(note = "") {
// 	console.log(`---- ${note}`);
// 	console.log('Thing to do: ', pdxThingsToDo);
// }

// var pdxThingsToDo = [];
// var count = 1;

// function add(thing) {
// 	const list = {
// 		id: `a${count++}`,
// 		activity: thing,
// 	};
// 	pdxThingsToDo.push(list);
// 	log(`Added: ${thing}`);
// }

// function remove(id) {
// 	log(`Removed: ${pdxThingsToDo[id].activity}`);
// 	pdxThingsToDo.splice(id, 1);
// }

// function complete(id) {
// 	pdxThingsToDo.complete = true;
// 	log(`Completed: ${pdxThingsToDo[id].activity}`);
// }

// function update(id, newActivity) {
// 	var oldActivity = pdxThingsToDo[id].activity;

// 	log(`Update: ${oldActivity} has been updated to ${newActivity}`);

// 	pdxThingsToDo[id].activity = newActivity;
// }

// add('Go to Powells Books');
// add('Trailblazers Game');
// add('Rose Garden');
// add('Shave Ice at Wailua');
// complete(1);
// remove(1);
// update(1, 'Explore Pearl District');
// console.log(pdxThingsToDo);