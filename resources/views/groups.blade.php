@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Groups list
                    <p class="text-right"><a href="{{url('groups/create')}}" class="btn btn-primary"> Add new</a></p>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-hover">
                    	<thead>
                    		<tr>
                    			<th>Id</th>
                    			<th>Name</th>
                                <th>&nbsp;</th>
                    		</tr>
                    	</thead>
                    	<tbody>

                        @forelse($groups as $group)
                            <tr>
                                <td>{{$group->id}}</td>
                                <td>{{$group->name}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="groups/{{$group->id}}/edit" class="btn btn-info">Edit</a>
                                        <a href="groups/{{$group->id}}" class="btn btn-danger"
                                           onclick="event.preventDefault();
                                                     document.getElementById('delete-form{{$group->id}}').submit();"
                                        >Delete</a>
                                        {{Form::open(['url' => 'groups/'.$group->id,
                                         'method' => 'delete', 'id'=>'delete-form'.$group->id])}}
                                        {{Form::close()}}
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3">Groups list empty, please add one.</td>
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
