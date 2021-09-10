

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<!-- Mirrored from wpkixx.com/html/pitnik/pitpoint.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Mar 2021 16:07:10 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Global Puls</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
<!--    <link rel="icon" href="{{asset('/')}}public/frontend/images/fav.png" type="image/png" sizes="16x16"> -->

    <link rel="stylesheet" href="{{asset('/')}}public/frontend/assets/css/main.min.css">
    <link rel="stylesheet" href="{{asset('/')}}public/frontend/assets/css/style.css">
    <link rel="stylesheet" href="{{asset('/')}}public/frontend/assets/css/color.css">
    <link rel="stylesheet" href="{{asset('/')}}public/frontend/assets/css/color-pink.css">
    <link rel="stylesheet" href="{{asset('/')}}public/frontend/assets/css/responsive.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>



    <style>
        .sub-links {
            background: rgb(1 32 112 / 68%) none repeat scroll 0 0;
            display: inline-block;
            left: 0;
            padding: 5px 15px;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 2;
        }
        #opacity {
            display: inline-block;
            position: relative;
            width: 100%;
            position: relative;
            background: #f6e8aa;
            overflow: hidden;
            /*background-color: #fecd00;*/
        }
        .mate-black::before {
            background: #f6e8aa;
        }
        .mate-black::before{
            background: #f6e8aa;
            content: "";
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 1;
        }
        .featured-baner > img {
            display: inline-block;
            width: 100%;
            opacity: 0.7;
        }

        .pinkish:before {
            background: #f6e8aa;
        }

        .central-meta {
            background: #012070a8 none repeat scroll 0 0;
            border: 1px solid #ede9e9;
            border-radius: 5px;
            display: inline-block;
            width: 100%;
            margin-bottom: 20px;
            padding: 20px;
            position: relative;
            color: white;
        }

        .pitdate-user>h4 {
            color: white;
            display: inline-block;
            font-size: 14px;
            margin-bottom: 0;
            width: 80%;
        }

        .menu-list>li>a {
            border-bottom: 1px solid #eaeaea;
            color: white;
            display: inline-block;
            font-weight: 500;
            padding: 13px 20px;
            width: 100%;
        }

        .menu-list {
            background: #52689e none repeat scroll 0 0;
            border-radius: 5px;
            display: inline-block;
            list-style: outside none none;
            margin: 0;
            padding: 0;
            width: 100%;
        }

        .menu-list>li>a:hover {
            background: #52689e none repeat scroll 0 0;
        }

        .sidebar .widget {
            display: inline-block;
            position: relative;
            width: 100%;
            margin-bottom: 20px;
            background: #fecd00a6;
            border: 1px solid #ede9e9;
            border-radius: 6px;
        }

        .sidebar .widget-title {
            border-bottom: 1px solid #e6ecf5;
            color: white;
            display: inline-block;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 20px;
            padding: 15px 20px;
            position: relative;
            text-transform: capitalize;
            width: 100%;
        }

        .succes-people li>h5 {
            color: white;
            font-size: 15px;
            font-weight: 400;
        }

        .sidebar .widget {
            display: inline-block;
            position: relative;
            width: 100%;
            margin-bottom: 20px;
            background: #fecd00a6;
            border: 1px solid #ede9e9;
            border-radius: 6px;
        }

        .sidebar .widget-title {
            border-bottom: 1px solid #e6ecf5;
            color: white;
            display: inline-block;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 20px;
            padding: 15px 20px;
            position: relative;
            text-transform: capitalize;
            width: 100%;
        }

        .checkbox .check-box::after,
        .checkbox .check-box::before,
        .search-match>form>button,
        aside.sidebar .frnd-meta>a.main-btn2:hover,
        .sidebar .widget-title:before,
        .owl-dot.active::before,
        .slider-box>.slider,
        .sub-links>.main-btn,
        .buttons .main-btn,
        .buttons .main-btn2:hover,
        .btn-view.btn-load-more:hover,
        .member-des .bottom-meta .main-btn,
        .member-des .bottom-meta .main-btn2:hover {
            background: #012070;
        }

        .checkbox .check-box::after,
        .checkbox .check-box::before,
        .search-match>form>button,
        aside.sidebar .frnd-meta>a.main-btn2:hover,
        .sidebar .widget-title:before,
        .owl-dot.active::before,
        .slider-box>.slider,
        .sub-links>.main-btn,
        .buttons .main-btn,
        .buttons .main-btn2:hover,
        .btn-view.btn-load-more:hover,
        .member-des .bottom-meta .main-btn,
        .member-des .bottom-meta .main-btn2:hover {
            background: #012070;
        }

        .sidebar .widget-title {
            border-bottom: 1px solid #e6ecf5;
            color: #012070;
            display: inline-block;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 20px;
            padding: 15px 20px;
            position: relative;
            text-transform: capitalize;
            width: 100%;
        }

        #central-meta1 {
            background: #fff none repeat scroll 0 0;
            border: 1px solid #ede9e9;
            border-radius: 5px;
            display: inline-block;
            width: 100%;
            margin-bottom: 20px;
            padding: 20px;
            position: relative;
        }

        .o {
            background: #f2f7fb none repeat scroll 0 0;
            border: 1px solid #ede9e9;
            border-radius: 3px;
            color: black;
            padding: 7px 7px 7px 7px;
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

        /*#one {*/
        /*    height: 201px;*/
        /*    padding: 61px;*/
        /*    border: 23px solid;*/
        /*    border-bottom-color: red;*/
        /*    border-left-color: green;*/
        /*    border-right-color: #012070;*/
        /*    border-top-color: #f7d956;*/
        /*    border-radius: 132px;*/
        /*}*/

        #one {
            background: radial-gradient( circle closest-side, white 0, white 50%, #CDCDCD 40%, transparent 63%, transparent 70%, white 0 ), conic-gradient( #52689e 0, #52689e 20%, #f7d956 0, #f7d956 30%, #f0394d 0, #f0394d 70%, #cda742 0, #f3e183 90%, #59a14f 0, #59a14f 100% );            min-height: 350px;
            position: relative;
            margin: 0;
        }
        #two {
            margin-left: -55px;
            margin-top: 2px;display: block ruby;
        }
        #three {
            font-size: 13px;
        }
        #four {
            color: blue; font-family: Arial;
        }
        #five {
            line-height: 350px;
            margin-left: 0px;
            margin-top: 8px;display: block ruby;font-family: Arial;
        }
        #six {
            color: black;text-align: center;
        }
        #profile_log {
            height: 201px;
            padding: 84px;
            border: 23px solid;
            border-bottom-color: red;
            border-left-color: green;
            border-right-color: #012070;
            border-top-color: #f7d956;
            border-radius: 132px;
        }
        #profile_text{
            margin-left: -75px;
            margin-top: -8px;display: block ruby;
        }
        #active_users {
            color: blue;font-family: Arial;
        }
        #profile_all{
            background: radial-gradient( circle closest-side, white 0, white 50%, #CDCDCD 40%, transparent 63%, transparent 70%, white 0 ), conic-gradient( #52689e 0, #52689e 20%, #f7d956 0, #f7d956 30%, #f0394d 0, #f0394d 70%, #cda742 0, #f3e183 90%, #59a14f 0, #59a14f 100% );            min-height: 328px;
            position: relative;
            margin: 0;
            height: 0px;
        }
    </style>

