@extends('base')

@section('content')
    <h3>{{ $questionnaire->title }}</h3>
    <hr/>
    <article>
        {{ $questionnaire->description }}
    </article>
@endsection
