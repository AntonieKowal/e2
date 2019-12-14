<?php

namespace App\Commands;

class AppCommand extends Command
{
    public function test()
    {
        dump('It works! You invoked your first command.');
    }

    public function migrate() {
        $this->app->db()->createTable("rps", [
            "user_move" => "varchar(255)",
            "computer_move" => "varchar(255)",
            "winner" => "varchar(255)",
            #timestamp? refer to week 13
        ]);
        dump("Migration complete!");
    }

    public function seed() {

        $moves = ["rock", "paper", "scissors"];

        for ($i = 0; $i < 10; $i++) {
            $usermove = $moves[rand(0,2)];
            $computermove = $moves[rand(0,2)];

            if (($usermove == "paper" and $computermove == "rock") || ($usermove == "scissors" and $computermove == "paper") || ($usermove == "rock" and $computermove == "scissors")) {
                $winner = "User won!";
            } elseif ($usermove == $computermove) {
                $winner = "It was a tie!";
            } else {
                $winner = "User lost!";
            };

            $data = [
                "user_move" => $usermove,
                "computer_move" => $computermove,
                "winner" => $winner,
            ];

            $this->app->db()->insert("rps", $data);
        }
        dump("Seeding complete!");
    }

    public function fresh() {
        $this->migrate();
        $this->seed();
    }

}
