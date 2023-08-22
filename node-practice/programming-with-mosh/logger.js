const EventEmitter = require('events');

var url = "http://mylogger.io/log";

class Logger extends EventEmitter {
	log(message) {
		// Send an HTTP request
		console.log(message)

		//emit - signalling an event has happened
		this.emit('messageLogged', { id: 1, url: 'http://'});
	}
}



module.exports = Logger;
