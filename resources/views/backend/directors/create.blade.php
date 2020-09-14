@extends('backendtemplate')
@section('mainsection')
<div class="container">
	{{-- page heading --}}
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Directors Create From</h1>
	</div>
</div>
<div class="container">
	<div class="row">
		<form action="{{route('directors.store')}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="col-md-12">
					<label>Director Name</label>
					<input type="text" name="name" class="form-control">
					@error('name')
		  <div class="alert alert-danger">{{$message}}</div>
		@enderror
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<br>
					<input type="submit" value="Register" class="btn btn-info">
				</div>
			</div>
		</form>
	</div>
</div>


@endsection
