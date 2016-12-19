<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email" class="col-md-4 control-label">E-Mail</label>

    <div class="col-md-6">
        <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="E-Mail">

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>
