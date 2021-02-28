<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Repositories\RecordRepository;
use App\Repositories\UserRepository;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;

class RecordsController extends Controller
{
    protected $repository;

    public function __construct(RecordRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $records = $this->repository->getRecordsByUserId(Auth::user()->id);

        // выдает страницу с записями
        return view('record.records', ["records" => $records]);
    }

    public function create()
    {
        // выдает страницу с созданием записи
        return view('record.create');
    }

    public function view($id)
    {
        $record = $this->repository->getById($id);
        $userRecord = $this->repository->getUserIdByRecordId($id);

        // с редактированием
        return view('record.view', ["record" => $record, 'userRecord' => $userRecord]);
    }

    public function indexByUserId($id)
    {
        $records = $this->repository->getRecordsByUserId($id);

        // выдает страницу с записями
        return view('record.records_user', ["records" => $records]);
    }
}
