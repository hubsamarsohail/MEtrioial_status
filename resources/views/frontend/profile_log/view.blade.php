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
                                <div class="sub-links">

                                    <a href="{{route('userProfile')}}" title="" class="main-btn" data-ripple="">Create Profile</a>
                                    <div class="heart-pnts">
                                        <div><i class="fa fa-heart"></i><span>56.4k</span></div>
                                        <a href="#" title="">your Heart Points</a>
                                        <a href="#" title="">upgrade your profile</a>
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
                                        <img alt="" src="{{asset('/')}}public/frontend/images/resources/frnd-figure3.jpg">
                                        <div class="frnd-name">
                                            <a title="" href="#">{{session()->get('user_web_data')['user_info']['username']}}</a>

                                        </div>
                                        <a class="main-btn2" href="#" title="">Follow</a>
                                    </div>
                                    <ul class="menu-list">
                                        <li><a href="{{route('uProfileDetail')}}" title="" data-ripple=""><i class="fa fa-home"></i>Home</a></li>
                                        <li><a href="#" title="" data-ripple=""><i class="fa fa fa-check-circle-o"></i>Match Mark</a></li>
                                        <li><a href="#" title="" data-ripple=""><i class="fa fa-history"></i>History</a></li>
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
                                </div><!-- success couples carousel widget -->
                            </aside>
                        </div>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="pitpoint-filter central-meta" style=" background: #012070a8 none repeat scroll 0 0;">
                                        <ul class="view-port">
                                            <li><a href="#" title=""><i class="fa fa-th"></i></a></li>
                                            <li class="active"><a href="#" title=""><i class="fa fa-th-list"></i></a></li>
                                        </ul>
                                        <ul class="filter-ajex">
                                            <li class="active"><a href="#" title="All Members">All</a></li>
                                            <li><a class="online" href="#" title="Only Online People"><i class="fa fa-circle"></i></a></li>
                                            <li><a class="offline" href="#" title="Only Offline People"><i class="fa fa-circle"></i></a></li>
                                            <li><a href="#" title="">Best Match</a></li>
                                            <li><a href="#" title="">Newest</a></li>
                                            <li><a href="#" title="">Approved</a></li>
                                            <li><a href="#" title="">Near By</a></li>
                                            <li><a href="#" title="">Paid Members</a></li>
                                            <li><a href="#" title="">Free Members</a></li>
                                        </ul>
                                        <div class="range-slider">
                                            <div class="slider-box">
                                                <label for="priceRange"></label>
                                                <input type="text" id="priceRange" readonly>
                                                <div id="price-range" class="slider"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @foreach($profile_logs as $profile_log)

                                <div class="load-more">

                                    <div class="central-meta item">
                                        <div class="pit-post">
                                            <figure>@if($profile_log->profile_user_logs[0])
                                                    <img style="height:150px; width: 200px" src="{{asset('public/uploads/profile').'/'.$profile_log->user_profile_data[0]->email.'/'.$profile_log->user_profile_data[0]->image_path }} " alt="">
                                                @endif
                                            </figure>
                                            <div class="pit-post-deta">
                                                @if($profile_log->profile_user_logs[0])
                                                    <h4><a href="{{route('udetails',Hashids::encode($profile_log->user_profile_data[0]->user_profile_id))}}" title=""><span class="status f-online"></span> @if($profile_log->profile_user_logs[0]){{$profile_log->profile_user_logs[0]->first_name}} @endif | {{$profile_log->user_profile_data[0]->age}}</a></h4>
                                                @endif
                                                <ul class="post-up-time">
                                                    <li>
                                                        <div class="verification">
                                                            <em class="verify"><i class="fa fa-check-circle"></i> verified</em>
                                                        </div>
                                                    </li>
                                                    @if($profile_log->profile_user_logs[0])
                                                        <li><i class="fa fa-map-marker"></i> {{$profile_log->user_profile_data[0]->nationality}}</li>
                                                    @endif
                                                </ul>

                                                <ul class="pit-opt">
                                                    <li>
                                                        <div class="likes heart" title="Like/Dislike">❤ <span>1.6k</span></div>
                                                    </li>
                                                    <li class="share-pst" title="Shares"><i class="fa fa-share-alt"></i><em>125</em></li>
                                                    <li class="save-post" title="Match Mark"><i class="fa fa-check-circle"></i></li>
                                                    <li class="copy-embd" title="Copy Embed"><i class="fa fa-code"></i></li>
                                                    <li class="smile-it" title="Give Smiles"><i class="fa fa-smile-o"></i><em>Send Smile</em>
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
                                                    </li>
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
        </section><!-- content -->

    </div>




    </body>

    <!-- Mirrored from wpkixx.com/html/pitnik/pitpoint-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Mar 2021 16:10:43 GMT -->
    </html>
@endsection
