<?php

namespace App\Http\Controllers;

use App\User;
use App\Image;
use Auth;

class profiles extends Controller
{
    public function profile ($id){
        $user = User::find($id);
        $editable = false;
        if (Auth::check()) {
            if (Auth::user()->id == $id) $editable = true;
        }


        $images = Image::where('user_id', $user->id)->get();
        return view('profile', ['user' => $user, 'images' => $images, "editable" => $editable]);
    }
}
