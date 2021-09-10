<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<!-- Mirrored from demo.dethemes.com/forever/versions/top-bottom-bar/index-title-animation.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Feb 2021 16:30:50 GMT -->
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/lang.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/hero.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/modal.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/signup.css')}}">
    <!--    <link rel="icon" href="images/favicon.jpg">-->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap/bootstrap.min.css')}}" type="text/css" media="screen" />
    <!-- Pace -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/preloader.css')}}"  media="screen">
    <link rel="stylesheet" href="{{asset('public/frontend/css/preloader-default.css')}}"  media="screen">
    <!-- Flexslider -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/flexslider/flexslider.css')}}" type="text/css">
    <!-- Animate -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/animate/animate.css')}}" type="text/css">
    <!-- Countdown -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/countdown/jquery.countdown.css')}}" type="text/css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/magnific-popup/magnific-popup.css')}}" type="text/css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/owlcarousel/owl.carousel.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('public/frontend/css/owlcarousel/owl.theme.css')}}" type="text/css">
    <!-- Icon -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/fonts/fontello/css/fontello.css')}}" type="text/css" media="screen" />
    <!-- Font -->
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="{{asset('public/frontend/css/style.css')}}" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="{{asset('public/frontend/css/custom.css')}}">

    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('public/frontend/plugins/toastr/toastr.css/toastr.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Skin CSS -->
    <!-- <link href="css/skin/light-teal/light-teal.css" rel="stylesheet" media="screen"> -->
    <!-- <link href="css/skin/light-teal/light-teal-reverse-navbar.css" rel="stylesheet" media="screen"> -->
    <!-- <link href="css/skin/pattern/pattern-1.css" rel="stylesheet" media="screen"> -->

{{--    <script>--}}
{{--        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){--}}
{{--            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),--}}
{{--            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)--}}
{{--        })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');--}}

{{--        ga('create', 'UA-50945301-2', 'dethemes.com');--}}
{{--        ga('send', 'pageview');--}}

{{--    </script>--}}
    <link rel="stylesheet" href="{{asset('public/frontend/css/colorscheme.css')}}">

</head>
<style>
    #text{
        margin-top: 65px;
    }

</style>

<body>
<a id="button"></a>
<div>
    <header class="clearfix header">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="top-line" id="top-line" style="">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3" style="font-size: 14px;">
                            <ul class="info-list social-icons" style="float: left;">

{{--                                {{dd(session()->all())}}--}}
{{--                                @foreach(@$cms_data as $cms)--}}
{{--                                    {{dd(session()->get('cms_data'))}}--}}
                                    @if(@$cms_data['fb_url'] !== '' && @$cms_data['fb_url'] !== null)
                                        <li><a class="facebook" href="{{@$cms_data['fb_url']}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    @endif
                                    @if(@$cms_data['tw_url'] !== '' && @$cms_data['tw_url'] !== null)
                                        <li><a class="twitter" href="{{@$cms_data['tw_url']}}"><i class="fa fa-twitter"></i></a></li>
                                    @endif
                                    @if(@$cms_data['ln_url'] !== ''&& @$cms_data['ln_url'] !== null)
                                        <li><a class="rss" href="{{@$cms_data['ln_url']}}"><i class="fa fa-linkedin"></i></a></li>
                                    @endif
                                    @if(@$cms_data['yt_url'] !== ''&& @$cms_data['yt_url'] !== null)
                                        <li><a class="google" href="{{$cms_data['yt_url']}}"><i class="fa fa-youtube"></i></a></li>
                                    @endif
                                    @if(@$cms_data['in_url'] !== ''&& @$cms_data['in_url'] !== null)
                                        <li><a class="google" href="{{@$cms_data['in_url']}}"><i class="fa fa-instagram"></i></a></li>
                                    @endif

