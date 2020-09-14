@extends('backendtemplate')
@section('mainsection')
<div class="container">
	<div class="d-sm-flex align-items-center justify-content-center">
		<h1 class="h3 mb-0 text-gray-800">Actor Create Form</h1>

		
	</div>
	<form class="col-md-6 my-4" action="{{route('actors.store')}}" method="post" >
		@csrf
		@error('name')
		<div class="alert alert-danger">{{$message}}</div>
		@enderror
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Actor Name</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="name">
			</div>
		</div>
		@error('gender')
		<div class="alert alert-danger">{{$message}}</div>
		@enderror
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Gender</label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Male" checked>
				<label class="form-check-label" for="exampleRadios1">
					Male
				</label>
			</div>
			<br>
			<div class="form-check ml-3">
				<input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="Female">
				<label class="form-check-label" for="exampleRadios2">
					Female
				</label>
			</div>
		</div>
		<div class="form-group row">
			
			<input type="submit" class="btn btn-primary" value="Create" name="btnsubmit">
		</div>
	</form>
</div>
@endsection