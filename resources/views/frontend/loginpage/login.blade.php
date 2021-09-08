<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wpkixx.com/html/Global Puls/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Mar 2021 16:15:34 GMT -->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<title>Login</title>
	<!--    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16"> -->

	<link rel="stylesheet" href="{{asset('/')}}public/frontend/assets/css/main.min.css">
	<link rel="stylesheet" href="{{asset('/')}}public/frontend/assets/css/weather-icon.css">
	<link rel="stylesheet" href="{{asset('/')}}public/frontend/assets/css/weather-icons.min.css">
	<link rel="stylesheet" href="{{asset('/')}}public/frontend/assets/css/style.css">
	<link rel="stylesheet" href="{{asset('/')}}public/frontend/assets/css/color.css">
	<link rel="stylesheet" href="{{asset('/')}}public/frontend/assets/css/responsive.css">
	<link rel="stylesheet" href="{{ asset('public/backend/plugins/toastr/toastr.min.css') }}">

	<style>
		#login-logo {
			width: 20%;
		}
	</style>

</head>

<body>
	<div class="www-layout">
		<section>
			<div class="gap no-gap signin whitish medium-opacity">
				<div class="bg-image" style="background-image:url(public/frontend/assets/images/resources/theme-bg.jpg)"></div>
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<div class="big-ad">
								<figure style="text-align: center; background-color: aliceblue;
    padding: 10px 0px;"><a href="{{route('getCMS')}}"><img src="{{asset('/')}}public/images/logo.png" alt="logo" id="login-logo"></a></figure>
								<h1>Welcome to the Global Puls</h1>
								<p>
									Global Pulss is a social network website that can be used to connect people. use this template for multipurpose social activities like job, metrimonial, ads, tours and much more. Now join & Make Cool Friends around the world !!!
								</p>
								<div class="fun-fact">
									<div class="row">
										<div class="col-lg-3 col-md-3 col-sm-4">
											<div class="fun-box">
												<i class="ti-check-box"></i>
												<h6>Registered People</h6>
												<span>1,01,242</span>
											</div>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-4">
											<div class="fun-box">
												<i class="ti-layout-media-overlay-alt-2"></i>
												<h6>Posts Published</h6>
												<span>21,03,245</span>
											</div>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-4">
											<div class="fun-box">
												<i class="ti-user"></i>
												<h6>Online Users</h6>
												<span>40,145</span>
											</div>
										</div>
									</div>
								</div>
								<div class="barcode">
									<figure><img src="public/frontend/assets/images/resources/Barcode.jpg" alt=""></figure>
									<div class="app-download">
										<span>Download Mobile App and Scan QR Code to login</span>
										<ul class="colla-apps">
											<li><a title="" href="#"><img src="public/frontend/assets/images/android.png" alt="">android</a></li>
											<li><a title="" href="#"><img src="public/frontend/assets/images/apple.png" alt="">iPhone</a></li>
											<!--                                            <li><a title="" href="https://www.microsoft.com/store/apps"><img src="images/windows.png" alt="">Windows</a></li>-->
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="we-login-register">
								<div class="form-title">
									<i class="fa fa-key"></i>login
									<span>sign in now and meet the awesome Friends around the world.</span>
								</div>
								<form class="we-form" action="{{route('user-login/create')}}" method="post">
									@csrf
									<input type="text" name="email" placeholder="Email">
									<input type="password" name="password" placeholder="Password">
									<input type="checkbox"><label>remember me</label>
									<button type="submit" data-ripple="">sign in</button>
									<a class="forgot underline" href="#" title="">forgot password?</a>
								</form>
							     <span>don't have an account? <a class="we-account underline" href="{{route('user-register')}}" title="">register now</a></span>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>

	</div>




</body>
<!-- <script src="{{ asset('public/backend/plugins/jquery/jquery.min.js') }}"></script> -->

<!-- <script src="{{ asset('public/backend/plugins/toastr/toastr.min.js') }}"></script> -->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{url('public/js/toastr.min.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{url('public/css/toastr.min.css')}}">


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


<!-- <script src="public/frontend/assets/js/main.min.js"></script> -->
	<!-- <script src="public/frontend/assets/js/script.js"></script> -->


<!-- Mirrored from wpkixx.com/html/Global Puls/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Mar 2021 16:15:41 GMT -->

</html>
