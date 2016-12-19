<div class="form-group {{ $errors->has('city') ? ' has-error' : '' }}">
    <label for="city" class="col-md-4 control-label">City</label>

    <div class="col-md-6">
        <input type="text" name="city" id="city" value="{{ old('city') }}" class="form-control" placeholder="City">

        @if ($errors->has('city'))
            <span class="help-block">
                <strong>{{ $errors->first('city') }}</strong>
            </span>
        @endif
    </div>
</div>
