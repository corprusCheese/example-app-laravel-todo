@extends('layouts.default')

@section('content')
    <div class="container mt-5 text-center">
        <div style="width: 50%;margin: auto">
        <h1>Login page</h1>
        <form class="mt-5 p-5" style="border: gray 1px solid; border-radius: 5px;">
            <div class="form-group">
                <label for="name">Username</label>
                <input class="form-control" name="name" type="text" id="name">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" name="password" id="password">
            </div>
            <div class="form-group">
                <label class="form-check-label" for="confirmPassword">Confirm Password</label>
                <input class="form-control" name="confirmPassword" id="confirmPassword">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
@endsection
