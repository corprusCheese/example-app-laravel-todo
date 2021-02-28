@extends('layouts.default')

@section('content')
    <div >
        <div class="col-md-8" style="margin: auto">
            <div class="card">
                <div class="card-header">{{ __('Форма создания записи') }}</div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Кто отправляет') }}</label>

                        <div class="col-md-6">
                            <input disabled id="user" type="text" class="form-control" name="text" value="{{ Auth::user()->name }}" data-id="{{Auth::user()->id}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Текст записи') }}</label>

                        <div class="col-md-6">
                            <textarea id="text" type="text" class="form-control" name="text">{{$record->text}}</textarea>
                        </div>
                    </div>
                    @if(\Illuminate\Support\Facades\Auth::id() == $userRecord)
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button class="btn btn-primary" id="clickUpdateRecord" data-href="{{route('record.update', ['record'=> $record->id])}}">
                                {{ __('Изменить запись') }}
                            </button>
                            <a id="clickDeleteRecord" data-href="{{route('record.destroy', ['record'=>$record->id])}}" class="btn btn-link">Удалить запись</a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
