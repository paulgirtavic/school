<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Image;

class profiles extends Controller
{
    public function profile ($id){
        $user = User::find($id);
        $images = Image::where('user_id', $user->id)->get();
        return view('profile')->with('user', $user)->with('images', $images);
    }
}
