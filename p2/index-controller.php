<?php

// Rock Paper Scissors
$moves = ["Rock", "Paper", "Scissors"];

$player1Roll = rand(0, 2);
$player2Roll = rand(0, 2);

$player1Move = $moves[$player1Roll];
$player2Move = $moves[$player2Roll];

if ($player1Roll > $player2Roll) {
    $winner = "Player 1 wins!";
} elseif ($player1Roll == $player2Roll) {
    $winner = "It's a tie!";
} else {
    $winner = "Player 2 wins!";
};



// Higher or Lower game
$guess = rand(0, 20);
$target = rand(0, 20);

$lowerPlaceholder = 0;
$higherPlaceholder = 20;

$newGuess = 0;
$round = [];
$directionArray = [];
$i = 1;

while ($guess != $target) {

    if ($guess > $target) {
        $direction = "lower";
        $newGuess = rand($lowerPlaceholder, ($guess - 1));
        $higherPlaceholder = ($guess - 1);
    } else {
        $direction = "higher";
        $newGuess = rand(($guess + 1), $higherPlaceholder);
        $lowerPlaceholder = ($guess + 1);
    } 

    array_push($round, $guess);
    array_push($directionArray, $direction);
    $guess = $newGuess;
    $i++;
}

// Is this line considered to be bad practice?
$correct = "Player guessed the correct number, <strong>$target</strong>, in $i rounds!";


