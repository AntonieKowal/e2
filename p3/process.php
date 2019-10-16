<?php

session_start();

// Rock Paper Scissors
$choice = $_GET["rpsGame"];
$_SESSION["choice"] = $choice;


// Higher or Lower
$guess = (int)$_GET["guess"];
$_SESSION["guess"] = $guess;

$target = $_SESSION["target"];

if (!isset($_SESSION["guesses"])) {
    $round = [];
} else {
    $round = $_SESSION["guesses"];
}

if (!isset($_SESSION["directionArray"])) {
    $directionArray = [];
} else {
    $directionArray = $_SESSION["directionArray"];
}

$i = $_SESSION["roundCount"];
$_SESSION["correctGuess"] = null;
$_SESSION["finalGuessAmount"] = null;

if ($guess > $target) {
    $direction = "lower";
    $i++;
} elseif ($guess < $target) {
    $direction = "higher";
    $i++;
} elseif ($guess == $target) {
    $round = null;
    $directionArray = null;
    $_SESSION["finalGuessAmount"] = $i;
    $i = 1;
    $correctGuess = $target;
    $_SESSION["correctGuess"] = $correctGuess;
    $target = rand(1, 20);
    $_SESSION["target"] = $target;
}

array_push($round, $guess);
array_push($directionArray, $direction);

$_SESSION["guesses"] = $round;
$_SESSION["directionArray"] = $directionArray;
$_SESSION["roundCount"] = $i;

header("Location: index.php");