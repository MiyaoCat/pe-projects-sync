import path from 'path'
import express from 'express'
import { fileURLToPath } from 'url'
import { client } from './config/prismicConfig.js'

const app = express();
const port = process.env.PORT || 3000

// Set EJS as templating engine
app.set('view engine', 'ejs')
const __dirname = path.dirname(fileURLToPath(import.meta.url))
app.use(express.static(path.join(__dirname, 'views')))

// Add a middleware function that runs on every route. It will inject 
// the prismic context to the locals so that we can access these in 
// our templates.
app.use((req, res, next) => {
  res.locals.ctx = {
    prismic,
  }
  next()
})

// Query for the root path.
app.get('/', async (req, res) => {
  // Here we are retrieving the first document from your API endpoint
  const document = await client.getFirst()
  res.render('page', { document })
})

app.get('/', async (req, res) => {
  const document = await client.getSingle('home')
  res.render('page', { document })
})


// Listen to application port.
app.listen(port, () => {
  console.log(`Example app listening at http://localhost:${port}`)
})

