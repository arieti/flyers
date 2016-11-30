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
@stop
