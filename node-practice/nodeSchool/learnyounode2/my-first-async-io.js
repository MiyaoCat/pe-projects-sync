const file = process.argv[2];
const fs = require('fs');

var readFile = fs.readFile(file, 'utf8', function(err, data) {
	if (err) {
		return "there's an error";
	}
	const newLines = data.split('\n').length - 1;

	console.log(newLines);
});
 