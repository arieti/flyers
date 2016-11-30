@extends('../layout')

@section('content')

	<div class="row">
		<div class="col-md-4">
			<h2>{{ $flyer->street }}</h2>
			<h2>{{ $flyer->price }}</h2>

			<hr>
			<div class="description">
				{{ $flyer->description }}
			</div>
		</div>
		<div class="col-md-8">
			@foreach($flyer->photos->chunk(4) as $set)
				<div class="row">
					@foreach($set as $photo)
						<div class="col-md-3">
							<img style=" max-width: 100%; margin-bottom: 2em" src="/{{ $photo->thumbnail_path }}" alt="">
						</div>
					@endforeach
				</div>
			@endforeach

			@if($user && $user->owns($flyer))
				<form id="addPhotosForm" 
					action="{{ route('store_photo_path', [$flyer->zip, $flyer->street]) }}" 
					method="POST" 
					class="dropzone">
			        {{ csrf_field() }}
			    </form>
		    @endif
		</div>
	</div>

		
	

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