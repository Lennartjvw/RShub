<?php

namespace App\Http\Controllers;

use App\Game;
use App\Review;

class GamesController extends Controller
{
    public function index() {
        $games = Game::all();
        return view('games.index', compact('games'));
    }

    public function show(Game $game, Review $review) {
//        $games = Game::find($game);
        return view('games.show', compact('game', 'review'));
    }
}
