import { double, half } from '/library.js';

const outlet = document.querySelector("output");

// outlet.innerHTML = library.double(11)	

outlet.innerHTML = half(11);
outlet.innerHTML = half(33);

function sayHello(name) {
	console.log("hello " + name)
}

sayHello("John")
