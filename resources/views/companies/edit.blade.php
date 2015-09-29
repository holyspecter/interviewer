@extends('base')

@section('content')
    {!! Form::model($company, ['url' => route('companies.update', ['companies' => $company->id]), 'method' => 'PATCH']) !!}
        @include('companies.form', ['submitButton' => 'Save'])
    {!! Form::close() !!}
@endsection