</head>

<body>

<div class="theme-layout  gray-bg">

    <div class="responsive-header">
        <div class="mh-head first Sticky">
				<span class="mh-btns-left">
					<a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
				</span>
            <span class="mh-text">
                        <a href="{{route('uProfileDetail')}}" title=""><img src="{{asset('/')}}public/images/logo.png" style="height: 40px;" alt=""></a>
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

    </div>

    <Style>

    </Style>
    <div style="background-color: #252628; padding: 10px;" id="top-line">
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
    </div>

    <div class="topbar stick">
        <div class="logo">
            <a title="" href="{{route('uProfileDetail')}}"><img src="{{asset('/')}}public/images/logo.png" style="height: 55px;" alt=""></a>
        </div>
        <div class="top-area">
            <div class="top-search">
                <form method="post" class="">
                    <input type="text" placeholder="Search People, Pages, Groups etc">
                    <button data-ripple><i class="ti-search"></i></button>
                </form>
            </div>
            <div class="page-name">
                <!--			    <span>Pitpoint</span>-->
            </div>
            <ul class="setting-area">
                <a title="Home"  href="{{route('uProfileDetail')}}"><i style="font-size: 20px; " class="fa fa-home"></i></a>
                <li>

                    <div class="dropdowns">
                        <span>5 New Requests <a href="#" title="">View all Requests</a></span>
                        <ul class="drops-menu">
                            <li>
                                <div>
                                    <figure>
                                        <img src="images/resources/thumb-2.jpg" alt="">
                                    </figure>
                                    <div class="mesg-meta">
                                        <h6><a href="#" title="">Loren</a></h6>
                                        <span><b>Amy</b> is mutule friend</span>
                                        <i>yesterday</i>
                                    </div>
                                    <div class="add-del-friends">
                                        <a href="#" title=""><i class="fa fa-heart"></i></a>
                                        <a href="#" title=""><i class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <figure>
                                        <img src="images/resources/thumb-3.jpg" alt="">
                                    </figure>
                                    <div class="mesg-meta">
                                        <h6><a href="#" title="">Tina Trump</a></h6>
                                        <span><b>Simson</b> is mutule friend</span>
                                        <i>2 days ago</i>
                                    </div>
                                    <div class="add-del-friends">
                                        <a href="#" title=""><i class="fa fa-heart"></i></a>
                                        <a href="#" title=""><i class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <figure>
                                        <img src="images/resources/thumb-4.jpg" alt="">
                                    </figure>
                                    <div class="mesg-meta">
                                        <h6><a href="#" title="">Andrew</a></h6>
                                        <span><b>Bikra</b> is mutule friend</span>
                                        <i>4 hours ago</i>
                                    </div>
                                    <div class="add-del-friends">
                                        <a href="#" title=""><i class="fa fa-heart"></i></a>
                                        <a href="#" title=""><i class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <figure>
                                        <img src="images/resources/thumb-5.jpg" alt="">
                                    </figure>
                                    <div class="mesg-meta">
                                        <h6><a href="#" title="">Dasha</a></h6>
                                        <span><b>Sarah</b> is mutule friend</span>
                                        <i>9 hours ago</i>
                                    </div>
                                    <div class="add-del-friends">
                                        <a href="#" title=""><i class="fa fa-heart"></i></a>
                                        <a href="#" title=""><i class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <figure>
                                        <img src="images/resources/thumb-1.jpg" alt="">
                                    </figure>
                                    <div class="mesg-meta">
                                        <h6><a href="#" title="">Emily</a></h6>
                                        <span><b>Amy</b> is mutule friend</span>
                                        <i>4 hours ago</i>
                                    </div>
                                    <div class="add-del-friends">
                                        <a href="#" title=""><i class="fa fa-heart"></i></a>
                                        <a href="#" title=""><i class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <a href="#" title="" class="more-mesg">View All</a>
                    </div>
                </li>
                <li>
                    <a href="#" title="Notification" data-ripple="">
                        <i class="fa fa-bell"></i><em class="bg-purple">7</em>
                    </a>
                    <div class="dropdowns">
                        <span>4 New Notifications <a href="#" title="">Mark all as read</a></span>
                        <ul class="drops-menu">
                            <li>
                                <a href="#" title="">
                                    <figure>
                                        <img src="images/resources/thumb-1.jpg" alt="">
                                        <span class="status f-online"></span>
                                    </figure>
                                    <div class="mesg-meta">
                                        <h6>sarah Loren</h6>
                                        <span>commented on your new profile status</span>
                                        <i>2 min ago</i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <figure>
                                        <img src="images/resources/thumb-2.jpg" alt="">
                                        <span class="status f-online"></span>
                                    </figure>
                                    <div class="mesg-meta">
                                        <h6>Jhon doe</h6>
                                        <span>Nicholas Grissom just became friends. Write on his wall.</span>
                                        <i>4 hours ago</i>
                                        <figure>
                                            <span>Today is Marina Valentine’s Birthday! wish for celebrating</span>
                                            <img src="images/birthday.png" alt="">
                                        </figure>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <figure>
                                        <img src="images/resources/thumb-3.jpg" alt="">
                                        <span class="status f-online"></span>
                                    </figure>
                                    <div class="mesg-meta">
                                        <h6>Andrew</h6>
                                        <span>commented on your photo.</span>
                                        <i>Sunday</i>
                                        <figure>
                                            <span>"Celebrity looks Beautiful in that outfit! We should see each"</span>
                                            <img src="images/resources/admin.jpg" alt="">
                                        </figure>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <figure>
                                        <img src="images/resources/thumb-4.jpg" alt="">
                                        <span class="status f-online"></span>
                                    </figure>
                                    <div class="mesg-meta">
                                        <h6>Tom cruse</h6>
                                        <span>nvited you to attend to his event Goo in</span>
                                        <i>May 19</i>
                                    </div>
                                </a>
                                <span class="tag">New</span>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <figure>
                                        <img src="images/resources/thumb-5.jpg" alt="">
                                        <span class="status f-online"></span>
                                    </figure>
                                    <div class="mesg-meta">
                                        <h6>Amy</h6>
                                        <span>Andrew Changed his profile picture. </span>
                                        <i>dec 18</i>
                                    </div>
                                </a>
                                <span class="tag">New</span>
                            </li>
                        </ul>
                        <a href="#" title="" class="more-mesg">View All</a>
                    </div>
                </li>
                <li>
                    <a href="#" title="Messages" data-ripple=""><i class="fa fa-commenting"></i><em class="bg-blue">9</em></a>
                    <div class="dropdowns">
                        <span>5 New Messages <a href="#" title="">Mark all as read</a></span>
                        <ul class="drops-menu">
                            <li>
                                <a class="show-mesg" href="#" title="">
                                    <figure>
                                        <img src="images/resources/thumb-1.jpg" alt="">
                                        <span class="status f-online"></span>
                                    </figure>
                                    <div class="mesg-meta">
                                        <h6>sarah Loren</h6>
                                        <span><i class="ti-check"></i> Hi, how r u dear ...?</span>
                                        <i>2 min ago</i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="show-mesg" href="#" title="">
                                    <figure>
                                        <img src="images/resources/thumb-2.jpg" alt="">
                                        <span class="status f-offline"></span>
                                    </figure>
                                    <div class="mesg-meta">
                                        <h6>Jhon doe</h6>
                                        <span><i class="ti-check"></i> We’ll have to check that at the office and see if the client is on board with</span>
                                        <i>2 min ago</i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="show-mesg" href="#" title="">
                                    <figure>
                                        <img src="images/resources/thumb-3.jpg" alt="">
                                        <span class="status f-online"></span>
                                    </figure>
                                    <div class="mesg-meta">
                                        <h6>Andrew</h6>
                                        <span> <i class="fa fa-paperclip"></i>Hi Jack's! It’s Diana, I just wanted to let you know that we have to reschedule..</span>
                                        <i>2 min ago</i>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="show-mesg" href="#" title="">
                                    <figure>
                                        <img src="images/resources/thumb-4.jpg" alt="">
                                        <span class="status f-offline"></span>
                                    </figure>
                                    <div class="mesg-meta">
                                        <h6>Tom cruse</h6>
                                        <span><i class="ti-check"></i> Great, I’ll see you tomorrow!.</span>
                                        <i>2 min ago</i>
                                    </div>
                                </a>
                                <span class="tag">New</span>
                            </li>
                            <li>
                                <a class="show-mesg" href="#" title="">
                                    <figure>
                                        <img src="images/resources/thumb-5.jpg" alt="">
                                        <span class="status f-away"></span>
                                    </figure>
                                    <div class="mesg-meta">
                                        <h6>Amy</h6>
                                        <span><i class="fa fa-paperclip"></i> Sed ut perspiciatis unde omnis iste natus error sit </span>
                                        <i>2 min ago</i>
                                    </div>
                                </a>
                                <span class="tag">New</span>
                            </li>
                        </ul>
                        <a href="chat-messenger.html" title="" class="more-mesg">View All</a>
                    </div>
                </li>


            </ul>
            <div class="user-img" style="margin-right: 51px;">
                <h5>{{session()->get('user_web_data')['user_info']['username']}}</h5>
                <img src="images/resources/admin.jpg" alt="">
                <span class="status f-online"></span>
                <div class="user-setting" >
                    <span class="seting-title">User Setting <a href="#" title="">see all</a></span>
                    <ul class="chat-setting">
                        <li><a href="{{route('change.password')}}" title="">Change Password</a></li>
                    </ul>
                    <span class="seting-title">Profile Setting <a href="#" title="">see all</a></span>
                    <ul class="log-out">
                        <li><a href="{{route('profile.edit',Hashids::encode(session()->get('user_web_data')['user_info']['web_user_id']))}}" title=""><i class="ti-pencil-alt"></i>Edit Profile </a></li>
                        <li> <a href="{{route('uLogout')}}" onclick="return confirm('Are you sure?');" style="color:white;"><i class="ti-power-off"> log out</i></a></li>
                    </ul>
                </div>
            </div>

        </div>

    </div><!-- topbar -->

    <div class="fixed-sidebar right">
        <div class="chat-friendz">
            <ul class="chat-users">
                <li>
                    <div class="author-thmb">
                        <img src="{{asset('/')}}public/frontend/images/resources/side-friend1.jpg" alt="">
                        <span class="status f-online"></span>
                    </div>
                </li>
                <li>
                    <div class="author-thmb">
                        <img src="{{asset('/')}}public/frontend/images/resources/side-friend2.jpg" alt="">
                        <span class="status f-away"></span>
                    </div>
                </li>
                <li>
                    <div class="author-thmb">
                        <img src="{{asset('/')}}public/frontend/images/resources/side-friend3.jpg" alt="">
                        <span class="status f-online"></span>
                    </div>
                </li>
                <li>
                    <div class="author-thmb">
                        <img src="{{asset('/')}}public/frontend/images/resources/side-friend4.jpg" alt="">
                        <span class="status f-offline"></span>
                    </div>
                </li>
                <li>
                    <div class="author-thmb">
                        <img src="{{asset('/')}}public/frontend/images/resources/side-friend5.jpg" alt="">
                        <span class="status f-online"></span>
                    </div>
                </li>
                <li>
                    <div class="author-thmb">
                        <img src="{{asset('/')}}public/frontend/images/resources/side-friend6.jpg" alt="">
                        <span class="status f-online"></span>
                    </div>
                </li>
                <li>
                    <div class="author-thmb">
                        <img src="{{asset('/')}}public/frontend/images/resources/side-friend7.jpg" alt="">
                        <span class="status f-offline"></span>
                    </div>
                </li>
                <li>
                    <div class="author-thmb">
                        <img src="{{asset('/')}}public/frontend/images/resources/side-friend8.jpg" alt="">
                        <span class="status f-online"></span>
                    </div>
                </li>
                <li>
                    <div class="author-thmb">
                        <img src="{{asset('/')}}public/frontend/images/resources/side-friend9.jpg" alt="">
                        <span class="status f-away"></span>
                    </div>
                </li>
                <li>
                    <div class="author-thmb">
                        <img src="{{asset('/')}}public/frontend/images/resources/side-friend10.jpg" alt="">
                        <span class="status f-away"></span>
                    </div>
                </li>
                <li>
                    <div class="author-thmb">
                        <img src="{{asset('/')}}public/frontend/images/resources/side-friend8.jpg" alt="">
                        <span class="status f-online"></span>
                    </div>
                </li>
            </ul>
            <div class="chat-box">
                <div class="chat-head">
                    <span class="status f-online"></span>
                    <h6>Bucky Barnes</h6>
                    <div class="more">
                        <div class="more-optns"><i class="ti-more-alt"></i>
                            <ul>
                                <li>block chat</li>
                                <li>unblock chat</li>
                                <li>conversation</li>
                            </ul>
                        </div>
                        <span class="close-mesage"><i class="ti-close"></i></span>
                    </div>
                </div>
                <div class="chat-list">
                    <ul>
                        <li class="me">
                            <div class="chat-thumb"><img src="{{asset('/')}}public/frontend/images/resources/chatlist1.jpg" alt=""></div>
                            <div class="notification-event">
									<span class="chat-message-item">
										HI, Jack i have faced a problem with your software. are you available now, when i install this i have to received an error.
									</span>
                                <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Today at 2:12pm</time></span>
                            </div>
                        </li>
                        <li class="you">
                            <div class="chat-thumb"><img src="{{asset('/')}}public/frontend/images/resources/chatlist2.jpg" alt=""></div>
                            <div class="notification-event">
									<span class="chat-message-item">
										Hi tina, Please let me know your purchase code, and show me the screnshot of error.
									</span>
                                <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Today at 2:14pm</time></span>
                            </div>
                        </li>
                        <li class="me">
                            <div class="chat-thumb"><img src="{{asset('/')}}public/frontend/images/resources/chatlist1.jpg" alt=""></div>
                            <div class="notification-event">
									<span class="chat-message-item">
										Yes, sure please wait a while, i ll show you the complete error list. Thank you.
									</span>
                                <span class="notification-date"><time datetime="2004-07-24T18:18" class="entry-date updated">Today at 2:15pm</time></span>
                            </div>
                        </li>
                    </ul>
                    <form class="text-box">
                        <textarea placeholder="Post enter to post..."></textarea>
                        <div class="add-smiles">
                            <span title="add icon" class="em em-expressionless"></span>
                            <div class="smiles-bunch">
                                <i class="em em---1"></i>
                                <i class="em em-smiley"></i>
                                <i class="em em-anguished"></i>
                                <i class="em em-laughing"></i>
                                <i class="em em-angry"></i>
                                <i class="em em-astonished"></i>
                                <i class="em em-blush"></i>
                                <i class="em em-disappointed"></i>
                                <i class="em em-worried"></i>
                                <i class="em em-kissing_heart"></i>
                                <i class="em em-rage"></i>
                                <i class="em em-stuck_out_tongue"></i>
                            </div>
                        </div>

                        <button type="submit"></button>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- right sidebar user chat -->

    <section>
        <div class="gap2 no-bottom">
            <div class="container-fluid ext-right">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="featured-baner mate-black ext-low-opacity" id="opacity">
                            <div class="sub-links" style="height: 50px;">
                                <div class="heart-pnts">
                                    <div><span></span></div>
                                    <a title="" style="margin-top: 10px;" href="{{route('profile.edit',Hashids::encode(session()->get('user_web_data')['user_info']['web_user_id']))}}"><i class="ti-pencil-alt"></i> Upgrade Your Profile</a>
                                </div>
                            </div>
                            <img src="{{asset('/')}}public/frontend/images/resources/pitpoint-feature.jpg" alt="">
                            <h2>Find Your Perfect <span>Match</span> Now</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- top banner -->



    <section>
        <div class="gap gray-bg">
            <div class="container-fluid ext-right">
                <div class="row" id="page-contents">
                    <div class="col-lg-3">
                        <aside class="sidebar static left">
                            <div class="friend-box">
                                <div class="frnd-meta">
                                    <img alt="" style="max-height: 100px; width: 100px" src="{{asset('/')}}public/images/dummy.png">
                                    <div class="frnd-name">
                                        <a title="" href="#">{{session()->get('user_web_data')['user_info']['username']}}</a>
                                        <span></span>
                                    </div>
                                </div>
                                <ul class="menu-list">
                                    <li><a href="{{route('uProfileDetail')}}" title="" data-ripple=""><i class="fa fa-home"></i>Home</a></li>
                                    <li><a href="{{route('advance.search')}}" title="" data-ripple=""><i class="fa fa fa-check-circle-o"></i>Advance Search</a></li>
                                    <li><a href="{{route('user.favourite.index')}}" title="" data-ripple=""><i class="fa fa-certificate"></i>My Favourite</a></li>
                                    <li><a href="{{route('parent.request')}}" title="" data-ripple=""><i class="fa fa-fire"></i>Parent Request Received</a></li>
                                    <li><a href="{{route('parent.child.request')}}" title="" data-ripple=""><i class="fa fa-sun-o"></i>Parent Request send</a></li>
                                    <li><a href="{{route('profile.log')}}" title="" data-ripple=""><i class="fa fa-question-circle"></i>Profile Logs</a></li>
                                </ul>
                            </div>
                            <div class="widget">
                                <h4 class="widget-title">Most Active People</h4>
                                <ul class="most-actie-pep">
                                    <li>
                                        <a href="#" title="Sandy" class="user-thmb">
                                            <img alt="" src="{{asset('/')}}public/frontend/images/resources/side-friend1.jpg">
                                            <span class="status f-online"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Andrew" class="user-thmb">
                                            <img alt="" src="{{asset('/')}}public/frontend/images/resources/side-friend2.jpg">
                                            <span class="status f-online"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Sapna" class="user-thmb">
                                            <img alt="" src="{{asset('/')}}public/frontend/images/resources/side-friend3.jpg">
                                            <span class="status f-online"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Emily" class="user-thmb">
                                            <img alt="" src="{{asset('/')}}public/frontend/images/resources/side-friend4.jpg">
                                            <span class="status f-online"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Xing Xang" class="user-thmb">
                                            <img alt="" src="{{asset('/')}}public/frontend/images/resources/side-friend5.jpg">
                                            <span class="status f-online"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Sophia" class="user-thmb">
                                            <img alt="" src="{{asset('/')}}public/frontend/images/resources/side-friend6.jpg">
                                            <span class="status f-online"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="George" class="user-thmb">
                                            <img alt="" src="{{asset('/')}}public/frontend/images/resources/side-friend7.jpg">
                                            <span class="status f-online"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Katy" class="user-thmb">
                                            <img alt="" src="{{asset('/')}}public/frontend/images/resources/side-friend8.jpg">
                                            <span class="status f-online"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Luci" class="user-thmb">
                                            <img alt="" src="{{asset('/')}}public/frontend/images/resources/side-friend9.jpg">
                                            <span class="status f-online"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Diana" class="user-thmb">
                                            <img alt="" src="{{asset('/')}}public/frontend/images/resources/side-friend10.jpg">
                                            <span class="status f-online"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div><!-- Most active people widget -->
                            <div class="widget stick-widget">
                                <h4 class="widget-title">Success Stories</h4>
                                <ul class="succes-people">
                                    <li>
                                        <figure><img src="{{asset('/')}}public/frontend/images/resources/couple1.jpg" alt=""></figure>
                                        <h5>"Its a a good place to meet serious people!"</h5>
                                    </li>
                                    <li>
                                        <figure><img src="{{asset('/')}}public/frontend/images/resources/couple2.jpg" alt=""></figure>
                                        <h5>"Wedding ceremony was priceless"</h5>
                                    </li>
                                    <li>
                                        <figure><img src="{{asset('/')}}public/frontend/images/resources/couple3.jpg" alt=""></figure>
                                        <h5>"i am so happy, i find my love in this site and will marry soon! "</h5>
                                    </li>
                                </ul>
                            </div>
                        </aside>
                    </div>

                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="pitpoint-filter central-meta">
                                    <ul class="view-port">
                                        <li class="active">
                                            <a href="{{route('uProfileDetail')}}" title=""><i class="fa fa-th"></i></a></li>
                                    </ul>
                                    <ul class="filter-ajex">
                                        <li class="active"><a href="{{route('uProfileDetail')}}" title="All Members">All</a></li>
                                        <li><a href="#" title="">Paid Members</a></li>
                                        <li><a href="#" title="">Free Members</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

