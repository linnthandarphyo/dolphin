@extends('backendtemplate')
@section('mainsection')
<div class="container-fluid">
	{{-- page heading --}}
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800 text-center">Movies List</h1>
		<a href="{{route('movies.create')}}" class="btn btn-info">Add New</a>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered">
				<thead>
					<tr class="bg-dark text-light">
						<th>No</th>
						<th>Title</th>
						<th>Photo</th>
						<th>Director</th>
						<th>Genres</th>
						<th>Link</th>
						<th>Stars</th>
						<th>Action</th>
				</thead>
				<tbody>
					@php
					$i=1;
					@endphp
					@foreach ($movies as $movie)
						<td>{{$i++}}</td>
						<td>{{$movie->title}}</td>
						<td><img src="{{ asset($movie->photo)}}" width="100" height="120"></td>
						<td>{{$movie->director}}</td>
						<td>{{$movie->genre}}</td>
						<td>{{$movie->link}}</td>
						<td>{{$movie->stars}}</td>
						<td>
						<a href="" class="btn btn-info">Detail</a>
						<a href="{{route('movies.edit',$movie->id)}}" class="btn btn-warning">Edit</a>
						<form method="post" action="{{route('movies.destroy',$movie->id)}}" onsubmit="return confirm('Are You Sure?')">
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
</div>
@endsection
