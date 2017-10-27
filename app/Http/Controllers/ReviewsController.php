<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Game;
use App\Review;
use App\User;
use Auth;

class ReviewsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        return view('reviews.index');
    }

    public function show(Game $game)
    {
        return view('reviews.show', compact('game'));
    }

    public function create(Game $game)
    {
        return view('reviews.create', compact('game'));
    }

    public function store(Game $game, User $user)
    {



        Review::create([

            'game_id' => request('game_id'),
            'user_id' => auth()->id(),
            'review' => request('review'),
            'rating' => request('rating')

        ]);

//        $review->addReview(request('review'));

        return redirect('/games');
    }
}
