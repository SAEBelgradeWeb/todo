@extends('layout')

@section('content')



<form class="form-horizontal" method="POST" action="/">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<input type="hidden" name="status_id" value="1">
	<input type="hidden" name="user_id" value="1">
	<fieldset>

		<!-- Form Name -->
		<legend>Add new todo</legend>

		<!-- Text input-->
		<div class="control-group">
		<label class="control-label" for="todo">Title</label>
			<div class="controls">
				<input id="todo" name="todo" type="text" placeholder="" class="form-control input-xlarge" value="{{old('todo')}}">
				<div class="text-danger">{{$errors->first('todo')}}</div>
			</div>
		</div>

		<!-- Textarea -->
		<div class="control-group">
			<label class="control-label" for="description">Description</label>
			<div class="controls">                     
				<textarea id="description" class="form-control" name="description">{{old('description')}}</textarea>
				<div class="text-danger">{{$errors->first('description')}}</div>
			</div>
		</div>

		<!-- Button (Double) -->
		<div class="control-group">
			<label class="control-label" for="submit"></label>
			<div class="controls">
				<button id="submit" type="submit" name="submit" class="btn btn-success">Submit</button>
				<button id="reset" type="reset" name="reset" class="btn btn-danger">Reset</button>
			</div>
		</div>

	</fieldset>
</form>



@endsection

