import { URL } from 'url';
const __dirname = new URL('.', import.meta.url).pathname;

import express from 'express';
const app = express();

//Setup EJS view engine
app.set('view engine', 'ejs');
const PORT = 1999;

// Automatically serve up static files like images in the public directory
app.use(express.static('public'));

//Page routing
app.get('/', function(request, response) {
	response.render('home', { pageName: "Hometown Heroes" });
});

app.get('/about', function(request, response) {
	response.sendFile('example.html', { root: __dirname } );
});

app.get('/team', function(request, response) {
	response.send("<h1>TEAM</h1>");
});

app.get('/api', function(request, response) {
	response.send( {"name": "De'Aaron Fox"} );
});

//This is like an 'else' statement. If none of the above work, then use this statement
app.use( function(request, reqsponse) {
	response.status(404).send("Sorry, what you're lookin' for aint' here")
});

//Start app
app.listen(PORT);