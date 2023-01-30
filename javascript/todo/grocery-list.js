// //CONSTRUCTOR FUNCTION
function GroceryList() {

	const $form = document.querySelector('form');
	const $input = $form.querySelector('input');
	const $output = document.querySelector('output');
	const $actions = $form.querySelector('actions');
	
	this.list = [];
	this.customId = 1,

	this.display = function(note = "") {
		console.log(`---${note}`);
		console.log('All Items: ', this.list);
	}

	this.findById = function(searchId) {
		return this.list.find( function(specificItem) {
			return specificItem.id === searchId;
		});
	},

	this.add = function(itemName) {
		const newItem = {
			id: `a${this.customId++}`,
			item: itemName,
		};

		this.list = [...this.list, newItem];
		this.display(`Added: ${itemName}`);
	},

	this.remove = function(idToSearch) {
		const found = this.findById(idToSearch);

		if (found) {
			this.display(`Removed: ${found.item}`);
			this.list.splice(idToSearch, 1);
		} else {
			console.log('Item not found');
		}
	},

	this.update = function(idToSearch, updatedItem) {
		const found = this.findById(idToSearch);

		if (found) {
			this.display(`Updated ${found.item} to ${updatedItem}`)
			
			found.item = updatedItem;
		} else {
			console.log('Item not found');
		}
	}
}

let groceryList = new GroceryList();

groceryList.add('chips');
groceryList.add('rice');
groceryList.add('nuts');
groceryList.add('beans');

groceryList.remove('a2');

groceryList.update('a3', 'cake');