{{--                                @endforeach--}}

                            </ul>
                        </div>
                        <div class="col-sm-9">
                            <div id="LR">
                                <a style="color: #fecd00;" href="{{route('user-login')}}" class="" >
                                    Login
                                </a>
                                <span>|</span>
                                <a style="color: #fecd00;" href="{{route('user-register')}}" class="" >
                                    Register
                                </a>
                                <span>-</span>
                                <div id="lang">
                                    <select class="selectpicker" data-width="fit" style="margin-left: 5px;">
                                        <option>English</option>
                                        <option data-content="<span class=&quot;flag-icon flag-icon-mx&quot;></span> Español">Arabic</option>
                                        <option data-content="<span class=&quot;flag-icon flag-icon-mx&quot;></span> Español">Persian</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header ">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{route('getCMS')}}"><img src="{{@$cms_data['logo']}}" alt="" style="height: 58px; width: 126px;"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="font-family: 'Roboto Thin';">
                    <ul class="nav navbar-nav navbar-right">
                        @if(isset($data))
                        @foreach($data as $s)
                            <li><a href="#{{$s['title']}}">{{$s['title']}}</a></li>
                        @endforeach
                        @endif
{{--                        <li><a href="#metri">Metrimonial</a></li>--}}
{{--                        <li><a href="#tours">Tour & Trips</a></li>--}}
{{--                        <li><a href="#ads">Ads</a></li>--}}
{{--                        <li><a href="#courses">Courses</a></li>--}}
{{--                        <li><a href="#job-ads">Job Ads</a></li>--}}
{{--                        <li><a href="#religious-events">Religous Center</a></li>--}}
{{--                        <li><a href="#video-clips">Video Clips</a></li>--}}
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>

    <!--<section id="info-bar">-->
    <!--    <div class="container">-->
    <!--        <div class="col-xs-6 info-bar">-->
    <!--            <div id="social-icons">-->
    <!--                <a href="#" class="si">-->
    <!--					<i style="font-size:18px" class="fa">&#xf09a;</i>-->
    <!--                </a>-->
    <!--                <a href="#" class="si">-->
    <!--					<i style="font-size:18px" class="fa">&#xf099;</i>-->
    <!--                </a>-->
    <!--                <a href="#" class="si">-->
    <!--					<i style="font-size:18px" class="fa">&#xf1a0;</i>-->
    <!--                </a>-->
    <!--                <a href="#" class="si">-->
    <!--					<i style="font-size:18px" class="fa">&#xf231;</i>-->
    <!--                </a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--      <style>-->
    <!--		  @media only screen and (max-width: 786px) {-->
    <!--			 #LR {-->
    <!--				  margin-left: 73px;-->
    <!--			  }-->
    <!--		  }-->
    <!--		  @media only screen and (max-width: 443px) {-->
    <!--			  #LR {-->
    <!--				  margin-left: 49px;-->
    <!--			  }-->
    <!--		  }-->
    <!--		  @media only screen and (max-width: 375px) {-->
    <!--			  #LR {-->
    <!--				  margin-left: 21px;-->
    <!--			  }-->
    <!--		  }-->

    <!--	  </style>-->
    <!--        <div class="col-xs-6 info-bar">-->
    <!--            <div id="LR">-->
    <!--&lt;!&ndash;                <a href="#myModal3"  class="" id="de-button1 dea LOGIN" data-toggle="modal">&ndash;&gt;-->
    <!--&lt;!&ndash;                    Login&ndash;&gt;-->
    <!--&lt;!&ndash;                </a>&ndash;&gt;-->
    <!--				<a href="login.html">-->
    <!--					Login-->
    <!--				</a>-->
    <!--                                <span>|</span>-->
    <!--                &lt;!&ndash; Modal HTML &ndash;&gt;-->
    <!--                <style>-->
    <!--                    #de-button2{-->
    <!--    padding-right:10px;-->
    <!--}-->
    <!--@media screen and (max-width: 500px) {-->
    <!--  #LR {-->
    <!--    margin-top:-15px;-->
    <!--  }-->
    <!--   #lang {-->
    <!--    margin-top:-14px;-->
    <!--  }-->
    <!--}-->
    <!--					.dropdown-item{-->
    <!--						border-bottom: 1px solid;-->
    <!--					}-->
    <!--					#lastlen{-->
    <!--						border-bottom: none;-->
    <!--					}-->
    <!--                </style>-->
    <!--  -->
    <!--                <a href="#myModal2" class="" data-toggle="modal"  id="de-button2">-->
    <!--                    Register-->
    <!--                </a>-->
    <!--&lt;!&ndash;				<a href="register.html">&ndash;&gt;-->
    <!--&lt;!&ndash;					Register&ndash;&gt;-->
    <!--&lt;!&ndash;				</a>&ndash;&gt;-->
    <!--                <span>-</span>-->
    <!--                <div id="lang">-->
    <!--&lt;!&ndash;                    <div class="dropdown d-inline-block pl-2 pl-md-0">&ndash;&gt;-->
    <!--&lt;!&ndash;                        <a class="dropdown-toggle" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&ndash;&gt;-->
    <!--&lt;!&ndash;                            Select Language<i class="fa fa-chevron-down pl-2"></i>&ndash;&gt;-->
    <!--&lt;!&ndash;                        </a>&ndash;&gt;-->
    <!--&lt;!&ndash;                        <div class="dropdown-menu mt-0" aria-labelledby="dropdownMenuButton" id="seclect" style="">&ndash;&gt;-->
    <!--&lt;!&ndash;                            <a class="dropdown-item" href="#">Arabic</a>&ndash;&gt;-->
    <!--&lt;!&ndash;                            <a class="dropdown-item" href="#">English</a>&ndash;&gt;-->
    <!--&lt;!&ndash;                            <a class="dropdown-item" id="lastlen" href="#">Persian</a>&ndash;&gt;-->
    <!--&lt;!&ndash;                                                    </div>&ndash;&gt;-->
    <!--&lt;!&ndash;                    </div>&ndash;&gt;-->
    <!--                    <select class="selectpicker" data-width="fit" style="margin-left: 5px;">-->
    <!--                        <option>English</option>-->
    <!--                        <option  data-content='<span class="flag-icon flag-icon-mx"></span> Español'>Arabic</option>-->
    <!--                        <option  data-content='<span class="flag-icon flag-icon-mx"></span> Español'>Persian</option>-->
    <!--                    </select>-->



    <!--                </div>-->
    <!--            </div>-->


    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    <script>
        $(function() {
            $('.selectpicker').selectpicker();
            $('pick__lang').selectpicker();
        });



    </script>

    {{--    +++++++++++++++++++ Content Section +++++++++++++++++++++++++++--}}
    @yield('content')
    {{--    +++++++++++++++++++ Content Section End Here ++++++++++++++++++++--}}



    {{--    ++++++++++++++++++++++++ Footer Section Start here +++++++++++++++++++++++++++++++++++++++++++=--}}
    <footer style="background-color:#012070;padding:70px 0px 0px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div>
                        <img src="{{@$cms_data['logo']}}" width="126" height="58"/>
                    </div>
                    <div>
                        <p style="color:white;margin-top: 25px;">
                            Global Puls is an emerging digital marketing company that deals in providing best web development, BPO and digital marketing solutions for all.
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <h3 style="color: white;">Our Services</h3>
                    <div>
                        <ul style="color: white;padding-top: 23px;">
                        @if(isset($data))
                            @foreach($data as $s)
                                <li><i style="font-size:16px" class="fa">&#xf105;</i> &nbsp;&nbsp;<a href={{"http://localhost/matrimonial/GlobalPuls/" . $s['title']}}>{{$s['title']}}</a></li>
                            @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <h3 style="color: white;">Recent Posts</h3>

                    <div class="row" style="color: white;padding-top: 23px;">
                        <div class="col-md-3">
                            <a href="#"><i style="font-size:24px" class="fa">&#xf24a;</i></a>

                        </div>
                        <div class="col-md-9">
                            <a href="#"><span></span></a>
                        </div>
                    </div>
                    <br><br>


                </div>
                <div class="col-md-3">
                    <h3 style="color: white;">Pages</h3>
                    <div>
                        <ul style="color: white;padding-top: 23px;">
                            @if(!empty($pages))
                            @foreach($pages as $page)
                               <li><i style="font-size:16px" class="fa">&#xf105;</i> &nbsp;&nbsp;<a href="{{route('PagesDetail',Hashids::encode($page->page_id))}}">{{ $page->title  }}</a></li>
                            @endforeach
                                @endif
                        </ul>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4" style="color: white;background-color: #fecd00;">
                    <div class="row">
                        <div class="col-md-3">
                            <i style="font-size:24px; margin-top: 35px; margin-left: 17px;" class="fa">&#xf0e0;</i>
                        </div>
                        <div class="col-md-9">
                            <h3 style="color: white;"><a href="mailto:someone@example.com">{{@$cms_data['contact_email']}}</a></h3>
                            <p>Drop us a line</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="color: white;">
                    <div class="row">
                        <div class="col-md-3">
                            <!--									<i style="font-size:24px" class="fa">&#xf0e0;</i>-->
                            <i style="font-size:24px; margin-top: 35px; margin-left: 17px;" class="fa">&#xf095;</i>
                        </div>
                        <div class="col-md-9">
                            <h3 style="color: white;">{{@$cms_data['contact_number']}}</h3>
                            <p>Call us now</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="color: white;background-color: #fecd00;">
                    <div class="row">
                        <div class="col-md-3">
                            <i style="font-size:24px; margin-top: 35px; margin-left: 17px;" class="fa">&#xf041;</i>
                        </div>
                        <div class="col-md-9">
                            <h3 style="color: white;">{{@$cms_data['contact_address']}}</h3>
{{--                            <p>Stockholm Sweden</p>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center" style="color: white;">
                <br><br><br>
                <p>Copyright 2021, All rights reserved.</p>
            </div>
        </div>
    </footer>
</div>
<div id="myModal3" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Member Logiin</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">

                    @csrf
                    <div class="form-group">
                        <i class="fa fa-user"></i>
                        <input type="text" name="username" class="form-control" placeholder="Username" required="required">
                        @if($errors->has('username'))<div class="warning">{{$errors->first('username')}}</div>@endif
                    </div>
                    <div class="form-group">
                        <i class="fa fa-lock"></i>
                        <input type="password" name="password" class="form-control" placeholder="Password" required="required">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block btn-lg"  id="loginn" value="Login">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="#">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>
<div id="RegisterModal" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body ">

                    @csrf
                    <h2>Create Account</h2>
                    <p class="lead">It's free and hardly takes more than 00030 seconds.</p>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" name="username" placeholder="Username" required="required">
                        </div>
                        @if($errors->has('username'))<div class="warning">{{$errors->first('username')}}</div>@endif
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
                            <input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
                        </div>
                        @if($errors->has('email'))<div class="warning">{{$errors->first('email')}}</div>@endif
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="text" class="form-control" name="password" placeholder="Password" required="required">
                        </div>
                    </div>
                    <div class="error_reg">
                        @if($errors->has('password'))<div class="warning">{{$errors->first('password')}}</div>@endif
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-lock"></i>
                                <i class="fa fa-check"></i>
                            </span>
                            <input type="text" class="form-control" name="confirm_password" placeholder="Confirm Password" required="required">
                        </div>
                        @if($errors->has('confirm_password'))<div class="warning">{{$errors->first('confirm_password')}}</div>@endif
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
                    </div>
                    <p class="small text-center">By clicking the Sign Up button, you agree to our <br><a href="#">Terms &amp; Conditions</a>, and <a href="#">Privacy Policy</a>.</p>
                </form>
                <!--	<div class="text-center">Already have an account? <a href="#">Login here</a>.-->
                <!--</div>-->
            </div>
            <div class="modal-footer">
                <!--<a href="#">Forgot Password?</a>-->
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('public/frontend/plugins/toastr/toastr.min.js') }}"></script>


