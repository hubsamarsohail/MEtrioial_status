@extends('frontend.master')

@section('content')

<script src="{{asset('/')}}public/frontend/assets/js/main.min.js"></script>

<!DOCTYPE html>
<html lang="en">
<body>
<div class="theme-layout  gray-bg">

    <div class="responsive-header">
        <div class="mh-head first Sticky">
			<span class="mh-btns-left">
				<a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
			</span>
            <span class="mh-text">
				<a href="newsfeed.html" title=""><img src="images/logo2.png" alt=""></a>
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

    </div><!-- responsive header -->

    <section>
        <div class="gap2 no-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="prod-detail">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="central-meta">
                                        <h6 class="create-post">Profile Detail</h6>
                                        <div class="slider-for slick-initialized slick-slider">
                                            <div aria-live="polite" class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 4482px;" role="listbox"><div class="slick-slide-item slick-slide" data-slick-index="0" aria-hidden="true" style="width: 498px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;" tabindex="-1" role="option" aria-describedby="slick-slide50">
                                                        <img src={{asset('public/uploads/profile').'/'.$uProfiles[0]->email.'/'.$uProfiles[0]->image_path }} class="img-fluid" alt="">
                                                    </div><div class="slick-slide-item slick-slide" data-slick-index="1" aria-hidden="true" style="width: 498px; position: relative; left: -498px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;" tabindex="-1" role="option" aria-describedby="slick-slide51">
                                                        <img src={{asset('public/uploads/profile').'/'.$uProfiles[0]->email.'/'.$uProfiles[0]->image_path }} class="img-fluid" alt="">
                                                    </div><div class="slick-slide-item slick-slide" data-slick-index="2" aria-hidden="true" style="width: 498px; position: relative; left: -996px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;" tabindex="-1" role="option" aria-describedby="slick-slide52">
                                                        <img src="{{asset('public/uploads/profile').'/'.$uProfiles[0]->email.'/'.$uProfiles[0]->image_path }}" class="img-fluid" alt="">
                                                    </div><div class="slick-slide-item slick-slide" data-slick-index="3" aria-hidden="true" style="width: 498px; position: relative; left: -1494px; top: 0px; z-index: 998; opacity: 0;" tabindex="-1" role="option" aria-describedby="slick-slide53">
                                                        <img src="{{asset('public/uploads/profile').'/'.$uProfiles[0]->email.'/'.$uProfiles[0]->image_path }}" class="img-fluid" alt="">
                                                    </div><div class="slick-slide-item slick-slide" data-slick-index="4" aria-hidden="true" style="width: 498px; position: relative; left: -1992px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;" tabindex="-1" role="option" aria-describedby="slick-slide54">
                                                        <img src="{{asset('public/uploads/profile').'/'.$uProfiles[0]->email.'/'.$uProfiles[0]->image_path }}" class="img-fluid" alt="">
                                                    </div><div class="slick-slide-item slick-slide slick-current slick-active" data-slick-index="5" aria-hidden="false" style="width: 498px; position: relative; left: -2490px; top: 0px; z-index: 999; opacity: 1;" tabindex="-1" role="option" aria-describedby="slick-slide55">
                                                        <img src="{{asset('public/uploads/profile').'/'.$uProfiles[0]->email.'/'.$uProfiles[0]->image_path }}" class="img-fluid" alt="">
                                                    </div><div class="slick-slide-item slick-slide" data-slick-index="6" aria-hidden="true" style="width: 498px; position: relative; left: -2988px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;" tabindex="-1" role="option" aria-describedby="slick-slide56">
                                                        <img src="{{asset('public/uploads/profile').'/'.$uProfiles[0]->email.'/'.$uProfiles[0]->image_path }}" class="img-fluid" alt="">
                                                    </div><div class="slick-slide-item slick-slide" data-slick-index="7" aria-hidden="true" style="width: 498px; position: relative; left: -3486px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;" tabindex="-1" role="option" aria-describedby="slick-slide57">
                                                        <img src="images/resources/slick8.jpg" class="img-fluid" alt="">
                                                    </div><div class="slick-slide-item slick-slide" data-slick-index="8" aria-hidden="true" style="width: 498px; position: relative; left: -3984px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;" tabindex="-1" role="option" aria-describedby="slick-slide58">
                                                        <img src="images/resources/slick9.jpg" class="img-fluid" alt="">
                                                    </div></div></div>
                                        </div>
                                        <div class="slider-nav slick-initialized slick-slider"><button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="display: block;">Previous</button>
                                            <div aria-live="polite" class="slick-list draggable" style="padding: 0px 50px;"><div class="slick-track" style="opacity: 1; width: 1900px; transform: translate3d(-800px, 0px, 0px);" role="listbox"><div class="slick-slide-item slick-slide slick-cloned" data-slick-index="-5" aria-hidden="true" style="width: 100px;" tabindex="-1">
                                                        <img src={{asset('public/uploads/profile').'/'.$uProfiles[0]->email.'/'.$uProfiles[0]->image_path }} class="img-fluid" alt="">
                                                    </div><div class="slick-slide-item slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" style="width: 100px;" tabindex="-1">
                                                        <img src={{asset('public/uploads/profile').'/'.$uProfiles[0]->email.'/'.$uProfiles[0]->image_path }} class="img-fluid" alt="">
                                                    </div><div class="slick-slide-item slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" style="width: 100px;" tabindex="-1">
                                                        <img src={{asset('public/uploads/profile').'/'.$uProfiles[0]->email.'/'.$uProfiles[0]->image_path }}class="img-fluid" alt="">
                                                    </div><div class="slick-slide-item slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" style="width: 100px;" tabindex="-1">
                                                        <img src={{asset('public/uploads/profile').'/'.$uProfiles[0]->email.'/'.$uProfiles[0]->image_path }} class="img-fluid" alt="">
                                                    </div><div class="slick-slide-item slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 100px;" tabindex="-1">
                                                        <img src={{asset('public/uploads/profile').'/'.$uProfiles[0]->email.'/'.$uProfiles[0]->image_path }}class="img-fluid" alt="">
                                                    </div><div class="slick-slide-item slick-slide" data-slick-index="0" aria-hidden="true" style="width: 100px;" tabindex="-1" role="option" aria-describedby="slick-slide60">
                                                        <img src="images/resources/slick1.jpg" class="img-fluid" alt="">
                                                    </div><div class="slick-slide-item slick-slide" data-slick-index="1" aria-hidden="true" style="width: 100px;" tabindex="-1" role="option" aria-describedby="slick-slide61">
                                                        <img src="images/resources/slick2.jpg" class="img-fluid" alt="">
                                                    </div><div class="slick-slide-item slick-slide" data-slick-index="2" aria-hidden="true" style="width: 100px;" tabindex="-1" role="option" aria-describedby="slick-slide62">
                                                        <img src="images/resources/slick3.jpg" class="img-fluid" alt="">
                                                    </div><div class="slick-slide-item slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 100px;" tabindex="-1" role="option" aria-describedby="slick-slide63">
                                                        <img src="images/resources/slick4.jpg" class="img-fluid" alt="">
                                                    </div><div class="slick-slide-item slick-slide slick-active" data-slick-index="4" aria-hidden="false" style="width: 100px;" tabindex="-1" role="option" aria-describedby="slick-slide64">
                                                        <img src="images/resources/slick5.jpg" class="img-fluid" alt="">
                                                    </div><div class="slick-slide-item slick-slide slick-current slick-active slick-center" data-slick-index="5" aria-hidden="false" style="width: 100px;" tabindex="-1" role="option" aria-describedby="slick-slide65">
                                                        <img src="images/resources/slick6.jpg" class="img-fluid" alt="">
                                                    </div><div class="slick-slide-item slick-slide slick-active" data-slick-index="6" aria-hidden="false" style="width: 100px;" tabindex="-1" role="option" aria-describedby="slick-slide66">
                                                        <img src="images/resources/slick7.jpg" class="img-fluid" alt="">
                                                    </div><div class="slick-slide-item slick-slide slick-active" data-slick-index="7" aria-hidden="false" style="width: 100px;" tabindex="-1" role="option" aria-describedby="slick-slide67">
                                                        <img src="images/resources/slick8.jpg" class="img-fluid" alt="">
                                                    </div><div class="slick-slide-item slick-slide" data-slick-index="8" aria-hidden="true" style="width: 100px;" tabindex="-1" role="option" aria-describedby="slick-slide68">
                                                        <img src="images/resources/slick9.jpg" class="img-fluid" alt="">
                                                    </div><div class="slick-slide-item slick-slide slick-cloned" data-slick-index="9" aria-hidden="true" style="width: 100px;" tabindex="-1">
                                                        <img src="images/resources/slick1.jpg" class="img-fluid" alt="">
                                                    </div><div class="slick-slide-item slick-slide slick-cloned" data-slick-index="10" aria-hidden="true" style="width: 100px;" tabindex="-1">
                                                        <img src="images/resources/slick2.jpg" class="img-fluid" alt="">
                                                    </div><div class="slick-slide-item slick-slide slick-cloned" data-slick-index="11" aria-hidden="true" style="width: 100px;" tabindex="-1">
                                                        <img src="images/resources/slick3.jpg" class="img-fluid" alt="">
                                                    </div><div class="slick-slide-item slick-slide slick-cloned" data-slick-index="12" aria-hidden="true" style="width: 100px;" tabindex="-1">
                                                        <img src="images/resources/slick4.jpg" class="img-fluid" alt="">
                                                    </div><div class="slick-slide-item slick-slide slick-cloned" data-slick-index="13" aria-hidden="true" style="width: 100px;" tabindex="-1">
                                                        <img src="images/resources/slick5.jpg" class="img-fluid" alt="">
                                                    </div></div></div>








                                            <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;">Next</button></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="full-postmeta">
                                        <div class="left-detail-meta">
                                            <span>@if($uProfiles[0]->users->gender == 'M') Male @else Female @endif / Single / ID: 00000{{$uProfiles[0]->user_profile_id }}</span>
                                            <h4><i class="fa fa-check-circle-o"></i> {{$uProfiles[0]->users->first_name}}</h4>
                                            <span><i class="fa fa-map-marker"></i>{{$uProfiles[0]->nationality}} </span>
                                            <ins>Seeking Male {{$uProfiles[0]->age}} For: Marriage</ins>
                                        </div>
                                        <div class="right-detailmeta">
                                            <span class="online"><i class="fa fa-circle"></i> Online</span>
                                            <ul>
                                                <li>
                                                    <div title="Like/Dislike" class="likes heart">❤</div>
                                                </li>
                                                <li class="send-mesg" data-ripple=""><i class="fa fa-commenting-o"></i></li>
                                            </ul>
                                        </div>
                                        <ul class="media-info">
                                            <li><i class="fa fa-camera"></i> 5 Pictures</li>
                                            <li><i class="fa fa-video-camera"></i> 1 Video</li>
                                        </ul>
                                        <div class="member-des">
                                            <h5>Member Overview</h5>
                                            <p>
                                                My name is Maria Rodriguez, I am single and looking for love, I believe in love
                                                and I would love to get married. I am calm, understanding and loving.
                                                I work in real estate and live with mom and brother. I love to travel, read,
                                                watch music, watch movies, swim, clean the house, take care of old people
                                                and children. I also love to cook for the less previledged.
                                            </p>
                                            <div class="bottom-meta">
                                                <a href="https://www.youtube.com/watch?v=qgQJb8rfIZc" title="" data-strip-group="mygroup" class="strip main-btn2" data-strip-options="width: 700,height: 450,youtube: { autoplay: 1 }" data-ripple=""> Play Video</a>
                                                <a class="main-btn" href="#" title="" data-ripple="">Add Friend</a>
                                                <div class="share">
                                                    <span>share</span>
                                                    <a href="#" title=""><i class="fa fa-facebook-square"></i></a>
                                                    <a href="#" title=""><i class="fa fa-twitter-square"></i></a>
                                                    <a href="#" title=""><i class="fa fa-google-plus-square"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gap no-bottom">
                                <div class="more-about">
                                    <div class="central-meta">
                                        <span class="title2">More About Me</span>
                                        <table class="overview table table-striped table-responsive">
                                            <thead>
                                            <tr>
                                                <th>Description</th>
                                                <th>I am</th>
                                                <th>Looking for</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <tr>
                                                <td>Gender:</td>
                                                @if($uProfiles[0]->users->gender == 'M')
                                                <td>Male</td>
                                                @else
                                                <td>Female</td>
                                                @endif

                                                @if($uProfiles[0]->users->gender == 'M')
                                                <td>Female</td>
                                                @else
                                                <td>Male</td>
                                                @endif

                                            </tr>
                                            <tr>
                                                <td>Age:</td>
                                                <td>{{$uProfiles[0]->age}}</td>
                                                <td>26-34</td>
                                            </tr>
                                            <tr>
                                                <td>Lives In:</td>
                                                <td>{{$uProfiles[0]->Country->name}}</td>
                                                <td>Any</td>
                                            </tr>

                                            <tr>
                                                <td>Nationality:</td>
                                                <td>{{$uProfiles[0]->nationality}}</td>
                                                <td>Any</td>
                                            </tr>

                                            <tr>
                                                <td>Hair color:</td>
                                                <td>{{$uProfiles[0]->hair_color}}</td>
                                                <td>Any</td>
                                            </tr>

                                            <tr>
                                                <td>Height:</td>
                                                <td>{{$uProfiles[0]->height}}(cm)</td>
                                                <td>Any</td>
                                            </tr>
                                            <tr>
                                                <td>Religion:</td>
                                                <td>
                                                    <select disabled style="border: none !important; background-color: #f2f2f2;  "  >

                                                        @foreach(array_flip($religions) as $key => $value)
                                                        <option style="border: none"  @php if( $key == $uProfiles[0]->religion ){ echo "selected"; } @endphp>{{$value}}</option>
                                                        @endforeach
                                                    </select>
                                                </td>

                                                <td>Any</td>
                                            </tr>
                                            <tr>
                                                <td>Cast:</td>
                                                <td>{{$uProfiles[0]->cast}}</td>
                                                <td>Any</td>
                                            </tr>
                                            <tr>
                                                <td>Mother Language:</td>
                                                <td>
                                                    <select disabled style="border: none !important; background-color: #f2f2f2;  "  >

                                                        @foreach(array_flip($languages) as $key => $value)
                                                        <option style="border: none"  @php if( $key == $uProfiles[0]->mother_lang ){ echo "selected"; } @endphp>{{$value}}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>Any</td>
                                            </tr>
                                            <tr>
                                                <td>Hair Color:</td>
                                                <td>{{$uProfiles[0]->hair_color}}</td>
                                                <td>Any</td>
                                            </tr>
                                            <tr>
                                                <td>Complexion:</td>
                                                <td>
                                                    <select disabled style="border: none !important; background-color: #f2f2f2;  "  >

                                                        @foreach(array_flip($complexions) as $key => $value)
                                                        <option style="border: none"  @php if( $key == $uProfiles[0]->complexion ){ echo "selected"; } @endphp>{{$value}}</option>
                                                        @endforeach
                                                    </select>
                                                </td>

                                                <td>Any</td>
                                            </tr>
                                            <tr>
                                                <td>Body Shape:</td>
                                                <td>
                                                    <select disabled style="border: none !important; background-color: #fff;  "  >

                                                        @foreach(array_flip($body_shapes) as $key => $value)
                                                        <option style="border: none"  @php if( $key == $uProfiles[0]->body_shape ){ echo "selected"; } @endphp>{{$value}}</option>
                                                        @endforeach
                                                    </select>
                                                </td>

                                                <td>Any</td>
                                            </tr>
                                            <tr>
                                                <td>Eye color:</td>
                                                <td>
                                                    <select disabled style="border: none !important; background-color: #fff;  "  >

                                                        @foreach(array_flip($eyescolors) as $key => $value)
                                                        <option style="border: none"  @php if( $key == $uProfiles[0]->eye_color ){ echo "selected"; } @endphp>{{$value}}</option>
                                                        @endforeach
                                                    </select>
                                                </td>

                                                <td>Any</td>
                                            </tr>
                                            <tr>
                                                <td>Ethnicity:</td>
                                                <td>
                                                    <select disabled style="border: none !important; background-color: #f2f2f2;  "  >

                                                        @foreach(array_flip($ethnicities) as $key => $value)
                                                        <option style="border: none"  @php if( $key == $uProfiles[0]->ethnicity ){ echo "selected"; } @endphp>{{$value}}</option>
                                                        @endforeach
                                                    </select>
                                                </td>

                                                <td>Any</td>
                                            </tr>

                                            <tr>
                                                <td>Skin Color:</td>
                                                <td>
                                                    <select disabled style="border: none !important; background-color: #f2f2f2;  "  >

                                                        @foreach(array_flip($skincolors) as $key => $value)
                                                        <option style="border: none"  @php if( $key == $uProfiles[0]->skin_color ){ echo "selected"; } @endphp>{{$value}}</option>
                                                        @endforeach
                                                    </select>
                                                </td>

                                                <td>Any</td>
                                            </tr>

                                            <tr>
                                                <td>Smoke Status:</td>
                                                @if($uProfiles[0]->smoke_status == '1')
                                                <td>Yes</td>
                                                @else
                                                <td>No</td>
                                                @endif
                                                @if($uProfiles[0]->partner_smoke == '1')
                                                <td>Yes</td>
                                                @else
                                                <td>No</td>
                                                @endif
                                            </tr>

                                            <tr>
                                                <td>Drink Status:</td>
                                                @if($uProfiles[0]->drink_status == '1')
                                                <td>Yes</td>
                                                @else
                                                <td>No</td>
                                                @endif
                                                @if($uProfiles[0]->partner_alcohol == '1')
                                                <td>Yes</td>
                                                @else
                                                <td>No</td>
                                                @endif
                                            </tr>
                                            <tr>
                                                <td>Pet Status:</td>
                                                @if($uProfiles[0]->pet_status == '1')
                                                <td>Yes</td>
                                                @else
                                                <td>No</td>
                                                @endif
                                                <td>Any</td>
                                            </tr>

                                            <tr>
                                                <td>Profession:</td>
                                                <td>{{$uProfiles[0]->profession}}</td>
                                                <td>Any</td>
                                            </tr>

                                            <tr>
                                                <td>Marital Status:</td>
                                                <td>
                                                    <select disabled style="border: none !important; "  >

                                                        @foreach(array_flip($marital_status) as $key => $value)
                                                        <option style="border: none"  @php if( $key == $uProfiles[0]->marital_status ){ echo "selected"; } @endphp>{{$value}}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td>Any</td>
                                            </tr>

                                            <tr>
                                                <td>Have children:</td>
                                                <td>{{$uProfiles[0]->marital_status}}</td>
                                                <td>Any</td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- picture area -->

    <style>
        .chosen-container-single .chosen-single {
            /*background-color: #dee2e6;*/
            /*border: 1px solid #e4e4e4;*/
            border: none;
        }
    </style>

</div>
<script src="http://wpkixx.com/html/pitnik/js/main.min.js"></script>
<script src="http://wpkixx.com/html/pitnik/js/script.js"></script>
</body>
</html>


@endsection
