<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use App\Image as Product;

class UserController extends Controller
{
    //
    public function profile(){
        $user = Auth::user();
        return view('profile', ['user' => $user, 'images' => Product::where('user_id', $user->id)->get()]);
    }

    public function update_avatar(Request $request){
        if($request->hasFile('avatar')){
            $user = Auth::user();
            $avatar = $request->file('avatar');
            $filename = time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('uploads/avatars/'.$filename));
            $user->avatar = $filename;
            $user->save();
        }
        return view('profile', array('user' => Auth::user()));
    }


    public function update_hello(Request $request) {
        $user = Auth::user();
        $description = $request->input('description');
        $user->description = $description;
        $user->save();

        return view('profile', array('user' => Auth::user()));
    }

}
