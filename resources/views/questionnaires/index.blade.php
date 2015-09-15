@extends('base')

@section('content')
    <h3>Questionnaires for company {{ $company->title }}</h3>
    <ul>
        @foreach($questionnaires as $questionnaire)
            <li>
                <h4>{{ $company->questionnaires->title }}</h4>
            </li>
        @endforeach
    </ul>
@endsection