<script>
    var btn = $('#button');

    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '300');
    });


    {{--    @if (count($errors) > 0)--}}
    {{--    {{dd($errors->all())}}--}}
    {{--        $('#RegisterModal').modal('show');--}}
    {{--    @else--}}
    $(function () {
        @if($errors->any())
        var str = '<ul style="list-style-type:square">';
        @php $mClass = 'success'; @endphp

        @foreach ($errors->all() as $eK => $eV)

        @if($eV == 'error' || $eK == '0' || $eK == 0)
        $('#RegisterModal').modal('show');
        @php $mClass = 'danger'; @endphp
            {{--                {{dd('eee',$eK)}}--}}
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
        @endif
    });

</script>

</body>

<!-- Mirrored from demo.dethemes.com/forever/versions/top-bottom-bar/index-title-animation.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Feb 2021 16:30:51 GMT -->
</html>
<style>
    @media (max-width: 1023px) {
        .navbar-header {
            float: none;
        }
        .navbar-left,.navbar-right {
            float: none !important;
        }
        .navbar-toggle {
            display: block;
        }
        .navbar-collapse {
            border-top: 1px solid transparent;
            box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
        }
        .navbar-fixed-top {
            top: 0;
            border-width: 0 0 1px;
        }
        .navbar-collapse.collapse {
            display: none!important;
        }
        .navbar-nav {
            float: none!important;
            margin-top: 7.5px;
        }
        .navbar-nav>li {
            float: none;
        }
        .navbar-nav>li>a {
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .collapse.in{
            display:block !important;
        }
    }
</style>
<style>
    #LR {
        float: right;
    }
    #lang {
        float: inherit;
        /* margin-top: 9px; */
        z-index: 1000;
    }
    select option {
        padding: 4px 0 !important;
    }

    option {
        color: #747474;
    }
    .warning{
        color: red;
        font-size: 12px;
        padding-left: 8px;
        font-family: system-ui;
    }
