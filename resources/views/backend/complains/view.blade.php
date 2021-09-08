@extends('backend.master')
@section('title') Reports | View @endsection
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


            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Apply Filter(s)</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('complainV', $request->all())}}" method="GET">
                        <div class="row">
                            <div class="col-4">
                                <input type="text" class="form-control"
                                       name="description"
                                       value="{{$request->description}}"
                                       placeholder="Search by Title">
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <select class="form-control display_menu" name="complain_tye_id"
                                            style="width: 100%;">
                                        <option value="">Filter By 'Report Types'</option>
                                            @foreach($complain_types as $complain_type)
                                        <option value="{{$complain_type->complain_tye_id}}" {{$complain_type->complain_tye_id == $request->complain_tye_id ? 'selected' : ''}} >{{$complain_type->name}}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="row">
                                    <div class="col-sm-6">

                                        <button type="submit" name="apply" value="true" class="btn btn-block btn-outline-success btn-sm">
                                            Apply
                                        </button>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="">
                                            <button type="button" class="btn btn-block btn-outline-danger btn-sm">Reset
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Reports</h3>
                    <div class="card-tools">
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th style="width: 15%">
                                Report ID
                            </th>

                            <th style="width: 20%">
                               From Name
                            </th>
                            <th style="width: 20%">
                                To Name
                            </th>
                            <th class="text-left" style="width: 15%; text-align: left" >
                                Complain Type
                            </th>
                            <th style="width: 10%" class="text-center">
                                Description
                            </th>
                            <th style="width: 15%" class="text-center">
                                Account Status
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                    @foreach($userReposts as $userRepost)

                            <tr>
                                <td>
                                    {{$userRepost->complain_id}}
                                </td>

                                <td>
                                    {{$userRepost->from_user->first_name}}   {{$userRepost->from_user->last_name}}
                                </td>

                                <td>
                                    <a href="{{route('complainE',Hashids::encode($userRepost->to_users->user_profile_id))}}" >  {{$userRepost->web_user->first_name}} {{$userRepost->web_user->last_name}} </a>
                                </td>

                                <td>
                                    {{$userRepost->complain_type->name}}
                                </td>
                                <td>
                                    {{$userRepost->description}}
                                </td>
                                @if($userRepost->web_user->is_active == '1')
                                <td >
                                    Active
                                </td>

                                @else
                                    <td >
                                        Suspend
                                    </td>
                                @endif
                            </tr>
                    @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
