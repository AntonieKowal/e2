<?php

var_dump($_POST);

if($_POST["answer"] == "pumpkin") {
    var_dump("Correct");
} else {
    var_dump("Incorrect");
}