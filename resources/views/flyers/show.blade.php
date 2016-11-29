@extends('../layout')

@section('content')

	<div class="row">
		<div class="col-md-3">
			<h2>{{ $flyer->street }}</h2>
			<h2>{{ $flyer->price }}</h2>

			<hr>
			<div class="description">
				{{ $flyer->description }}
			</div>
		</div>
		<div class="col-md-9">
			
			@foreach($flyer->photos as $photo)
				<img style=" max-width: 100%" src="/{{ $photo->path }}" alt="">
			@endforeach
		</div>
	</div>

	<hr>
	<h2>Add Your Photos</h2>

		<form id="addPhotosForm" 
			action="{{ route('store_photo_path', [$flyer->zip, $flyer->street]) }}" 
			method="POST" 
			class="dropzone">
	        {{ csrf_field() }}
	    </form>
	

@stop

@section('scripts')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js" type="text/javascript"></script>
	<script type="text/javascript">
		Dropzone.options.addPhotosForm = {
			paramName: 'photo',
			maxFilesize: 3,
			acceptedFiles: '.jpg, .jpeg, .png'
		};
	</script>
@stop