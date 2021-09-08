<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('public/backend/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('public/backend/plugins/toastr/toastr.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('public/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('public/backend/dist/css/adminlte.min.css') }}">
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

    <!-- firebase integration end -->

    <!-- Comment out (or don't include) services that you don't want to use -->
    <!-- <script src="https://www.gstatic.com/firebasejs/5.5.9/firebase-storage.js"></script> -->

    <script src="https://www.gstatic.com/firebasejs/5.5.9/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.8.0/firebase-analytics.js"></script>
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="javascript:void(0)"><b>Admin</b> Panel</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form action="{{route('aLogin')}}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

        {{--<div class="social-auth-links text-center mb-3">--}}
        {{--<p>- OR -</p>--}}
        {{--<a href="#" class="btn btn-block btn-primary">--}}
        {{--<i class="fab fa-facebook mr-2"></i> Sign in using Facebook--}}
        {{--</a>--}}
        {{--<a href="#" class="btn btn-block btn-danger">--}}
        {{--<i class="fab fa-google-plus mr-2"></i> Sign in using Google+--}}
        {{--</a>--}}
        {{--</div>--}}
        <!-- /.social-auth-links -->

            {{--<p class="mb-1">--}}
            {{--<a href="javascript:void(0)">I forgot my password</a>--}}
            {{--</p>--}}
            {{--<p class="mb-0">--}}
            {{--<a href="javascript:void(0)" class="text-center">Register a new membership</a>--}}
            {{--</p>--}}
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('public/backend/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('public/backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('public/backend/dist/js/adminlte.min.js') }}"></script>

<!-- Toastr -->
<script src="{{ asset('public/backend/plugins/toastr/toastr.min.js') }}"></script>

<script language="javascript">
    const firebaseConfig = {
        apiKey: "AIzaSyADo4pQIAcS5BwYsiZvyy7KUWadt5iGAik",
        authDomain: "matrimonial-136ed.firebaseapp.com",
        projectId: "matrimonial-136ed",
        storageBucket: "matrimonial-136ed.appspot.com",
        messagingSenderId: "770549021072",
        appId: "1:770549021072:web:63aea20a463dc51d4e9b15",
        measurementId: "G-5Z42CRC60C"
    };
0
    firebase.initializeApp(firebaseConfig);
    const messaging = firebase.messaging


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



<script type="text/javascript">
    $(function () {
                @if($errors->any())
        var str = '<ul>';
        @php $mClass = 'success'; @endphp
                @foreach ($errors->all() as $eK => $eV)
                @if($eV == 'error')
                @php $mClass = 'error'; @endphp
                @else
            str += '<li> {{ $eV }} </li>';
        @endif
        @endforeach
            str += '</ul>';
        {{--$(document).Toasts('create', {--}}
            {{--class: 'bg-{{$mClass}}',--}}
            {{--title: 'Notification(s)',--}}
            {{--subtitle: '',--}}
            {{--body: str--}}
        {{--});--}}
            toastr.{{$mClass}}(str);
        @endif
    });
</script>
</body>
</html>
