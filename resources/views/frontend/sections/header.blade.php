
	<Style>
        #top-line {
            background-image: url(public/images/Laptop-Header.png);
            background-repeat: no-repeat;
        }

        #top-line{
            background-image: url(public/frontend/images/small.png);
            background-repeat: no-repeat;
        }
        @media only screen and (max-width: 1430px) {
            #top-line {
                background-image: url(public/images/Laptop-Header.png);
                background-repeat: no-repeat;
            }
        }
        @media only screen and (max-width: 1023px) {
            #top-line {
                background-image: url(public/images/Tab-Header.png);
                background-repeat: no-repeat;
            }
        }
        @media only screen and (max-width: 767px) {
            #top-line {
                background-image: url(public/images/Mobile-Header.png);
                background-repeat: no-repeat;
            }
        }
        @media only screen and (max-width: 375px) {
            #top-line {
                background-image: url(public/images/updates-mobile.png);
                background-repeat: no-repeat;
            }
        }
        @media only screen and (max-width: 320px) {
            #top-line {
                background-image: url(public/images/Low-End-Mobile.png);
                background-repeat: no-repeat;
            }
        }

	</Style>
<div style="background-color: #252628; background-image: url(public/images/Laptop-Header.png); padding: 10px;" id="top-line">
		<div class="row">
			<div class="col-md-12">

			</div>
		</div>
	</div>
<!--	info bar end       -->

    <div class="topbar stick">
        <div class="logo">
            <a title="" href="{{route('uProfileDetail')}}"><img src="{{asset('/')}}public/images/logo.png" style="height: 55px;" alt=""></a>
        </div>
        <div class="top-area">
            <div class="main-menu">
					<span>
						<i class="fa fa-braille"></i>
					</span>
            </div>
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
                <li><a href="#" title="Home" data-ripple=""><i class="fa fa-home"></i></a></li>
                <li>
                    <a href="#" title="Friend Requests" data-ripple="">
                        <i class="fa fa-user"></i><em class="bg-red">5</em>
                    </a>
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

                <li><a href="#" title="Help" data-ripple=""><i class="fa fa-question-circle"></i></a>
                    <div class="dropdowns helps">
                        <span>Quick Help</span>
                        <form method="post">
                            <input type="text" placeholder="How can we help you?">
                        </form>
                        <span>Help with this page</span>
                        <ul class="help-drop">
                            <li><a href="#" title=""><i class="fa fa-book"></i>Community & Forum</a></li>
                            <li><a href="#" title=""><i class="fa fa-question-circle-o"></i>FAQs</a></li>
                            <li><a href="#" title=""><i class="fa fa-building-o"></i>Carrers</a></li>
                            <li><a href="#" title=""><i class="fa fa-pencil-square-o"></i>Terms & Policy</a></li>
                            <li><a href="#" title=""><i class="fa fa-map-marker"></i>Contact</a></li>
                            <li><a href="#" title=""><i class="fa fa-exclamation-triangle"></i>Report a Problem</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <div class="user-img">
                <h5>{{session()->get('user_web_data')['user_info']['username']}}</h5>
                <img src="images/resources/admin.jpg" alt="">
                <span class="status f-online"></span>
                <div class="user-setting">
                    <span class="seting-title">Chat setting <a href="#" title="">see all</a></span>
                    <ul class="chat-setting">
                        <li><a href="#" title=""><span class="status f-online"></span>online</a></li>
                        <li><a href="#" title=""><span class="status f-away"></span>away</a></li>
                        <li><a href="#" title=""><span class="status f-off"></span>offline</a></li>
                    </ul>
                    <span class="seting-title">User setting <a href="#" title="">see all</a></span>
                    <ul class="log-out">
{{--                        <li><a href="{{route('user.edit')}}" title=""><i class="ti-user"></i> view profile</a></li>--}}
                        <li><a href="#" title=""><i class="ti-pencil-alt"></i>edit profile</a></li>
                        <li><a href="#" title=""><i class="ti-target"></i>activity log</a></li>
                        <li><a href="#" title=""><i class="ti-settings"></i>account setting</a></li>
                        <li> <a href="{{route('uLogout')}}" onclick="return confirm('Are you sure?');" style="color:white;"><i class="ti-power-off"> log out</i></a></li>
                    </ul>
                </div>
            </div>
            <span class="ti-settings main-menu" data-ripple=""></span>
        </div>

    </div><!-- topbar -->





