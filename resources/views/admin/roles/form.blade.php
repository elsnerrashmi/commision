<div class="form-group col-md-12 {{ $errors->has('role_name') ? 'has-error' : ''}}">
    <label for="role_name" class="col-md-2 control-label">{{ 'Role Name' }}</label>
    <div class="col-md-6">
        <input class="form-control required" name="role_name" type="text" id="role_name"
               value="{{ $role->role_name or ''}}">
        {!! $errors->first('role_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" id="validate_submit" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
