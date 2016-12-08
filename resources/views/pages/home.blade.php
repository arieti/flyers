@extends('layout')
@section('content')
	
	<div class="jumbotron">
	  	<h2>Flyer project</h2>
	  	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	    consequat.</p>
		@if($signedIn)
            <a href="/flyers/create" class="btn btn-primary">Create a Flyer</a>
        @else
	        <a href="/register" class="btn btn-primary">Sign Up</a>
        @endif
	</div>
	@if($signedIn)
		<h2>All flyers</h2>
		<div class="flyers" 
		     style="display: flex; justify-content: space-around; flex-wrap:wrap">
			@foreach($flyers as $flyer)
				<div class="flyer" style="margin: 0 10px">
					<h2><a href="{{ url(flyer_path($flyer)) }}">{{ $flyer->street }}</a></h2>
					<img src="{{ $flyer->mainImage->thumbnail_path }}">
				</div>
			@endforeach
		</div>
    @endif
@stop
