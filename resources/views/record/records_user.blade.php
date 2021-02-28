@extends('layouts.default')

@section('content')
    @if(count($records))
        <div class="alert alert-success" role="alert" style="text-align: center">
            Найдено записей: {{count($records)}}
        </div>
        @foreach($records as $record)
            <div class="row justify-content-center" style="margin-bottom: 10px">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">{{ __('Текст') }}</label>
                                <div class="col-md-6">
                                    <textarea disabled type="text" class="form-control">{{$record->text}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="alert alert-danger" role="alert" style="text-align: center">
            Не найдено записей
        </div>

    @endif
@endsection
