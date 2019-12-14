<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     *
     */
    public function index()
    {
        
        return $this->app->view('index');
    }

    public function roundHistory() {
        return $this->app->view("round-history");
    }

    public function round() {
        return $this->app->view("round");
    }
}
