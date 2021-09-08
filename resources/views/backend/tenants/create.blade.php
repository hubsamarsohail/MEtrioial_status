@extends('backend.master')
@section('title') Tenants | Create @endsection
@section('page_css_js')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('public/backend/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
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
                        <h1>Tenant Management</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('aDashboard')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('aTenantV')}}">Tenants</a></li>
                            <li class="breadcrumb-item active">Add Tenant</li>
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
                                <h3 class="card-title">Tenant Detail</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" id="quickForm" method="post" action="{{route('aTenantC')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Name:*</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                               placeholder="Tenant Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email:*</label>
                                        <input type="text" name="email" class="form-control" id="email"
                                               placeholder="Tenant Email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone:*</label>
                                        <input type="text" name="phone" class="form-control" id="phone"
                                               placeholder="Tenant Phone" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address:*</label>
                                        <input type="text" name="address" class="form-control" id="address"
                                               placeholder="Tenant Address" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Logo (if any):</label>
                                        <div class="custom-file">
                                            <input type="file" name="attachments[]" class="custom-file-input"
                                                   id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose Logo</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Is Active:*</label>
                                        <select class="form-control select2bs4" name="is_active" style="width: 100%;" required>
                                            <option value="">Select Option</option>
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
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