<div class="form-group {{ $errors->has('last_name') ? ' has-error' : '' }}">
    <label for="last_name" class="col-md-4 control-label">Last Name</label>

    <div class="col-md-6">
        <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}" class="form-control" placeholder="Last Name">

        @if ($errors->has('last_name'))
            <span class="help-block">
                <strong>{{ $errors->first('last_name') }}</strong>
            </span>
        @endif
    </div>
</div>
