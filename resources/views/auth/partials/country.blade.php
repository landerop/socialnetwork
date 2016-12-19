@inject('countries', '\App\Utilities\Country')

<div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
    <label for="country" class="col-md-4 control-label">Country</label>

    <div class="col-md-6">
        <select name="country" id="country" class="form-control">
            <option value="">Select a country</option>

            @foreach ($countries->all() as $code => $name)
                <option value="{{ $code }}"
                    {{ (old('country') == $code) ? 'selected' : ''}}>
                        {{ $name }}
                </option>
            @endforeach
        </select>

        @if ($errors->has('country'))
            <span class="help-block">
                <strong>{{ $errors->first('country') }}</strong>
            </span>
        @endif
    </div>
</div>
