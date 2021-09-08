@extends('backend.master')
@section('title') Profile | Logs @endsection
@section('page_css_js')

@endsection

@section('content')

    <style>
        #profile_all{
            background: radial-gradient( circle closest-side, white 0, white 50%, #CDCDCD 40%, transparent 63%, transparent 70%, white 0 ), conic-gradient( #2f3ad0 0, #2f3ad0 20%, #f28e2c 0, #f28e2c 30%, #e15759 0, #e15759 70%, #76b7b2 0, #76b7b2 90%, #59a14f 0, #59a14f 100% );
            width: 100%;
            min-height: 328px;
            position: relative;
            margin: 0;
            height: 0px;
        }
    </style>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Profile Logs</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('aDashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Profile Logs</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All profile Logs</h3>

                    <div class="card-tools">


                    </div>
                </div>
                <div class="card-body p-0">

                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th style="width: 10%">
                                 ID
                            </th>

                            <th style="width:30%">
                                Who's Viewer Name
                            </th>
                            <th style="width: 30%">
                                Viewed Name
                            </th>
                            <th style="width: 30%">
                                Viewer Time
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($profile_logs as $profile_log)

                            <tr>
                                <td>{{$profile_log->profile_log_id}}
                                </td>
                                <td>
                                    @if(isset($profile_log->profile_user_logs[0]))
                                        {{$profile_log->profile_user_logs[0]->first_name}} {{$profile_log->profile_user_logs[0]->last_name}}
                                    @else
                                    @endif
                                </td>
                                <td>
                                    @if(isset($profile_log->user_profile_data[0]))
                                        {{$profile_log->user_profile_data[0]->first_name}} {{$profile_log->user_profile_data[0]->last_name}}
                                    @else
                                    @endif
                                </td>
                                <td>
                                        {{$profile_log->created_at}}
                                </td>




                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-center">
                        {!! $profile_logs->links() !!}
                    </div>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