{{--                    {{ dd($profile_logs) }}--}}
                        @foreach($profile_logs as $profile_log)
{{--                            {{ dd($profile_log->profile_logs[0]->nationality) }}--}}
                            <div class="load-more">
                                <div class="central-meta item" style="background: white">
                                    <div class="pit-post">

                                        <div class="pit-post-deta">

                                            <ul class="post-up-time">
                                                <li>
                                                    <div class="verification">
                                                        <em class="verify"><i class="fa fa-check-circle"></i> verified</em>
                                                    </div>
                                                </li>

                                            </ul>

                                            <ul class="pit-opt">


                                            </ul>
                                        </div>

                                        <div class="buttons">
                                            <a href="#" title="" class="main-btn2 send-mesg" data-ripple="">Send Message</a>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
</div>
</section><!-- content -->

<section>
    <div class="pit-ad-banner pinkish low-opacity">
        <div class="bg-image" style="background-image: url({{asset('/')}}public/frontend/images/resources/add-banner.jpg)"></div>
        <div class="add-meta">
            <h5>Let everyone know that you are ready to meet them! <span>Send a heart bomb and contact 100+ members at once.</span></h5>
            <i><img src="{{asset('/')}}public/frontend/images/heart-bomb.png" alt=""></i>
            <a href="#" title="" data-ripple="">Send Now</a>
        </div>
    </div>
