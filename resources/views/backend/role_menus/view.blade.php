@extends('backend.master')
@section('title') Role Menus | View @endsection
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
                        <h1>Role Menus Management</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('aDashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Role Menus</li>
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
                    <form action="{{route('aRoleMenusV', $request->all())}}" method="GET">
                        <div class="row">
                            <div class="col-4">

                                <input type="text" class="form-control"
                                       name="s"
                                       value="{{$request->s}}"
                                       placeholder="Search by Menu Title, Menu Route">
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <select class="form-control is_active" name="r_id" style="width: 100%;">
                                        <option value="">Filter By 'Role'</option>
                                        @foreach($roles as $role)
                                            <option value="{{ $role->role_id }}" {{$request->r_id == $role->role_id ? 'selected' : ''}}>{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <select class="form-control is_active" name="is_active" style="width: 100%;">
                                        <option value="">Filter By 'is Active'</option>
                                        @foreach($isActive as $k => $v)
                                            <option value="{{ $v }}" {{isset($request->is_active) && $v == $request->is_active ? 'selected' : ''}}>{{ $k }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <select class="form-control" name="per_page" style="width: 100%;">
                                        <option value="">Records per Page</option>
                                        @foreach($perPage as $pp)
                                            <option value="{{ $pp }}" {{$pp == $request->per_page ? 'selected' : ''}}>{{ $pp }}</option>
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
                                    <a href="{{route('aRoleMenusV')}}">
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
                    <h3 class="card-title">All Menus with Role Association</h3>

                    <div class="card-tools">
                        <a href="{{route('aRoleMenusCU')}}">
                            <button type="button" class="btn bg-gradient-green">
                                <i class="fas fa-plus"></i> Assign Menus to Role
                            </button>
                        </a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th style="width: 18%">
                                Title
                            </th>
                            <th style="width: 14%">
                                Role
                            </th>
                            <th style="width: 12%">
                                Created At
                            </th>
                            <th style="width: 8%" class="text-center">
                                is Active
                            </th>
                            <th style="width: 25%">
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($role_menus) > 0)
                            @foreach($role_menus as $rm)
                            <tr>
                                <td>
                                    {{ $rm['Menu']->title }}
                                </td>
                                <td>
                                    {{ $rm['Role']->name }}
                                </td>
                                <td>
                                    {{$rm->created_at}}
                                </td>
                                <td class="project-state">
                                    @if($rm['Menu']->is_active == '1')
                                        <span class="badge badge-success">Active</span>
                                    @else
                                        <span class="badge badge-danger">Inactive</span>
                                    @endif

                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm"
                                       href="{{route('aRoleMenusCU', ['role_id' => encrypt($rm->role_id)])}}">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="col-xs-12 col-md-9 text-right">
                @include('backend.partials.paginations.pagination_counter',['Records' => $role_menus])
            </div>

        </section>
        <!-- /.content -->
    </div>
@endsection
