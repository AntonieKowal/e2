# Project 2
+ By: Antonie Kowal
+ Production URL: <http://p2.antoniephp.com>

## Game planning
#### Rock Paper Scissors
+ Assign a random integer between 0 and 2 to each player, and use that number to extract a move
from the array of moves
+ Check the value of the two numbers against each other, the higher number is the winner
based on the order of moves in the array
+ If Player 1's number is higher, Player 1 wins. Else if both numbers are the same, the game is a tie.
else, Player 2 wins.
#### Higher or Lower
+ Randomly generate a guessed number between 1 and 20, and a correct number between 1 and 20
+ Have a starting minimum and maximum guess set to between 0 and 20, and for every guess,
restrict the range more and more based on the most recent guess. If the first guess is 10
and the correct number is higher, never attempt to guess between 0 and 10 again.
+ For every guess, push the guessed number into an array, and push a string "higher" or "lower"
into a separate array based on which is true. Keep guessing until the guessed number 
and the correct number are the same
+ With a `foreach` loop in the index.php document, for each guessed number in the array of guesses,
write a new `<li>` containing the guessed number and use the key of the guessed number to grab
the corresponding "higher" or "lower" result from the array of higher/lower.
+ Once the two numbers match, echo a string informing the player that they have guessed the
correct number, and in how many rounds


## Outside resources
+ https://stackoverflow.com/questions/16308252/php-add-elements-to-multidimensional-array-with-array-push
+ https://www.w3schools.com/php/func_array_push.asp

## Notes for instructor
When running my HTML through the validator, It would throw an error for every time I used `<?php`.
It also was throwing another PHP related error with one of the `<ul>` tags that I wasn't sure how to get rid of. I'm completing
the assignment too close to the deadline to send you an email about the errors, so I apologize for that!