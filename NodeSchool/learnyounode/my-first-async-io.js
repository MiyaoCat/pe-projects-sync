const fs = require('fs');

const path = process.argv[2];

fs.readFile(path, function(error, chunckOfData) {
	if (!error) {
		console.log(chunckOfData.toString().split('\n').length -1 );
	}

	
});
