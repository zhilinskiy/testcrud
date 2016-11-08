@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Create new Group</div>
                    <div class="panel-body">
                        {{--{!! Form::model('Group',['url' => 'groups/store', 'method' => 'post']) !!}--}}
                        {!! Form::open(['url' => 'groups', 'method' => 'post']) !!}
                        @include('partials.groupform')
                        <button type="submit" class="btn btn-primary">Submit</button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
