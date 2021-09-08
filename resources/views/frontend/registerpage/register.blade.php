
@section('content')

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wpkixx.com/html/Global Puls/register2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Mar 2021 16:15:41 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Sign Up</title>
<!--    <link rel="icon" href="assets/images/fav.png" type="image/png" sizes="16x16">-->

    <link rel="stylesheet" href="{{asset('/')}}public/frontend/assets/css/main.min.css">
    <link rel="stylesheet" href="{{asset('/')}}public/frontend/assets/css/style.css">
    <link rel="stylesheet" href="{{asset('/')}}public/frontend/assets/css/color.css">
    <link rel="stylesheet" href="{{asset('/')}}public/frontend/assets/css/responsive.css">
	<link rel="stylesheet" href="{{ asset('public/backend/plugins/toastr/toastr.min.css') }}">

	<Style>
		#reg-logo{
			width: 20%;
		}
        .form-control{
            margin: 5px;
        }
	</Style>

</head>
<body>
	<div class="www-layout">
        <section>
        	<div class="gap no-gap signin whitish medium-opacity register">
                <div class="bg-image" style="background-image:url(public/frontend/assets/images/resources/theme-bg.jpg)"></div>
                <div class="container">
                	<div class="row">
                        <div class="col-lg-7">
                            <div class="big-ad">
                                <figure style="text-align: center; background-color: aliceblue;
    padding: 10px 0px;"><a href="{{route('getCMS')}}"><img src="{{asset('/')}}public/images/logo.png" alt="" id="reg-logo"></a></figure>
                                <h1>Welcome to the Global Puls</h1>
                                <p>
                                     Global Puls is a social network that can be used to connect people. We helps you connect and share with the people in your life.
                                </p>
                                <div class="barcode">
                                    <figure><img src="images/resources/Barcode.jpg" alt=""></figure>
                                    <div class="app-download">
                                        <span>Download Mobile App and Scan QR Code to login</span>
                                        <ul class="colla-apps">
                                            <li><a title="" href="#"><img src="{{asset('/')}}public/frontend/assets/images/android.png" alt="">android</a></li>
                                            <li><a title="" href="#"><img src="{{asset('/')}}public/frontend/assets/images/apple.png" alt="">iPhone</a></li>
<!--                                            <li><a title="" href="https://www.microsoft.com/store/apps"><img src="images/windows.png" alt="">Windows</a></li>-->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="reg-from">
								<span><i class="fa fa-lock"></i> Create an Account</span>
								<p>Its quick and Easy</p>
								<form  method="post" action="{{route('user-register/create')}}">
								@csrf
									<div class="row merged10">
										<div class="col-lg-6 col-md-6 col-sm-6">
											<input class="form-control" name="first_name" cla type="text" required placeholder="First-Name">
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6">
											<input class="form-control" type="text" name="last_name" required placeholder="Last-Name">
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											<input class="form-control" type="text" name="email" required placeholder="Mobile or Email ID">
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6">
											<input class="form-control" type="password" name="password" required placeholder="Password">
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6">
											<input class="form-control" type="password" name="confirm_password" required placeholder="Retype Password">
										</div>


										<div class="col-lg-4 col-md-12 col-sm-12">
											<div class="gender mb-2">
												<label>Gender</label>
												<div class="form-radio">
												  <div class="radio">
													<label>
													  <input type="radio" name="gender" value="M"  checked="checked"><i class="check-box"></i>Male
													</label>
												  </div>
												  <div class="radio">
													<label>
													  <input type="radio" name="gender" value="F" ><i class="check-box"></i>Female
													</label>
												  </div>
													<div class="radio">
													<label>
													  <input type="radio" name="gender" value="O" ><i class="check-box"></i>Custom
													</label>
												  </div>
												</div>
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12 mb-2">
											<div class="checkbox mb-1">
											<label>
												<input type="checkbox" name="is_active" value="1" checked="checked"><i class="check-box"></i>
												  By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy. You may receive SMS notifications from us and can opt out at any time.
											  </label>
											</div>
										</div>

										<div class="col-lg-4 col-md-6 mt-2">
											<button type="submit">Signup</button>
										</div>
									</div>

								</form>
							</div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </div>

    	<script src="{{asset('/')}}public/frontend/assets/js/main.min.js"></script>
		<script src="{{asset('/')}}public/frontend/assets/js/script.js"></script>

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


</body>

<!-- Mirrored from wpkixx.com/html/Global Puls/register2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Mar 2021 16:15:41 GMT -->
</html>


