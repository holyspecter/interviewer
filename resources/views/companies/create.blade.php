@extends('base')

@section('content')
    {!! Form::open(['url' => 'companies']) !!}
        @include('companies.form', ['submitButton' => 'Create'])
    {!! Form::close() !!}
@endsection
