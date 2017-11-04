<?php

namespace App\Http\Controllers;

use illuminate\http\request;

use App\User;
use app\role;

class AdminsController extends Controller
{
    public function index(){
        $users = user::all();
//        $role = user::first()->roles->first()->name;
//        $roles = role::all();

//        dd($role);

        return view ('admins.index', compact('users'));
    }
}
