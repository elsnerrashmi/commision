@extends('layout.master')
@section('title','Edit Role')
@section('bread_1','>> Roles')
@section('bread_1_link',url('/admin/roles'))
@section('bread_2','>> Edit')
@section('contents')
    <div class="inner_content_w3_agile_info two_in">
        <h2 class="w3_inner_tittle">Edit Role</h2>
            <div class="blank_w3ls_agile">
                <div class="blank-page agile_info_shadow">
                    <a href="{{ url('/admin/roles') }}" title="Back">
                        <button class="btn pull-right btn-warning btn-sm"><i class="fa fa-arrow-left"
                                                                             aria-hidden="true"></i> Back
                        </button>
                    </a>

                    <form method="POST" id="validate_form" action="{{ url('/admin/roles/' . $role->id) }}"
                          accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}
                            @include ('admin.roles.form', ['submitButtonText' => 'Update'])
                        </form>
                </div>
            </div>
    </div>

 @endsection


