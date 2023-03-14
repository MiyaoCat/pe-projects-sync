import { URL } from 'url';
const __dirname = new URL ('.', import.meta.url).pathname;
import express from 'express';

const app = express();
const PORT = 1986;

// Setup EJS view engine. EJS allows for .render method
app.set('view engine', 'ejs');

// Automatically serve up static files in the public directory
app.use(express.static('public'));

// Page Routing
app.get('/', function(request, response) {
	response.render('home', { pageName: 'The Home Page' } );
});

app.get('/about', function(request, response) {
	response.sendFile('example.html', { root: __dirname });
});

app.get('/contact', function(request, response) {
	response.send("<h1>CONTACT</h1>");
});

app.get('/api', function(request, response) {
	response.send({ "name": "John" });
});

// If not route defined
app.use( function(request, response) {
  response.status(404).send("Sorry can't find that!")
})

// Start app
app.listen(PORT);
