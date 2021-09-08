@extends('backend.master')
@section('title') Users | View @endsection
@section('page_css_js')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('public/backend/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet"
          href="{{ asset('public/backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <script src="{{ asset('public/backend/plugins/select2/js/select2.full.min.js') }}"></script>
    <script type="text/javascript">
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2();

            //Initialize Select2 Elements
            $('.display_menu').select2({
                theme: 'bootstrap4'
            });

            $('.is_active').select2({
                theme: 'bootstrap4'
            });

        })
    </script>
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Users Management</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('aDashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Users</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Apply Filter(s)</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('aUserV', $request->all())}}" method="GET">
                        <div class="row">
                            <div class="col-6">
                                <input type="text" class="form-control"
                                       name="s"
                                       value="{{$request->s}}"
                                       placeholder="Search by Username, Name, Email .... etc">
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <select class="form-control display_menu" name="role_ids[]"
                                            multiple="multiple" data-placeholder="Filter by Roles"
                                            style="width: 100%;">
                                        @foreach($roles as $role)
                                            <option value="{{$role->role_id}}" {{isset($request->role_ids) && in_array($role->role_id, $request->role_ids) ? 'selected' : ''}}>{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <select class="form-control display_menu" name="tenant_ids[]"
                                            multiple="multiple" data-placeholder="Filter by Tenants"
                                            style="width: 100%;">
                                        @foreach($tenants as $tenant)
                                            <option value="{{$tenant->tenant_id}}" {{isset($request->tenant_ids) && in_array($tenant->tenant_id, $request->tenant_ids) ? 'selected' : ''}}>{{ $tenant->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <select class="form-control display_menu" name="is_active" style="width: 100%;">
                                        <option value="">Filter By 'is Active'</option>
                                        @foreach($isActive as $k => $v)
                                            <option value="{{ $v }}" {{isset($request->is_active) && $v == $request->is_active ? 'selected' : ''}}>{{ $k }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <select class="form-control" name="per_page" style="width: 100%;">
                                        <option value="">Records per Page</option>
                                        @foreach($perPage as $pp)
                                            <option value="{{ $pp }}" {{isset($request->per_page) && $pp == $request->per_page ? 'selected' : ''}}>{{ $pp }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-1 text-right pull-right">
                                <button type="submit" name="apply" value="true"
                                        class="btn btn-block btn-outline-success btn-sm">
                                    Apply
                                </button>
                            </div>
                            @if($request->apply != '')
                                <div class="col-1 text-right pull-right">
                                    <a href="{{route('aUserV')}}">
                                        <button type="button" class="btn btn-block btn-outline-danger btn-sm">Reset
                                        </button>
                                    </a>

                                </div>
                            @endif

                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Users</h3>

                    <div class="card-tools">
                        <a href="{{route('aUserC')}}">
                            <button type="button" class="btn bg-gradient-green">
                                <i class="fas fa-plus"></i> Create User
                            </button>
                        </a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th>
                                Name
                            </th>
                            <th>
                                Username
                            </th>
                            <th>
                                Email
                            </th>
                            <th style="width: 20%">
                                Assoc. Roles
                            </th>
                            <th style="width: 20%">
                                Assoc. Tenants
                            </th>
                            <th style="width: 8%" class="text-center">
                                is Active
                            </th>
                            <th style="width: 25%">
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($records as $record)
                            <tr>
                                <td>
                                    {{ $record->first_name.' '.$record->last_name }}
                                </td>
                                <td>
                                    {{ $record->username }}
                                </td>
                                <td>
                                    {{ $record->email }}
                                </td>
                                <td>
                                    @foreach($record['UserRoles'] as $userRole)
                                        @php $userRoles[] = $userRole['Role']->name @endphp
                                    @endforeach
                                    {{implode(' | ', $userRoles)}}
                                    @php $userRoles = []; @endphp
                                </td>
                                <td>
                                    @foreach($record['TenantUsers'] as $tenantUser)
                                        @php $tenantUsers[] = $tenantUser['Tenant']->name @endphp
                                    @endforeach
                                    {{implode(' | ', $tenantUsers)}}
                                    @php $tenantUsers = []; @endphp
                                </td>
                                <td class="project-state">
                                    @if($record->is_active == '1')
                                        <span class="badge badge-success">Active</span>
                                    @else
                                        <span class="badge badge-danger">Inactive</span>
                                    @endif

                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm"
                                       href="{{route('aUserU', ['user_id' => encrypt($record->user_id)])}}">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm"
                                       href="{{route('aUserD', ['user_id' => encrypt($record->user_id), 'action' => 'delete'])}}">
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

            <div class="col-xs-12 col-md-9 text-right">
                @include('backend.partials.paginations.pagination_counter',['Records' => $records])
            </div>

        </section>
        <!-- /.content -->
    </div>
@endsection