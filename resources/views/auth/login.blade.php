@extends('base')

@section('content')
    <form method="POST" action="/login">
        {!! csrf_field() !!}

        <div class="form-group">
            {!! Form::label('title', 'Email') !!}
            <input type="email" name="email" value="{{ old('email') }}" class="form-control">
        </div>

        <div class="form-group">
            {!! Form::label('title', 'Password') !!}
            <input type="password" name="password" id="password" class="form-control">
        </div>

        <div class="form-group">
            <input type="checkbox" name="remember"> Remember Me
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
@endsection
