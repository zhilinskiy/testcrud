@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Users list
                    <p class="text-right"><a href="{{url('users/create')}}" class="btn btn-primary"> Add new</a></p>
                </div>
                <div class="panel-body">
                <table class="table table-striped table-hover">
                	<thead>
                		<tr>
                			<th>Id</th>
                			<th>Group</th>
                			<th>Login</th>
                			<th>Email</th>
                			<th>Expiration date</th>
                            <th>&nbsp;</th>
                		</tr>
                	</thead>
                	<tbody>
                    @forelse($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->group->name}}</td>
                            <td>{{$user->login}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->expiration_date_time->format('d/m/Y')}}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="users/{{$user->id}}/edit" class="btn btn-info">Edit</a>
                                    <a href="users/{{$user->id}}" class="btn btn-danger"
                                       onclick="event.preventDefault();
                                                     document.getElementById('delete-form{{$user->id}}').submit();"
                                    >Delete</a>
                                    {{Form::open(['url' => 'users/'.$user->id,
                                     'method' => 'delete', 'id'=>'delete-form'.$user->id])}}
                                    {{Form::close()}}
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">Users list empty, please add one.</td>
                        </tr>
                    @endforelse
                	</tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
