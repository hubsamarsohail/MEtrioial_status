@extends('backend.master')
@section('title') Roles | View @endsection
@section('page_css_js')

@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Role Management</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('aDashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Roles</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Roles</h3>

                    <div class="card-tools">
                        <a href="{{route('aRoleC')}}">
                            <button type="button" class="btn bg-gradient-green">
                                <i class="fas fa-plus"></i> Create Role
                            </button>
                        </a>

                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th style="width: 10%">
                                Role ID
                            </th>
                            <th style="width: 20%">
                                Title
                            </th>
                            <th style="width: 30%">
                                Created At
                            </th>
                            <th style="width: 8%" class="text-center">
                                Status
                            </th>
                            <th style="width: 20%">
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $role)
                            <tr>
                                <td>
                                    {{ $role->role_id }}
                                </td>
                                <td>
                                    {{ $role->name }}
                                </td>
                                <td>
                                    {{ $role->created_at }}
                                </td>
                                {{--<td class="project_progress">--}}
                                {{--{{ role.updated_at|date:"M d, Y" }}--}}
                                {{--</td>--}}
                                <td class="project-state">
                                    @if($role->is_active == '1')
                                        <span class="badge badge-success">Active</span>
                                    @else
                                        <span class="badge badge-danger">Inactive</span>
                                    @endif

                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm"
                                       href="{{route('aRoleU', ['role_id' => encrypt($role->role_id)])}}">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm"
                                       href="{{route('aRoleD', ['role_id' => encrypt($role->role_id), 'action' => 'delete'])}}">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
