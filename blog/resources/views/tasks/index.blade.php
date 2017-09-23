@extends('layouts.app')

@section('content')
<div class="panel panel-default">
	<ul>
		@foreach($tasks as $task)
			<li>{{ $task->name }}</li>
		@endforeach
	</ul>
</div>
<div class="container">
		@include('errors.common')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Task</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/task') }}">
                        {{ csrf_field() }}
                        <!-- cross site request foregery -->

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Task</label>

                            <div class="col-md-6">
                                <input id="task_name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-plus"></i> Add
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
