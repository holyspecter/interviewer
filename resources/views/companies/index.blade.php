@extends('base')

@section('content')
    <h3>Companies</h3>
    <ul>
        @foreach($companies as $company)
            <li>
                <h4>
                    <a href="{{ route('companies.show', ['companies' => $company->id]) }}">
                        {{ $company->name }}
                    </a>
                </h4>
            </li>
        @endforeach
    </ul>
@endsection
