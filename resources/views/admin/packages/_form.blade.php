@csrf
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="package_name">{{ __('Package Name:') }}</label>
        <input type="text" class="form-control @error('package_name') is-invalid @enderror" id="package_name" name="package_name" value="{{ old('package_name', $packages->package_name) }}" autofocus>
        @error('package_name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <label for="city_name">{{ __('City Name:') }}</label>
        <select name="city_name" id="city_name" class="form-control @error('city_name') is-invalid @enderror" id="city_name" name="city_name" value="{{ old('city_name', $packages->Cityname) }}" autofocus>
            @foreach ( $citymaster as $city)
                <option value="{{ $city->id }}">{{ $city->city_name }}</option>
            @endforeach
        </select>
        @error('city_name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-success">{{ $buttonText }}</button>
    <a href="{{ route('citymasters.index') }}" class="btn btn-danger ml-3">Cancel</a>
</div>
