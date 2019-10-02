<?php require "index-controller.php"; ?>
<!DOCTYPE html>
<html lang='en'>
<head>

    <title>Project 2 Games</title>
    <meta charset='utf-8'>
    <style>
    p {
        width: 400px;
    }
    </style>

</head>

<body>

    <h1>Rock Paper Scissors</h1>

    <h2>Mechanics</h2>
    <p>Each player can choose between three options; Rock, Paper, or Scissors. Rock wins over scissors, scissors win over paper, and paper wins over rock. The game can also end in a
    tie if both players choose the same option.</p>
    <h2>Results</h2>
    <ul>
        <li>Player 1 chose <?php echo $player1Move ?></li>
        <li>Player 2 chose <?php echo $player2Move ?></li>
        <li><?php echo $winner; ?></li>
    </ul>
    
    <hr>

    <h1>Higher or Lower Game</h1>

    <h2>Mechanics</h2>
    <p>The player must choose a number between 1 and 20. Once they guess a number, they are told if the correct number is either higher or lower than their guess. The player then must 
    guess repeatedly until they guesses the correct number.
    <h2>Results</h2>
    <ul>
        <?php foreach($round as $key => $value) {?>
            <li><?php echo "The guess was $value, the correct number is $directionArray[$key]!"; ?></li>
        <?php } ?>
        <li> <?php echo $correct; ?> </li>
    </ul>
</body>

</html>

