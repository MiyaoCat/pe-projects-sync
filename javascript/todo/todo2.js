function log(note = ""){
	console.log(`----${note}`);
	console.log('Athletes: ', athletes);
}

const athletes = [];
var count = 1;

log();

function add(athlete, team) {
	var list = {
		id: `a${count++}`,
		athlete: athlete,
		team: team,
	};
	athletes.push(list);
	log(`Added: ${athlete}`);
}

function remove(id) {
	log(`Removed: ${athletes[id].athlete}`);
	athletes.splice(id, 1);
}

function allStar(id) {
	athletes[id].complete = true;
	log(`Added ${athletes[id].athlete} to All Stars`);
}


function update(id, newAthlete) {
	athletes[id].athlete = newAthlete;
	log(`${newAthlete} has been updated`)
}

add('Michael Jordan', 'Bulls');
add('Steph Curry', 'Warriors');
add('Damian Lillard', 'Blazers');
add("De'Aaron Fox", 'Kings');
log();


remove(0);
log();

allStar(1);
update(1, 'Trae Young');