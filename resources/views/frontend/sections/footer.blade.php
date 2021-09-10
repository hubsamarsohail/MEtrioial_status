
<div class="bottombar">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<span class="copyright">© Global Links Service 2021. All rights reserved.</span>
					<i><img src="images/credit-cards.png" alt=""></i>
				</div>
			</div>
		</div>
	</div>

	@routes

<!-- <script src="{{asset('/')}}public/frontend/assets/js/main.min.js"></script> -->
{{--	<script src="{{asset('/')}}public/frontend/assets/js/main.min.js"></script>--}}
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="{{asset('/')}}public/frontend/assets/js/script.js"></script>
<script src="{{asset('/')}}public/frontend/js/custom.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
<script src="{{url('public/js/toastr.min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{url('public/css/toastr.min.css')}}">

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


<script type="text/javascript">


    @if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}");
    @endif


    @if(Session::has('info'))
    toastr.info("{{ Session::get('info') }}");
    @endif


    @if(Session::has('warning'))
    toastr.warning("{{ Session::get('warning') }}");
    @endif

    @if(Session::has('error'))
    toastr.error("{{ Session::get('error') }}");
    @endif

</script>
    <script>
		$(document).ready(function () {
			//Initialize tooltips
			$('.nav-tabs > li a[title]').tooltip();
			//Wizard
			$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

				var $target = $(e.target);

				if ($target.parent().hasClass('disabled')) {
					return false;
				}
			});
			$(".next-step").click(function (e) {

				var $active = $('.wizard .nav-tabs li.active');
				$active.next().removeClass('disabled');
				nextTab($active);

			});
			$(".prev-step").click(function (e) {

				var $active = $('.wizard .nav-tabs li.active');
				prevTab($active);

			});
		});

		function nextTab(elem) {
			$(elem).next().find('a[data-toggle="tab"]').click();
		}
		function prevTab(elem) {
			$(elem).prev().find('a[data-toggle="tab"]').click();
		}
	</script>
