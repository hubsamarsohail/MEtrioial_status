@extends('frontend.master')

@section('content')


    {{--	<script src="{{asset('/')}}public/frontend/assets/js/main.min.js"></script>--}}
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    {{--    	<script src="{{asset('/')}}public/frontend/assets/js/script.js"></script>--}}

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

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
                                            <h6 class="create-post">Profile Details</h6>
                                            <div class="slider-for">
                                                <div class="slick-slide-item">
                                                    <img style="width: 100%; height: 250px"  src="{{asset('public/uploads/profile').'/'.$uProfiles[0]->email.'/'.$uProfiles[0]->image_path }}" class="img-fluid" alt="">
                                                </div>
                                                @foreach($uProfiles[0]->Imagesdata as $image)
                                                    <div class="slick-slide-item">
                                                        <img style="width: 100%; height: 250px"   src="{{asset('public/uploads/profile').'/'.$uProfiles[0]->user_profile_id.'/'.$image->image_path }}" class="img-fluid" alt="">
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="slider-nav">
                                                @foreach($uProfiles[0]->Imagesdata as $image)
                                                    <div class="slick-slide-item">
                                                        <img style="width: 100%; height: 100px"   src="{{asset('public/uploads/profile').'/'.$uProfiles[0]->user_profile_id.'/'.$image->image_path }}" class="img-fluid" alt="">
                                                    </div>
                                                @endforeach
                                            </div>
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
                                                    @if(isset($uProfiles[0]))
                                                        @if(!empty($uProfiles[0]->my_favourite))
                                                            <li>
                                                                <div title="Remove To Favourite" onclick="removefavourite({{$uProfiles[0]->user_profile_id}})" style="color: darkred" class="likes heart">❤</div>
                                                            </li>
                                                        @else
                                                            <li>
                                                                <div title="Add To Favourite" onclick="addfavourite({{$uProfiles[0]->user_profile_id}})" class="likes heart">❤</div>
                                                            </li>
                                                        @endif
                                                    @endif

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
                                                    My name is {{$uProfiles[0]->users->first_name}}, I am single and looking for love, I believe in love
                                                    and I would love to get married. I am calm, understanding and loving.
                                                    I work in real estate and live with mom and brother. I love to travel, read,
                                                    watch music, watch movies, swim, clean the house, take care of old people
                                                    and children. I also love to cook for the less previledged.
                                                </p>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gap no-bottom">
                                    <div class="more-about">
                                        <div class="central-meta">
                                        <span class="title2">More About Me
                                            @if($uProfiles[0]->web_user_id == session()->get('user_web_data')['user_info']['web_user_id'] )
                                                <span style="float: right"> <a class="modl-box main-btn user-add " href="#" title="" data-ripple=""><i
                                                            class="glyphicon glyphicon-plus"></i> Add</a></span>
                                                <a class="main-btn" style="float: right; margin-right: 5px" href="{{route('profile.edit',Hashids::encode($uProfiles[0]->user_profile_id))}}" title="" data-ripple="">Edit Profile</a>
                                            @endif
                                        </span>


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




            <div class="popup-wraper6">
                <div class="popup" style="width: 781px">
                    <span class="popup-closed">
                        <i class="ti-close"></i>
                    </span>
                    <div class="popup-meta">
                        <div class="popup-head">
                            <h5> Upload Images</h5>
                        </div>
                        <style>
                            .input-group-btn:last-child > .btn, .input-group-btn:last-child > .btn-group {
                                z-index: 2;
                                margin-left: -95px;
                            }
                        </style>
                        <form method="post"
                              action="{{route('user.data',Hashids::encode($uProfiles[0]->users->web_user_id))}}"
                              enctype="multipart/form-data" class="c-form">
                            @csrf
                            <div class="setting-meta">
                                <div class="change-photo">
                                    <input type="hidden" name="user_profile_id" value="{{$uProfiles[0]->user_profile_id}}" hidden/>
                                    <div class="edit-img">
                                        <div
                                            class="input-group control-group increment">
                                            <input type="file" style="height:0.5% ; margin-top:10%" name="attachments[]"
                                                   class="form-control" required>
                                            <div class="input-group-btn" style="float: revert;">
                                                <button class="btn btn-success"
                                                        type="button" style="width: 100px; float: right;"><i
                                                        class="glyphicon glyphicon-plus"></i>Add
                                                </button>
                                            </div>
                                        </div>

                                        <div class="clone hide">
                                            <div class="control-group input-group"
                                                 style="margin-top:10px">
                                                <input type="file" style="height:0.5%;" name="attachments[]"
                                                       class="form-control">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-danger"
                                                            type="button"><i
                                                            class="glyphicon glyphicon-remove"
                                                            style="float: right;"></i>
                                                        Remove
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <br><br>
                            <input type="submit" style="float: right"
                                   class="btn btn-primary" value="submit">
                        </form>

                        <script type="text/javascript">
                            $(document).ready(function () {
                                $(".btn-success").click(function () {
                                    var html = $(".clone").html();
                                    $(".increment").after(html);
                                });
                                $("body").on("click", ".btn-danger", function () {
                                    $(this).parents(".control-group").remove();
                                });
                            });
                        </script>
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



    <script>
        function addfavourite(id) {
            var user_profile_id = id;
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "Post",
                url: '{{ route("user.favourite") }}',
                data: {
                    user_profile_id: user_profile_id,
                },
                cache: false,
                success: function(data) {
                },
                complete: function() {
                    location.reload();
                }
            });
        }

        function removefavourite(id) {
            var user_profile_id = id ;
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "Post",
                url: '{{ route("user.rfavourite") }}',
                data: {
                    user_profile_id: user_profile_id,
                },
                cache: false,
                success: function(data) {
                },
                complete: function() {

                    location.reload();
                }
            });
        }
    </script>


@endsection
