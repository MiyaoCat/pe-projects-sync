// const { v4: uuidv4 } = require('uuid');

// console.log("unique id: ", uuidv4() );
// import path from 'node:path';
// import { fileURLToPath } from 'node:url';

// console.log("Hi john");

//ES6 EXAMPLE TO GET DIRNAME/FILENAME 1
// const __filename = fileURLToPath(import.meta.url);
// const __dirname = path.dirname(__filename);
 
//ES6 EXAMPLE TO GET DIRNAME/FILENAME 2
// import * as url from 'url';
// const __filename = url.fileURLToPath(import.meta.url);
// const __dirname = url.fileURLToPath(new URL('.', import.meta.url))

// console.log("dir name: ", __dirname);
// console.log("file name: ", __filename);

// const math = require('./math.js');
// console.log("double: ", math.doubleUp(3));

// console.log("triple: ", math.triple(3));

// console.log("half: ", math.half(3));


const { doubleUp, triple, half } = require('./math.js');
console.log("double: ", doubleUp(3));

console.log("triple: ", triple(3));

console.log("half: ", half(3));