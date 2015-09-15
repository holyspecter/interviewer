@extends('base')

@section('content')
    <h3>Company {{ $company->name  }}</h3>
    <hr/>
    <article>
        {{ $company->description  }}
    </article>
    <hr/>
    <h4>Positions</h4>
    <ul>
        @foreach($company->positions as $position)
            <li>{{ $position->title  }}</li>
        @endforeach
    </ul>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            {!! Html::link(route('companies.positions.create', ['companyId' => $company->id]), 'Add position', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
@endsection