</style>
<!-- Modal HTML -->
<style>
    #de-button2{
        padding-right:10px;
    }
    @media screen and (max-width: 500px) {
        #LR {
            margin-top:-15px;
        }
        #lang {
            margin-top:-14px;
        }
    }
    .dropdown-item{
        border-bottom: 1px solid;
    }
    #lastlen{
        border-bottom: none;
    }
    @media screen and (max-width: 500px)
    {#LR {
        margin-top: -27px;
    }
        .selectpicker {
            margin-top: 17px;
        }
    }
    @media screen and (max-width: 374px)
    {
        #de-button2 {
            padding-right: 0px;
        }
        .top-line ul.info-list li {
            display: inline-block;
            margin-right: 0px;
            color: #ffffff;
            font-size: 12px;
            font-family: 'Montserrat', sans-serif;
        }
    }

</style>
<style>
    /*-------------------------------------------------
=  Table of Css

1.Isotope
1.KENBURNER RESPONSIVE BASIC STYLES OF HTML DOCUMENT
3.Header
4.General
5.content - home sections
6.about page
7.single project
8.blog page
9.services
10.Contact page
11.footer
12.Responsive part
-------------------------------------------------*/

    /*-------------------------------------------------*/
    /* =  Header
    /*-------------------------------------------------*/
    .navbar-default {
        background: #012070;
        box-shadow: 0 0px 3px #a1a1a1;
        -webkit-box-shadow: 0 0px 3px #a1a1a1;
        -moz-box-shadow: 0 0px 3px #a1a1a1;
        -o-box-shadow: 0 0px 3px #a1a1a1;
        border: none;
        transition: all 0.2s ease-in-out;
        -moz-transition: all 0.2s ease-in-out;
        -webkit-transition: all 0.2s ease-in-out;
        -o-transition: all 0.2s ease-in-out;
        margin: 0;
    }
    .navbar-header {
        z-index: 99;
        position: relative;
    }
    .navbar-brand {
        height: auto;
        transition: all 0.2s ease-in-out;
        -moz-transition: all 0.2s ease-in-out;
        -webkit-transition: all 0.2s ease-in-out;
        -o-transition: all 0.2s ease-in-out;
        color: #333333;
        font-size: 19px;
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        margin: 0 0 30px;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin: 0;
        color: #333333 !important;
        padding: 19px 15px;
        letter-spacing: 2.5px;
        z-index: 99999;
    }
    .navbar-brand span {
        color: #a0ce4e;
    }
    .navbar-nav {
        transition: all 0.2s ease-in-out;
        -moz-transition: all 0.2s ease-in-out;
        -webkit-transition: all 0.2s ease-in-out;
        -o-transition: all 0.2s ease-in-out;
    }
    .navbar-nav > li > a {
        color: #fff !important;
        font-size: 13px;
        font-family: 'Montserrat', sans-serif;
        font-weight: 900;
        text-transform: uppercase;
        transition: all 0.2s ease-in-out;
        -moz-transition: all 0.2s ease-in-out;
        -webkit-transition: all 0.2s ease-in-out;
        -o-transition: all 0.2s ease-in-out;
        padding: 35px 15px;
    }
    .navbar-nav > li > a:hover,
    .navbar-nav > li > a.active {
        color: #333333 !important;
    }
    .navbar-nav li.drop {
        position: relative;
    }
    .navbar-nav li:hover ul.drop-down {
        opacity: 1;
        display: block;
    }
    .navbar-nav li.search {
        position: inherit;
    }
    .top-line {
        padding: 15px 0;
        background: #252628;
        /*color:#fecd00;*/
        border-bottom: 1px solid #012070;
        transition: all 0.2s ease-in-out;
        -moz-transition: all 0.2s ease-in-out;
        -webkit-transition: all 0.2s ease-in-out;
        -o-transition: all 0.2s ease-in-out;
        overflow: hidden;
    }
    .top-line ul.info-list {
        margin: 0;
        padding: 0;
    }
    .top-line ul.info-list li {
        display: inline-block;
        margin-right: 5px;
        color: #ffffff;
        font-size: 12px;
        font-family: 'Montserrat', sans-serif;
    }
    .top-line ul.info-list li i {
        color: #a0ce4e;
        font-size: 14px;
        margin-right: 10px;
    }
    .top-line ul.social-icons {
        margin: 0;
        padding: 0;
        text-align: right;
    }
    .top-line ul.social-icons li {
        display: inline-block;
        margin-left: 9px;
    }
    .top-line ul.social-icons li a {
        display: inline-block;
        text-decoration: none;
        transition: all 0.2s ease-in-out;
        -moz-transition: all 0.2s ease-in-out;
        -webkit-transition: all 0.2s ease-in-out;
        -o-transition: all 0.2s ease-in-out;
        font-size: 13px;
        color: #ffffff;
    }
    .top-line ul.social-icons li a:hover {
        color: #a0ce4e;
    }
    header.active .top-line {
        height: 0;
        padding: 0;
    }
    .navbar-collapse {
        position: relative;
    }
    ul.drop-down {
        margin: 0;
        padding: 0;
        position: absolute;
        width: 230px;
        top: 100%;
        left: 0;
        padding: 10px 0;
        border-top: 2px solid #a0ce4e;
        opacity: 0;
        display: none;
        transition: all 0.2s ease-in-out;
        -moz-transition: all 0.2s ease-in-out;
        -webkit-transition: all 0.2s ease-in-out;
        -o-transition: all 0.2s ease-in-out;
        background: rgba(255, 255, 255, 0.98);
    }
    ul.drop-down li {
        display: block;
    }
    ul.drop-down li a {
        padding: 10px 20px;
        display: inline-block;
        text-decoration: none;
        transition: all 0.2s ease-in-out;
        -moz-transition: all 0.2s ease-in-out;
        -webkit-transition: all 0.2s ease-in-out;
        -o-transition: all 0.2s ease-in-out;
        display: block;
        color: #333333;
        font-size: 12px;
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        text-transform: uppercase;
        margin: 0;
    }
    ul.drop-down li a:hover {
        color: #a0ce4e;
    }
    .form-search {
        position: absolute;
        top: 100%;
        right: 0;
        left: 0;
        width: 100%;
        background: #f5f5f5;
        padding: 4px;
        visibility: hidden;
        opacity: 0;
        -webkit-transform: rotateX(-90deg);
        -moz-transform: rotateX(-90deg);
        -ms-transform: rotateX(-90deg);
        -o-transform: rotateX(-90deg);
        transform: rotateX(-90deg);
        transition: all 0.2s ease-in-out;
        -moz-transition: all 0.2s ease-in-out;
        -webkit-transition: all 0.2s ease-in-out;
        -o-transition: all 0.2s ease-in-out;
    }
    .form-search input[type="search"] {
        font-size: 12px;
        color: #777777;
        font-family: 'Montserrat', sans-serif;
        font-weight: 400;
        line-height: 22px;
        margin: 0 0 10px;
        margin: 0;
        color: #333333;
        padding: 8px 10px;
        border: none;
        width: 100%;
        outline: none;
        background: transparent;
        transition: all 0.2s ease-in-out;
        -moz-transition: all 0.2s ease-in-out;
        -webkit-transition: all 0.2s ease-in-out;
        -o-transition: all 0.2s ease-in-out;
    }
    .form-search button {
        background: transparent;
        border: none;
        float: right;
        margin-top: -30px;
        margin-right: 10px;
        position: relative;
        z-index: 2;
    }
    .form-search button i {
        color: #a0ce4e;
        font-size: 16px;
    }
    .form-search.active {
        visibility: visible;
        opacity: 1;
        -webkit-transform: rotateX(0deg);
        -moz-transform: rotateX(0deg);
        -ms-transform: rotateX(0deg);
        -o-transform: rotateX(0deg);
        transform: rotateX(0deg);
    }
    /*-------------------------------------------------*/
    /* =  Responsive Part
    /*-------------------------------------------------*/
    @media (max-width: 991px) {
        .top-line ul.info-list {
            text-align: center;
            margin-bottom: 5px;
        }
        .top-line ul.social-icons {
            text-align: center;
        }
        .navbar-brand {
            padding: 17px 15px;
        }
        .navbar-nav > li > a {
            padding: 22px 12px;
        }
        .banner-section a {
            margin-top: 5px;
        }
        .tabs-section ul.nav-tabs {
            margin-bottom: 30px;
        }
        .tabs-section .tab-pane img {
            margin-bottom: 20px;
        }
        .quote-section .text-box {
            padding-right: 0;
            margin-bottom: 30px;
        }
        .portfolio-section .portfolio-box.iso-call .project-post {
            width: 50%;
        }
    }
    .top-line ul.social-icons li {
        display: inline-block;
        margin-left: 0px;
    }
    @media (max-width: 767px) {
        .navbar-toggle {
            margin-top: 14px;
        }
        .navbar-brand {
            padding-bottom: 17px;
        }
        .navbar-nav > li > a {
            padding: 5px 15px;
        }
        ul.drop-down {
            position: relative;
            opacity: 1;
            display: block;
            top: inherit;
            left: inherit;
            width: 100%;
            border-top: none;
            padding: 5px 0;
        }
        ul.drop-down li a {
            padding: 5px 20px;
        }
        .banner-section a {
            margin-left: 3px;
        }
        .owl-theme .owl-controls {
            left: 15px;
            right: 15px;
        }
        .clients-section ul.clients-list li {
            width: 33.3333%;
            margin-bottom: 20px;
        }
        .page-banner-section h1 {
            float: none;
            text-align: center;
            margin-bottom: 10px;
        }
        .page-banner-section ul.page-depth {
            float: none;
            text-align: center;
        }
        .portfolio-section .portfolio-box.iso-call .project-post {
            width: 100%;
        }
        .portfolio-section ul.filter li {
            margin: 0 6px;
        }
        .blog-section .blog-box .single-post blockquote {
            margin-left: 0;
        }
        .blog-section .blog-box .comment-section ul.depth .comment-box {
            padding-left: 0;
        }
    }
    @media (max-width: 460px) {
        .top-line {
            /*display: none;*/
        }
        #container {
            padding-top: 63px;
        }
        .clients-section ul.clients-list li {
            width: 50%;
        }
        .blog-section .blog-box .comment-section ul li .comment-box img {
            max-width: 60px;
        }
        .blog-section .blog-box .comment-section ul li .comment-box .comment-content {
            margin-left: 80px;
        }
        .blog-section .blog-box .autor-post img {
            width: 100%;
            float: none;
            margin-bottom: 20px;
        }
        .blog-section .blog-box .autor-post .autor-content {
            margin-left: 0;
        }
    }
    #container{
        margin-top: 147px;
    }
    .hero-banner {
        padding: 4em 0 5em 0;
        display: flex;
        flex-wrap: wrap;
        min-height: 400px;
        justify-content: center;
        align-items: center;
    }
    .top-line ul.info-list li i {
        color: #fecd00;
        font-size: 14px;
        margin-right: 10px;
    }
    .navbar-nav > li > a:hover, .navbar-nav > li > a.active {
        color: #fff !important;
    }
    .navbar-toggle {
        position: relative;
        float: right;
        padding: 9px 10px;
        margin-top: 21px;
        margin-right: 15px;
        margin-bottom: 8px;
        background-color: transparent;
        background-image: none;
        border: 1px solid transparent;
        border-radius: 4px;
    }
    #top-line{
        background-image: url({{asset('public/frontend')}}/images/small.png);
        background-repeat: no-repeat;
    }
    .top-line ul.info-list li i {
        color: #012070;
        font-size: 14px;
        margin-right: 10px;
    }
    @media only screen and (max-width: 1430px) {
        #top-line {
            background-image: url({{asset('public/frontend')}}/images/Laptop-Header.png);
            background-repeat: no-repeat;
        }
    }
    @media only screen and (max-width: 1023px) {
        #top-line {
            background-image: url({{'public/frontend/images/Tab-Header.png'}});
            background-repeat: no-repeat;
        }
    }
    @media only screen and (max-width: 767px) {
        #top-line {
            background-image: url({{'public/frontend/images/Mobile-Header.png'}});
            background-repeat: no-repeat;
        }
    }
    @media only screen and (max-width: 375px) {
        #top-line {
            background-image: url({{'public/frontend/images/updates-mobile.png'}});
            background-repeat: no-repeat;
        }
    }
    @media only screen and (max-width: 320px) {
        #top-line {
            background-image: url({{'public/frontend/images/Low-End-Mobile.png'}});
            background-repeat: no-repeat;
        }
    }
