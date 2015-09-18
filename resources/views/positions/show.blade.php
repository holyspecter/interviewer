@extends('base')

@section('content')
    <h3>{{ $position->title }}</h3>
    <hr/>
    <article>
        {{ $position->description }}
    </article>
    <div class="row">
        <div class="col-md-4">
            {!! Html::link(route('companies.positions.edit', ['companies' => $company->id, 'positions' => $position->id]), 'Edit', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
@endsection
