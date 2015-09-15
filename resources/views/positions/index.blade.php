@extends('base')

@section('content')
    <h4>Positions for company {{ $company->id }}</h4>
    <ul>
        @foreach($company->positions as $position)
            <li>{{ $position->title  }}</li>
        @endforeach
    </ul>
@endsection
