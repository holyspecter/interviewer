@extends('base')

@section('content')
    {!! Form::open(['url' => 'companies']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', Input::old('name'), array('class' => 'form-control')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Description') !!}
            {!! Form::text('description', Input::old('description'), array('class' => 'form-control')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('homepage', 'Homepage') !!}
            {!! Form::text('homepage', Input::old('homepage'), array('class' => 'form-control')) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Save') !!}
        </div>
    {!! Form::close() !!}
@endsection
