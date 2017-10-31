<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Review;
use App\Story;
use Auth;

class UsersController extends Controller
{
    public function show($id){
        $user = User::findOrFail($id);
        $reviews = Review::where("user_id", "=", $user->id)->get();
        $stories = Story::where("user_id", "=", $user->id)->get();

        if (Auth::user() == $user) {

            return view('users/index', compact('user', 'reviews', 'games', 'stories'));


        } else {
            return redirect('games');
        }
    }

    public function edit($id){
        $user = User::findOrFail($id);
        if (Auth::user() == $user){
            return view();
        }
        else {
            return redirect('games');
        }

    }
}
