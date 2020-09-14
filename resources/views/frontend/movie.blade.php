@extends('frontend')
@section('maincontent')
  <div class="container">
    <h1 class="text-center text-white">All Movies </h1>
  </div>
  <div class="container-fluid">
  	<div class="row">
      <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
        @foreach ($movies as $movie)
                  <div class="movie">
                <p class="text-truncate"> {{$movie->title}}</p> 
                <img src="{{asset($movie->photo)}}" class="img-fluid">
                <p class="text-truncate"> {{$movie->link}}</p> 
                <p class="text-truncate">{{$movie->stars}}</p>
                <p class="text-truncate">{{$movie->good_point}}</p>
                <p class="text-truncate">{{$movie->quality}}</p>
                <p class="text-truncate">{{$movie->review}}</p>
                <p class="text-truncate">{{$movie->size}}</p>
                <p class="text-truncate">{{$movie->release_year}}</p>
                <p class="text-truncate">{{$movie->run_time}}</p>
                <p class="text-truncate">{{$movie->release_country}}</p>
                <p class="text-truncate">{{$movie->rating}}</p>
                 </div>
    @endforeach
                 
                
      </div>
  	</div>
  </div>
  	
  </div>
  @endsection
	