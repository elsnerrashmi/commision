

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
                        <a href="{{ url('/admin/roles/' . $role->id . '/edit') }}" title="Edit role"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/roles' . '/' . $role->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete role"
                                    onclick="return confirm(&quot;Confirm; delete?;&quot;)"><i class="fa fa-trash-o"
                                                                                               aria-hidden="true"></i>
                                Delete
                            </button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $role->id }}</td>
                                    </tr>
                                    <tr><th> Role Name </th><td> {{ $role->role_name }} </td></tr>
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
            <!-- //blank -->

      </div> <!--  inner_content_w3_agile_info-->
</div>
<!-- //inner_content -->
  
 @endsection


