@extends('layout')

@section('content')

<div class="container">
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

@endsection