</style>
<style>
    #button {
        display: inline-block;
        background-color: #fecd00;
        width: 50px;
        height: 50px;
        text-align: center;
        border-radius: 4px;
        position: fixed;
        bottom: 30px;
        right: 30px;
        transition: background-color .3s,
        opacity .5s, visibility .5s;
        opacity: 0;
        visibility: hidden;
        z-index: 1000;
    }
    #button::after {
        content: "\f077";
        font-family: FontAwesome;
        font-weight: normal;
        font-style: normal;
        font-size: 2em;
        line-height: 50px;
        color: #fff;
    }
    #button:hover {
        cursor: pointer;
        background-color: #333;
    }
    #button:active {
        background-color: #555;
    }
    #button.show {
        opacity: 1;
        visibility: visible;
    }

    /* Styles for the content section */

    .content {
        width: 77%;
        margin: 50px auto;
        font-family: 'Merriweather', serif;
        font-size: 17px;
        color: #6c767a;
        line-height: 1.9;
    }
    @media (min-width: 500px) {
        .content {
            width: 43%;
        }
        #button {
            margin: 30px;
        }
    }
    .content h1 {
        margin-bottom: -10px;
        color: #03a9f4;
        line-height: 1.5;
    }
    .content h3 {
        font-style: italic;
        color: #96a2a7;
    }
