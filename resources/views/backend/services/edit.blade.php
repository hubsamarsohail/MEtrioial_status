@extends('backend.master')
@section('title') Services | Edit @endsection
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
{{--    {{dd($record->title)}}--}}
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Service Management</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('aDashboard')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('aServiceV')}}">Services</a></li>
                            <li class="breadcrumb-item active">Edit Service</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Service <small>Detail</small>
                                </h3>
                            </div>
                            <!-- form start -->
                            <form role="form" id="quickForm" method="POST" action="{{route('aServiceU',['service_id'=> encrypt($service_data['service_id'])])}}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Title:*</label>
                                        <input type="text" name="title" class="form-control" id="title"
                                               autocomplete="off"
                                               value="{{$service_data['title']}}"
                                               placeholder="Menu Title" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="excerpt">Excerpt:*</label>
                                        <input type="text" name="excerpt" class="form-control" id="title"
                                               autocomplete="off"
                                               value="{{$service_data['excerpt']}}"
                                               placeholder="Menu Title" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="img">Image:*</label>
                                        <input type="text" name="img" class="form-control" id="title"
                                               autocomplete="off"
                                               value="{{$service_data['img']}}"
                                               placeholder="Menu Title" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description:*</label>
                                        <input type="text" name="description" class="form-control" id="title"
                                               autocomplete="off"
                                               value="{{$service_data['description']}}"
                                               placeholder="Menu Title" required>
                                    </div>
{{--                                    <div class="form-group">--}}
{{--                                        <label>Parent Menu (if any):</label>--}}
{{--                                        <select class="form-control select2bs4" name="parent_menu_id"--}}
{{--                                                style="width: 100%;">--}}
{{--                                            <option value="">Select Menu</option>--}}
{{--                                            @foreach($menus as $menu)--}}
{{--                                                @if($record->title != $menu->title)--}}
{{--                                                    <option value="{{$menu->menu_id}}" {{$record->parent_menu_id == $record->menu_id ? 'selected' : ''}}>{{ $menu->title }}</option>--}}
{{--                                                @endif--}}
{{--                                            @endforeach--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label>Routes:</label>--}}
{{--                                        <select class="form-control select2bs4" name="route" style="width: 100%;">--}}
{{--                                            <option value="">Select Route</option>--}}
{{--                                            @foreach($routes as $route)--}}
{{--                                                @if($route->getName() != '' && substr_count($route->getName(), 'ignition') <= 0)--}}
{{--                                                    <option value="{{ $route->getName() }}" {{$record->route == $route->getName() ? 'selected' : ''}}>{{$route->getName()}}</option>--}}
{{--                                                @endif--}}
{{--                                            @endforeach--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label>Display in Menu:*</label>--}}
{{--                                        <select class="form-control select2bs4" name="display_menu"--}}
{{--                                                style="width: 100%;" required>--}}
{{--                                            <option value="">Select Option</option>--}}
{{--                                            @foreach($displayInMenus as $k => $v)--}}
{{--                                                <option value="{{ $v }}" {{$record->display_menu == $v ? 'selected' : ''}}>{{ $k }}</option>--}}
{{--                                            @endforeach--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label>Is Active:*</label>--}}
{{--                                        <select class="form-control select2bs4" name="is_active" style="width: 100%;" required>--}}
{{--                                            <option value="">Select Option</option>--}}
{{--                                            @foreach($isActive as $k => $v)--}}
{{--                                                <option value="{{ $v }}" {{$record->is_active == $v ? 'selected' : ''}}>{{ $k }}</option>--}}
{{--                                            @endforeach--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
