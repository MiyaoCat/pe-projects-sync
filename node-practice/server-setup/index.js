import { double, half, hello } from "./math.js";
import http from "node:http";

console.log(double(3));
console.log(half(3));
console.log(hello("john"));

const person = {
	"name": "John"
};
const server = http.createServer( function(request, response) {
	// console.log('response', response);
	// console.log( request.url );
	// console.log( request.method );

	//if only writing one thing, can write it to the end method
	// response.end("I'm a webpage");

	//More likely going to write multiple things, get used to this practice
	response.statusCode = 201;
	response.setHeader("Content-type", "text/html");
	response.write("I'm a webpage!!!");
	response.write("<h1>I'm not webpage!!!</h1>");
	// response.write( JSON.stringify(person) );
	response.end();

	
});

const PORT = 1990;
server.listen(PORT, 'localhost', function() {
	console.log(`Listening at http://localhost:${PORT}`);
})