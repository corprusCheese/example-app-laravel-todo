<?php namespace App\Http\Controllers\Api;

use App\Models\Record;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function index()
    {
        // json что получает все у всех доступных юзеров
    }

    public function create()
    {
        // создание (на страницу)
    }

    public function store(Request $request)
    {
        // после создания положить в базу
    }

    public function show($id)
    {
        // показать
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