</section>

<!--	<a title="Your Cart Items" href="shop-cart.html" class="shopping-cart" data-toggle="tooltip">Cart <i class="fa fa-shopping-bag"></i><span>02</span></a>-->

<div class="bottombar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span class="copyright">© Global Puls 2021. All rights reserved.</span>
                <i><img src="{{asset('/')}}public/frontend/images/credit-cards.png" alt=""></i>
            </div>
        </div>
    </div>
</div><!-- bottombar-->
</div>
<div class="side-panel">
    <h4 class="panel-title">General Setting</h4>
    <form method="post">
        <div class="setting-row">
            <span>use night mode</span>
            <input type="checkbox" id="nightmode1" />
            <label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>Notifications</span>
            <input type="checkbox" id="switch22" />
            <label for="switch22" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>Notification sound</span>
            <input type="checkbox" id="switch33" />
            <label for="switch33" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>My profile</span>
            <input type="checkbox" id="switch44" />
            <label for="switch44" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>Show profile</span>
            <input type="checkbox" id="switch55" />
            <label for="switch55" data-on-label="ON" data-off-label="OFF"></label>
        </div>
    </form>
    <h4 class="panel-title">Account Setting</h4>
    <form method="post">
        <div class="setting-row">
            <span>Sub users</span>
            <input type="checkbox" id="switch66" />
            <label for="switch66" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>personal account</span>
            <input type="checkbox" id="switch77" />
            <label for="switch77" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>Business account</span>
            <input type="checkbox" id="switch88" />
            <label for="switch88" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>Show me online</span>
            <input type="checkbox" id="switch99" />
            <label for="switch99" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>Delete history</span>
            <input type="checkbox" id="switch101" />
            <label for="switch101" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>Expose author name</span>
            <input type="checkbox" id="switch111" />
            <label for="switch111" data-on-label="ON" data-off-label="OFF"></label>
        </div>
    </form>
</div><!-- side panel -->






</html>
