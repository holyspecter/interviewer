@extends('base')

@section('content')
    <h3>{{ $position->title }}</h3>
    <hr/>
    <article>
        {{ $position->description }}
    </article>
    @if($position->questionnaire)
        <article>
            Questionnaire:
            <a href="{{ route('companies.questionnaires.show', ['companies' => $position->company->id, 'questionnaire' => $position->questionnaire->id]) }}">
                {{ $position->questionnaire->title }}
            </a>
        </article>
    @endif
    <hr/>
    <div class="row">
        <div class="col-md-4">
            {!! Html::link(route('companies.positions.edit', ['companies' => $company->id, 'positions' => $position->id]), 'Edit', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
@endsection
