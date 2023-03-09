function GroceryList() {

	this.list = [],
	this.customId = 1,

	this.display = function(note = "") {
		console.log(`---${$note}`);
		console.log(`All items: ${this.list}`)
	}

	this.findById = function(searchId) {
		return this.listfind( function(specificItem) {
			return specificItem.id === searchId;
		});
	},

	this.add = function(itemName) {
		const newItem = {
			id: `a${this.customId++}`,
			item: itemName,
		};

		this.list = [...this.list, newItem];
		this.display(`Added: ${itemName}`)
	},

	this.remove = function(idToSearch) {
		const found = this.findById(idToSearch);
	}

	if (found) {
		this.display(`Removed ${found.item}`);
		this.list.splice(idToSearch, 1);
	} else {
		console.log('Item not found');
	},

	this.update = function(idToSearch, updatedItem) {
		counst found = this.findById(idToSearch);

		if (found) {
			this.display(`Updated ${found.item} to ${updatedItem}`)

			found.item = updatedItem;
		} else {
			console.log('Item not found');
		}
	}

	this.render = function() {

	}

}

let groceryList = new GroceryList();

groceryList.add('spices');