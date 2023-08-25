import http from 'node:http';
import fileSystem from 'node:fs';

const server = http.createServer( function(request, response) {

	let pagePath = 'pages/';

	if (request.url === '/') {
		console.log('home sweet home');
		pagePath += 'home.html';
	}

	if (request.url === '/about') {
		console.log('about last night');
		pagePath += 'about.html';
	}

	fileSystem.readFile(pagePath, function(error, data) {
		if (error) {
			return console.log("ERROR!", error);
			response.statusCode = 404;
		}	
		response.statusCode = 200;
		response.setHeader('Content-Type', 'text/html');
		response.write( data, 'utf-8' );
		response.end();
	});

	//check path
	// console.log('page: ', pagePath);

	
});

const PORT = 5150;
const HOSTNAME = 'localhost';

server.listen(PORT, HOSTNAME, function() {
	console.log(`Server is running at http://${HOSTNAME}:${PORT}`);
})
