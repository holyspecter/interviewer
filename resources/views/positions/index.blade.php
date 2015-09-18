@extends('base')

@section('content')
    <h4>Positions for company {{ $company->id }}</h4>
    <ul>
        @foreach($company->positions as $position)
            <li>
                <a href="{{ route('companies.positions.show', ['companies' => $company->id, 'positions' => $position->id]) }}">
                    {{ $position->title }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
