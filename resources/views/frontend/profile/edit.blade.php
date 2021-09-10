@extends('frontend.master')

@section('content')

    {{--    <script src="scripts/jquery.js"></script--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script>
        function readURL(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    console.log(e.target.result);
                    $('#img_src').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }

            function readURL1(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        console.log(e.target.result);
                        $('#img_src_agent').attr('src', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]); // convert to base64 string
                }
            }

        }
    </script>


    <style>
        .wizard {
            margin: 20px auto;
            background: #fff;
        }
        .invalid{
            border-color: red ;
        }


        .wizard .nav-tabs {
            position: relative;
            margin: 40px auto;
            margin-bottom: 0;
            border-bottom-color: #e0e0e0;
        }

        .wizard>div.wizard-inner {
            position: relative;
        }

        .connecting-line {
            height: 2px;
            background: #e0e0e0;
            position: absolute;
            width: 80%;
            margin: 0 auto;
            left: 0;
            right: 0;
            top: 50%;
            z-index: 1;
        }

        .wizard .nav-tabs>li.active>a,
        .wizard .nav-tabs>li.active>a:hover,
        .wizard .nav-tabs>li.active>a:focus {
            color: #555555;
            cursor: default;
            border: 0;
            border-bottom-color: transparent;
        }

        span.round-tab {
            width: 70px;
            height: 70px;
            line-height: 70px;
            display: inline-block;
            border-radius: 100px;
            background: #fff;
            border: 2px solid #e0e0e0;
            z-index: 2;
            position: absolute;
            left: 0;
            text-align: center;
            font-size: 25px;
        }

        span.round-tab i {
            color: #555555;
        }

        .wizard li.active span.round-tab {
            background: #fff;
            border: 2px solid #5bc0de;

        }

        .wizard li.active span.round-tab i {
            color: #5bc0de;
        }

        span.round-tab:hover {
            color: #333;
            border: 2px solid #333;
        }

        .wizard .nav-tabs>li {
            width: 25%;
        }

        .wizard li:after {
            content: " ";
            position: absolute;
            left: 46%;
            opacity: 0;
            margin: 0 auto;
            bottom: 0px;
            border: 5px solid transparent;
            border-bottom-color: #5bc0de;
            transition: 0.1s ease-in-out;
        }

        .wizard li.active:after {
            content: " ";
            position: absolute;
            left: 46%;
            opacity: 1;
            margin: 0 auto;
            bottom: 0px;
            border: 10px solid transparent;
            border-bottom-color: #5bc0de;
        }

        .wizard .nav-tabs>li a {
            width: 70px;
            height: 70px;
            margin: 0px auto;
            border-radius: 100%;
            padding: 0;
        }

        .wizard .nav-tabs>li a:hover {
            background: transparent;
        }

        .wizard .tab-pane {
            position: relative;
            padding-top: 50px;
        }
        .wizard h3 {
            margin-top: 0;
        }
        @media(max-width : 585px) {

            .wizard {
                width: 90%;
                height: auto !important;
            }

            span.round-tab {
                font-size: 16px;
                width: 50px;
                height: 50px;
                line-height: 50px;
            }

            .wizard .nav-tabs>li a {
                width: 50px;
                height: 50px;
                line-height: 50px;
            }

            .wizard li.active:after {
                content: " ";
                position: absolute;
                left: 35%;
            }
        }
        .page-header {
            padding-bottom: 9px;
            margin: 0px 0 0px;
            padding-top: 80px;
            border-bottom: 1px solid #eee;
        }
        .pf {
            background: #edf2f6 none repeat scroll 0 0;
            border-radius: 4px;
            font-size: 13px;
            padding: 10px 15px;
            width: 100%;
            color: #535165;
            border: 1px solid #e4e4e4;
        }
        .wizrd {
            text-align: center;
        }
        .pfh {
            height: 45px;
        }
        .radio .check-box::after,
        .radio .check-box::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            margin: 6px 0 0 0;
            width: 1rem;
            height: 1rem;
            -webkit-transition: -webkit-transform .28s ease;
            transition: -webkit-transform .28s ease;
            transition: transform .28s ease;
            transition: transform .28s ease, -webkit-transform .28s ease;
            border-radius: 50%;
            border: .125rem solid currentColor;
        }
        .radio .check-box::after,
        .radio .check-box::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            margin: 6px 0 0 0;
            width: 11px;
            height: 11px;
            -webkit-transition: -webkit-transform .28s ease;
            transition: -webkit-transform .28s ease;
            transition: transform .28s ease;
            transition: transform .28s ease, -webkit-transform .28s ease;
            border: 0.125rem solid currentColor;
        }
        .tbf {
            margin: 50px 0 20px 0;
        }
        .form-control{
            background: #edf2f6 none repeat scroll 0 0;
        }
        #top-line {
            background-image: url(https://localhost/matrimonial/public/images/Laptop-Header.png);
            background-repeat: no-repeat;
        }
        @media only screen and (max-width: 1430px) {
            #top-line {
                background-image: url(https://localhost/matrimonial/public/images/Laptop-Header.png);
                background-repeat: no-repeat;
            }
        }
        @media only screen and (max-width: 1023px) {
            #top-line {
                background-image: url(images/Tab-Header.png);
                background-repeat: no-repeat;
            }
        }
        @media only screen and (max-width: 767px) {
            #top-line {
                background-image: url(images/Mobile-Header.png);
                background-repeat: no-repeat;
            }
        }

        @media only screen and (max-width: 375px) {
            #top-line {
                background-image: url(images/updates-mobile.png);
                background-repeat: no-repeat;
            }
        }

        @media only screen and (max-width: 320px) {
            #top-line {
                background-image: url(images/Low-End-Mobile.png);
                background-repeat: no-repeat;
            }
        }
         .invalid{
             border-color: red ;
         }

        .meu:hover{
            color: #0b0b0b;
        }
        .meu:active{
            color: #0d6efd;
        }

        .bg-opacity{
            position: relative;
            background-color: #000;
        }

        .bg-opacity::before{
            content: ' ';
            display: block;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            opacity: 0.8;
            background:       url("public/images/head.png") no-repeat center center;
            background-size: cover;
        }

    </style>

    <div class="theme-layout">

        <div class="responsive-header">
            <div class="mh-head first Sticky">
            <span class="mh-btns-left">
                <a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
            </span>
                <span class="mh-text">
                <a href="newsfeed.html" title=""><img style="height: 50px;" src="http://techhivedemo.xyz/GlobalPulss/public/frontend/images/logo.png" alt=""></a>
            </span>
                <span class="mh-btns-right">
                <a class="fa fa-sliders" href="#shoppingbag"></a>
            </span>
            </div>
            <div class="mh-head second">
                <form class="mh-form">
                    <input placeholder="search" />
                    <a href="#/" class="fa fa-search"></a>
                </form>
            </div>
            <nav id="menu" class="res-menu">
                <ul>
                    <li><span>Home Pages</span>
                        <ul>
                            <li><a href="index-2.html" title="">Pitnik Default</a></li>
                            <li><a href="pitrest.html" title="">Pitrest</a></li>
                            <li><a href="redpit.html" title="">Redpit</a></li>
                            <li><a href="redpit-category.html" title="">Redpit Category</a></li>
                            <li><a href="soundnik.html" title="">Soundnik</a></li>
                            <li><a href="soundnik-detail.html" title="">Soundnik Single</a></li>
                            <li><a href="career.html" title="">Pitjob</a></li>
                            <li><a href="shop.html" title="">Shop</a></li>
                            <li><a href="classified.html" title="">Classified</a></li>
                            <li><a href="pitpoint.html" title="">PitPoint</a></li>
                            <li><a href="pittube.html" title="">Pittube</a></li>
                            <li><a href="chat-messenger.html" title="">Messenger</a></li>
                        </ul>
                    </li>
                    <li><span>Pittube</span>
                        <ul>
                            <li><a href="pittube.html" title="">Pittube</a></li>
                            <li><a href="pittube-detail.html" title="">Pittube single</a></li>
                            <li><a href="pittube-category.html" title="">Pittube Category</a></li>
                            <li><a href="pittube-channel.html" title="">Pittube Channel</a></li>
                            <li><a href="pittube-search-result.html" title="">Pittube Search Result</a></li>
                        </ul>
                    </li>
                    <li><span>PitPoint</span>
                        <ul>
                            <li><a href="pitpoint.html" title="">PitPoint</a></li>
                            <li><a href="pitpoint-detail.html" title="">Pitpoint Detail</a></li>
                            <li><a href="pitpoint-list.html" title="">Pitpoint List style</a></li>
                            <li><a href="pitpoint-without-baner.html" title="">Pitpoint without Banner</a></li>
                            <li><a href="pitpoint-search-result.html" title="">Pitpoint Search</a></li>
                        </ul>
                    </li>
                    <li><span>Pitjob</span>
                        <ul>
                            <li><a href="career.html" title="">Pitjob</a></li>
                            <li><a href="career-detail.html" title="">Pitjob Detail</a></li>
                            <li><a href="career-search-result.html" title="">Job seach page</a></li>
                            <li><a href="social-post-detail.html" title="">Social Post Detail</a></li>
                        </ul>
                    </li>
                    <li><span>Timeline</span>
                        <ul>
                            <li><a href="timeline.html" title="">Timeline</a></li>
                            <li><a href="timeline-photos.html" title="">Timeline Photos</a></li>
                            <li><a href="timeline-videos.html" title="">Timeline Videos</a></li>
                            <li><a href="timeline-groups.html" title="">Timeline Groups</a></li>
                            <li><a href="timeline-friends.html" title="">Timeline Friends</a></li>
                            <li><a href="timeline-friends2.html" title="">Timeline Friends-2</a></li>
                            <li><a href="about.html" title="">Timeline About</a></li>
                            <li><a href="blog-posts.html" title="">Timeline Blog</a></li>
                            <li><a href="friends-birthday.html" title="">Friends' Birthday</a></li>
                            <li><a href="newsfeed.html" title="">Newsfeed</a></li>
                            <li><a href="search-result.html" title="">Search Result</a></li>
                        </ul>
                    </li>
                    <li><span>Favourit Page</span>
                        <ul>
                            <li><a href="fav-page.html" title="">Favourit Page</a></li>
                            <li><a href="fav-favers.html" title="">Fav Page Likers</a></li>
                            <li><a href="fav-events.html" title="">Fav Events</a></li>
                            <li><a href="fav-event-invitations.html" title="">Fav Event Invitations</a></li>
                            <li><a href="fav-page-create.html" title="">Create New Page</a></li>
                        </ul>
                    </li>
                    <li><span>Forum</span>
                        <ul>
                            <li><a href="forum.html" title="">Forum</a></li>
                            <li><a href="forum-create-topic.html" title="">Forum Create Topic</a></li>
                            <li><a href="forum-open-topic.html" title="">Forum Open Topic</a></li>
                            <li><a href="forums-category.html" title="">Forum Category</a></li>
                        </ul>
                    </li>
                    <li><span>Featured</span>
                        <ul>
                            <li><a href="chat-messenger.html" title="">Messenger (Chatting)</a></li>
                            <li><a href="notifications.html" title="">Notifications</a></li>
                            <li><a href="badges.html" title="">Badges</a></li>
                            <li><a href="faq.html" title="">Faq's</a></li>
                            <li><a href="contribution.html" title="">Contriburion Page</a></li>
                            <li><a href="manage-page.html" title="">Manage Page</a></li>
                            <li><a href="weather-forecast.html" title="">weather-forecast</a></li>
                            <li><a href="statistics.html" title="">Statics/Analytics</a></li>
                            <li><a href="shop-cart.html" title="">Shop Cart</a></li>
                        </ul>
                    </li>
                    <li><span>Account Setting</span>
                        <ul>
                            <li><a href="setting.html" title="">Setting</a></li>
                            <li><a href="privacy.html" title="">Privacy</a></li>
                            <li><a href="support-and-help.html" title="">Support & Help</a></li>
                            <li><a href="support-and-help-detail.html" title="">Support Detail</a></li>
                            <li><a href="support-and-help-search-result.html" title="">Support Search</a></li>
                        </ul>
                    </li>
                    <li><span>Authentication</span>
                        <ul>
                            <li><a href="login.html" title="">Login Page</a></li>
                            <li><a href="register.html" title="">Register Page</a></li>
                            <li><a href="logout.html" title="">Logout Page</a></li>
                            <li><a href="coming-soon.html" title="">Coming Soon</a></li>
                            <li><a href="error-404.html" title="">Error 404</a></li>
                            <li><a href="error-404-2.html" title="">Error 404-2</a></li>
                            <li><a href="error-500.html" title="">Error 500</a></li>
                        </ul>
                    </li>
                    <li><span>Tools</span>
                        <ul>
                            <li><a href="typography.html" title="">Typography</a></li>
                            <li><a href="popup-modals.html" title="">Popups/Modals</a></li>
                            <li><a href="post-versions.html" title="">Post Versions</a></li>
                            <li><a href="widgets.html" title="">Widgets</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <nav id="shoppingbag">
                <div>
                    <div class="">
                        <form method="post">
                            <div class="setting-row">
                                <span>use night mode</span>
                                <input type="checkbox" id="nightmode" />
                                <label for="nightmode" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Notifications</span>
                                <input type="checkbox" id="switch2" />
                                <label for="switch2" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Notification sound</span>
                                <input type="checkbox" id="switch3" />
                                <label for="switch3" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>My profile</span>
                                <input type="checkbox" id="switch4" />
                                <label for="switch4" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Show profile</span>
                                <input type="checkbox" id="switch5" />
                                <label for="switch5" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                        </form>
                        <h4 class="panel-title">Account Setting</h4>
                        <form method="post">
                            <div class="setting-row">
                                <span>Sub users</span>
                                <input type="checkbox" id="switch6" />
                                <label for="switch6" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>personal account</span>
                                <input type="checkbox" id="switch7" />
                                <label for="switch7" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Business account</span>
                                <input type="checkbox" id="switch8" />
                                <label for="switch8" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Show me online</span>
                                <input type="checkbox" id="switch9" />
                                <label for="switch9" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Delete history</span>
                                <input type="checkbox" id="switch10" />
                                <label for="switch10" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                            <div class="setting-row">
                                <span>Expose author name</span>
                                <input type="checkbox" id="switch11" />
                                <label for="switch11" data-on-label="ON" data-off-label="OFF"></label>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
        </div><!-- responsive header -->
        <section>
            <div class="page-header bg-opacity"  style="background: url('{{asset('/')}}public/images/head.png'); height: 244px;" >
                <div class="header-inner">
                    <h2><b style="color: #fff">Create Profile</b></h2>
                    <p style="color: #000000">
{{--                        it's quick and easy, you are few steps away from Global Puls.--}}
                    </p>
                </div>
{{--                <figure><img src="public/frontend/images/resources/baner-forum.png" alt=""></figure>--}}
            </div>
        </section><!-- sub header -->

        @if($userProfile[0]->types == '1')

        <form method="POST" action="{{route('uProfileCreate')}}" id="add_profile_form" enctype="multipart/form-data" >
            @csrf
            <section>
                <div class="gap gray-bg">
                    <div class="container-fluid">
                        <div class="row">
                            <input type="hidden" name="user_profile_id" value="{{$userProfile[0]->user_profile_id}}">
                            <div class="offset-lg-1 col-lg-10">
                                <div class="row border-center">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="already-log">
                                            <h4>Hi, {{session()->get('user_web_data')['user_info']['username']}}</h4>
                                            <p style="font-weight: 500">Next Time you login click your picture. To remove an account from this page click cross.</p>
                                            <div class="log-user">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                                        <div class="user-log">
                                                            <!--                                                    <i class="ti-close" title="Remove Account"></i>-->
                                                            <a href="#" title=""><img style="height: 100px; width: 90px; margin-bottom: 10px" id="img_src"  src="{{asset('public/uploads/profile').'/'.$userProfile[0]->email.'/'.$userProfile[0]->image_path }}" alt="">

                                                            </a>
                                                            <label class="fileContainer">
                                                                <i class="fa fa-camera"> Upload image</i>
                                                                <input type="file" id="file" onchange="return readURL(this);" name="attachments[]" value="">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="logout-f">
                                            <h4><i class="fa fa-key"></i> How to create profile.</h4>
                                            <p>watch the video to check the steps of file creation.</p>
                                            <div class="logout-form">
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- wizerd form start-->


            <section style="background-image: url('{{asset('/')}}public/images/profile.png'); background-size: cover;">
                <div class="container">
                    <ul class="nav nav-tabs tbf" style="border-bottom:1px solid #ddd">
                        <li class="active"><a class="meu" data-toggle="tab" href="#home">Match Macker</a></li>
                        <li><a class="meu" data-toggle="tab" href="#menu1">Agent</a></li>
                        <li><a class="meu" data-toggle="tab" href="#menu2">Parent</a></li>
                        <li><a class="meu" data-toggle="tab" href="#menu3">Customer</a></li>
                    </ul>
                    <div class="row">
                        <section>
                            <div class="wizard" style="border-radius: 20px">
                                <div class="wizard-inner">
                                    <div class="connecting-line"></div>
                                    <ul class="nav nav-tabs" role="tablist" style="padding-top:25px">

                                        <li role="presentation" class="active">
                                            <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                                            <span class="round-tab">
                                                <i class="glyphicon glyphicon-folder-open"></i>
                                            </span>

                                            </a>
                                            <p class="wizrd"> <b> Personal Details </b> </p>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="permission-tabs" href="#permission" role="tab" aria-controls="permission" aria-selected="true" data-original-title="" title="">
                                            <span class="round-tab">
                                                <i class="glyphicon glyphicon-pencil"></i>
                                            </span>
                                            </a>
                                            <p class="wizrd"> <b> Professional Details </b> </p>
                                        </li>


                                        <li role="presentation" class="disabled">
                                            <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                                            <span class="round-tab">
                                                <i class="glyphicon glyphicon-picture"></i>
                                            </span>
                                            </a>
                                            <p class="wizrd"> <b> Education Details </b> </p>
                                        </li>

                                        <li role="presentation" class="disabled">
                                            <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                                            <span class="round-tab">
                                                <i class="glyphicon glyphicon-ok"></i>
                                            </span>
                                            </a>
                                            <p class="wizrd"> <b> looking for </b> </p>
                                        </li>
                                    </ul>
                                </div>

                                <form role="form">
                                    <div class="tab-content">
                                        <div class="tab-pane active" role="tabpanel" id="step1">
                                            <div class="container-fluid" style="padding-right: 30px; padding-left: 30px;" >
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input type="text" class="pf" name="first_name" readonly value="{{session()->get('user_web_data')['user_info']['username']}}" placeholder="Enter First Name">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input type="text" value="{{$userProfile[0]->sur_name}}" class="form-control required"  id="middle_name" name="sur_name" placeholder="Enter Middle Name">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input type="text" class="pf" name="middle_name" value="{{session()->get('user_web_data')['user_info']['lastname']}}" placeholder="Enter Sur Name">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input type="text" class="pf" readonly value="{{session()->get('user_web_data')['user_info']['user_web_email']}}" name="email" placeholder="Enter Email">
                                                    </div>

                                                </div>
                                                <br>
                                                <div class="row">

                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input type="text" class="pf required" name="cast" value="{{$userProfile[0]->cast}}" placeholder="Enter Cast">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input class="mb-2 pf pfh required" type="date" value="{{$userProfile[0]->dob}}" id="birthday" name="dob">
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input type="number" class="required form-control" value="{{$userProfile[0]->age}}"  pattern="[0-9]*" name="age"   placeholder="Enter Age">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>

                                                        <select class="form-control required"  name="religion">
                                                            <option disabled  >Religion</option>
                                                            @foreach(array_flip($religions) as $key => $value)

                                                                <option value="{{$key}}" {{ $userProfile[0]->religion == $key ? 'selected' : '' }} >{{$value}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                </div>

                                                <br>

                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input type="text" class="pf required" name="nationality" value="{{$userProfile[0]->nationality}}" placeholder="Enter Nationality">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <select class="form-control required"   id="country_id"  name="country_id">
                                                            <option selected disabled>Country Name</option>
                                                            @foreach($countries as $country)
                                                                <option value="{{$country->country_id}}"  @php if( $userProfile[0]->country_id == $country->country_id ){ echo "selected"; } @endphp >{{$country->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>


                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <select class="form-control required"  id="city_id"  name="city_id">
                                                            <option  disabled >City Name</option>
                                                            <option value="1" @php if( $userProfile[0]->city_id == '1' ){ echo "selected"; } @endphp>Multan</option>
                                                            <option value="2" @php if( $userProfile[0]->city_id == '2' ){ echo "selected"; } @endphp>Islamabad</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <!-- <input type="text" class="pf" placeholder="Enter Workplace City"> -->
                                                        <select class="form-control required" id="work_city" name="work_city">
                                                            <option  disabled>Workplace City</option>
                                                            <option value="1" @php if( $userProfile[0]->work_city == '1' ){ echo "selected"; } @endphp>Karachi</option>
                                                            <option value="2" @php if( $userProfile[0]->work_city == '2' ){ echo "selected"; } @endphp>Lahore</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <br>

                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input class="mb-2 pf pfh required" type="number" value="{{$userProfile[0]->mobile}}" placeholder="Enter Mobile Number" name="mobile" id="numb">
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <!-- <input type="text" class="pf" name="residential_city" placeholder="Enter Residential"> -->
                                                        <select class="form-control required" id="residential_city"  name="residential_city">
                                                            <option  disabled>Residentail City</option>
                                                            <option value="1" @php if( $userProfile[0]->residential_city == '1' ){ echo "selected"; } @endphp >Karachi</option>
                                                            <option value="2" @php if( $userProfile[0]->residential_city == '2' ){ echo "selected"; } @endphp >Sialkot</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input type="text" class="pf required" value="{{$userProfile[0]->hair_color}}" name="hair_color" placeholder="Enter Hair Color">
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label>Select Eye Color     </label><span style="float: right; color: red;">*</span>
                                                        <select class="form-control required" name="eye_color" class="form-control">
                                                            <option selected disabled>Select Eye Color</option>
                                                            @foreach(array_flip($eyescolors) as $key => $value)
                                                                <option value="{{$key}}" @php if( $userProfile[0]->eye_color == $key ){ echo "selected"; } @endphp > {{$value}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                </div>
                                                <br>
                                                <div class="row">

                                                    <div class="col-md-3">
                                                        <label>Complexion</label><span style="float: right; color: red;">*</span>

                                                        <select class="form-control required" name="complexion" >
                                                        <option  disabled>Select Complexion</option>
                                                        @foreach(array_flip($complexions) as $key => $value)
                                                            <option value="{{$key}}" @php if( $userProfile[0]->complexion == $key ){ echo "selected"; } @endphp>{{$value}}</option>
                                                            @endforeach
                                                            </select>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label>Body Shape</label><span style="float: right; color: red;">*</span>
                                                        <select class="form-control required" name="body_shape" class="form-control">
                                                            <option  disabled>Select Body Shape</option>
                                                            @foreach(array_flip($body_shapes) as $key => $value)
                                                                <option value="{{$key}}" @php if( $userProfile[0]->body_shape == $key ){ echo "selected"; } @endphp >{{$value}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                @php

                                                                    $inc = 0;
                                                                   $feet  = 0;
                                                                   $inc =   ceil($userProfile[0]->height/ 2.54);

                                                                   $feet =   round($inc/12);
                                                                    $remaining  = (($inc/12) - $feet);
                                                                     $inche_value =  $remaining * 12;
                                                                     $inh = $inche_value.'-inc';
                                                                    $feets =  $feet.'-ft';
                                                                @endphp

                                                                <label>Height</label><span style="float: right; color: red;">*</span>
                                                                <select class="form-control required" name="height" class="form-control">
                                                                    <option selected disabled>feet</option>
                                                                    @foreach($heights as $key => $value)
                                                                        <option value="{{$key}}" @php if( $feets == $key ){ echo "selected"; } @endphp  >{{$key}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label style="float: right;color: red;" for="">*</label><select class="form-control required" name="inch" class="form-control">
                                                                    <option disabled selected>Inches</option>
                                                                    @foreach($inches as $key => $value)
                                                                        <option value="{{$key}}"  @php if( $key == $inh ){ echo "selected"; } @endphp @endphp >{{$key}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label>Select Ethnicity</label><span style="float: right; color: red;">*</span>
                                                        <select class="form-control required" name="ethnicity" class="form-control">
                                                            <option selected disabled>Select Ethnicity </option>
                                                            @foreach(array_flip($ethnicities) as $key => $value)
                                                                <option value="{{$key}}" @php if( $userProfile[0]->ethnicity == $key ){ echo "selected"; } @endphp >{{$value}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                </div>

                                                <br>

                                                <div class="row">
                                                   <div class="col-md-3">
                                                        <label>Select Skin Color</label><span style="float: right; color: red;">*</span>
                                                        <select class="form-control required" name="skin_color" class="form-control">
                                                            <option selected disabled>Select Skin Color</option>
                                                            @foreach(array_flip($skincolors) as $key => $value)

                                                                <option value="{{$key}}"  @php if( $userProfile[0]->skin_color == $key ){ echo "selected"; } @endphp >{{$value}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>

                                                        <select class="form-control required" name="marital_status">
                                                            <option disabled>Marital Status</option>
                                                            @foreach(array_flip($marital_status) as $key => $value)

                                                                <option value="{{$key}}"  @php if( $userProfile[0]->marital_status == $key ){ echo "selected"; } @endphp >{{$value}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>

                                                        <select class="form-control required" name="mother_lang">
                                                            <option  disabled>Mother Language</option>
                                                            @foreach(array_flip($languages) as $key => $value)

                                                                <option value="{{$key}}" @php if( $userProfile[0]->mother_lang == $key ){ echo "selected"; } @endphp >{{$value}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label>Other Language</label><span style="float: right; color: red;">*</span>
                                                        <select class="form-control required" name="other_lang" >
                                                            <option  disabled>Select Other Language</option>
                                                            @foreach(array_flip($languages) as $key => $value)
                                                                <option value="{{$key}}" @php if( $userProfile[0]->other_lang == $key ){ echo "selected"; } @endphp >{{$value}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">

                                                    <div class="col-md-3">
                                                        <label>Physique</label><span style="float: right; color: red;">*</span>
                                                        <select class="form-control required" name="physique_id" >
                                                            <option  disabled>Select Physique</option>
                                                            @foreach(array_flip($physiques) as $key => $value)

                                                                <option value="{{$key}}" @php if( $userProfile[0]->physique_id == $key ){ echo "selected"; } @endphp >{{$value}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label>Life Style Standard</label><span style="float: right; color: red;">*</span>
                                                        <select class="form-control required" name="life_style" >
                                                            <option  disabled>Select Life Style Standard</option>
                                                            @foreach(array_flip($life_styles) as $key => $value)

                                                                <option value="{{$key}}" @php if( $userProfile[0]->life_style == $key ){ echo "selected"; } @endphp >{{$value}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label style="float: right" for=""><span style="float: right; color: red;">*</span>
                                                            <small></small></label>
                                                        <input type="number" name="no_of_children" value="{{$userProfile[0]->no_of_children}}" class="pf " placeholder="Enter Number Of Childrens">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="">Ages of Child</label><span style="float: right; color: red;">*</span>
                                                        <input type="number" class="pf " value="{{$userProfile[0]->child_age}}"  name="child_age" placeholder="Ages of Child">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">

                                                    <div class="col-md-3">
                                                        <label>Salary</label><span style="float: right; color: red;">*</span>
                                                        <select class="form-control required" name="salary_range" >
                                                            <option selected disabled>Select Salary range</option>
                                                            @foreach(array_flip($salarys) as $key => $value)

                                                                <option value="{{$key}}" @php if( $userProfile[0]->salary_range == $key ){ echo "selected"; } @endphp >{{$value}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="gender mb-2">
                                                            <label>Do You Drink?</label>
                                                            <div class="form-radio">
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="drink_status" {{ $userProfile[0]->drink_status == '1' ? 'checked' : '' }} value="1" ><i class="check-box"></i>Yes
                                                                    </label>
                                                                </div>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="drink_status" {{ $userProfile[0]->drink_status == '0' ? 'checked' : '' }} value="0"><i class="check-box"></i>No
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="gender mb-2">
                                                            <label>Do You Smoke?</label>
                                                            <div class="form-radio">
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="smoke_status" {{ $userProfile[0]->smoke_status == '1' ? 'checked' : '' }} value="1" ><i class="check-box"></i>Yes
                                                                    </label>
                                                                </div>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="smoke_status" {{ $userProfile[0]->smoke_status == '0' ? 'checked' : '' }} value="0"><i class="check-box"></i>No
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="gender mb-2">
                                                            <label>Do you have pet at Home?</label>
                                                            <div class="form-radio">
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="pet_status" value="1" {{ $userProfile[0]->pet_status == '1' ? 'checked' : '' }} ><i class="check-box"></i>Yes
                                                                    </label>
                                                                </div>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="pet_status" {{ $userProfile[0]->pet_status == '0' ? 'checked' : '' }} value="0"><i class="check-box"></i>No
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <br>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="gender mb-2">
                                                            <label>Chat</label>
                                                            <div class="form-radio">
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="chat" value="1" {{ $userProfile[0]->chat == '1' ? 'checked' : '' }} ><i class="check-box"></i>Yes/OK
                                                                    </label>
                                                                </div>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="chat" {{ $userProfile[0]->chat == '0' ? 'checked' : '' }} value="0"><i class="check-box"></i>No
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="gender mb-2">
                                                            <label>Phone Cell</label>
                                                            <div class="form-radio">
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="phone_cell" {{ $userProfile[0]->phone_cell == '1' ? 'checked' : '' }} value="1" checked="checked"><i class="check-box"></i>Yes/OK
                                                                    </label>
                                                                </div>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="phone_cell" {{ $userProfile[0]->phone_cell == '0' ? 'checked' : '' }} value="0"><i class="check-box"></i>No
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <br>
                                            <ul class="list-inline pull-right">
                                                <li><button type="button" id="save_continue" class="btn btn-primary next-step" style="margin-right: 25px;">Save and continue</button></li>
                                            </ul>
                                        </div>

                                        <div class="tab-pane fade" id="permission" role="tabpanel" aria-labelledby="permission-tabs">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input type="text" class="pf" value="{{$userProfile[0]->profession}}" name="profession" placeholder="Enter Profession">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input type="text" class="pf" value="{{$userProfile[0]->job_title}}" name="job_title" placeholder="Enter Job Title">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input type="text" class="pf" value="{{$userProfile[0]->skill}}" name="skill" placeholder="Enter Skill">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-12"><span style="float: right; color: red;">*</span>
                                                        <textarea class="pf" rows="4" value="" name="description" placeholder="Order Note"> {{$userProfile[0]->description}}</textarea>
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                            <br><br>
                                            <ul class="list-inline pull-right">
                                                <li><button type="button" class="btn btn-primary prev-step">Previous</button></li>
                                                <li><button type="button" id="save_continue2" class="btn btn-primary next-step" style="margin-right: 25px;">Save and continue</button></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="step3">

{{--                                            <div class="tab-pane fade" id="permission2" role="tabpanel" aria-labelledby="permission-tabs2">--}}

                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input type="text" class="pf" value="{{$userProfile[0]->elementry_school}}" name="elementry_school" placeholder="Enter Elementary Schools Name">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input type="text" class="pf" value="{{$userProfile[0]->heigh_school}}" name="heigh_school" placeholder="Enter High School Name">
                                                    </div>
                                                    <div class="col-md-4" style="margin-top: 2%">
                                                        <label for="" style="float: right; color: red;" ></label>
                                                        <input type="text" class="pf"  value="{{$userProfile[0]->bachelor_school}}" name="bachelor_school" placeholder="Enter Bachelors Degree Name">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">

                                                    <div class="col-md-4">
                                                        <label for="" style="float: right; color: red;"></label>
                                                        <input type="text" class="pf" value="{{$userProfile[0]->master_school}}" name="master_school" placeholder="Enter Master Degree Name">
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="" style="float: right; color: red;"></label>
                                                        <input type="text" class="pf" value="{{$userProfile[0]->docor_degree}}" name="docor_degree" placeholder="Enter Doctor's Degree">
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="" style="float: right; color: red;"></label>
                                                        <input type="text" class="pf" value="{{$userProfile[0]->university}}" name="university" placeholder="Enter University Education Name">
                                                    </div>

                                                </div>
                                                <br>
                                            </div>
                                            <br><br>
                                            <ul class="list-inline pull-right">
                                                <li><button type="button" class="btn btn-primary prev-step">Previous</button></li>
                                                {{--   <li><button type="button" class="btn btn-default next-step">Skip</button></li>--}}
                                                <li><button type="button" class="btn btn-primary btn-info-full next-step" style="margin-right: 25px;">Save and continue</button></li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="complete">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-sm-8">
                                                                <p>Does it matter for you that if your partner drinks alcohol?</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-radio">
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="partner_alcohol" value="1" {{ $userProfile[0]->partner_alcohol == '1' ? 'checked' : '' }}  ><i class="check-box"></i>Yes
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="partner_alcohol" {{ $userProfile[0]->partner_alcohol == '0' ? 'checked' : '' }}  value="0"><i class="check-box"></i>No
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-sm-8">
                                                                <p>Are you searching for a second marriage?</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-radio">
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="second_marriage" {{ $userProfile[0]->second_marriage == '1' ? 'checked' : '' }} value="1" checked="checked"><i class="check-box"></i>Yes
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="second_marriage" {{ $userProfile[0]->second_marriage == '0' ? 'checked' : '' }} value="0"><i class="check-box"></i>No
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-sm-8">
                                                                <p>Does it matter for you that if your partner smokes</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-radio">
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="partner_smoke" {{ $userProfile[0]->partner_smoke == '1' ? 'checked' : '' }} value="1" ><i class="check-box"></i>Yes
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="partner_smoke" {{ $userProfile[0]->partner_smoke == '0' ? 'checked' : '' }}  value="0"><i class="check-box"></i>No
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-sm-8">
                                                                <p>Does it matter for you that if your partner has been previously Divorced Widower Married?</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-radio">
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="partner_divorce" value="1" {{ $userProfile[0]->partner_divorce == '1' ? 'checked' : '' }}  ><i class="check-box"></i>Yes
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="partner_divorce" value="0" {{ $userProfile[0]->partner_divorce == '0' ? 'checked' : '' }}  ><i class="check-box"></i>No
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br><br>
                                            <ul class="list-inline pull-right">
                                                <li><button type="button" class="btn btn-primary prev-step">Previous</button></li>
                                                <li><button type="submit" class="btn btn-primary btn-info-full next-step">Create Profile</button></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </form>
    </div>
    </body>

    @elseif($userProfile[0]->types == '2')

        <div class="Agent_form">
            <form method="POST" action="{{route('agent.profile')}}" id="agent_profile_form" enctype="multipart/form-data">
                @csrf
                <section>
                    <div class="gap gray-bg">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row border-center">
                                        <input type="hidden" name="user_profile_id" value="{{$userProfile[0]->user_profile_id}}">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="already-log">
                                                <h4>Hi, {{session()->get('user_web_data')['user_info']['username']}} </h4>
                                                <p style="font-weight: 500">Next Time you login click your picture. To
                                                    remove an account from this page click cross.</p>
                                                <div class="log-user">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                                            <div class="user-log">
                                                                <!--<i class="ti-close" title="Remove Account"></i>-->
                                                                @if(isset($userProfile[0]))
                                                                    <a href="#" title=""><img
                                                                            style="height: 100px; width: 90px; margin-bottom: 10px"
                                                                            id="img_src_agent"
                                                                            src="{{asset('public/uploads/profile').'/'.$userProfile[0]->email.'/'.$userProfile[0]->image_path }}"
                                                                            alt="">
                                                                    </a>
                                                                @else
                                                                    <a href="#" title=""><img
                                                                            style="height: 100px; width: 90px; margin-bottom: 10px"
                                                                            id="img_src_agent"
                                                                            src="public/frontend/images/resources/author.jpg"
                                                                            alt="">
                                                                    </a>
                                                                @endif

                                                                <label class="fileContainer">
                                                                    <i class="fa fa-camera"> Upload image</i>
                                                                    <input type="file" id="files"
                                                                           onchange="return readURL1(this);"
                                                                           name="attachments[]" value="">
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="logout-f">
                                                <h4><i class="fa fa-key"></i> How to create profile.</h4>
                                                <p>watch the video to check the steps of file creation.</p>
                                                <div class="logout-form">
                                                    <div class="embed-responsive embed-responsive-16by9">
                                                        <iframe class="embed-responsive-item"
                                                                src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
                <!-- wizerd form start-->
                <section  style="background-image: url('{{asset('/')}}public/images/profile.png'); background-size: cover;">
                    <div class="container">
                        <ul class="nav nav-tabs tbf" style="border-bottom:1px solid #ddd">
                            <li><a class="meu matcher_manu" data-toggle="tab" href="#home">Match Macker</a></li>
                            <li class="active"><a class="meu agent_menu" data-toggle="tab" href="#menu1">Agent</a></li>
                            <li><a class="meu parent_menu" data-toggle="tab" href="#menu2">Parent</a></li>
                            <li><a class="meu" data-toggle="tab" href="#menu3">Customer</a></li>
                        </ul>
                        <div class="row" id="home">
                            <section>
                                <div class="wizard" style="border-radius: 20px">
                                    <div class="wizard-inner">
                                        <div class="connecting-line"></div>
                                        <ul class="nav nav-tabs" role="tablist" style="padding-top:25px">

                                            <li role="presentation" class="active">
                                                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab"
                                                   title="Step 1">
											<span class="round-tab">
												<i class="glyphicon glyphicon-folder-open"></i>
											</span>

                                                </a>
                                                <p class="wizrd"><b> Personal Details </b></p>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="tab-content">
                                        <div class="tab-pane active" role="tabpanel" id="step1">
                                            <div class="container-fluid" style="padding-right: 30px; padding-left: 30px;">
                                                <div style="float: right;margin: -15px;margin-right: 3%;">
                                                    <label class="switch switch-green">
                                                        <input type="checkbox" class="switch-input" name="is_active"
                                                               value="1" id="Agent_switch_profile" checked>
                                                        <span class="switch-label" style="height: 24px; width: 75px;"
                                                              data-on="Active" data-off="Inactive"></span>
                                                        <span class="switch-handle"></span>
                                                    </label>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input type="text" class="pf agent_switch" name="first_name"
                                                               readonly
                                                               value="{{session()->get('user_web_data')['user_info']['username']}}"
                                                               placeholder="Enter First Name">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input type="text" class="form-control required agent_switch"
                                                               id="middle_name"
                                                               value="{{isset($userProfile[0]) ? $userProfile[0]->sur_name : '' }}"
                                                               name="sur_name" placeholder="Enter Middle Name">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input type="text" class="pf agent_switch" name="middle_name"
                                                               value="{{session()->get('user_web_data')['user_info']['lastname']}}"
                                                               placeholder="Enter Sur Name">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input type="text" class="pf agent_switch" readonly
                                                               value="{{session()->get('user_web_data')['user_info']['user_web_email']}}"
                                                               name="email" placeholder="Enter Email">
                                                    </div>

                                                </div>
                                                <br>
                                                <div class="row">

                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input type="text" class="pf form-control required agent_switch"
                                                               value="{{isset($userProfile[0]) ? $userProfile[0]->cast : '' }}"
                                                               name="cast" placeholder="Enter Cast">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input class="mb-2 pf pfh form-control required agent_switch"
                                                               value="{{isset($userProfile[0]) ? $userProfile[0]->dob : '' }}"
                                                               type="date" id="birthday" name="dob">
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input type="number" class="required form-control agent_switch"
                                                               value="{{isset($userProfile[0]) ? $userProfile[0]->age : '' }}"
                                                               pattern="[0-9]*" name="age" placeholder="Enter Age">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>

                                                        <select class="form-control required agent_switch" name="religion">
                                                            <option disabled selected>Religion</option>
                                                            @foreach(array_flip($religions) as $key => $value)

                                                                <option
                                                                    value="{{$key}} " @php if( isset($userProfile[0]) ? $userProfile[0]->religion == $key : '' ){ echo "selected"; } @endphp >{{$value}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input type="text" class="pf form-control required agent_switch"
                                                               name="nationality"
                                                               value="{{isset($userProfile[0]) ? $userProfile[0]->nationality : '' }}"
                                                               placeholder="Enter Nationality">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <select class="form-control required agent_switch" id="country_id"
                                                                name="country_id">
                                                            <option selected disabled>Country Name</option>
                                                            @foreach($countries as $country)
                                                                <option
                                                                    value="{{$country->country_id}}" @php if( isset($userProfile[0]) ? $userProfile[0]->country_id == $country->country_id : '' ){ echo "selected"; } @endphp >{{$country->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <select class="form-control required agent_switch" id="city_id"
                                                                name="city_id">
                                                            <option selected disabled>City Name</option>

                                                            <option
                                                                value="1" @php if( isset($userProfile[0]) ? $userProfile[0]->city_id == '1' : '' ){ echo "selected"; } @endphp >
                                                                Multan
                                                            </option>
                                                            <option
                                                                value="2" @php if( isset($userProfile[0]) ? $userProfile[0]->city_id == '2' : '' ){ echo "selected"; } @endphp >
                                                                Islamabad
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <!-- <input type="text" class="pf" placeholder="Enter Workplace City"> -->
                                                        <select class="form-control required agent_switch" id="work_city"
                                                                name="work_city">
                                                            <option selected disabled>Workplace City</option>
                                                            <option
                                                                value="1" @php if( isset($userProfile[0]) ? $userProfile[0]->work_city == '1' : '' ){ echo "selected"; } @endphp >
                                                                Karachi
                                                            </option>
                                                            <option
                                                                value="2" @php if( isset($userProfile[0]) ? $userProfile[0]->work_city == '2' : '' ){ echo "selected"; } @endphp >
                                                                Lahore
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input class="mb-2 pf form-control required agent_switch"
                                                               type="number"
                                                               value="{{isset($userProfile[0]) ? $userProfile[0]->mobile : '' }}"
                                                               placeholder="Enter Mobile Number" name="mobile" id="numb">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <select class="form-control required agent_switch"
                                                                id="residential_city" name="residential_city">
                                                            <option selected disabled>Residentail City</option>
                                                            <option
                                                                value="1" @php if( isset($userProfile[0]) ? $userProfile[0]->residential_city == '1' : '' ){ echo "selected"; } @endphp >
                                                                Karachi
                                                            </option>
                                                            <option
                                                                value="2" @php if( isset($userProfile[0]) ? $userProfile[0]->residential_city == '2' : '' ){ echo "selected"; } @endphp >
                                                                Sialkot
                                                            </option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <select class="form-control required agent_switch"
                                                                name="mother_lang">
                                                            <option selected disabled>Mother Language</option>
                                                            @foreach(array_flip($languages) as $key => $value)

                                                                <option
                                                                    value="{{$key}}" @php if( isset($userProfile[0]) ? $userProfile[0]->mother_lang == $key : '' ){ echo "selected"; } @endphp >{{$value}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Select Ethnicity</label><span
                                                            style="float: right; color: red;">*</span>
                                                        <select class="form-control required agent_switch" name="ethnicity"
                                                                class="form-control">
                                                            <option selected disabled>Select Ethnicity</option>
                                                            @foreach(array_flip($ethnicities) as $key => $value)
                                                                <option
                                                                    value="{{$key}}" @php if( isset($userProfile[0]) ? $userProfile[0]->ethnicity == $key : '' ){ echo "selected"; } @endphp >{{$value}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">

                                                    <div class="col-md-3">
                                                        <label>Other Language</label><span
                                                            style="float: right; color: red;">*</span>
                                                        <select class="form-control required agent_switch"
                                                                name="other_lang">
                                                            <option selected disabled>Select Other Language</option>
                                                            @foreach(array_flip($languages) as $key => $value)
                                                                <option
                                                                    value="{{$key}}" @php if( isset($userProfile[0]) ? $userProfile[0]->other_lang == $key : '' ){ echo "selected"; } @endphp >{{$value}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input class="mb-2 pf pfh form-control required agent_switch"
                                                               value="{{isset($userProfile[0]) ? $userProfile[0]->education : '' }}"
                                                               type="text" id="education" name="education"
                                                               placeholder="Enter Education">
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input class="mb-2 pf pfh form-control required agent_switch"
                                                               value="{{isset($userProfile[0]) ? $userProfile[0]->job_title : '' }}"
                                                               type="text" id="job_title" name="job_title"
                                                               placeholder="Enter Job title">
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input class="mb-2 pf pfh form-control required agent_switch"
                                                               value="{{isset($userProfile[0]) ? $userProfile[0]->skill : '' }}"
                                                               type="text" id="skill" name="skill"
                                                               placeholder="Enter Skill">
                                                    </div>

                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input class="mb-2 pf pfh form-control required agent_switch"
                                                               value="{{isset($userProfile[0]) ? $userProfile[0]->business_turnour : '' }}"
                                                               type="text" id="business_turnour" name="business_turnour"
                                                               placeholder="Enter Business Turnover">
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input class="mb-2 pf pfh form-control required agent_switch"
                                                               value="{{isset($userProfile[0]) ? $userProfile[0]->address : '' }}"
                                                               type="text" id="address" name="address"
                                                               placeholder="Enter Address">
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="gender mb-2">
                                                            <label>Chat</label>
                                                            <div class="form-radio">
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="chat"
                                                                               {{$userProfile[0]->chat == '1' ? 'checked' : '' }} value="1"><i
                                                                            class="check-box"></i>Yes/OK
                                                                    </label>
                                                                </div>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="chat"
                                                                               {{$userProfile[0]->chat == '0' ? 'checked' : '' }}  value="0"><i
                                                                            class="check-box"></i>No
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="gender mb-2">
                                                            <label>Phone Cell</label>
                                                            <div class="form-radio">
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="phone_cell"
                                                                               {{$userProfile[0]->phone_cell == '1' ? 'checked' : '' }} value="1"><i
                                                                            class="check-box"></i>Yes/OK
                                                                    </label>
                                                                </div>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="phone_cell"
                                                                               {{$userProfile[0]->phone_cell == '0' ? 'checked' : '' }}  value="0"><i
                                                                            class="check-box"></i>No
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <ul class="list-inline pull-right">
                                                    <li>
                                                        <button type="submit" id="agent_form"
                                                                class="btn btn-primary next-step"
                                                                style="margin-right: 25px;">Save
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </section>
            </form>

        </div>
        </body>
    @endif


    <script type="text/javascript">

        jQuery( document ).ready(function( $ ) {

            $("#save_continue").click(function () {

                var isValid = true;

                var form = $("form#add_profile_form");
                //
                 form.find('input.required').each(function() {
                    if ($(this).val() === null || $(this).val() === "") {
                        $(this).addClass('invalid');
                        isValid = false;
                    }
                 })

                form.find('select.required').each(function() {
                    if ($(this).val() === null || $(this).val() === "") {
                        $(this).addClass('invalid');
                        isValid = false;
                    }
                });
                $('form input.required').on('focus', function() {
                    $(this).removeClass('invalid');
                });
                $('select.required').on('focus', function() {
                    $(this).removeClass('invalid');
                });
                if (isValid) {
                    $("a#permission-tabs").attr("data-toggle", "tab").click();
                }
            });
        });


        $("#agent_form").click(function () {
            var isValid = true;
            var form = $("form#agent_profile_form");
            form.find('input.required').each(function () {
                if ($(this).val() === null || $(this).val() === "") {
                    $(this).addClass('invalid');
                    isValid = false;
                }
            })
            form.find('select.required').each(function () {
                if ($(this).val() === null || $(this).val() === "") {
                    $(this).addClass('invalid');
                    isValid = false;
                }
            });
            $('form input.required').on('focus', function () {
                $(this).removeClass('invalid');
            });
            $('select.required').on('focus', function () {
                $(this).removeClass('invalid');
            });
            if (isValid) {
                return true;
            } else {
                return false;
            }
        });
    </script>

    </html



@endsection
