@inject('countries', 'App\Http\Utilities\Country')
	
{{ csrf_field() }}

<div class="form-group">
    <label for="street">Street:</label>
    <input type="street" name="street" id="street" class="form-control" value="{{ old('street') }}">
</div>

<div class="form-group">
    <label for="city">City:</label>
    <input type="city" name="city" id="city" class="form-control">
</div>

<div class="form-group">
    <label for="zip">Zip/Postal Code:</label>
    <input type="zip" name="zip" id="zip" class="form-control" value="{{ old('street') }}">
</div>

<div class="form-group">
    <label for="country">Country:</label>
    <select id="country" name="country" class="form-control">
    	@foreach($countries::all() as $country => $code)
    		<option value="{{ $code }}">{{ $country }}</option>}
    		option
    	@endforeach
    </select>
</div>

<hr>

<div class="form-group">
    <label for="price">Sale Price:</label>
    <input type="text" name="price" id="price" class="form-control" value="{{ old('price') }}">
</div>

<div class="form-group">
    <label for="description">Home Description:</label>
    <textarea type="text" name="description" id="description" class="form-control" rows="10">
    	{{ old('description') }}
    </textarea>
</div>


<div class="form-group">
    <button type="submit" class="btn btn-primary">Create Flyer</button>
</div>