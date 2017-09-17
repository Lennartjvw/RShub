<?php

namespace App\Http\Controllers;

use App\Game;

class GamesController extends Controller
{
    public function index() {
        $games = Game::all();
        return view('games.index', compact('games'));
    }

    public function show($id) {
        $games = Game::find($id);
        return view('games.show', compact('games'));
    }
}
