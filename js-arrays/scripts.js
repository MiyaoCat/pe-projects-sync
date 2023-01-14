			var name = "John";
			console.log(name);

			var total = 9 + 27 + 1986;

			console.log("total: ", total);

			var exampleArray = ["Blazers", "Warriors", "Kings", "Lakers", "Clippers"];

			var athleteArray = ["Damian Lillard", "Steph Curry", "De'Aaron Fox", "LeBron James", "Kawhi Leonard"];

			function shoutName(name, number, listOfNames) {
				console.log(number + "I am " + name + "!");
				console.log(listOfNames);
			}

			function printItem(item, index, teamList) {
				var listItem = document.createElement("li");
				listItem.textContent = index + " " + item + " (" + teamList + ")";
				document.body.appendChild(listItem);
			}

			function doThings(anArray, aFunction) {
				for (var i = 0; i < anArray.length; i++) {		

					aFunction( anArray[i], i, anArray );
				}
			}

			doThings( athleteArray, shoutName );

			doThings( exampleArray, printItem );

			// doThings( athleteArray, printItem );

			// doThings( ["Portland", "Oakland", "Sacramento"], printItem );

			// athleteArray.forEach( function(item, place, fullArray) {
			// 	console.log(item, place, fullArray);
			// });