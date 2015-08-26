@extends('base')

@section('content')
    <h3>{{ $position->title }}</h3>
    <hr/>
    <article>
        {{ $position->description }}
    </article>
@endsection
