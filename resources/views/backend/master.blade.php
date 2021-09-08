<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title')</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('public/backend/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('public/backend/plugins/toastr/toastr.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('public/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('public/backend/dist/css/adminlte.min.css') }}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ asset('public/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
    {{--<ul class="navbar-nav">--}}
    {{--<li class="nav-item">--}}
    {{--<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>--}}
    {{--</li>--}}
    {{--<li class="nav-item d-none d-sm-inline-block">--}}
    {{--<a href="index3.html" class="nav-link">Home</a>--}}
    {{--</li>--}}
    {{--<li class="nav-item d-none d-sm-inline-block">--}}
    {{--<a href="#" class="nav-link">Contact</a>--}}
    {{--</li>--}}
    {{--</ul>--}}

    <!-- SEARCH FORM -->
    {{--<form class="form-inline ml-3">--}}
    {{--<div class="input-group input-group-sm">--}}
    {{--<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">--}}
    {{--<div class="input-group-append">--}}
    {{--<button class="btn btn-navbar" type="submit">--}}
    {{--<i class="fas fa-search"></i>--}}
    {{--</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</form>--}}

    <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            {{--<!-- Messages Dropdown Menu -->--}}
            {{--<li class="nav-item dropdown">--}}
            {{--<a class="nav-link" data-toggle="dropdown" href="#">--}}
            {{--<i class="far fa-comments"></i>--}}
            {{--<span class="badge badge-danger navbar-badge">3</span>--}}
            {{--</a>--}}
            {{--<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">--}}
            {{--<a href="#" class="dropdown-item">--}}
            {{--<!-- Message Start -->--}}
            {{--<div class="media">--}}
            {{--<img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">--}}
            {{--<div class="media-body">--}}
            {{--<h3 class="dropdown-item-title">--}}
            {{--Brad Diesel--}}
            {{--<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>--}}
            {{--</h3>--}}
            {{--<p class="text-sm">Call me whenever you can...</p>--}}
            {{--<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<!-- Message End -->--}}
            {{--</a>--}}
            {{--<div class="dropdown-divider"></div>--}}
            {{--<a href="#" class="dropdown-item">--}}
            {{--<!-- Message Start -->--}}
            {{--<div class="media">--}}
            {{--<img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">--}}
            {{--<div class="media-body">--}}
            {{--<h3 class="dropdown-item-title">--}}
            {{--John Pierce--}}
            {{--<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>--}}
            {{--</h3>--}}
            {{--<p class="text-sm">I got your message bro</p>--}}
            {{--<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<!-- Message End -->--}}
            {{--</a>--}}
            {{--<div class="dropdown-divider"></div>--}}
            {{--<a href="#" class="dropdown-item">--}}
            {{--<!-- Message Start -->--}}
            {{--<div class="media">--}}
            {{--<img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">--}}
            {{--<div class="media-body">--}}
            {{--<h3 class="dropdown-item-title">--}}
            {{--Nora Silvester--}}
            {{--<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>--}}
            {{--</h3>--}}
            {{--<p class="text-sm">The subject goes here</p>--}}
            {{--<p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<!-- Message End -->--}}
            {{--</a>--}}
            {{--<div class="dropdown-divider"></div>--}}
            {{--<a href="#" class="dropdown-item dropdown-footer">See All Messages</a>--}}
            {{--</div>--}}
            {{--</li>--}}
            {{--<!-- Notifications Dropdown Menu -->--}}
            {{--<li class="nav-item dropdown">--}}
            {{--<a class="nav-link" data-toggle="dropdown" href="#">--}}
            {{--<i class="far fa-bell"></i>--}}
            {{--<span class="badge badge-warning navbar-badge">15</span>--}}
            {{--</a>--}}
            {{--<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">--}}
            {{--<span class="dropdown-item dropdown-header">15 Notifications</span>--}}
            {{--<div class="dropdown-divider"></div>--}}
            {{--<a href="#" class="dropdown-item">--}}
            {{--<i class="fas fa-envelope mr-2"></i> 4 new messages--}}
            {{--<span class="float-right text-muted text-sm">3 mins</span>--}}
            {{--</a>--}}
            {{--<div class="dropdown-divider"></div>--}}
            {{--<a href="#" class="dropdown-item">--}}
            {{--<i class="fas fa-users mr-2"></i> 8 friend requests--}}
            {{--<span class="float-right text-muted text-sm">12 hours</span>--}}
            {{--</a>--}}
            {{--<div class="dropdown-divider"></div>--}}
            {{--<a href="#" class="dropdown-item">--}}
            {{--<i class="fas fa-file mr-2"></i> 3 new reports--}}
            {{--<span class="float-right text-muted text-sm">2 days</span>--}}
            {{--</a>--}}
            {{--<div class="dropdown-divider"></div>--}}
            {{--<a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>--}}
            {{--</div>--}}
            {{--</li>--}}
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
                            class="fas fa-th-large"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('aLogout')}}" onclick="return confirm('Are you sure?');"><i
                            class="fas fa-power-off"></i></a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('aDashboard')}}" class="brand-link">
            <img src="{{ asset('public/backend/dist/img/AdminLTELogo.png') }}" alt="Matrimonial"
                 class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Matrimonial</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('public/uploads/users/'.$user_info['user_id'].'/'.$user_info['img']) }}"
                         width="160" height="160" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="javascript:void(0)" class="d-block">{{$user_info['first_name']}}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu"
                    data-accordion="false">
                    @foreach($user_menus as $k => $menu)
                        <li class='nav-item has-treeview'>
                            <a class='nav-link ' href='{{ $menu['route'] == '' ? 'javascript:void(0)' : route($menu['route']) }}'>
                                <i class="nav-icon fas fa-arrow-right"></i>
                                <p>{{$menu['title']}}
                                    @foreach($menu as $key => $m)
                                        @if(is_array($m))
                                            <i class="right fas fa-angle-left"></i>
                                            @php
                                                break;
                                            @endphp
                                        @endif
                                    @endforeach
                                </p>
                            </a>
                            @foreach($menu as $key => $m)
                                @if(is_array($m))
                                    @include('backend.partials.menus.master_child_menus', ['userMenus' => [$m]])
                                @endif
                            @endforeach
                        </li>
                    @endforeach
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
{{--<div class="content-wrapper">--}}
@yield('content')
<!-- /.content -->
{{--</div>--}}
<!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2020 - {{ date('Y') }} <a href="http://adminlte.io">Matrimonial</a>.</strong>
        All rights reserved.
        {{--<div class="float-right d-none d-sm-inline-block">--}}
        {{--<b>Version</b> 3.0.2--}}
        {{--</div>--}}

    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('public/backend/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('public/backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('public/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('public/backend/dist/js/adminlte.js') }}"></script>

<!-- Toastr -->
<script src="{{ asset('public/backend/plugins/toastr/toastr.min.js') }}"></script>

<script type="text/javascript">
    $(function () {
        @if($errors->any())
        var str = '<ul style="list-style-type:square">';
        @php $mClass = 'success'; @endphp
                @foreach ($errors->all() as $eK => $eV)
                @if($eV == 'error')
                @php $mClass = 'danger'; @endphp
                @else
                @if($eK != 'mClass')
            str += '<li> {{ $eV }} </li>';
        @endif
                @endif
                @endforeach
            str += '</ul>';
        $(document).Toasts('create', {
            class: 'bg-{{$mClass}}',
            title: '<i class="fas fa-bullhorn"></i>',
            subtitle: 'Announcement',
            body: str
        });
        {{--toastr.{{$mClass}}(str);--}}
        @endif
    });
</script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset('public/backend/dist/js/demo.js') }}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('public/backend/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('public/backend/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('public/backend/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('public/backend/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('public/backend/plugins/chart.js/Chart.min.js') }}"></script>
<script type="text/javascript" src="{{asset('public/js/yalla.js')}}"></script>


<!-- PAGE SCRIPTS -->
@yield('page_css_js')
<script type="text/javascript">
    $(function () {
        var url = [location.protocol, '//', location.host, location.pathname].join('');
        // var url = location.pathname;
        $('a[href="' + url + '"]').addClass('active');
        $('a[href="' + url + '"]').parentsUntil('li a[href="javascript:void(0)"]').addClass('menu-open');

    });

</script>
</body>
</html>
