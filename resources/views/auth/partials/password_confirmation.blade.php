<div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
    <label for="password_confirmation" class="col-md-4 control-label">Confirm Password</label>

    <div class="col-md-6">
        <input type="password" name="password_confirmation" id="password_confirmation" autocomplete="off" class="form-control" placeholder="Confirm Password">

        @if ($errors->has('password_confirmation'))
            <span class="help-block">
                <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
        @endif
    </div>
</div>
