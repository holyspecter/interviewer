@extends('base')

@section('content')
    <h3>New vacancy for company {{ $company->title }}</h3>
    <hr/>
    {!! Form::open(['url' => route('companies.positions.store', ['companyId' => $company->id])]) !!}
        <div class="form-group">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title', Input::old('title'), ['class' => 'form-control']) !!}
        </div>
    
        <div class="form-group">
            {!! Form::label('description', 'Description') !!}
            {!! Form::text('description', Input::old('description'), ['class' => 'form-control']) !!}
        </div>
    
        <div class="form-group">
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
@endsection
