@extends('backendtemplate')
@section('mainsection')
<div class="container-fluid">
	{{-- page heading --}}
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Directors List</h1>
		<a href="{{route('directors.create')}}" class="btn btn-info">Add New</a>
	</div>
	<div class="row">
		<table class="table table-bordered">
			<thead>
				<tr class="bg-dark text-light">
					<th>No</th>
					<th>Name</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@php
					$i=1;
					@endphp
					@foreach ($directors as $director)
					<tr>
						<td>{{$i++}}</td>
						<td>{{$director->name}}</td>
						<td>
						<a href="{{route('directors.edit',$director->id)}}" class="btn btn-warning">Edit</a>
						<form method="post" action="{{route('directors.destroy',$director->id)}}" onsubmit="return confirm('Are You Sure?')">
							@csrf
							@method('DELETE')
							<button class="btn btn-danger" type="submit">Delete</button>
						</form>
						</td>
					</tr>
					@endforeach
			</tbody>
		</table>
	</div>
</div>


@endsection
