@extends('base')

@section('content')
    <h3>Company {{ $company->name  }}</h3>
    <hr/>
    <article>
        {{ $company->description  }}
    </article>
@endsection
