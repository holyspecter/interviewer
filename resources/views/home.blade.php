@extends('base')

@section('content')
    <h3>{{ $company->name }}</h3>
    <hr/>
    <article>
        {{ $company->description }}
    </article>
    <h4>Positions</h4>
    <ul>
        @foreach($company->positions as $position)
            <li><a href="{{ route('positions.show', ['id' => $position->id]) }}">{{ $position->title }}</a></li>
        @endforeach
    </ul>

    @if($user->company->id == $company->id)
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                {!! Html::link(route('positions.create', ['companyId' => $company->id]), 'Add position', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection
