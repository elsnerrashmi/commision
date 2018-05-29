
@extends('layout.master')

<!-- /inner_content_w3_agile_info-->
@section('contents')
<div class="inner_content">
<!-- breadcrumbs -->
    <div class="w3l_agileits_breadcrumbs">
        <div class="w3l_agileits_breadcrumbs_inner">
            <ul>
                <li><a href="main-page.html">Home</a><span>«</span></li>
                <li>More <span>«</span></li>
                <li>FaQs</li>
            </ul>
        </div>
    </div>
<!-- //breadcrumbs -->

    <div class="inner_content_w3_agile_info two_in">
         <h2 class="w3_inner_tittle">Blank Page</h2>

            <!-- /blank -->
            <div class="blank_w3ls_agile">
                <div class="blank-page agile_info_shadow">
                     <a href="{{ url('/admin/roles') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/admin/roles/' . $role->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('admin.roles.form', ['submitButtonText' => 'Update'])

                        </form>
                </div>
            </div>
            <!-- //blank -->


      </div> <!--  inner_content_w3_agile_info-->
</div>
<!-- //inner_content -->
  
 @endsection


