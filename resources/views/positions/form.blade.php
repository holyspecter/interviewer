<div class="form-group">
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', Input::old('title'), ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description') !!}
    {!! Form::textarea('description', Input::old('description'), ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('questionnaire', 'Questionnaire') !!}
    {!! Form::select('questionnaire', $questionnaires, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButton, ['class' => 'btn btn-primary']) !!}
</div>
