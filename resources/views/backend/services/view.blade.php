@extends('backend.master')
@section('title') Services | View @endsection
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
                        <h1>Service Management</h1>
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
        <div class="card service-table">
            <div class="card-header">
                <h3 class="card-title">All Services</h3>

                <div class="card-tools">
                    <a href="{{route('aServiceC')}}">
                        <button type="button" class="btn bg-gradient-green">
                            <i class="fas fa-plus"></i> Create Service
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
                        <th style="width: 18%">
                            Title
                        </th>
                        <th style="width: 10%">
                            Image
                        </th>
                        <th style="width: 12%">
                            Created At
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($services !== null)
                    @foreach($services as $service)
                        <tr>
                            <td>
                                {{ $service['service_id'] }}
                            </td>
                            <td>
                                {{ $service['title'] }}
                            </td>
                            <td>
                                <div class="servc-descript">
                                    <img src="{{$service['img']}}" width="80">
                                </div>
                            </td>
                            <td>
                                {{$service['created_at']}}
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-info btn-sm"
                                   href="{{route('aServiceU', ['service_id' => encrypt($service['service_id']), 'title' => $service['title']])}}">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <a onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm"
                                   href="{{route('aServiceD', ['service_id' => encrypt($service['service_id']), 'action' => 'delete'])}}">
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
