import path from 'path'
import express from 'express';

// import monsterData from './monsters.json' assert { type: 'json' };
import contentData from './app-content.json' assert { type: 'json' };
import { URL } from 'node:url';

import contentful from 'contentful';

const client = contentful.createClient({
  space: 'pbgxh8642zcb',
  environment: 'master', // defaults to 'master' if not set
  accessToken: '0b_pHr0SphVRNZjvz0KqFX2kaw3_-if8M3_DHe8LrSc'
})

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

	client.getEntry('4LYWXGUv1hQXbELnBwWm7s')
		.then( function(entry) {
			console.log('ENTRY: ', entry)
			response.render('home', { page: entry.fields, content: contentData });
		})
		.catch(console.error)

	
});

app.get('/monsters', function(request, response) {

	client.getEntries({
		content_type: 'monster'
	})
		.then( function(data) {
			

			const monsterData = data.items.map( function(item) {
				return {
					name: item.fields.name,
					story: item.fields.story.content[0].value,
					portrait: item.fields.portrait.fields.file.url,
					adopted: item.fields.adopted,
					birthday: item.fields.birthday,
					color: item.fields.color
				};
			});
			console.log(monsterData)
			response.render('monsters', { monsters: monsterData, content: contentData })
		})
		.catch(console.error)
});

app.get('/monster/:slug', function(request, response) {
	
	const monster = monsterData.find( function(monster) {
		return monster.slug == request.params.slug;
	})

	response.render('detail', { monster });
});

app.get('/adopted', function(request, response) {
	
	const adoptedMonsters = monsterData.filter( function(monster) {
		return monster.adopted == true;
	})
	response.render('adopted', { adoptedMonsters, content: contentData });
});

app.use( function(request, response) {
	response.status(404).render('404', { query: request.url });
})
 