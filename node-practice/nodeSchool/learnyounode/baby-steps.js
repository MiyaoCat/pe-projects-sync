// console.log(process.argv);

let total = 0;

process.argv.forEach( function(arg, index) {
	if (index > 1) {
		total += Number(arg);
	}
});

console.log(total);