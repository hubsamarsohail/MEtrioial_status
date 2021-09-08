@extends('backend.master')
@section('title') Tenants | View @endsection
@section('page_css_js')

@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tenant Management</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('aDashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Tenants</li>
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
                    <h3 class="card-title">All Tenants</h3>

                    <div class="card-tools">
                        <a href="{{route('aTenantC')}}">
                            <button type="button" class="btn bg-gradient-green">
                                <i class="fas fa-plus"></i> Create Tenant
                            </button>
                        </a>

                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th style="width: 10%">
                                Tenant ID
                            </th>
                            <th style="width: 20%">
                                Name
                            </th>
                            <th style="width: 20%">
                                Phone
                            </th>
                            <th style="width: 20%">
                                Email
                            </th>
                            <th>
                                Logo
                            </th>
                            <th style="width: 8%" class="text-center">
                                Status
                            </th>
                            <th style="width: 20%">
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tenants as $tenant)
                            <tr>
                                <td>
                                    {{ $tenant->tenant_id }}
                                </td>
                                <td>
                                    {{ $tenant->name }}
                                </td>
                                <td>
                                    {{ $tenant->phone }}
                                </td>
                                <td>
                                    {{ $tenant->email }}
                                </td>
                                <td>
                                    @if(isset($tenant->logo) && $tenant->logo != '')
                                        <img src="{{asset('public/uploads/tenants/'.$tenant->tenant_id.'/'.$tenant->logo)}}"
                                             width="60" height="50"/>
                                    @endif
                                </td>
                                <td class="project-state">
                                    @if($tenant->is_active == '1')
                                        <span class="badge badge-success">Active</span>
                                    @else
                                        <span class="badge badge-danger">Inactive</span>
                                    @endif

                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm"
                                       href="{{route('aTenantU', ['tenant_id' => encrypt($tenant->tenant_id)])}}">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm"
                                       href="{{route('aTenantD', ['tenant_id' => encrypt($tenant->tenant_id), 'action' => 'delete'])}}">
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