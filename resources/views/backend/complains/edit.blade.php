@extends('backend.master')
@section('title') Reports | Edit @endsection
@section('page_css_js')

@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Reports</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('aDashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Reports</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="col-md-12">
                <!-- Box Comment -->
                <div class="card card-widget">
                    <div class="card-header">
                        <div class="user-block">
                            <img class="img-circle"
                                 src="{{asset('public/uploads/profile').'/'.$userreports->email.'/'.$userreports->image_path }}"
                                 alt="User Image">
                            <span class="username"><a href="#">{{$userreports->users->first_name}}</a></span>

                        </div>
                        <!-- /.user-block -->
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Mark as read">
                                <i class="far fa-circle"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                    class="fas fa-times"></i>
                            </button>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img class="img-fluid pad"
                                     src="{{asset('public/uploads/profile').'/'.$userreports->email.'/'.$userreports->image_path }}"
                                     alt="Photo">

                            </div>
                            <div class="col-md-6">

                                <div>
                                    <span><b>Name</b></span> : <span
                                        style="float: inline-end;margin-right: 125px;">{{$userreports->users->first_name}}    {{$userreports->users->last_name}}</span>
                                </div>
                                <br>
                                <div>
                                    <span><b>Age</b></span> : <span
                                        style="float: inline-end;margin-right: 125px;"> {{$userreports->age}}</span>
                                </div>
                                <br>
                                <div>
                                    <div>
                                        <span><b>Nationality</b></span> : <span
                                            style="float: inline-end;margin-right: 125px;">{{$userreports->country->name}}</span>
                                    </div>
                                    <br>
                                    <div>

                                        <div>
                                            <span><b>Gender</b></span> : <span
                                                style="float: inline-end;margin-right: 125px;"> @if($userreports->users->gender == 'F')
                                                    Female @elseif($userreports->users->gender == 'M')
                                                    Male @endif</span></div>
                                        <br>
                                        <div>
                                            <div>
                                                <span><b>Account</b></span> : <span
                                                    style="float: inline-end;margin-right: 125px;"> @if($userreports->users->is_active == '1')
                                                        Active @else Suspend @endif</span></div>
                                            <br>
                                            <div>

                                                <div>
                                                    @if($userreports->users->is_active == '1')
                                                        <span>
                                                        <a href="{{route('suspendWU',Hashids::encode($userreports->users->web_user_id))}}"
                                                           type="submit" class="btn btn-primary">Suspend</a>
                                                        </span>
                                                    @else
                                                        <span>
                                                        <a href="{{route('suspendWU',Hashids::encode($userreports->users->web_user_id))}}"
                                                           type="submit" class="btn btn-primary">Activate</a>
                                                        </span
                                                    @endif
                                                    <br>
                                                    <div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card-body -->

                                    <!-- /.card -->
                                </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
