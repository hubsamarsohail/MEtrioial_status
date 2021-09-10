@extends('backend.master')
@section('title') Menus | View @endsection
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
            }).select2('val', '{{ $request->display_menu }}');

            $('.is_active').select2({
                theme: 'bootstrap4'
            }).select2('val', '{{ $request->is_active }}');

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
                        <h1>Menus Management</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('aDashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Menus</li>
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
                    <form action="{{route('aMenuV', $request->all())}}" method="GET">
                        <div class="row">
                            <div class="col-5">
                                <input type="text" class="form-control"
                                       name="s"
                                       value="{{$request->s}}"
                                       placeholder="Search by Title">
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <select class="form-control display_menu" name="display_menu"
                                            style="width: 100%;">
                                        <option value="">Filter By 'Display in Menu'</option>
                                        @foreach($displayInMenus as $k => $v)
                                            <option value="{{ $v }}">{{ $k }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="form-group">
                                    <select class="form-control is_active" name="is_active" style="width: 100%;">
                                         <option value="">Filter By 'is Active'</option>
                                        @foreach($isActive as $k => $v)
                                            <option value="{{ $v }}" {{$v == $request->is_active ? 'selected' : ''}}>{{ $k }}</option>
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
                                <button type="submit" name="apply" value="true" class="btn btn-block btn-outline-success btn-sm">
                                    Apply
                                </button>
                            </div>
                            @if($request->apply != '')
                                <div class="col-1 text-right pull-right">
                                    <a href="{{route('aMenuV')}}">
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
                    <h3 class="card-title">All Menus</h3>

                    <div class="card-tools">
                        <a href="{{route('aMenuC')}}">
                            <button type="button" class="btn bg-gradient-green">
                                <i class="fas fa-plus"></i> Create Menu
                            </button>
                        </a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th style="width: 5%">
                                ID
                            </th>
                            <th style="width: 18%">
                                Title
                            </th>
                            <th style="width: 14%">
                                Route
                            </th>
                            <th style="width: 14%">
                                Display in Menu
                            </th>
                            {{--<th style="width: 14%">--}}
                                {{--Parent Menu--}}
                            {{--</th>--}}
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
                        @foreach($menus as $menu)
                            <tr>
                                <td>
                                    {{ $menu->menu_id }}
                                </td>
                                <td>
                                    {{ $menu->title }}
                                </td>
                                <td>
                                    {{ $menu->route }}
                                </td>
                                <td>
                                    @if($menu->display_menu == '1')
                                        <span class="badge badge-success">Yes</span>
                                    @else
                                        <span class="badge badge-danger">No</span>
                                    @endif
                                </td>
                                {{--<td>--}}
                                    {{--@if($menu->parent_menu_id != '0')--}}
                                        {{--{{$menu['ChildMenus']->title}}--}}
{{--                                        {{$menu->parent_menu_id}}--}}
                                    {{--@endif--}}

                                {{--</td>--}}
                                <td>
                                    {{$menu->created_at}}
                                </td>
                                <td class="project-state">
                                    @if($menu->is_active == '1')
                                        <span class="badge badge-success">Active</span>
                                    @else
                                        <span class="badge badge-danger">Inactive</span>
                                    @endif

                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm"
                                       href="{{route('aMenuU', ['menu_id' => encrypt($menu->menu_id)])}}">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm"
                                       href="{{route('aMenuD', ['menu_id' => encrypt($menu->menu_id), 'action' => 'delete'])}}">
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
                @include('backend.partials.paginations.pagination_counter',['Records' => $menus])
            </div>

        </section>
        <!-- /.content -->
    </div>
@endsection
