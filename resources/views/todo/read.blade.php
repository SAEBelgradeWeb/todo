@extends('layout')

@section('content')



	<div class="row">
		<div class="col-md-12" style="padding-bottom: 20px;">
			
			<a href="/create" class="btn btn-primary pull-right">Add New</a>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<table class="table table-striped">
				<tr>
					<th>Task</th>
					<th>Description</th>

					<th>Status</th>
				</tr>
				@foreach($todos as $todo)
				<tr>
					<td>{{$todo->todo}}</td>
					<td>{{$todo->description}}</td>
					<td>{{$todo->status->name}}</td>
				</tr>
				@endforeach

			</table>

		</div>
	</div>


@endsection
