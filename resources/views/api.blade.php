@extends('layouts.default')

@section('content')
    <div>
        <p> Все перечисленные роуты здесь идут с префиксом /api, например, <a href="/api/user/1">api/user/1</a></p>
        <ul>
            <li>
                стандартные роуты из Resource для user и record, кроме create и edit <a href="https://laravel.com/docs/8.x/controllers#actions-handled-by-resource-controller">(ссылка)</a>
            </li>
            <li>
                <a href="api/search/user?name=">/search/user?name=</a> - можно искать юзеров по имени, если нет имени - выводит все (пока что вывод на сайте ограничен 5 юзерами)
            </li>
            <li>
                <b>/image/upload</b> - загрузка изображений на сервер
            </li>
        </ul>
    </div>
@endsection
