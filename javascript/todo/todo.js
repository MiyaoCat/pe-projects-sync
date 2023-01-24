function update(note = "") {
	console.log(`|--- ${note} ------|`);
	console.log('Groceries', groceryList);
}

const groceryList = [];
var count = 1;

function add(item) {
	const list = {
		id: `a${count++}`,
		item: item
	};
	groceryList.push(list);
	update(`Added ${item}`);
}


function remove(id) { 
	update(`Removed ${groceryList[id].item}`);
	groceryList.splice(groceryList.id, 1);
};

function complete(id) {
	groceryList[id].complete = true;
	update(`Retreived ${groceryList[id].item}`);
}

function updateList(id, newItem) {
		groceryList[id].item = newItem;
	update(`Item Updated ${groceryList[id].item}`);
}

add('parsley');
add('lemon');

complete(0);

add('ground beef');

remove(0);

add('tomatoes');

updateList(1, 'noodles');































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