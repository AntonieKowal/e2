## P3 Peer Review

+ Reviewer's name: Antonie Kowal
+ Reviwee's name: Conor
+ URL to reviewee's Github repo: *https://github.com/conornap/e2*

*Answer the following questions in regards to the student's project you are reviewing. Include code snippets in your answers when relevant.*


### Are you able to produce any errors or unexpected results?
The program works exactly as expected, but the HTML does have a few validation errors.
### Referencing the course notes on [Form design flow](https://hesweb.dev/e2/notes#/php/form-flow), describe the form design flow used in this project.
The game uses form design C. When the user submits their choice of odd or even, the process.php file will do all of the logic then point back to the index.php file. Once the index.php file is reloaded, the controller will notice that there are results in the session, so $showResults will evaluate to true where the results of the game will then be visible.
### Are there any separation of concern issues (i.e. non-display specific logic in view files, display code in controller files)? 
No, everything is perfectly separated from what I can tell!
### Are there aspects of the code that you feel were not self-evident and would benefit from comments?
Conor was very descriptive in his process file with his comments. At the top of the file, he explains his logic in pseudo code, followed by describing what every block of code's function is. I had no trouble whatsoever understanding his code.
### List any/all built-in PHP methods used with a brief summary of what the method does
The ```Rand()``` method is used to determine the roll between 1-6 of each dice, and is used again to determine whether the computer chose even or odd. 
### Are there any parts of the code that you found interesting or taught you something new?
I had a tough time getting my results rendered into HTML. I had a similar solution to Conor's, with his ```$results``` array,
but mine is very messy and my index.php file looks chaotic. Conor was able to get his results printed to the page very cleanly compared to me.
### Are there any parts of the code that you don't understand?
No.
### Are there any best practices discussed in course material that you feel were not addressed in the code?
The only design improvement I can find without really grasping at straws is he could make use of the ternary operator for the three back to back if/else statements. He could simplify 15 or so lines of code into three ideally. I didn't make use of this either because it wasn't taught yet.
### Do you have any additional comments not covered in the above questions?
Good job! The only mistake you made was not validating your HTML. I find that even though your comments made understanding your code easy and everything was "self-evident", you might even have made too many of them. I don't think comments are required for the more simple lines of code like declaring ``` $evenodd = ['Even', 'Odd']; ```, especially if the name of the variable gives enough information of its use, but that might just be down to my personal preference.