@extends('base')

@section('content')
    <h3>New questionnaire for company {{ $company->title }}</h3>
    <hr/>
    {!! Form::open(['url' => route('companies.questionnaires.store', ['companies' => $company->id])]) !!}
        <div class="form-group">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title', Input::old('title'), ['class' => 'form-control']) !!}
        </div>
    
        <div class="form-group">
            {!! Form::label('description', 'Description') !!}
            {!! Form::text('description', Input::old('description'), ['class' => 'form-control']) !!}
        </div>

        <hr/>

        <div id="questions-container"></div>

        <div class="form-group">
            {!! Form::button('Add question', ['id' => 'add-question', 'class' => 'btn btn-default']) !!}
        </div>
    
        <div class="form-group">
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}

    <div id="question-prototype" style="display: none;">
        <div class="form-group">
            {!! Form::label('question', 'Question') !!}
            {!! Form::text('questions[0][question]', null, ['class' => 'form-control']) !!}
        </div>

        <div class="answers-container">
            <div class="form-group">
                {{-- @todo: proper indexing --}}
                {!! Form::label('answer', 'Answers') !!}
                {!! Form::text('questions[0][answers][]', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::text('questions[0][answers][]', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::text('questions[0][answers][]', null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('#add-question').on('click', function () {
            var questionBlock = $('#question-prototype').clone();

            questionBlock.show();

            $('#questions-container').append(questionBlock);
        });
    </script>
@endsection
