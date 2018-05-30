@extends('layout.master')
@section('title','Roles List')
@section('bread_2','>> Roles')
@section('contents')
    <div class="inner_content_w3_agile_info two_in">
        <h2 class="w3_inner_tittle">Roles</h2>
        <div class="blank_w3ls_agile">
            <div class="blank-page agile_info_shadow">
                <h3 class="w3_inner_tittle two">Roles Listing</h3>
                <a href="{{ url('/admin/roles/create') }}" class="btn btn-success btn-sm" title="Add New role">
                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                </a>
                <div class="pull-right ">
                    <form method="GET" action="{{ url('/admin/roles') }}" accept-charset="UTF-8" class="" role="search">
                        <div class="form-group col-md-10">
                            <input type="text" class="form-control col-md-6" name="search" placeholder="Search..."
                                   value="{{ request('search') }}">

                        </div>
                        <span class="input-group-append col-md-2">
                                        <button class="btn btn-secondary " type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                    </form>
                </div>
                <table id="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Role Name</th>
                        <th width="25%">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($roles as $item)
                        <tr>
                            <td>{{ $loop->iteration or $item->id }}</td>
                            <td>{{ $item->role_name }}</td>
                            <td>

                                <a href="{{ url('/admin/roles/' . $item->id . '/edit') }}" title="Edit role">
                                    <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                                              aria-hidden="true"></i></button>
                                </a>

                                <form method="POST" action="{{ url('/admin/roles' . '/' . $item->id) }}"
                                      accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete role"
                                            onclick="return confirm(&quot;Confirm; delete?;&quot;)"><i
                                                class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="pagination-wrapper"> {!! $roles->appends(['search' => Request::get('search')])->render() !!} </div>
            </div>
        </div>
    </div>

@endsection


