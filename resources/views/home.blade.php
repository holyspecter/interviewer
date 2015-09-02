@extends('base')

@section('content')
    <h3>{{ $company->name }}</h3>
    <hr/>
    <article>
        {{ $company->description }}
    </article>
@endsection
