<?php

namespace App\Http\Controllers;

use App\Repositories\RecordRepository;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class RecordsController extends Controller
{
    public function index(Request $request, RecordRepository $repository) {
        $userRecords = $repository->getUserRecords(Auth::user()->id)->all();
        $recordIds = array_column($userRecords,'record_id');
        $records = $repository->whereIn('id',$recordIds)->get()->all();

        // выдает страницу с записями
        return view('records', ["records"=>$records]);
    }

    public function create() {
        // выдает страницу с созданием записи
        return view('recordscreate');
    }

    public function view($id, RecordRepository $repository) {
        // с редактированием
        $record = $repository->getById($id);
        $userRecord = $repository->getUserByRecordId($id);
        return view('recordsview', ["record"=>$record, 'userRecord'=>$userRecord]);
    }
}
