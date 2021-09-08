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

                    <div class="col-md-12">
                        <div class="row">

                            <div class="col-sm-12">
                                <div style="color: black;text-align: center;">
                                    <div id="profile_all" class="box">
                                                      <span id="five">
                                                          <br>
                                                     <div style="line-height: 275px;">
                                                              <b>
                                                                  <a href="{{route('aprofileV')}}" style="color: blue">{{$profile_logs->count()}} </a>
                                                              </b>
                                                               ( All profile viewers )
                                                              <b>
                                                      </b>
                                                     </div>
                                                  </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
