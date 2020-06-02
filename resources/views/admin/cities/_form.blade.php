@csrf
<div class="form-group">
    <label for="city_name">{{ ("City Name:") }}</label>
    <input type="text" class="form-control @error('city_name') is-invalid @enderror" id="city_name" name="city_name" value="{{ old('city_name', $cities->city_name) }}" autofocus>
    @error('city_name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <button type="submit" class="btn btn-success">{{ $buttonText }}</button>
    <a href="{{ route('citymasters.index') }}" class="btn btn-danger ml-3">Cancel</a>
</div>
