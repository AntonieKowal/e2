<?php require 'index-controller.php'; ?>
<!DOCTYPE html>
<html lang='en'>

<head>

    <title>Evens or Odds Dice Game</title>
    <meta charset='utf-8'>

</head>

<body>

    <h1>Evens or Odds Dice Game</h1>

    <h2>Mechanics</h2>
    <ul>
        <li>Pick Evens or Odds.</li>
        <li>We'll then each roll a dice and add the results together</li>
        <li>A tie is declared if we both guess correctly.</li>
        <li>A draw is declared if we both guess incorrectly.</li>
        <li>Otherwise, the player with the correct guess wins!</li>
    </ul>
    <form method='GET' action='process.php'>
        <input type='radio' value='Even' id='Even' name='choice' checked>
        <label for='Even'> Evens</lable>

            <input type='radio' value='Odd' id='Odd' name='choice'>
            <label for='Odd'> Odds</lable>

                <button type='submit'>Guess...</button>

    </form>

    <?php if($showResults) { ?>
    <h2>Results!</h2>
    <li>Player A picked <?php echo $results['choiceA']; ?></li>
    <li>Player B picked <?php echo $results['choiceB']; ?></li>
    <li>The dice roll totaled <?php echo $results['roll']; ?></li>
    <li><?php echo $results['winner']; ?></li>

    <?php } ?>



</body>

</html>