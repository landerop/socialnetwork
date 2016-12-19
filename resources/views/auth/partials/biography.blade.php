<div class="form-group {{ $errors->has('biography') ? ' has-error' : '' }}">
    <label for="biography" class="col-md-4 control-label">Biography</label>

    <div class="col-md-6">
        <textarea name="biography" id="biography" class="form-control" placeholder="Biography">{{ old('biography') }}</textarea>

        @if ($errors->has('biography'))
            <span class="help-block">
                <strong>{{ $errors->first('biography') }}</strong>
            </span>
        @endif
    </div>
</div>
