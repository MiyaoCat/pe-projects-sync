function update(note = "") {
	console.log(`|--- ${note} ------|`);
	console.log('Groceries', groceryList);
}

function findById(customId) {
	const found = groceryList.find(function(list) {
		return list.id === customId;
	})
}

const groceryList = [];
var customID = 1;

function add(item) {
	const list = {
		id: `a${customID++}`,
		item: item
	};
	groceryList.push(list);
	update(`Added ${item}`);
}


function remove(id) { 
	// update(`Removed ${groceryList[id].item}`);
	// groceryList.splice(groceryList.id, 1);

	update(`Removed ${groceryList[id].item}`);
	groceryList.splice(groceryList.id, 1);
};

function complete(searchId) {
	const found = findById(searchId);

	if (found) {
		found.complete = true;
	} else {
		console.log(searchId + " not found");
	}
	// groceryList[id].complete = true;
	// update(`Retreived ${groceryList[id].item}`);
}

function updateList(searchId, newItem) {
	// groceryList[id].item = newItem;
	// update(`Item Updated ${groceryList[id].item}`);

	const found = groceryList.find(function(list) {
	return list.id == searchId;
});

	if (found) {
		found.content = newItem;
		update(`Updated ${found.item} to ${newItem}`);

	} else {
		console.log('searchId not found');
	}

	console.log(found);

	// update(`Updated ${found.content}`);
}

add('parsley');
add('lemon');



add('ground beef');

remove(0);

add('tomatoes');

updateList('a2', 'noodles');

complete('a4');

console.log(add);














//WORK WITH DEREK
// function update(note = "") {
// 	console.log(`----- ${note}`);
// 	console.log('todos: ', todos);
// }

// const todos = [];
// var count = 1;

// function add(content) {
// 	const todo = {
// 		id: `a${count++}`,
// 		content: content
// 	};
// 	todos.push(todo);
// 	update(`Added ${content}`);
// }

// function remove(id) {
// 	update(`Removed ${todos[id].content}`);
// 	todos.splice(id, 1);
// }

// function complete(id) {
// 	todos[id].complete = true;
// 	update(`Completed ${todos[id].content}`);
// }


// function updateObject(searchId, newContent) {
// 	// var found = false;

// 	// todos.forEach(function(todo, i){
// 	// 	if (todo.id == searchId) {
// 	// 		found = todo;
// 	// 	}
// 	// });
// 	// found.content = newContent;
	
// 	const found = todos.find(function(todo) {
// 		return todo.id == searchId;
// 	});

// 	if (found) {
// 		found.content = newContent;
// 		update(`Updated ${found.content}`);

// 	} else {
// 		console.log('searchId not found');
// 	}

// 	console.log(found);

// 	// update(`Updated ${found.content}`);
// }

// add("Make breafast")
// add("drink water");
// add("stretch");
// add("exercise");

// complete(2);
// add("read");

// remove(2);

// add("Go to sleep!");

// updateObject('a2', 'Eat food');

// remove(1);
// remove(2);