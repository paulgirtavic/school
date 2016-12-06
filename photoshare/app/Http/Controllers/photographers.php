<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class photographers extends Controller
{

    public function index () {
        $users = User::all();
        return view('photographers')->with('users', $users);
    }
}
