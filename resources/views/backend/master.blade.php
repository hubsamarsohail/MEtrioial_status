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

    <script src="https://www.gstatic.com/firebasejs/5.5.9/firebase.js"></script>
    <!-- Firebase App is always required and must be first -->
    <script src="https://www.gstatic.com/firebasejs/5.5.9/firebase-app.js"></script>

    <!-- Add additional services that you want to use -->
    <script src="https://www.gstatic.com/firebasejs/5.5.9/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.5.9/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.5.9/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.5.9/firebase-messaging.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.5.9/firebase-functions.js"></script>

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
            <li class="nav-item dropdown notification_dropdown">
                <a class="nav-link  ai-icon warning" href="#" role="button" data-toggle="dropdown">
                    <svg width="24" height="24" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21.75 14.8385V12.0463C21.7471 9.88552 20.9385 7.80353 19.4821 6.20735C18.0258 4.61116 16.0264 3.61555 13.875 3.41516V1.625C13.875 1.39294 13.7828 1.17038 13.6187 1.00628C13.4546 0.842187 13.2321 0.75 13 0.75C12.7679 0.75 12.5454 0.842187 12.3813 1.00628C12.2172 1.17038 12.125 1.39294 12.125 1.625V3.41534C9.97361 3.61572 7.97429 4.61131 6.51794 6.20746C5.06159 7.80361 4.25291 9.88555 4.25 12.0463V14.8383C3.26257 15.0412 2.37529 15.5784 1.73774 16.3593C1.10019 17.1401 0.751339 18.1169 0.75 19.125C0.750764 19.821 1.02757 20.4882 1.51969 20.9803C2.01181 21.4724 2.67904 21.7492 3.375 21.75H8.71346C8.91521 22.738 9.45205 23.6259 10.2331 24.2636C11.0142 24.9013 11.9916 25.2497 13 25.2497C14.0084 25.2497 14.9858 24.9013 15.7669 24.2636C16.548 23.6259 17.0848 22.738 17.2865 21.75H22.625C23.321 21.7492 23.9882 21.4724 24.4803 20.9803C24.9724 20.4882 25.2492 19.821 25.25 19.125C25.2486 18.117 24.8998 17.1402 24.2622 16.3594C23.6247 15.5786 22.7374 15.0414 21.75 14.8385ZM6 12.0463C6.00232 10.2113 6.73226 8.45223 8.02974 7.15474C9.32723 5.85726 11.0863 5.12732 12.9212 5.125H13.0788C14.9137 5.12732 16.6728 5.85726 17.9703 7.15474C19.2677 8.45223 19.9977 10.2113 20 12.0463V14.75H6V12.0463ZM13 23.5C12.4589 23.4983 11.9316 23.3292 11.4905 23.0159C11.0493 22.7026 10.716 22.2604 10.5363 21.75H15.4637C15.284 22.2604 14.9507 22.7026 14.5095 23.0159C14.0684 23.3292 13.5411 23.4983 13 23.5ZM22.625 20H3.375C3.14298 19.9999 2.9205 19.9076 2.75644 19.7436C2.59237 19.5795 2.50014 19.357 2.5 19.125C2.50076 18.429 2.77757 17.7618 3.26969 17.2697C3.76181 16.7776 4.42904 16.5008 5.125 16.5H20.875C21.571 16.5008 22.2382 16.7776 22.7303 17.2697C23.2224 17.7618 23.4992 18.429 23.5 19.125C23.4999 19.357 23.4076 19.5795 23.2436 19.7436C23.0795 19.9076 22.857 19.9999 22.625 20Z" fill="#000"/></svg>
                    <div class="pulse-css"></div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3" style="height:380px;">
                        <ul id="message" class="timeline">

                        </ul>
                    </div>
                    <a class="all-notification" id="markAsRead">Mark all as read <i class="ti-arrow-right"></i></a>
                </div>
            </li>
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

{{--<script src="{{ asset('public/firebase-messaging-sw.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{asset('public/js/yalla.js')}}"></script>--}}

<script language="javascript">
    var firebaseConfig = {
        apiKey: "AIzaSyBMnLcMHm3jZlShT3hO7nct_HqYa-Js4xI",
        authDomain: "matrimonial-test-56cdb.firebaseapp.com",
        projectId: "matrimonial-test-56cdb",
        databaseURL: "https://matrimonial-test-56cdb-default-rtdb.firebaseio.com/",
        storageBucket: "matrimonial-test-56cdb.appspot.com",
        messagingSenderId: "496189311163",
        appId: "1:496189311163:web:636df311e75f62539a419e",
        measurementId: "G-SMX5V9RTM8"
    };

    firebase.initializeApp(firebaseConfig);
    const messaging = firebase.messaging();
    messaging.requestPermission().then(function () {
        console.log("Notification permission granted.");
        return messaging.getToken()
    })
        .then(function (token) {
            console.log(token);
            $('#device_token').val(token);
        })
        .catch(function (err) {
            console.log("Unable to get permission to notify.", err);
        });

    messaging.onMessage(function (payload) {
        console.log(payload);
        var notify;
        notify = new Notification(payload.notification.title, {
            body: payload.notification.body,
            icon: payload.notification.icon,
            tag: "Dummy"
        });
        console.log(payload.notification);
    });

    //firebase.initializeApp(config);
    var database = firebase.database().ref().child("/users/");

    database.on('value', function (snapshot) {
        renderUI(snapshot.val());
    });

    // On child added to db
    database.on('child_added', function (data) {
        console.log("Comming");
        if (Notification.permission !== 'default') {
            var notify;

            notify = new Notification('CodeWife - ' + data.val().username, {
                'body': data.val().message,
                'icon': 'bell.png',
                'tag': data.getKey()
            });
            notify.onclick = function () {
                alert(this.tag);
            }
        } else {
            alert('Please allow the notification first');
        }
    });

    self.addEventListener('notificationclick', function (event) {
        event.notification.close();
    });


</script>



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
