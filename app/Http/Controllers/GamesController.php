<?php

namespace App\Http\Controllers;

use App\Game;
use App\Review;

class GamesController extends Controller
{
    public function index() {
        $games = Game::all();
        return view('games.index', compact('games', 'reviews'));
    }

    public function show(Game $game) {
//        $reviews = Review::all();
        return view('games.show', compact('game', 'reviews'));
    }
}