</style>
<style>
    #profile{
        margin-bottom: 43px;
    }
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .input-group-addon {
        padding: 6px 23px;
        font-size: 14px;
        font-weight: 400;
        line-height: 1;
        color: #555;
        text-align: center;
        background-color: #eee;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    #loginn{
        margin: 0px;
    }
    #myModal3{
        padding-top:150px;
    }
    .si{
        margin-right: 10px;
    }
    #LR>a.de-button {
        margin-top: 2px;
    }  a.de-button.small, span.de-button.small, input[type=submit].small {
           padding: 4px 16px;
           font-size: 14px;
           border-radius: 10px;
       }
    #main-slider .slide-image {
        position: relative;
        height: inherit;
        width: 100%;
        background-size: cover;
        background-position: 50% 50%;
        /*background-color: transparent;*/
        -webkit-transform: translateZ(0);
    }
    @media screen and (max-width: 580px) {
        #logo-wrapper {
            margin-top:33px;
        }
    }
    #a{
        color:#fff;
    }
    * {
        font-family: Ro;
        padding: 0px;
    }
    @media (max-width: 680px)
    {body {
        padding: 0px;
    }
    }
    .error_reg{
        color: red;
    }
</style>
<!-- jQuery -->
<script src="{{asset('public/frontend/js/jquery-1.11.1.min.js')}}"></script>
<!-- Pace -->
<script src="{{asset('public/frontend/js/pace/pace.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('public/frontend/js/bootstrap/bootstrap.js')}}"></script>
<!-- Modernizr -->
<script src="{{asset('public/frontend/js/modernizr/modernizr.js')}}"></script>
<!-- Device JS -->
<script src="{{asset('public/frontend/js/devicejs/device.js')}}"></script>
<!-- TinyNav -->
<script src="{{asset('public/frontend/js/tinynav/tinynav.min.js')}}"></script>
<!-- SmoothScroll -->
<script src="{{asset('public/frontend/js/smoothscroll/jquery.smooth-scroll.js')}}"></script>
<!-- Flexslider -->
<script src="{{asset('public/frontend/js/flexslider/jquery.flexslider.js')}}"></script>
<!-- Sticky -->
<script src="{{asset('public/frontend/js/sticky/jquery.sticky.js')}}"></script>
<!-- Waypoint -->
<script src="{{asset('public/frontend/js/waypoint/jquery.waypoints.min.js')}}"></script>
<!-- DoubleTapToGo -->
<script src="{{asset('public/frontend/js/jquery-ui-widget/jquery.ui.widget.js')}}"></script>
<script src="{{asset('public/frontend/js/jquery-doubletaptogo/jquery.dcd.doubletaptogo.js')}}"></script>
<!-- Vide -->
<script src="{{asset('public/frontend/js/vide/jquery.vide.js')}}"></script>
<!-- Stellar -->
<script src="{{asset('public/frontend/js/stellar/jquery.stellar.js')}}"></script>
<!-- Masonry -->
<script src="{{asset('public/frontend/js/masonry/masonry.pkgd.min.js')}}"></script>
<!-- Countdown -->
<script src="{{asset('public/frontend/js/countdown/jquery.plugin.js')}}"></script>
<script src="{{asset('public/frontend/js/countdown/jquery.countdown.js')}}"></script>
<!-- Countdown Labels / Localisation -->
<script src="{{asset('public/frontend/js/countdown/jquery.countdown-custom-label.js')}}"></script>
<!-- Magnific Popup -->
<script src="{{asset('public/frontend/js/magnific-popup/jquery.magnific-popup.js')}}"></script>
<!-- Owl Carousel -->
<script src="{{asset('public/frontend/js/owlcarousel/owl.carousel.js')}}"></script>

<!-- Custom Core Script -->
<script type="text/javascript" src="{{asset('public/frontend/js/script.js')}}"></script>
<!-- Custom Additional Script -->
<script type="text/javascript" src="{{asset('public/frontend/js/main-slider-title-animation.js')}}"></script>

<script src="https://minato-application.netlify.app/js/count-to/jquery.countTo.js"></script>

<script src="https://minato-application.netlify.app/js/plugin/plugin.js"></script>




