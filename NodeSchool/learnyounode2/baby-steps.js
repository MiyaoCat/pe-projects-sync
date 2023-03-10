//process is a global object. argv is a propery which contains the complete command line
	// process {
	// 	0: node,
	// 	1: file path
	// }

var total = 0;

for (i = 2; i < process.argv.length; i++) {
	total += Number(process.argv[i]);
}

console.log(total);