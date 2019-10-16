<?php

session_start();

// Rock Paper Scissors
$moves = ["rock", "paper", "scissors"];

$computerRoll = rand(0, 2);

if (isset($_SESSION["choice"])) {
    $playerMove = $_SESSION["choice"];
    $computerMove = $moves[rand(0, 2)];


    if (($playerMove == "paper" and $computerMove == "rock") || ($playerMove == "scissors" and $computerMove == "paper") || ($playerMove == "rock" and $computerMove == "scissors")) {
        $winner = "The player wins!";
    } elseif ($playerMove == $computerMove) {
        $winner = "It's a tie!";
    } else {
        $winner = "The computer wins!";
    }
}


if(isset($_SESSION["choice"])) {
    $showResults = true;
} else {
    $showResults = false;
    $_SESSION["choice"] = null;
}

if (!isset($_SESSION["target"])) {
    $target = rand(1, 20);
    $_SESSION["target"] = $target;
}

$target = $_SESSION["target"];
// the above 15 or so lines of code work, but I don't understand entirely why I couldn't just use the variable $target from line 33. var_dump'ing $target would 
// throw an error, but sending it to the $_SESSION and calling it back out immediately after works. I believe this is because of the scope if the if statement
// that I declare it in, that begins on line 32. I don't know how I could have done this better.


$correctGuess = null;
$guess = null;
$roundCount = null;

if (isset($_SESSION["guess"])) {
    $guess = $_SESSION["guess"];
    $roundCount = $_SESSION["roundCount"];
    $guesses = $_SESSION["guesses"];
    $directionArray = $_SESSION["directionArray"];
    $target = $_SESSION["target"];
    $correctGuess = $_SESSION["correctGuess"];
    $finalGuessAmount = $_SESSION["finalGuessAmount"];
}




