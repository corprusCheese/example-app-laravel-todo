@extends('layouts.default')

@section('content')
    <div class="container mt-5 text-center">
        <div style="width: 50%;margin: auto">
            <h1>Страница логина</h1>
            <form class="mt-5 p-5" style="border: gray 1px solid; border-radius: 5px;">
                <div class="form-group">
                    <label for="name">Имя</label>
                    <input class="form-control" name="name" type="text" id="name">
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input class="form-control" name="password" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Войти</button>
            </form>
        </div>
    </div>
@endsection
