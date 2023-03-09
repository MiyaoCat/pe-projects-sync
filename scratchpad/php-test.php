<?php

function test($assertion, $description) {
	if ($assertion == true) {
 		echo "<li style='color: green'>PASS: $description</li>";
	} else {
		echo "<li style='color: red'>FAIL: $description</li>";
	}
}
​
test( 2 == 2, "2 == 2"); // example test
​
// something is true or false - that's the assertion 
// then there's just a message to help explain the test
// then there's a visual output to help show what passes or fails
​
test( 2 + 2 != 5, "2 + 2 = 5 isn't true!");
​
​
// If you aren't feeling confident about ^ this 'test' function...
// then let's talk about it before you move on
​
​
​
​
​
​
​
​
​
​
// #0 (completed example)
// create a function named sheriffMaker
// that expects a 'name' argument (a string) and returns the value of "sheriff" + "name"
​
function sheriffMaker($name) {
	return "sheriff" . $name;
}
​
​
// sheriffMaker("derek"); (when executed) will result in the returned value
// this way, you can choose to use it in another situation or save it to a variable
// or echo it at any later time. The executed function will end up like a variable
​
function greeting($saying) {
	return $saying . ", I'm " . sheriffMaker('derek') . ".";
}
​
​
// Now, if we didn't use these return statements vs echo - what would happen?
// You wouldn't be able to compose them and work with their values.
// instead, the values would just be printed to the screen any time the function was run
// and you woudln't have very much control. 
// Also, only some functions even have a string for an output.
?>
​
<!-- then you can choose where you want to use it -->
​
<p><?php echo greeting("Hello"); ?></p>
​
​
<?php
​
// and you wouldn't be able to test them either
​
test( greeting("Hola") == "Hola, I'm sheriffderek.", "Greeting properly concatenated" );
​
​
​
​
​
// CHALLENGES !!!
​
​
​
​
​
// #1 create a function named "tripple" that passes these tests
// the function should return the given argument x3
// (assume a number)
​
function tripple() {
	//
}
​
test( tripple(3) == 9, "tripple(3) is equal to 9");
test( tripple(10) == 30, "tripple(10) is equal to 30");
​
​
​
​
​
// #2 create a function named "isDerek" 
// that expects a 'name' argument
// if the name is "Derek" or "derek"
// then return true - if not... return false
// also note: https://www.php.net/manual/en/function.strtolower.php
​
function isDerek() {
	//
}
​
test( isDerek('Derek') == true, "Derek is a Derek");
test( isDerek('Ivy') == false, "Ivy is not a Derek");
test( isDerek('derek') == true, "derek is still a Derek");
​
​
​
​
​
// #3 create a function named "doMath"
// that expects 3 arguments
// one for the first number and one for a second number
// and then the third argument would be the type of math
// ('add' 'subtract' 'multiply' or 'divide')
// with all three arguments supplied, the function should 
// return the value of sum/difference/product/
// or whatever they call things when they are divided
​
function doMath() {
​
}
​
test( doMath(2, 2, "add") == 4, "2 + 2 = 4");
test( doMath(8, 6, "subtract") == 2, "8 - 6 = 2");
test( doMath(2, 4, "multiply") == 8, "2 * 4 = 8");
test( doMath(12, 3, "divide") == 4, "12 / 3 = 4");
​
​
​
​
​
​
​
​
​
​
​
/* 
​
LAST ONE!!  --->  THINGS TO KNOW
​
* You can define a default parameter value like this:
		function someFunction($number=NULL)
​
* You can find the number of arguments passed to a function
 		with the built-in  func_num_args()  function 
		(returns number of arguments)
​
* You can check if a variable (in this case an argument) has been set
		with the built in  isset($variableName) function
		(returns true or false value)
​
* You can check the 'type' of a value with the built-in 
		gettype($value) == "integer"
		(will return true or false value)
		also note: != is for 'does not equal'
​
*/
​
​
​
​
​
// (design the function to pass all tests)
​
function double() {
	// 
}
​
​
​
​
// these tests have more "coverage"
test( double(4) == 8, "Double with possitive number");
test( double(0) === 0, "Double with zero is zero");
test( double(-4) == -8, "Double with negative number");
test( double("hi") == "You must input an integer", "If given a string, returns message");
test( double() == "You haven't supplied a value", "If no value supplied, returns message");
test( double(1, 2) == "You may only supply 1 value", "If more than one value supplied, returns message");
​
​
​