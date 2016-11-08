<div class="form-group">
    {!! Form::label('group_id', 'Select group:') !!}
    {!! Form::select('group_id',$groups ,old('group_id'),
     ['class' => $errors->has('group_id') ? 'form-control has-error' : 'form-control' ]) !!}
    @if ($errors->has('group_id'))
        <span class="help-block">
                                        <strong>{{ $errors->first('group_id') }}</strong>
                                    </span>
    @endif
</div>
<div class="form-group">
    {!! Form::label('login', 'Login:') !!}
    {!! Form::text('login', old('login'),
     ['class' => $errors->has('login') ? 'form-control has-error' : 'form-control']) !!}
    @if ($errors->has('login'))
        <span class="help-block">
                                        <strong>{{ $errors->first('login') }}</strong>
                                    </span>
    @endif
</div>
<div class="form-group">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', old('password'),
     ['class' => $errors->has('password') ? 'form-control has-error' : 'form-control']) !!}
    @if ($errors->has('password'))
        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
    @endif
</div>
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', old('email'),
     ['class' => $errors->has('email') ? 'form-control has-error' : 'form-control']) !!}
    @if ($errors->has('email'))
        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
    @endif
</div>
<div class="form-group">
    <div class='input-group date' id='datetimepicker'>
    {{--{!! Form::label('expiration_date_time', 'Expiration date time:') !!}--}}
        {!! Form::text('expiration_date_time', null,
        ['class' => $errors->has('expiration_date_time') ? 'form-control has-error' : 'form-control']) !!}
        <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
        </span>
    </div>
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker').datetimepicker({
                format:'YYYY-MM-DD h:mm:ss',
                defaultDate: moment(),
                sideBySide: true,
                showTodayButton: true
            });
        });
    </script>
    @if ($errors->has('expiration_date_time'))
        <span class="help-block">
                            <strong>{{ $errors->first('expiration_date_time') }}</strong>
        </span>
    @endif
</div>

