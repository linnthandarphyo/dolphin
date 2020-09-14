@extends('backendtemplate')
@section('mainsection')
<div class="container">
	<div class="d-sm-flex align-items-center justify-content-between">
		<h1 class="h3 mb-0 text-gray-800 ">Actor List</h1>

		<a href="{{route('actors.create')}}" class="btn btn-info ">Add New</a>
	</div>
</div>
<div class="container">
	

	<div class="row">

		<div class="col-md-12">

			<table class="table table-bordered">
				<thead class="bg-dark text-white">
					<tr>
						<th>No</th>
						<th>Actor Name</th>
						<th>Gender</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
						@php $i=1; @endphp
						@foreach ($actors as $actor)
						<tr>
						<td>{{$i++}}</td>
						<td>{{$actor->name}}</td>
						<td>{{$actor->gender}}</td>
						
						<td>
							{{-- <a href="{{route('actors.show',$actor->id)}}" class="btn btn-info">Detail</a> --}}
							<a href="{{route('actors.edit',$actor->id)}}" class="btn btn-warning">Edit</a>
							<form method="post" action="{{ route('actors.destroy',$actor->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
								@csrf
								@method('DELETE')
								<input type="submit" class="btn btn-danger" value="Delete">
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