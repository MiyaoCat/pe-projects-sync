import express from 'express';
import monsterData from './monsters.json' assert { type: 'json' };
import { URL } from 'node:url';
const __dirname = new URL('.', import.meta.url).pathname;

const app = express();
app.set('view engine', 'ejs');

const PORT = 2023;
app.listen(PORT, () => {
	console.log(`Server started at http://localhost:${PORT}`)
})

app.use( express.static('public') );
app.use( express.static('styles') );

//Page routes
app.get('/', function(request, response) {
	response.render('home')
});

app.get('/monsters', function(request, response) {
	response.render('monsters', { monsters: monsterData })
});

app.get('/monster/:slug', function(request, response) {
	
	const monster = monsterData.find( function(monster) {
		return monster.slug == request.params.slug;
	})

	response.render('detail', { monster });
});


app.use( function(request, response) {
	response.status(404).render('404', { query: request.url });
})
