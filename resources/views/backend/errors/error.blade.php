@extends('backend.master')
@section('title') Roles | Create @endsection
@section('page_css_js')
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{$code}} Error Page</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('aDashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">{{$code}} Error Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="error-page">
                <h2 class="headline text-warning"> {{$code}}</h2>

                <div class="error-content">
                    <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! {{$message}}</h3>

                    <p>
                        We could not find the page you were looking for.
                        Meanwhile, you may <a href="javascript:window.history.back()">return to previous page</a>.
                    </p>

                    {{--<form class="search-form">--}}
                        {{--<div class="input-group">--}}
                            {{--<input type="text" name="search" class="form-control" placeholder="Search">--}}

                            {{--<div class="input-group-append">--}}
                                {{--<button type="submit" name="submit" class="btn btn-warning"><i class="fas fa-search"></i>--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- /.input-group -->--}}
                    {{--</form>--}}
                </div>
                <!-- /.error-content -->
            </div>
            <!-- /.error-page -->
        </section>
        <!-- /.content -->
    </div>
@endsection