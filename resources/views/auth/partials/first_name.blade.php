<div class="form-group {{ $errors->has('first_name') ? ' has-error' : '' }}">
    <label for="first_name" class="col-md-4 control-label">First Name</label>

    <div class="col-md-6">
        <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" class="form-control" placeholder="First Name">

        @if ($errors->has('first_name'))
            <span class="help-block">
                <strong>{{ $errors->first('first_name') }}</strong>
            </span>
        @endif
    </div>
</div>
