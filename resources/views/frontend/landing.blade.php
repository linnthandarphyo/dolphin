@extends('frontend')
@section('maincontent')
<div class="landing-hero">
	<img src="images/d4.jpg" alt="Logo"width="150" height="130">
	<div class="row landing-hero-text">
		<h2>MOST COMPLETED</h2>
		<h2 class="text-yellow">FILM REVIEW  &middot;  MOVIE DATABASE</h2>
		<h2>HTML TEMPLATE</h2>
	</div>
	<a href="#" class="redbtn" id="discover-now">DISCOVER NOW</a>
</div>
<div class="landing-version">
	<div class="container">
		<div class="col-md-6">
			<img src="images/uploads/landing-dark-version.png" alt="Dark Version">
			<h2>DARK VERSION</h2>
			<a href="{{ route('homepage')}}" target="blank_" class="redbtn">SEE DEMO</a>
		</div>
		<div class="col-md-6">
			<img src="images/uploads/landing-light-version.png" alt="Light Version">
			<h2>LIGHT VERSION</h2>
			<a href="index_light.html" target="blank_" class="redbtn">SEE DEMO</a>
		</div>
	</div>
</div>
<!-- footer v3 section-->
<div class="ft-copyright-landing">
	<p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
</div>
<!-- end of footer v3 section-->
@endsection