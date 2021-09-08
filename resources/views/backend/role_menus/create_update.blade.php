@extends('backend.master')
@section('title') Menus | Create @endsection
@section('page_css_js')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('public/backend/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet"
          href="{{ asset('public/backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <script src="{{ asset('public/backend/plugins/select2/js/select2.full.min.js') }}"></script>
    <script type="text/javascript">
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        })
    </script>
    <!-- jquery-validation -->
    <script src="{{ asset('public/backend/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('public/backend/plugins/jquery-validation/additional-methods.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#quickForm').validate({
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });

            $('div.icheck-primary input[type="checkbox"]').on('click', function () {
                var $this = $(this);
                if ($this.is(':checked')) {
                    $this.parent().parent('li').find('ul.nav-treeview li input[type="checkbox"]').prop('checked', true);
                } else {
                    $this.parent().parent('li').find('ul.nav-treeview li input[type="checkbox"]').prop('checked', false);
                }
            });
        });
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
                            <li class="breadcrumb-item"><a href="{{route('aRoleMenusV')}}">Role Menus</a></li>
                            <li class="breadcrumb-item active">Role Menus</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Add/Update Role Menus
                                    <small>Detail</small>
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" id="quickForm" method="post" action="{{route('aRoleMenusCU')}}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Choose Role:</label>
                                        <select class="form-control role_id" name="role_id" required
                                                style="width: 100%;">
                                            <option value="">Select Role</option>
                                            @foreach($roles as $role)
                                                <option value="{{ encrypt($role->role_id) }}" {{isset($request->role_id) && $role->role_id == decrypt($request->role_id) ? 'selected': ''}}>{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <nav class="mt-2">
                                                <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent"
                                                    data-widget="treeview" role="menu"
                                                    data-accordion="false">
                                                    @foreach($menus as $menu)
                                                        <li class='nav-item has-treeview menu-open'
                                                            style='margin: 10px 0 10px 0'>
                                                            <div class="icheck-primary d-inline">
                                                                <input type="checkbox"

                                                                       @if(count($role_menus) > 0 && inArrAssociative('menu_id', $menu->menu_id, $role_menus))
                                                                               checked
                                                                       @endif
                                                                       name="menu_ids[]"
                                                                       id="icheck_{{$menu->menu_id}}"
                                                                       value="{{$menu->menu_id}}"><label
                                                                        for="icheck_{{$menu->menu_id}}">{{$menu->title}}</label></div>
                                                            @if(count($menu->ChildMenus))
                                                                @include('backend.partials.menus.child_menus', ['Menus' => $menu->ChildMenus, 'role_menus' => $role_menus])
                                                            @endif
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </nav>
                                        </div>

                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-6">

                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
