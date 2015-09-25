@extends('base')

@section('content')
    <h3>Questionnaires for company {{ $company->title }}</h3>
    <ul>
        @foreach($company->questionnaires as $questionnaire)
            <li>
                <a href="{{ route('companies.questionnaires.show', ['companies' => $company->id, 'questionnaires' => $questionnaire->id]) }}">
                    {{ $questionnaire->title }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
