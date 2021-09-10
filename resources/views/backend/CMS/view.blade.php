@extends('backend.master')
@section('title') CMS | Edit @endsection
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
                        <h1>CMS Management</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('aDashboard')}}">Home</a></li>
                            {{--                            <li class="breadcrumb-item"><a href="{{route('aServiceV')}}">Services</a></li>--}}
                            <li class="breadcrumb-item active">View CMS</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <div class="card service-table">
            <div class="card-header">
                <h3 class="card-title">CMS Detail</h3>

{{--                <div class="card-tools">--}}
{{--                    <a href="{{route('aServiceC')}}">--}}
{{--                        <button type="button" class="btn bg-gradient-green">--}}
{{--                            <i class="fas fa-plus"></i> Create Service--}}
{{--                        </button>--}}
{{--                    </a>--}}
{{--                </div>--}}
            </div>
            <div class="card-body p-0 table-responsive">
{{--                {{dd($cms_data)}}--}}
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 5%">
                            ID
                        </th>
                        <th style="width: 18%">
                            Title
                        </th>
                        <th style="width: 10%">
                            logo
                        </th>
                        <th style="width: 10%">
                            Image Slider
                        </th>
                        <th style="width: 12%">
                            Created At
                        </th>
                        <th style="width: 12%"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($cms_data !== null)
                        <tr>
                            <td>
                                {{$cms_data['cms_id']}}
                            </td>
                            <td>
                                {{$cms_data['site_title']}}
                            </td>
                            <td>
                                <img src="{{$cms_data['logo']}}" width="50">
                            </td>
                            <td>
                                @foreach($cms_data['slider_images'] as $img_slider)
                                    <img src="{{$img_slider['url']}}" width="30">
                                @endforeach
                            </td>
                            <td>
                                {{$cms_data['created_at']}}
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm"
                                   href="{{route('aCMSU', ['cms_id' => encrypt($cms_data['cms_id']),'site_title' => $cms_data['site_title']])}}">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
{{--                                <a onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm"--}}
{{--                                   href="{{route('aServiceD', ['service_id' => encrypt($service['service_id']), 'action' => 'delete'])}}">--}}
{{--                                    <i class="fas fa-trash"></i>--}}
{{--                                </a>--}}
                            </td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
<style>
    .servc-descript{
        width: 244px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .service-table{
        margin: 2%;
    }
</style>
