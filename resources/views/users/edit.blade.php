@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit User : {{$user->login}}</div>
                    <div class="panel-body">
                        {!! Form::model($user,['method' => 'PATCH',
                        'url' => 'users/'. $user->id]) !!}
                        @include('partials.userform')
                        <button type="submit" class="btn btn-primary">Edit</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
