@extends('layout.master')
@section('title','General Settings')
@section('bread_2','>> General Settings')
@section('contents')
    <div class="inner_content_w3_agile_info two_in">
        <h2 class="w3_inner_tittle">General Settings</h2>

        <div class="forms-main_agileits">

            <div class="graph-form agile_info_shadow">
                <h3 class="w3_inner_tittle two">Update Settings</h3>
                <div class="form-body">
                    {!! Form::model($setting, [
                        'method' => 'post',
                        'url' => ['/admin/settings/update'],
                        'class' => 'form-horizontal',
                        'files' => true,
                        'id'    => 'settings_form'
                    ]) !!}

                    @include ('admin.setting.form', ['submitButtonText' => 'Update'])

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom_js')

@endsection

