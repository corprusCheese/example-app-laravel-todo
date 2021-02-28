@extends('layouts.default')

@section('content')
    @guest
        <p>Чтобы полноценно пользоваться сайтом, вам нужно зарегистрироваться или залогиниться.</p>
    @else
        <p>Вы авторизировались на сайте, поэтому вы можете: </p>
        <a href="{{route('records.create')}}" class="btn btn-secondary">Создать запись</a>
        <a href="{{route('records')}}" class="btn btn-secondary">Посмотреть записи</a>
        <a href="{{route('cabinet', ['id' => Auth::user()->id])}}" class="btn btn-secondary">Зайти в личный кабинет</a>
    @endguest
@endsection
