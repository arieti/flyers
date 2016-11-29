@extends('layout')

@section('content')
	<h2>Selling your home?</h2>
	<hr>
	<form method="POST" action="/flyers" enctype="multipart/form-data">
		@include('flyers.form')
			@if(count($errors) > 0)
		        <div class="alert alert-danger">
		            <ul>
		                @foreach($errors->all() as $error)
		                    <li>{{ $error }}</li>
		                @endforeach
		            </ul>
		        </div>
		    @endif
    </form>
@stop

@section('scripts')
	@include('flash')
@stop
