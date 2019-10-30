<?php

session_start();

if($_POST["answer"] == "pumpkin") {
    $correct = true;
} else {
    $correct = false;
}

$_SESSION["correct"] = $correct;
header("Location: done.php");