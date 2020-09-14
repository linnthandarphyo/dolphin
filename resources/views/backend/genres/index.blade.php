@extends('backendtemplate')
@section('mainsection')
<div class="container-fluid">
	{{-- page heading --}}
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Genres List</h1>
		<a href="{{route('genres.create')}}" class="btn btn-info">Add New</a>
	</div>
	<div class="row">
		<table class="table table-bordered">
			<thead>
				<tr class="bg-dark text-light">
					<th>No</th>
					<th>Title</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@php
					$i=1;
					@endphp
					@foreach ($genres as $genre)
					<tr>
						<td>{{$i++}}</td>
						<td>{{$genre->title}}</td>
						<td>
						<a href="{{route('genres.edit',$genre->id)}}" class="btn btn-warning">Edit</a>
						<form method="post" action="{{route('genres.destroy',$genre->id)}}" onsubmit="return confirm('Are You Sure?')">
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
