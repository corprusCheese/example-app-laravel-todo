<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RecordsController extends Controller
{
    public function index(Request $request, UserService $service) {

        //$records = $service->search($request);
        $records = null;
        // выдает страницу с записями
        return view('records', ["records"=>$records]);
    }

    public function create() {
        // выдает страницу с созданием записи
        return view('recordscreate');
    }

    public function update($id) {
        // с редактированием
    }
}
