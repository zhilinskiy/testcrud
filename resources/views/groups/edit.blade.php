@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Create new Group</div>
                    <div class="panel-body">
                        {!! Form::model($group,['method' => 'PATCH',
                        'url' => 'groups/'. $group->id]) !!}
                        @include('partials.groupform')
                        <button type="submit" class="btn btn-primary">Edit</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
