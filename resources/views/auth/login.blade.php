@extends('master')

@section('content')
    <form method="POST" action="/auth/login">
        {!! csrf_field() !!}
    
        <div class="form-group">
            Email
            <input class="form-control" type="email" name="email" value="{{ old('email') }}">
        </div>
    
        <div class="form-group">
            Password
            <input class="form-control" type="password" name="password" id="password">
        </div>
    
        <div class="form-group">
            <input class="form-control" type="checkbox" name="remember"> Remember Me
        </div>
    
        <div class="form-group">
            <button class="btn btn-default" type="submit">Login</button>
        </div>
    </form>
@endsection