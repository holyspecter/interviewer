@extends('base')

@section('content')
    <h3>Edit vacancy {{ $position->title }} for company {{ $company->title }}</h3>
    <hr/>

    {!! Form::model($position, ['url' => route('companies.positions.update', ['companies' => $company->id, 'positions' => $position->id]), 'method' => 'PATCH']) !!}
        @include('positions.form', ['submitButton' => 'Save'])
    {!! Form::close() !!}
@endsection
