@extends('base')

@section('content')
    <h3>Companies</h3>
    <ul>
        @foreach($companies as $company)
            <li>{{ $company->name }}</li>
        @endforeach
    </ul>
