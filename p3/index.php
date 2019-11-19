<?php require "index-controller.php"; ?>
<!DOCTYPE html>
<html lang='en'>

<head>

    <title>Project 3 Games</title>
    <meta charset='utf-8'>
    <style>
        p {
            width: 400px;
        }

        #game1 {
            float: left;
        }

        #game2 {
            float: right;
            margin-right: 20%;
        }
    </style>
</head>

<body>
    <div id="game1">
        <h1>Rock Paper Scissors</h1>

        <h2>Instructions</h2>
        <p>The user can choose from the three options of Rock, Paper, or Scissors. When the user submits their choice,
            the computer randomly selects a choice from the three options as well. Paper beats Rock, Scissors beats
            Paper, and Rock beats Scissors.
            One round is played per submission.</p>
        <hr>

        <h2>Choice</h2>

        <form method="GET" action="process.php">

            <input type="radio" value="rock" id="rock" name="rpsGame">
            <label for="rock">Rock</label><br>
            <input type="radio" value="paper" id="paper" name="rpsGame">
            <label for="paper">Paper</label><br>
            <input type="radio" value="scissors" id="scissors" name="rpsGame">
            <label for="scissors">Scissors</label><br><br>

            <button type="submit">Submit</button>
        </form>

        <h2>Results</h2>

        <?php if ($showResults == true) { ?>
        <ul>
            <li>The player chose <?php echo $playerMove ?>
            </li>
            <li>The computer chose <?php echo $computerMove ?>
            </li>
            <li><?php if ($_SESSION["choice"] != null) {
    echo $winner;
} ?>
            </li>
        </ul> <?php } ?>
    </div>

    <div id="game2">
        <h1>Higher or Lower Game</h1>

        <h2>Instructions</h2>

        <p>The computer will choose a random number between 1 and 20, and the user must attempt to guess the number.
            Input a number between 1 and 20 in
            the text field below, and upon submission, the computer will inform the user whether the correct number is
            higher or lower than their guess.
            The user must repeatedly guess until they guess the correct number.

            <hr>

            <form method="GET" action="process.php">

                <label for="guess">Guess a number between 1 and 20</label><br>
                <input type="text" name="guess" id="guess">

                <button type="submit" id="guessButton">Guess</button>
            </form>

            <h2>Results</h2>

            <ul>

                <?php if (isset($directionArray) && $directionArray != null) {
    foreach ($guesses as $key => $value) {?>
                <li><?php echo "The guess was $value, the correct number is $directionArray[$key]."; ?>
                </li>
                <?php }
}
         if ($guess == $correctGuess && $guess != null) { ?>
                <li> You guessed the correct number in <?php echo $finalGuessAmount ?> rounds!</li>
                <li> A new number has been generated</li>
                <li> Try to guess it in fewer rounds!</li>
                <?php } ?>

            </ul>
    </div>
</body>

</html>