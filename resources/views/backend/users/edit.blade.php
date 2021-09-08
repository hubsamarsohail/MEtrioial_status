@extends('backend.master')
@section('title') Users | Edit @endsection
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
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            });
        })
    </script>
    <!-- jquery-validation -->
    <script src="{{ asset('public/backend/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('public/backend/plugins/jquery-validation/additional-methods.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#quickForm').validate({
                rules: {
                    confirm_password: {
                        equalTo: "#password",
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
    @foreach($record['UserRoles'] as $userRole)
        @php $userRoles[] = $userRole['Role']->role_id @endphp
    @endforeach
    @foreach($record['TenantUsers'] as $tenantUser)
        @php $tenantUsers[] = $tenantUser['Tenant']->tenant_id @endphp
    @endforeach
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
                            <li class="breadcrumb-item"><a href="{{route('aUserV')}}">Users</a></li>
                            <li class="breadcrumb-item active">Edit User</li>
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
                                <h3 class="card-title">User Detail</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" id="quickForm" method="post" action="{{route('aUserU', ['user_id' => $request->user_id])}}"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="tenants">Assign Tenant(s):*</label>
                                        <select id="tenants" class="form-control select2bs4" name="tenant_ids[]"
                                                multiple="multiple" data-placeholder="Assign Tenant(s)"
                                                style="width: 100%;" required>
                                            @foreach($tenants as $tenant)
                                                <option value="{{$tenant->tenant_id}}" {{in_array($tenant->tenant_id, $tenantUsers) ? 'selected' : ''}}>{{ $tenant->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="roles">Assign Role(s):*</label>
                                        <select id="roles" class="form-control select2bs4" name="role_ids[]"
                                                multiple="multiple" data-placeholder="Assign Roles(s)"
                                                style="width: 100%;" required>
                                            @foreach($roles as $role)
                                                <option value="{{$role->role_id}}" {{in_array($role->role_id, $userRoles) ? 'selected' : ''}}>{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="first_name">First Name:*</label>
                                        <input type="text" name="first_name" class="form-control" id="first_name"
                                               value="{{$record->first_name}}"
                                               placeholder="First Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="last_name">Last Name:*</label>
                                        <input type="text" name="last_name" class="form-control" id="last_name"
                                               value="{{$record->last_name}}"
                                               placeholder="Last Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Username:*</label>
                                        <input type="text" name="username" class="form-control" id="username"
                                               value="{{$record->username}}"
                                               placeholder="Username" required disabled="disabled">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email:*</label>
                                        <input type="text" name="email" class="form-control" id="email"
                                               value="{{$record->email}}"
                                               placeholder="Email" required disabled>
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile">Mobile:*</label>
                                        <input type="text" name="mobile" class="form-control" id="mobile"
                                               value="{{$record->mobile}}"
                                               placeholder="Mobile" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password:*</label>
                                        <input type="password" name="password" class="form-control" id="password"
                                               placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm_password">Confirm Password:*</label>
                                        <input type="password" name="confirm_password" class="form-control"
                                               id="confirm_password"
                                               placeholder="Confirm Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address:*</label>
                                        <input type="text" name="address" class="form-control" id="address"
                                               value="{{$record->address}}"
                                               placeholder="Address" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="pull-right">
                                            @if(isset($record->img) && $record->img != '')
                                                <img src="{{asset('public/uploads/users/'.$record->user_id.'/'.$record->img)}}"
                                                     width="60" height="50"/>
                                            @endif
                                        </div>
                                        <label for="password">User Pic (if any):</label>
                                        <div class="custom-file">
                                            <input type="file" name="attachments[]" class="custom-file-input"
                                                   id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose User Image</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Is Active:*</label>
                                        <select class="form-control select2bs4" name="is_active" style="width: 100%;"
                                                required>
                                            @foreach($isActive as $k => $v)
                                                <option value="{{ $v }}" {{$record->is_active == $v ? 'selected' : ''}}>{{ $k }}</option>
                                            @endforeach
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