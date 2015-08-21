@extends('base')

@section('content')
    <h3>Companies</h3>
    <ul>
        @foreach($companies as $company)
            <li>
                <h4>{{ $company->name }}</h4>
                <ul>
                    @foreach($company->positions as $position)
                        <li>{{ $position->title  }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
@endsection
