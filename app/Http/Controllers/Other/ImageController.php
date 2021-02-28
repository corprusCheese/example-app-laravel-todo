<?php

namespace App\Http\Controllers\Other;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    public function uploadPhoto(Request $request): bool
    {
        $result = false;
        if ($request->isMethod('post')) {
            if ($request->hasFile('img')) {
                $file = $request->file('img');

                $name = $file->getClientOriginalName() . $file->getExtension();
                $file->move(storage_path() . '/app/public/images', $name);
            }

            $result = true;
        }

        return $result;
    }
}
