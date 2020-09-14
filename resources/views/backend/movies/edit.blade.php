@extends('backendtemplate')
@section('mainsection')
<div class="container">
	{{-- page heading --}}
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Movies Create From</h1>
	</div>
</div>
<form action="{{route('movies.update',$movies->id)}}" enctype="multipart/form-data" method="post">
	@csrf
  @method('PUT')
	  <div class="form-row">
    <div class="col-md-5 mb-3 ml-2">
      <label for="validationDefault01">Title</label>
      <input type="text" class="form-control" id="validationDefault01" name="title" value="{{$movies->title}}">
      @error('title')
		<div class="alert alert-danger">{{$message}}</div>
		@enderror
    </div>
    <div class="col-md-5 mb-3">
      <label for="validationDefault02">Photo</label>
      <input type="file" class="form-control" id="validationDefault02" name="photo">
      <img src="{{asset($movies->photo)}}" class="img-fluid w-25">
          <input type="hidden" name="oldphoto" value="{{$movies->photo}}">
      @error('photo')
		<div class="alert alert-danger">{{$message}}</div>
		@enderror
    </div>
  </div>
  <div class="form-row">
  <div class="col-md-5 mb-3 ml-2">
    <label for="validationDefault01">Director</label>
    <div class="col-md-12">
      <input type="text" name="director" value="{{$movies->director}}" readonly="">
      {{-- <select class="form-control form-control-md" id="inpurBrand" name="director" value={{$movies->director}}>
        @foreach ($directors as $director)
        <option value="{{$director->id}}" readonly>{{$director->name}}</option>
        @endforeach
      </select> --}}
    </div>      
    @error('director')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
  <div class="col-md-5 mb-3">
    <label for="validationDefault02">Genres</label>
    <div class="col-md-12">
      <input type="text" name="genre" value="{{$movies->genre}}" readonly="">
      {{-- <select class="form-control form-control-md" id="inpurBrand" name="genre" val>
        @foreach ($genres as $genre)
        <option value="{{ $genre->id }}">{{$genre->title}}</option>
        @endforeach
      </select> --}}
    </div>   
    @error('genre')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
</div>
  <div class="form-row">
    <div class="col-md-5 mb-3 ml-2">
      <label for="validationDefault01">Link</label>
      <input type="text" class="form-control" id="validationDefault01" name="link" value="{{$movies->link}}">
      @error('link')
		<div class="alert alert-danger">{{$message}}</div>
		@enderror
    </div>
    <div class="col-md-5 mb-3">
      <label for="validationDefault02">Stars</label>
      <input type="text" class="form-control" id="validationDefault02" name="star" value="{{$movies->stars}}" readonly="">
      @error('star')
		<div class="alert alert-danger">{{$message}}</div>
		@enderror
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-5 mb-3 ml-2">
      <label for="validationDefault01">Good Point</label>
     
      <textarea class="form-control" name="point"> {{$movies->good_point}}</textarea>
      @error('point')
		<div class="alert alert-danger">{{$message}}</div>
		@enderror
    </div>
    <div class="col-md-5 mb-3">
      <label for="validationDefault02">Quality</label>
      <input type="text" class="form-control" id="validationDefault02" name="quality" value="{{$movies->quality}}">
      @error('quality')
		<div class="alert alert-danger">{{$message}}</div>
		@enderror
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-5 mb-3 ml-2">
      <label for="validationDefault01">Size</label>
      <input type="text" class="form-control" id="validationDefault01" name="size" value="{{$movies->size}}">
      @error('size')
		<div class="alert alert-danger">{{$message}}</div>
		@enderror
     
    </div>
    <div class="col-md-5 mb-3">
      <label for="validationDefault02">Review</label>
      
      <textarea class="form-control" name="review">{{$movies->review}}</textarea>
       @error('review')
		<div class="alert alert-danger">{{$message}}</div>
		@enderror
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-5 mb-3 ml-2">
      <label for="validationDefault01">Release Year</label>
      <input type="number" class="form-control" id="validationDefault01" name="year" value="{{$movies->release_year}}">
      @error('year')
		<div class="alert alert-danger">{{$message}}</div>
		@enderror
    </div>
    <div class="col-md-5 mb-3">
      <label for="validationDefault02">Run Time</label>
      <input type="text" class="form-control" id="validationDefault02" name="time" value="{{$movies->run_time}}">
      @error('time')
		<div class="alert alert-danger">{{$message}}</div>
		@enderror
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-5 mb-3 ml-2">
      <label for="validationDefault01">Release Country</label>
      <input type="text" class="form-control" id="validationDefault01" name="country" value="{{$movies->release_country}}">
      @error('country')
		<div class="alert alert-danger">{{$message}}</div>
		@enderror
    </div>
    <div class="col-md-5 mb-3">
      <label for="validationDefault02">Rating</label>
      <input type="number" class="form-control" id="validationDefault02" name="rating" value="{{$movies->rating}}">
      @error('rating')
		<div class="alert alert-danger">{{$message}}</div>
		@enderror
    </div>
  </div>
		<div class="col-lg-6">
			<input type="submit" class="btn btn-primary" value="Update" name="btn_submit">
		</div>
</form>
@endsection


