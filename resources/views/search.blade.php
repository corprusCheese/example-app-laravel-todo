@extends('layouts.default')

@section('content')
    @if(count($users))
        <div class="alert alert-success" role="alert" style="text-align: center">
            Найдено юзеров с таким именем: {{count($users)}}
        </div>
        @foreach($users as $user)
            <div class="row justify-content-center" style="margin-bottom: 10px">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            @if(!empty($user->photo))
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right"></label>

                                    <div class="col-md-6">
                                        <img width="150" height="150" class="mb-3" src="{{$user->photo}}">
                                    </div>
                                </div>
                            @endif
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">{{ __('Имя') }}</label>
                                <div class="col-md-6">
                                    <input disabled value="{{$user->name}}" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                                <div class="col-md-6">
                                    <input disabled value="{{$user->email}}" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="alert alert-danger" role="alert" style="text-align: center">
            Не найдено юзеров с таким именем
        </div>

    @endif
@endsection
