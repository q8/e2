<?php

namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {
        $playerRoll = $this->app->old('playerRoll');
        $computerRoll = $this->app->old('computerRoll');
        $won = $this->app->old('won');

        return $this->app->view('index', [
            'playerRoll' => $playerRoll,
            'computerRoll' => $computerRoll,
            'won' => $won
        ]);
    }

    public function process()
    {
        $this->app->validate([
            'choice' => 'required'
        ]);

        $choice = $this->app->input('choice');

        $sides = range(1, $choice);
        shuffle($sides);
        $playerRoll = $sides[0];
        $computerRoll = $sides[1];

        $won = match (max($playerRoll, $computerRoll)) {
            $playerRoll => "Player",
            $computerRoll => "Computer",
        };

        $this->app->db()->insert('rounds', [
            'choice' => $choice,
            'player_roll' => $playerRoll,
            'computer_roll' => $computerRoll,
            'won' => $won,
            'timestamp' => date('Y-m-d H:i:s')
        ]);

        return $this->app->redirect('/', ['playerRoll' => $playerRoll, 'computerRoll' => $computerRoll, 'won' => $won]);
    }

    public function history()
    {
        $rounds = $this->app->db()->all('rounds');

        return $this->app->view('history', ['rounds' => $rounds]);
    }

    public function round()
    {
        $id = $this->app->param('id');

        $round = $this->app->db()->findById('rounds', $id);

        return $this->app->view('round', ['round' => $round]);
    }
}