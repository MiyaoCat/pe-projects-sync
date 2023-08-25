import express from 'express';
import { URL } from 'node:url';

const app = express();
const PORT = 2023;
app.get('/', function(request, response) {
	response.send("<h1>Home Page</h1>")
});

app.listen(PORT, () => {
	console.log(`Server started at http://localhost:${PORT}`)
})