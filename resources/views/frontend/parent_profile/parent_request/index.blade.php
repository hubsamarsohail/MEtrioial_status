@extends('frontend.master')

@section('content')

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
            background: #012070;
            overflow: hidden;
            background-color: #fecd00;
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

            background-image: url("https://localhost/matrimonial/public/images/Laptop-Header.png");

            background-repeat: no-repeat;
        }

        @media only screen and (max-width: 1430px) {
            #top-line {
                background-image: url(images/Laptop-Header.png);
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
    </style>
    <body>
    <div class="theme-layout  gray-bg">


        </div><!-- responsive header -->


        <div class="fixed-sidebar right">
            <div class="chat-friendz">
                <ul class="chat-users">
                    <li>
                        <div class="author-thmb">
                            <img src="{{asset('/')}}public/frontend/{{asset('/')}}public/frontend/images/resources/side-friend1.jpg" alt="">
                            <span class="status f-online"></span>
                        </div>
                    </li>
                    <li>
                        <div class="author-thmb">
                            <img src="{{asset('/')}}public/frontend/{{asset('/')}}public/frontend/images/resources/side-friend2.jpg" alt="">
                            <span class="status f-away"></span>
                        </div>
                    </li>
                    <li>
                        <div class="author-thmb">
                            <img src="{{asset('/')}}public/frontend/{{asset('/')}}public/frontend/images/resources/side-friend3.jpg" alt="">
                            <span class="status f-online"></span>
                        </div>
                    </li>
                    <li>
                        <div class="author-thmb">
                            <img src="{{asset('/')}}public/frontend/{{asset('/')}}public/frontend/images/resources/side-friend4.jpg" alt="">
                            <span class="status f-offline"></span>
                        </div>
                    </li>
                    <li>
                        <div class="author-thmb">
                            <img src="{{asset('/')}}public/frontend/{{asset('/')}}public/frontend/images/resources/side-friend5.jpg" alt="">
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
                                <div class="sub-links"  style="height: 50px;">
                                    <a href="{{route('userProfile')}}" title="" class="main-btn" data-ripple="">Create Profile</a>
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
                                        <img alt="" style="height: 74px; max-width: 70%;" src="{{asset('public/images/dummy.png') }}">
                                        <div class="frnd-name">
                                            <a title=""  href="#">{{session()->get('user_web_data')['user_info']['username']}}</a>

                                        </div>
                                    </div>
                                    <ul class="menu-list">
                                        <li><a href="{{route('uProfileDetail')}}" title="" data-ripple=""><i class="fa fa-home"></i>Home</a></li>
                                        <li><a href="{{route('advance.search')}}" title="" data-ripple=""><i class="fa fa fa-check-circle-o"></i>Advance Search</a></li>
                                        <li><a href="{{route('user.favourite.index')}}" title="" data-ripple=""><i class="fa fa-certificate"></i>My Favourite</a></li>
                                        <li><a href="{{route('parent.request')}}" title="" data-ripple=""><i class="fa fa-fire"></i>Parent Request</a></li>
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
                                </div><!-- success couples carousel widget -->
                            </aside>
                        </div>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="pitpoint-filter central-meta" style=" background: #012070a8 none repeat scroll 0 0;">
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

                            @foreach($getParentRequest as $requestparent)

                                <div class="load-more">

                                    <div class="central-meta item">
                                        <div class="pit-post">
                                            @if(isset($requestparent->parentRequest))
                                            <figure>
                                                <img style="height:140px; width: 200px" src="{{asset('public/uploads/profile').'/'.$requestparent->parentRequest->email.'/'.$requestparent->parentRequest->image_path }} " alt="">
                                            </figure>
                                            @else
                                                <figure>
                                                    <img style="height:140px; width: 200px" src="{{asset('public/images/dummy.png') }} " alt="">
                                                </figure>
                                            @endif
                                            <div class="pit-post-deta">
                                                <h4>
                                                    @if(isset($requestparent->parentRequest))
                                                    <a href="{{route('udetails',Hashids::encode($requestparent->parentRequest->user_profile_id))}}" title=""><span class="status f-online">

                                                        </span> {{$requestparent->parentusers->first_name}} | {{$requestparent->parentRequest->age}}</a>
                                                    @else
                                                        <span>{{$requestparent->parentusers->first_name}} | {{$requestparent->parentusers->last_name}}</span>
                                                    @endif
                                                </h4>
                                                <ul class="post-up-time">
                                                    <li>
                                                        <div class="verification">
                                                            <em class="verify"><i class="fa fa-check-circle"></i> verified</em>
                                                        </div>
                                                    </li>
                                                    <li><i class="fa fa-map-marker"></i> </li>
                                                </ul>
                                                <ul class="pit-opt">
                                                    <li> @if(isset($requestparent->parentRequest))
                                                        <div class="likes heart" title="Cast"><span>{{$requestparent->parentRequest->cast}}</span></div>
                                                             @endif
                                                    </li>

                                                    <li class="smile-it" title="Send Message"><i class="fa fa-smile-o"></i><em>Send Message</em>

                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="buttons">
                                                @if($requestparent->is_active == 0)

                                                <a href="{{route('parent.request.accepted',Hashids::encode($requestparent->parentusers->web_user_id))}}" title="" class="btn btn-secondary" data-ripple="">Accepted</a>

                                                @elseif($requestparent->is_active == 1)
                                                <a href="#" title="" class="main-btn" data-ripple="">Request Accepted</a>
                                                @endif
                                            </div>
                                        </div>
                                       </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </body>
   </html>
@endsection
