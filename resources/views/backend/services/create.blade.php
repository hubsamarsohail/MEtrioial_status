@extends('backend.master')
@section('title') Services | Create @endsection
@section('page_css_js')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('public/backend/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <script src="{{ asset('public/backend/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('public/ckeditor/ckeditor.js')}}"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
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
                        <h1>Services Management</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('aDashboard')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('aServiceV')}}">Services</a></li>
                            <li class="breadcrumb-item active">Create Service</li>
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
                                <h3 class="card-title">Add Service <small>Detail</small>
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" id="quickForm" method="POST" action="{{route('aServiceC')}}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Title:*</label>
                                        <input type="text" name="title" class="form-control" id="service-title"
                                               autocomplete="off"
                                               placeholder="Service Title" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Excerpt:*</label>
                                        <input type="text" name="excerpt" class="form-control" id="service-excerpt"
                                               autocomplete="off"
                                               placeholder="Service excerpt" required>

                                    </div>
                                    <div class="form-group">
                                        <label>Image:*</label>
                                        <input type="file" name="file" class="form-control" id="service-img"
                                               autocomplete="off" onchange="encodeBase64(this)"
                                               placeholder="Service excerpt" required>
                                        <input type="hidden" name="img" value="" id="img" />
                                    </div>
                                    <div class="form-group">
                                        <label>Description:*</label>
{{--                                        <textarea class="ckeditor form-control" name="description" id="service-description"></textarea>--}}
                                        <textarea class="form-control" id="editor" placeholder="Enter the Description" name="description"></textarea><div>
{{--                                        <div id="editor">--}}
{{--                                        </div>--}}

                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
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

<script type="text/javascript">

    function encodeBase64(element) {
        let file = element.files[0];
        let reader = new FileReader();
        reader.onloadend = function() {
            $('#img').val(reader.result)
            // console.log('RESULT', reader.result)
        }
        reader.readAsDataURL(file);
    }
</script>
