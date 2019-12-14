<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     *
     */
    public function index()
    {   
        return $this->app->view("index");
    }

    public function roundHistory() 
    {
        $rounds = $this->app->db()->all("rps");

        return $this->app->view("round-history", ["rounds" => $rounds]);
    }

    public function round() 
    {
        return $this->app->view("round");
    }
}
