import express from 'express';
import monsterData from './monsters.json' assert { type: 'json' };
import { URL } from 'node:url';
const __dirname = new URL('.', import.meta.url).pathname;

const app = express();
const PORT = 2023;

app.set('view engine', 'ejs');
app.use( express.static('public') );
app.use( express.static('styles') );

app.get('/', function(request, response) {
	response.render('home')
});

app.get('/monsters', function(request, response) {
	response.render('monsters', { monsters: monsterData })
});

app.get('/monster', function(request, response) {
	response.render("detail")
});

app.use( function(request, response) {
	response.status(404).render('404', { query: request.url });
})
app.listen(PORT, () => {
	console.log(`Server started at http://localhost:${PORT}`)
})