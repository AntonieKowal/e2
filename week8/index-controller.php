<?php

// require "Number.php";
// require "EvenNumber.php";
// require "Debug.php";

require __DIR__.'/vendor/autoload.php';

use RPS\Game;

$game = new Game();


# Each invocation of the `play` method will play and track a new round of player (given move) vs. computer
App\Debug::dump($game->play('rock'));










// use E2\Number;
// use E2\EvenNumber;
// use E2\Debug;

// // rename them to unique references
// # use E2\Debug as DebugA;
// # use ABC\Debug as Debug B;

// $example1 = new Number(20);
// $example2 = new EvenNumber(20);

// Debug::dump(["a", "b", "c"]);
