@extends('layouts.default')

@section('content')
    <div >
        <div class="col-md-8" style="margin: auto">
        <div class="card">
            <div class="card-header">{{ __('Форма создания записи') }}</div>
            <div class="card-body">
                <div class="form-group row">
                    <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Кто отправляет') }}</label>

                    <meta name="csrf-token" content="{{ csrf_token() }}" />

                    <div class="col-md-6">
                        <input disabled id="user" type="text" class="form-control" name="text" value="{{ Auth::user()->name }}" data-id="{{Auth::user()->id}}">
                    </div>
                </div>
                    <div class="form-group row">
                        <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Текст записи') }}</label>

                        <div class="col-md-6">
                            <textarea id="text" type="text" class="form-control" name="text"></textarea>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                        <button class="btn btn-primary" id="clickCreateRecord" data-href="{{route('record.store')}}">
                            {{ __('Создать запись') }}
                        </button>
                        </div>
                    </div>
            </div>
        </div></div>
    </div>
@endsection
