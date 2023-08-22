
// const os = require('os');
// const path = require('path');
// console.log("- - - - - - - - - - - - - - - - - - - - - - - - - - - - ")
// console.log("OS TYPE: ", os.type())
// console.log("OS VERSION: ", os.version())
// console.log("OS HOME DIRECTORY: ", os.homedir())

// console.log("- - - - - - - - - - - - - - - - - - - - - - - - - - - - ")
// console.log("DIRCTORY NAME: ", path.dirname);
// console.log("FILE NAME: ", path.filename);

// console.log("- - - - - - - - - - - - - - - - - - - - - - - - - - - - ")
// console.log("PATH.DIRECTORY NAME: ", path.dirname(__filename));
// console.log("PATH.BASE NAME: ", path.basename(__filename));
// console.log("PATH.EXTENSION NAME: ", path.extname(__filename));

// console.log("- - - - - - - - - - - - - - - - - - - - - - - - - - - - ")
// console.log("MODULE: ", module)

// const os = require('os');
// const path = require('path');

// var pathObject = path.parse(__filename);

// var logger = require('./logger.js');

// console.log("- - - - - - - - - - - - - - - - - - - - - - - - - - - - ")
// console.log("FILE NAME: ", __filename);
// console.log("DIRECTORY NAME: ", __dirname);
// console.log("- - - - - - - - - - - - - - - - - - - - - - - - - - - - ")
// console.log("pathObject.base: ", pathObject.base)
// logger.log("message");
// console.log("- - - - - - - - - - - - - - - - - - - - - - - - - - - - ")
// console.log("FREE MEMORY: ", os.freemem());
// console.log("TOTAL MEMORY: ", os.totalmem());
// console.log("HOST NAME: ", os.hostname());
// // console.log("NETWORK INTERFACES: ", os.networkInterfaces());
// console.log("OS TYPE: ", os.type());
// console.log("OS ENDIANNESS?: ", os.endianness());
// console.log("OS UPTIME: ", os.uptime());
// console.log("OS USER: ", os.userInfo([]));
// console.log("- - - - - - - - - - - - - - - - - - - - - - - - - - - - ")
// console.log("       - - - - - SYNCHRONOUS - - - - -      ")
// const fs = require('fs');
// const files = fs.readdirSync('./');
// console.log("FILES: ", files)
// console.log("- - - - - - - - - - - - - - - - - - - - - - - - - - - - ")
// console.log("       - - - - - ASYNCHRONOUS - - - - -      ")
// fs.readdir('./', function(err, files) {
// 	if (err) console.log("ERROR:", err);
// 	else console.log("RESULT: ", files);
// });
console.log("- - - - - - - - - - - - - - - - - - - - - - - - - - - - ")
const Logger = require('./logger.js');
const logger = new Logger();

//Register a listener
logger.on('messageLogged',  function(arg) {
	console.log("LISTENER CALLED: ", arg)
});

logger.log("message");













