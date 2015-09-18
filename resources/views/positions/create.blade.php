@extends('base')

@section('content')
    <h3>New vacancy for company {{ $company->title }}</h3>
    <hr/>
    {!! Form::open(['url' => route('companies.positions.store', ['companies' => $company->id])]) !!}
        @include('positions.form', ['submitButton' => 'Save'])
    {!! Form::close() !!}
@endsection
