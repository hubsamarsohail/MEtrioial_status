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
</head>
<body>
    <div class="theme-layout">

        <div class="responsive-header">
            <div class="mh-head first Sticky">
                <span class="mh-btns-left">
                    <a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
                </span>
                <span class="mh-text">
                    <a href="{{route('uProfileDetail')}}" title=""><img src="{{asset('/')}}public/frontend/images/logo.png" alt=""></a>
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
		</Style>
		<div style="background-color: #252628; padding: 10px;" id="top-line">
			<div class="row">
				<div class="col-md-12">

				</div>
			</div>
		</div>
		<!--	info bar end       -->

		<div class="topbar stick">
			<div class="logo">
				<a title="" href="{{route('uProfileDetail')}}" ><img src="{{asset('/')}}public/images/logo.png" style="height: 55px;" alt=""></a>
			</div>
			<div class="top-area">
				<div class="main-menu">
					<span>
						<i class="fa fa-braille"></i>
					</span>
				</div>
				<div class="top-search">
                    <form method="post" action="{{route('search.main')}}">
                        @csrf
                        <input type="text" name="value" placeholder="Search Matcher, Agent etc">
                        <button type="submit" data-ripple><i class="ti-search"></i></button>
                    </form>
				</div>
				<div class="page-name">
					<!--			    <span>Pitpoint</span>-->
				</div>
				<ul class="setting-area">
					<li><a href="#" title="Home" style="margin-top: 10px" data-ripple="">
                            <i class="fa fa-home"></i></a></li>
					<li>
						<a href="#" title="Friend Requests" style="margin-top: 10px" data-ripple="">
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
						<a href="#" title="Notification" style="margin-top: 10px" data-ripple="">
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
						<a href="#" title="Messages" style="margin-top: 10px" data-ripple=""><i class="fa fa-commenting"></i><em class="bg-blue">9</em></a>
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
					<li><a href="#" title="Help" style="margin-top: 10px" data-ripple=""><i class="fa fa-question-circle"></i></a>
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
							<li><a href="{{route('user.edit')}}" title=""><i class="ti-user"></i> view profile</a></li>
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
        <div class="fixed-sidebar right">
            <div class="chat-friendz">
                <ul class="chat-users">
                    <li>
                        <div class="author-thmb">
                            <img src="public/frontend/images/resources/side-friend1.jpg" alt="">
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
            <div class="gap2 gray-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row merged20" id="page-contents">
                                <div class="col-lg-12">
                                    <div class="search-meta">
                                        <span>Your search result </span>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <aside class="sidebar static left">
                                        <div class="widget">
                                            <h4 class="widget-title">Filter Search</h4>
                                            <form  method="post"   action="" class="c-form search"  id="advance_search_form"  >



                                                <input type="text" name="types" hidden value="{{$types['Matcher']}}"   >

                                             <div>
												<label for="">Enter Cast</label>
												<input type="text" name="cast"  placeholder="Enter Cast" >
											</div>

											<div class="col-sm-12" style="padding:0px">
												<label>Height</label>
                                                <div class="row">
													<div class="col-md-6" style >
														<select name="feet" name="height" id="feet" class="mb-2 form-control">
                                                            <option value="">Feet</option>
                                                            @foreach(array_flip($heights) as $key => $value)
														<option value="{{$value}}">{{$value}}</option>
														@endforeach
                                                        </select>
													</div>
													<div class="col-md-6"  >
														<select name="inch"  class="mb-2 form-control">
                                                            <option value="" >Inches</option>
                                                            @foreach(array_flip($inches) as $key => $value)
														<option value="{{$value}}">{{$value}}</option>
														@endforeach
                                                        </select>
													</div>
												 </div>
											</div>

                                            <div>
												<label>Select Relegion</label>
												<select class="mb-2 form-control" name="religion" >
                                                <option value="">Select Religion </option>
                                                       @foreach(array_flip($religions) as $key => $value)
														<option value="{{$key}}">{{$value}}</option>
														@endforeach<option>Islam</option>

												</select>
											</div>

											<div>
												<label>Select Ethnicity</label>
												<select class="mb-2 form-control" name="ethnicity" >
                                                <option value="">Select Ethnicity</option>
                                                @foreach(array_flip($ethnicities) as $key => $value)
														<option value="{{$key}}">{{$value}}</option>
														@endforeach
												</select>
											</div>

											<div>
												<label>Body Shape</label>
												<select class="mb-2 form-control" name="body_shape">
                                                     <option value="">Select Body Shape</option>
                                                      @foreach(array_flip($body_shapes) as $key => $value)
														<option value="{{$key}}">{{$value}}</option>
														@endforeach
												</select>
											</div>

											<div>
													<label>Do You Drink?</label>
													<div class="form-radio">
														<span class="radio">
															<label>
																<input type="radio" name="drink_status" value="1"  name="radio" ><i class="check-box"></i>Yes
															</label>
														</span>
														<span class="radio">
															<label>
																<input type="radio" name="drink_status" value="0"  name="radio"><i class="check-box"></i>No
															</label>
                                                        </span>
													</div>
											</div>
											<div>
												<label>Do You Smoke?</label>
												<div class="form-radio">
													<div class="radio">
														<label>
															<input type="radio"  name="smoke_status" value="1"><i class="check-box"></i>Yes
														</label>
													</div>
													<div class="radio">
														<label>
															<input type="radio" name="smoke_status" value="0" ><i class="check-box"></i>No
														</label>
													</div>
												</div>
											</div>


											<div>
												<label>Select Mother Language</label>
												<select class="mb-2 form-control" name="mother_lang" >
                                                <option value="">Select Language</option>
												@foreach(array_flip($languages) as $key => $value)
														<option value="{{$key}}">{{$value}}</option>
														@endforeach
												</select>
											</div>
											<div>
												<label>Marital Status?</label>
												<div class="form-radio">
                                                @foreach(array_flip($marital_status) as $key => $value)
                                                <div class="radio">
														<label>
															<input type="radio" value="{{$key}}"  name="marital_status" ><i class="check-box"></i>{{$value}}
														</label>
													</div>
                                                    <option ></option>
                                                    @endforeach




												</div>
											</div>
                                            <button type="submit" class="btn btn-primary next-step " style="width: 100%;">Search</button>
                                            </form>
                                        </div>
                                        <div class="advertisment-box">
                                            <h4 class="">advertisment</h4>
                                            <figure>
                                                <a href="#" title="Advertisment"><img src="{{asset('/')}}public/frontend/images/resources/ad-widget.gif" alt=""></a>
                                            </figure>
                                        </div>
                                        <div class="widget">
                                            <div class="banner medium-opacity purple">
                                                <div class="bg-image" style="background-image: url({{asset('/')}}public/frontend/images/resources/baner-widgetbg.jpg)"></div>
                                                <div class="baner-top">
                                                    <span><img alt="" src="{{asset('/')}}public/frontend/images/book-icon.png"></span>
                                                    <i class="fa fa-ellipsis-h"></i>
                                                </div>
                                                <div class="banermeta">
                                                    <p>
                                                        create your own favourit page.
                                                    </p>
                                                    <span>like them all</span>
                                                    <a data-ripple="" title="" href="#">start now!</a>
                                                </div>
                                            </div>
                                        </div>

                                        <style>

                                            .c-form.search .form-radio .radio {
                                            margin-bottom: 3px;
                                            margin-right: 0;
                                            width: auto;
                                            }
                                            .c-form.search > div {
    margin: 0 0 7px;
}

                                        </style>
                                    </aside>
                                </div><!-- sidebar -->
                                <div class="col-lg-7">
                                    <div class="central-meta advance_search_data">


                                    </div>

                                </div>
                                <div class="col-lg-2">
                                    <aside class="sidebar">
                                        <div class="wiki-box">
                                            <h4>
                                                <img src="{{asset('/')}}public/frontend/images/wiki.png" alt="">
                                                Content from the Wikipedia article <a href="#" title="" target="_blank">Jack Carter</a>
                                            </h4>
                                            <p>
                                                John William Carter is an American businessman and politician who unsuccessfully ran for the United States Senate in Nevada in 2006.
                                                <span>Born:</span> July 3, 1947 (age 72) <span>Education:</span> Emory University, Georgia Institute of Technology, Georgia Southwestern State University
                                                <a class="underline" href="#" target="_blank" title="">Read More</a>
                                            </p>
                                            <div class="helpful">
                                                <span>Was this information helpful?</span>
                                                <ul class="add-remove-frnd">
                                                    <li class="add-tofrndlist">
                                                        <a href="#" title="Add friend"><i class="fa fa-thumbs-up"></i></a>
                                                    </li>
                                                    <li class="remove-frnd">
                                                        <a href="#" title="Send Message"><i class="fa fa-thumbs-down"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="advertisment-box stick-widget">
                                            <h4 class="">advertisment</h4>
                                            <figure><a href="#" title=""><img src="" alt=""></a></figure>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="bottombar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span class="copyright">© Global Puls 2021. All rights reserved.</span>
                        <i><img src="{{asset('/')}}public/frontend/images/credit-cards.png" alt=""></i>
                    </div>
                </div>
            </div>
        </div>
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

    <div class="popup-wraper">
        <div class="popup direct-mesg">
            <span class="popup-closed"><i class="ti-close"></i></span>
            <div class="popup-meta">
                <div class="popup-head">
                    <h5>Send Message</h5>
                </div>
                <div class="send-message">
                    <form method="post" class="c-form">
                        <input type="text" placeholder="Sophia">
                        <textarea placeholder="Write Message"></textarea>
                        <button type="submit" class="main-btn">Send</button>
                    </form>
                    <div class="add-smiles">
                        <div class="uploadimage">
                            <i class="fa fa-image"></i>
                            <label class="fileContainer">
                                <input type="file">
                            </label>
                        </div>
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

                </div>
            </div>
        </div>
    </div><!-- send message popup -->
    <script src="{{asset('/')}}public/frontend/assets/js/main.min.js"></script>
	<script src="{{asset('/')}}public/frontend/assets/js/script.js"></script>



	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>



</body>



<script>
	$(document).ready(function() {
		advanceSearch();
	});


	function advanceSearch() {
		let _reder = $(".advance_search_data");
		 _reder.LoadingOverlay("show");
		$.ajax({
            headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
			type: "Post",
			url: '{{ route("advance.search.data") }}',
			data: $("#advance_search_form").serialize(),
			cache: false,
			success: function(data) {

				_reder.html(data);
			},
			complete: function() {
				 _reder.LoadingOverlay("hide");
			}
		});


	}

	$("#advance_search_form").submit(function(e) {
        e.preventDefault();
		advanceSearch();

	});
</script>

</html>


