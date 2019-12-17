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
            "timestamp" => "DATETIME",
        ]);
        dump("Migration complete!");
    }

    public function seed() {

        $faker = \Faker\Factory::create();
        $moves = ["rock", "paper", "scissors"];

        for ($i = 0; $i < 10; $i++) {
            $userMove = $moves[rand(0,2)];
            $computerMove = $moves[rand(0,2)];

            if (($userMove == "paper" and $computerMove == "rock") || ($userMove == "scissors" and $computerMove == "paper") || ($userMove == "rock" and $computerMove == "scissors")) {
                $winner = "user";
            } elseif ($userMove == $computerMove) {
                $winner = "tie";
            } else {
                $winner = "computer";
            };

            $data = [
                "user_move" => $userMove,
                "computer_move" => $computerMove,
                "winner" => $winner,
                "timestamp" => $faker->dateTimeThisMonth()->format("Y-m-d H:i:s"),
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
