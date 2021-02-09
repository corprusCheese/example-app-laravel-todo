<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;

class UserController extends Controller
{
    private $userRepository;

    public function __construct(BaseRepository $repository) {
        $this->userRepository = $repository;
    }

    public function index()
    {
        // json что получает все у всех доступных юзеров
        return $this->userRepository->get();
    }

    public function create()
    {
        // создание (на страницу)
        //return $this->userRepository->create();
    }

    public function store(Request $request)
    {
        // после создания положить в базу
    }

    public function show($id)
    {
        // показать
        return $this->userRepository->getById($id);
    }

    public function edit($id)
    {
        // редактировать (на страницу)
    }

    public function update(Request $request, $id)
    {
        // обновить
    }

    public function destroy($id)
    {
        // удалить
    }
}
