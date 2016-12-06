<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class GalleryController extends Controller
{
    //
    public function paulius(){
        if(Auth::check()) {
            if (Auth::user()->is_confirmed) {
                return view('gallery');
            }
        }
        return redirect()->action('HomeController@index');
    }
}
