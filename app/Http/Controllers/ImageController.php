<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    public function uploadPhoto(Request $request) {
        if($request->isMethod('post')){

            //dd($request->all());
            if($request->hasFile('img')) {
                $file = $request->file('img');

                $name = $file->getClientOriginalName().$file->getExtension();
                $file->move(storage_path() . '/app/public/images',$name);
            }

            return true;
        }
    }
}
