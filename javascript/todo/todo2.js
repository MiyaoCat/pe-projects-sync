//LOCAL STORAGE PRACTICE
// const data = localStorage;

// const score = 0;

// let click = window.addEventListener('click');

// score++
// data.setItem('myDog', 'Sunny');
// data.setItem('myTeam', 'Huskies');

// data.setItem( 'org',  JSON.stringify({team: 'Kings', city: 'Sacramento'}) );

// const org = data.getItem('org');
// let kingsObject = JSON.parse(org);

// console.log(kingsObject);
// console.log(kingsObject.team);
// console.log(kingsObject.city);

// function setData(key, value) {
// 	data.setItem(key, value);

// 	console.log(`Added: ${value}`);
// }
// setData('team','Blazers');
// setData('team', 'Warriors');

// let dog = data.getItem('myDog');
// console.log(`My dog's name is ${dog}`);

// data.setItem('blazers', JSON.stringify({
// 	id: 'a1',
// 	team: 'Blazers',
// 	city: 'Portland',
// 	colors: 'Red and black'
// }) );

// const org2 = data.getItem('blazers');
// let blazersObject = JSON.parse(org2);

// console.log(blazersObject);
// console.log(blazersObject.id);
// localStorage.setItem("favoritePlayer", "Steph Curry");

// const player = localStorage.getItem('favoritePlayer');

// const message = `My favorite player is ${player}.`;

// document.body.textContent = message;



// //CONSTRUCTOR FUNCTION
function GroceryList() {
	this.list = [];
	this.customId = 1,

	this.display = function(note = "") {
		console.log(`---- ${note}`);
		console.log('All Items: ', this.list);
	},

	this.findCustomId = function(searchId) {
		return this.list.find( function(item) {
			return item.customId === searchId;
		})
	},

	this.add = function(item, count) {
		const newItem = {
			id: `a${this.customId++}`,
			item: item,
			count,
		}

		this.list = [...this.list, newItem];
		this.display(`Added: ${count} ${item}`)
	},

	this.remove = function(searchId) {
		// this.display(`Removed: ${this.list[id].item}`);
		// this.list.splice(id, 1);

		let found = this.findCustomId(searchId);
		if (found) {
			this.display(`Removed: ${this.list[searchId].item}`);
			this.list.splice(searchId, 1);
		} else {
			console.log('item not found');
		}
	} 
}

const list = new GroceryList();

list.add('beer', 6);
list.add('chocolate', 1);
list.add('ice cream', 2);

list.remove('a1');

list.add('cookies', 1);

GroceryList.prototype.update = function(id) {
	this.list[id].retrieved = true;
	this.display(`Retreived: ${this.list[id].item}`);
}

list.update('2');
// //LIST WITH ENCAPSULATION (FUNCTIONS AS OBJECTS)
// const morningRoutine = {

// 	routine: [],
// 	customId: 1,

// 	log: function(note = "") {
// 		console.log(`----${note}`);
// 		console.log('Routine: ', this.routine);
// 	},

	// findCustomId: function(searchId) {
	// 	return this.routine.find( function(routineStep) {
	// 		return routineStep.customId === this.searchId;
	// 	});
	// },

// 	add: function(step) {
// 		const routineObject = {
// 			id: `a${this.customId++}`,
// 			action: step,
// 		}
// 		//Instead of changing the value in memory, it's reassigned
// 		this.routine = [...this.routine, routineObject];

// 		//.push changes the list
// 		// this.routine.push(routineObject);
// 		this.log(`Added: ${step}`);
// 	},

// 	remove: function(searchId) {
// 		let found = this.findCustomId(searchId);
// 		if (found) {
// 			this.routine.splice(searchId, 1);
// 			this.log(`Removed: ${found.action}`);
// 		} else {
// 			console.log(searchId + ' not found');
// 		}
// 	},

// 	complete: function(searchId) {
// 		let found = this.findCustomId(searchId);
// 		if (found) {
// 			this.log(`Completed: ${found.action}`);
// 		} else {
// 			console.log(searchId + ' not found');
// 		}
// 	},

// 	update: function(searchId, newAction) {
// 		let found = this.findCustomId(searchId);
// 		if (found) {
// 			this.log(`Update: ${found.action} has been changed to ${newAction}`);
// 		} else {
// 			console.log(searchId + ' not found');
// 		}
// 	}
// }
// morningRoutine.add('Make coffee');
// morningRoutine.add('Brush teeth');
// morningRoutine.add('stetch');
// morningRoutine.add('Read email');
// morningRoutine.complete('a1');
// morningRoutine.remove('a1');
// morningRoutine.update('a4', 'Water plants');

// LIST WITH NO INTERFACE
// var goals = [];
// var count = 1;

// function log(note = "") {
// 	console.log(`----${note}`);
// 	console.log('Goals: ', goals);
// }

// function findById(searchId) {
// 	return goals.find( function(specificGoal) {
// 		return specificGoal.id === searchId;
// 	});
// }

// function add(newItem) {
// 	const list = {
// 		id: `a${count++}`,
// 		goal: newItem,
// 	};
// 	goals.push(list);

// 	log(`Added: ${newItem}`);
// };

// function remove(customID) {
// 	const found = findById(customID); 
// 		if (found) {
// 			goals.splice(customID, 1);
// 			log(`Removed: ${found.goal}`);
// 		} else {
// 			console.log(customID + ' not found');
// 		}

// 	// log(`Removed: ${goals[id].goal}`)
// 	// goals.splice(id, 1);
// }

// function complete(searchID) {
// 	const found = findById(searchID);

// 	if (found) {
// 		found.complete = true;
// 		log(`Completed: ${found.goal}`)
// 	} else {
// 		console.log(searchID + ' not found');
// 	}

// 	// goals[searchID].complete = true;
// 	// log(`Completed: ${goals[searchID].goal}`)
// }

// function update(searchID, newGoal) {
// 	const found = findById(searchID);

// 	if (found) {
// 		log(`Updated goal: ${found.goal} changed to ${newGoal}`);
// 		found.goal = newGoal;
// 	} else {
// 		console.log(searchID + ' not found');
// 	}

// 	// log(`Updated goal: ${goals[id].goal} changed to ${newGoal}`)
// 	// goals[id].goal = newGoal;
	
// }

// add('Get a Front End Dev Job');
// add('Cycle 200 miles in a month');
// add('Create a JS list without help!');
// complete('a1');
// remove('a1');
// update('a2', 'Complete a Century Ride');

// add('Complete a freelance project');
// remove('a5');















































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