<ul>
    @foreach($positions as $position)
        <li>
            <a href="{{ route('companies.positions.show', ['companies' => $company->id, 'positions' => $position->id]) }}">
                {{ $position->title }}
            </a>
            @if($user->company->id == $company->id)
                {!! Form::open(['url' => route('companies.positions.destroy', ['companies' => $position->company->id, 'positions' => $position->id]), 'method' => 'DELETE', 'style' => 'display: inline;']) !!}
                    <button type="submit" class="btn btn-danger">
                        <span class="glyphicon glyphicon-remove"></span>
                    </button>
                {!! Form::close() !!}
            @endif
        </li>
    @endforeach
</ul>
