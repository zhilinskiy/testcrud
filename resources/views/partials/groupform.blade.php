<div class="form-group">
    {!! Form::label('name', 'Group name:') !!}
    {!! Form::text('name', old('name'),
     ['class' => $errors->has('name') ? 'form-control has-error' : 'form-control' ]) !!}
    @if ($errors->has('name'))
        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
    @endif
</div>
