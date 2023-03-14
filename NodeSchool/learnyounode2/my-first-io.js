const file = process.argv[2];
const fs = require('fs');

const readFile = fs.readFileSync(file);
const fileStr = readFile.toString();
const split = fileStr.split('\n');
const newLines = split.length-1;

console.log(newLines);

//SOLUTION
const fs = require('fs')

// const contents = fs.readFileSync(process.argv[2])
// const lines = contents.toString().split('\n').length - 1
// console.log(lines)
function addOne() {
  fs.readFile('number.txt', function doneReading(err, fileContents) { myNumber = parseInt(fileContents); myNumber++ } )
}

function doneReading(err, fileContents) { 
	myNumber = parseInt(fileContents) 
	myNumber++ 
}