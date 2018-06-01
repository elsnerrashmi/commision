@extends('layout.master')
@section('title','Profile')
@section('bread_2','>> Profile')
@section('contents')
    <div class="inner_content_w3_agile_info two_in">
        <h2 class="w3_inner_tittle">Profile</h2>
        <div class="forms-main_agileits">
            {!! Form::open(['url' => 'admin/profile/update/','class'=>'form-horizontal','id'=>'validate_form','method'=>'post','enctype' => 'multipart/form-data']) !!}
            <div class="graph-form agile_info_shadow">
                <h3 class="w3_inner_tittle two">Update Profile</h3>
                <div class="form-body">
                    <div class="form-group col-md-6 {{ $errors->has('name') ? ' has-error' : '' }}">
                        {!! Form::label('name', 'Name', ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('name', Auth::user()->name, ['class' => 'form-control rounded required']) !!}
                            @if ($errors->has('name'))
                                <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group col-md-6 {{ $errors->has('email') ? ' has-error' : '' }}">
                        {!! Form::label('email', 'Email', ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::email('email', Auth::user()->email, ['class' => 'form-control rounded required email']) !!}
                            @if ($errors->has('email'))
                                <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group col-md-6 {{ $errors->has('profile_pic') ? ' has-error' : '' }}">
                        {!! Form::label('profile_pic', 'Profile Picture', ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-6">
                            <input ui-jq="filestyle" ui-options="{icon: false, buttonName: 'btn-primary'}"
                                   type="file" name="profile_pic" id="filestyle-0" tabindex="-1">

                            @if ($errors->has('profile_pic'))
                                <span class="help-block">
                                                <strong>{{ $errors->first('profile_pic') }}</strong>
                                            </span>
                            @endif
                            @if(Auth::user()->profile_pic!='')
                                <img src="{{asset('public/user/profile/'.Auth::user()->profile_pic)}}" width="15%"
                                     height="15%">
                            @endif
                        </div>

                    </div>
                    <div class="form-group col-md-6">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-6 ">
                            <a href="#" onclick="$('#change_pass_div').toggle();">Change Password</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-4 col-md-4">
                        </div>
                    </div>
                </div>
            </div>
            <div class="graph-form agile_info_shadow" id="change_pass_div" style="display: none">
                <h3 class="w3_inner_tittle two">Change Password</h3>
                <div class="form-body">

                    <div class="form-group col-md-6 {{ $errors->has('password') ? ' has-error' : '' }}">
                        {!! Form::label('password', 'New Password', ['class' => 'col-sm-4 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::password('password',  ['class' => 'form-control rounded','minlength'=>6]) !!}
                            @if ($errors->has('password'))
                                <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group col-md-6 {{ $errors->has('confirm_password') ? ' has-error' : '' }}">
                        {!! Form::label('confirm_password', 'Confirm Password', ['class' => 'col-sm-4 control-label',"id"=>'password']) !!}
                        <div class="col-sm-6">
                            {!! Form::password('confirm_password',  ['class' => 'form-control rounded','minlength'=>6,'equalTo'=> "#password"]) !!}
                            @if ($errors->has('confirm_password'))
                                <span class="help-block">
                                                <strong>{{ $errors->first('confirm_password') }}</strong>
                                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-4 col-md-4">

                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-5 col-md-4">
                    <button type="submit" id="validate_submit" class="btn btn-primary">Save changes
                    </button>
                </div>
            </div>
            {!! Form::close() !!}

        </div>
    </div>
@endsection
