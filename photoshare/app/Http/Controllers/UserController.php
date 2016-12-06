<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\Image as Product;

class UserController extends Controller
{


    public function update_avatar(Request $request){
        if($request->hasFile('avatar')){
            $user = Auth::user();
            $avatar = $request->file('avatar');
            $filename = time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('uploads/avatars/'.$filename));
            $user->avatar = $filename;
            $user->save();
        }
        $avatarPhoto = Product::where('user_id', Auth::user()->id)->get();
        return view('profile', ['user' => Auth::user(), 'editable' => true, "images" => $avatarPhoto]);
    }


    public function update_hello(Request $request) {
        $user = Auth::user();
        $description = $request->input('description');
        $user->description = $description;
        $user->save();
        $avatarPhoto = Product::where('user_id', Auth::user()->id)->get();
        return view('profile', ['user' => Auth::user(), 'editable' => true, "images" => $avatarPhoto]);
    }

}
