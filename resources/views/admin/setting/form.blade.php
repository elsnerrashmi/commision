<div class="form-group col-md-6 {{ $errors->has('site_name') ? 'has-error' : ''}}">
    {!! Form::label('site_name', 'Site Name', ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('site_name', null, ['class' => 'form-control required rounded']) !!}
        {!! $errors->first('site_name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group col-md-6 {{ $errors->has('footer_text') ? 'has-error' : ''}}">
    {!! Form::label('footer_text', 'Footer Text', ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('footer_text', null, ['class' => 'form-control required rounded']) !!}
        {!! $errors->first('footer_text', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group col-md-6 {{ $errors->has('site_logo') ? 'has-error' : ''}}">
    {!! Form::label('site_logo', 'Site Logo', ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-4">
        <input ui-jq="filestyle" ui-options="{icon: false, buttonName: 'btn-primary'}"
               type="file" name="site_logo" id="filestyle-1" tabindex="-1"
        >

        @if ($errors->has('site_logo'))
            <span class="help-block">
                <strong>{{ $errors->first('site_logo') }}</strong>
            </span>
        @endif
        @if ($setting['site_logo']!='')
            <img src="{{asset('public/general/'.$setting['site_logo'])}}" style="    margin-top: 10px;" width="80%"
                 height="40%">
        @endif

    </div>

</div>
<div class="form-group col-md-6 {{ $errors->has('site_favicon') ? 'has-error' : ''}}">
    {!! Form::label('site_favicon', 'Site Favicon', ['class' => 'col-sm-4 control-label']) !!}
    <div class="col-sm-4">
        <input ui-jq="filestyle" ui-options="{icon: false, buttonName: 'btn-primary'}"
               type="file" name="site_favicon" id="filestyle-0" tabindex="-1">

        @if ($errors->has('site_favicon'))
            <span class="help-block">
                <strong>{{ $errors->first('site_favicon') }}</strong>
            </span>
        @endif
        @if ($setting['site_favicon'])
            <img src="{{asset('public/general/'.$setting['site_favicon'])}}" style="    margin-top: 10px;" width="50px"
                 height="50px">
        @endif
    </div>
</div>
<div class="line line-dashed b-b line-lg pull-in"></div>
<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary','id'=>'settings_submit']) !!}
    </div>
</div>
