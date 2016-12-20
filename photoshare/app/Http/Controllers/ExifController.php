<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image as Product;
use Image;

class ExifController extends Controller
{
    //
    public function image($image_id){
        $image = Product::find($image_id);
        if($image) {
            $data = Image::make(public_path().'/'.$image->file)->exif();
            return response()->json($data);
            //->header('Content-type','application/json')->header
            //('Content-disposition','attachment; filename=file.json');
        }
        abort(404);
    }
    public function image_download($image_id){
        $image = Product::find($image_id);
        if($image) {
            $data = Image::make(public_path().'/'.$image->file)->exif();
            return response(json_encode($data))->header('Content-type','application/json')->header
            ('Content-disposition','attachment; filename=file.json');
        }
        abort(404);
    }

    public function index(){
        return view('image_api');
    }
}
