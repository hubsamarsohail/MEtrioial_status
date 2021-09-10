@extends('backend.master')
@section('title') Pages | View @endsection
@section('page_css_js')<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('public/backend/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet"
      href="{{ asset('public/backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
<script src="{{ asset('public/backend/plugins/select2/js/select2.full.min.js') }}"></script>
<script type="text/javascript">

</script>
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Pages Management</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('aDashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Pages</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <div class="card service-table">
            <div class="card-header">
                <h3 class="card-title">All Pages</h3>

                <div class="card-tools">
                    <a href="{{route('aPagesC')}}">
                        <button type="button" class="btn bg-gradient-green">
                            <i class="fas fa-plus"></i> Create page
                        </button>
                    </a>
                </div>
            </div>
            <div class="card-body p-0 table-responsive">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 5%">
                            ID
                        </th>
                        <th style="width: 20%">
                            Title
                        </th>
                        <th style="width: 25%">
                            Slider Image
                        </th>
                        <th style="width: 30%">
                            Description
                        </th>
                        <th style="width: 12%">
                            Created At
                        </th>
                        <th style="width: 12%">
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($all_pages !== null)
                        @foreach($all_pages as $all_page)
                            <tr>
                                <td>
                                    {{ $all_page['page_id'] }}
                                </td>
                                <td>
                                    {{ $all_page['title'] }}
                                </td>
                                <td>
                                    @foreach($all_page->Pages_image as $img)
                                        <img height="80px; width:80px; margin: 90px" src="{{asset('public/uploads/Pages').'/'.$all_page['page_id'].'/'.$img['image_path']}}" >
                                    @endforeach
                                </td>
                                <td>
                                    {{ $all_page['body'] }}
                                </td>
                                <td>
                                    {{$all_page['created_at']}}
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm"
                                       href="{{route('aPagesU', ['page_id' => encrypt($all_page['page_id']), 'title' => $all_page['title']])}}">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <a onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm"
                                       href="{{route('aPagesD', ['page_id' => encrypt($all_page['page_id']), 'action' => 'delete'])}}">
                                        <i class="fas fa-trash"></i>
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
        <!-- /.card -->    </div>
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
