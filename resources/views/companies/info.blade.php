<div class="row">
    <div class="col-md-4">
        <h3>{{ $company->name }}</h3>
    </div>
    <div class="col-md-4">
        @if($user->company->id == $company->id)
            {!! Html::link(route('companies.edit', ['companies' => $company->id]), 'Edit info', ['class' => 'btn btn-primary']) !!}
        @endif
    </div>
</div>
<hr/>
<article>
    {{ $company->description }}
</article>
<h4>Positions</h4>
<div class="row">
    <div class="col-md-4">
        @include('positions.list', ['positions' => $company->positions])
    </div>
    <div class="col-md-4">
        @if($user->company->id == $company->id)
            {!! Html::link(route('companies.positions.create', ['companies' => $company->id]), 'Add position', ['class' => 'btn btn-primary']) !!}
        @endif
    </div>
</div>

<h4>Questionnaires</h4>
<div class="row">
    <div class="col-md-4">
        <ul>
            @foreach($company->questionnaires as $questionnaire)
                <li>
                    <a href="{{ route('companies.questionnaires.show', ['companies' => $company->id, 'questionnaires' => $questionnaire->id]) }}">
                        {{ $questionnaire->title }}
                    </a>
                    @if($user->company->id == $company->id)
                        {!! Form::open(['url' => route('companies.questionnaires.destroy', ['companies' => $questionnaire->company->id, 'questionnaires' => $questionnaire->id]), 'method' => 'DELETE', 'style' => 'display: inline;']) !!}
                            <button type="submit" class="btn btn-danger">
                                <span class="glyphicon glyphicon-remove"></span>
                            </button>
                        {!! Form::close() !!}
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
    <div class="col-md-4">
        @if($user->company->id == $company->id)
            {!! Html::link(route('companies.questionnaires.create', ['companies' => $company->id]), 'Add questionnaire', ['class' => 'btn btn-primary']) !!}
        @endif
    </div>
</div>
