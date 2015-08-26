@extends('base')

@section('content')
    <h3>New vacancy for company {{ $company->title }}</h3>
    <hr/>
    {!! Form::open(['url' => route('positions.store', ['companyId' => $company->id])]) !!}
        <div class="form-group">
            {!! Form::label('title', 'title') !!}
            {!! Form::text('title', Input::old('title'), array('class' => 'form-control')) !!}
        </div>
    
        <div class="form-group">
            {!! Form::label('description', 'Description') !!}
            {!! Form::text('description', Input::old('description'), array('class' => 'form-control')) !!}
        </div>
    
        <div class="form-group">
            {!! Form::submit('Save') !!}
        </div>
    {!! Form::close() !!}
@endsection
