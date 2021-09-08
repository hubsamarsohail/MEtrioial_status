@extends('backend.master')
@section('title') Roles | Create @endsection
@section('page_css_js')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('public/backend/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <script src="{{ asset('public/backend/plugins/select2/js/select2.full.min.js') }}"></script>
    <script type="text/javascript">
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2();

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
                rules: {
                    name: {
                        required: true,
                    },
                    is_active: {
                        required: true,
                    },
                },
                messages: {
                    title: {
                        required: "Please provide a name",
                    },
                    is_active: {
                        required: "Please choose is_active option",
                    },
                },
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
                        <h1>Role Management</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('aDashboard')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('aRoleV')}}">Roles</a></li>
                            <li class="breadcrumb-item active">Add Role</li>
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
                                <h3 class="card-title">Add Role <small>Please make sure it should be unique</small></h3>
                            </div>
                            <form role="form" id="quickForm" method="post" action="{{route('aRoleC')}}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Name:*</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                               placeholder="Role Name">
                                    </div>
                                    <div class="form-group">
                                        <label>Is Active:*</label>
                                        <select class="form-control select2bs4" name="is_active" style="width: 100%;">
                                            <option value="">Select Option</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
