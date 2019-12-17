<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     *
     */
    public function index()
    {   
        $data = $this->app->old("data", null);

        return $this->app->view("index", ["data" => $data]);
    }

    public function playRound() {

        $this->app->validate([
            "userChoice" => "required",
        ]);

        $choice = $this->app->input("userChoice");
        $moves = ["rock", "paper", "scissors"];
        $computerMove = $moves[rand(0,2)];

        if (($choice == "paper" and $computerMove == "rock") || ($choice == "scissors" and $computerMove == "paper") || ($choice == "rock" and $computerMove == "scissors")) {
            $winner = "user";
            $alert = "success";
        } elseif ($choice == $computerMove) {
            $winner = "tie";
            $alert = "warning";
        } else {
            $winner = "computer";
            $alert = "danger";
        };

        $timeStamp = date("Y-m-d H:i:s");
        $data = [
            "user_move" => $choice,
            "computer_move" => $computerMove,
            "winner" => $winner,
            "timestamp" => $timeStamp,
        ];

        $this->app->db()->insert("rps", $data);

        array_push($data, $alert);
        
        $this->app->redirect('/', ["data" => $data]);
    }

    public function roundHistory() 
    {
        $rounds = $this->app->db()->all("rps");
        return $this->app->view("round-history", ["rounds" => $rounds]);
    }

    public function round() 
    {
        $roundId = $this->app->param("id");
        $round = $this->app->db()->findById("rps", $roundId);
        if(is_null($round)) {
            return $this->app->redirect("/round-history", ["roundNotFound" => true]);
        }
        return $this->app->view("round", ["round" => $round]);

    }
}
