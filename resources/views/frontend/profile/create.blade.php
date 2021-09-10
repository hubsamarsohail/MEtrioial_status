@extends('frontend.master')

@section('content')

{{--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>--}}

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    </script>


    <style>
        .wizard {
            margin: 20px auto;
            background: #fff;
        }

        .invalid {
            border-color: red;
        }

        .wizard .nav-tabs {
            position: relative;
            margin: 40px auto;
            margin-bottom: 0;
            border-bottom-color: #e0e0e0;
        }

        .wizard > div.wizard-inner {
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

        .wizard .nav-tabs > li.active > a,
        .wizard .nav-tabs > li.active > a:hover,
        .wizard .nav-tabs > li.active > a:focus {
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

        .wizard .nav-tabs > li {
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

        .wizard .nav-tabs > li a {
            width: 70px;
            height: 70px;
            margin: 0px auto;
            border-radius: 100%;
            padding: 0;
        }

        .wizard .nav-tabs > li a:hover {
            background: transparent;
        }

        .wizard .tab-pane {
            position: relative;
            padding-top: 50px;
        }

        .wizard h3 {
            margin-top: 0;
        }

        @media (max-width: 585px) {

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

            .wizard .nav-tabs > li a {
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

        .meu:hover {
            color: #0b0b0b;
        }

        .meu:active {
            color: #0d6efd;
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

        .bg-opacity {
            position: relative;
            background-color: #000;
        }

        .bg-opacity::before {
            content: ' ';
            display: block;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            opacity: 0.8;
            background: url("public/images/head.png") no-repeat center center;
            background-size: cover;
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

        .form-control {
            background: #edf2f6 none repeat scroll 0 0;
        }

        .switch {
            position: relative;
            display: inline-block;
            vertical-align: top;
            width: 56px;
            height: 20px;
            padding: 3px;
            background-color: white;
            border-radius: 18px;
            cursor: pointer;

        }

        .switch-input {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
        }

        .switch-label {
            position: relative;
            display: block;
            height: inherit;
            font-size: 10px;
            text-transform: uppercase;
            background: #eceeef;
            border-radius: inherit;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.12), inset 0 0 2px rgba(0, 0, 0, 0.15);
            -webkit-transition: 0.15s ease-out;
            -moz-transition: 0.15s ease-out;
            -o-transition: 0.15s ease-out;
            transition: 0.15s ease-out;
            -webkit-transition-property: opacity background;
            -moz-transition-property: opacity background;
            -o-transition-property: opacity background;
            transition-property: opacity background;
        }

        .switch-label:before, .switch-label:after {
            position: absolute;
            top: 50%;
            margin-top: -.5em;
            line-height: 1;
            -webkit-transition: inherit;
            -moz-transition: inherit;
            -o-transition: inherit;
            transition: inherit;
        }

        .switch-label:before {
            content: attr(data-off);
            right: 11px;
            color: #aaa;
            text-shadow: 0 1px rgba(255, 255, 255, 0.5);
        }

        .switch-label:after {
            content: attr(data-on);
            left: 11px;
            color: white;
            text-shadow: 0 1px rgba(0, 0, 0, 0.2);
            opacity: 0;
        }

        .switch-input:checked ~ .switch-label {
            background: #47a8d8;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.15), inset 0 0 3px rgba(0, 0, 0, 0.2);
        }

        .switch-input:checked ~ .switch-label:before {
            opacity: 0;
        }

        .switch-input:checked ~ .switch-label:after {
            opacity: 1;
        }

        .switch-handle {
            position: absolute;
            top: 4px;
            left: 4px;
            width: 18px;
            height: 22px;
            background: white;
            border-radius: 10px;
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);
            background-image: -webkit-linear-gradient(top, white 40%, #f0f0f0);
            background-image: -moz-linear-gradient(top, white 40%, #f0f0f0);
            background-image: -o-linear-gradient(top, white 40%, #f0f0f0);
            background-image: linear-gradient(to bottom, white 40%, #f0f0f0);
            -webkit-transition: left 0.15s ease-out;
            -moz-transition: left 0.15s ease-out;
            -o-transition: left 0.15s ease-out;
            transition: left 0.15s ease-out;
        }

        .switch-handle:before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -6px 0 0 -6px;
            width: 12px;
            height: 12px;
            background: #f9f9f9;
            border-radius: 6px;
            box-shadow: inset 0 1px rgba(0, 0, 0, 0.02);
            background-image: -webkit-linear-gradient(top, #eeeeee, white);
            background-image: -moz-linear-gradient(top, #eeeeee, white);
            background-image: -o-linear-gradient(top, #eeeeee, white);
            background-image: linear-gradient(to bottom, #eeeeee, white);
        }

        .switch-input:checked ~ .switch-handle {
            left: 60px;
            box-shadow: -1px 1px 5px rgba(0, 0, 0, 0.2);
        }

        .switch-green > .switch-input:checked ~ .switch-label {
            background: #4fb845;
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

        .invalid {
            border-color: red;
        }

        #home {
            width: 100% !important;
        }

        .in {
            background: white;
        }


    </style>
    <script>
        $(document).ready(function () {

            $('.Agent_form').hide();
            $('.parent_form').hide();
            $('.matcher_manu').click(function () {
                $('.Agent_form').hide();
                $('.matcher_form').show();
                $('.parent_form').hide();

            })
            $('.agent_menu').click(function () {
                $('.Agent_form').show();
                $('.matcher_form').hide();
                $('.parent_form').hide();
            })
            $('.parent_menu').click(function () {
                $('.parent_form').show();
                $('.matcher_form').hide();
                $('.Agent_form').hide();
            })

        });

    </script>

    <div class="theme-layout">

        <section>
            <div class="page-header bg-opacity" style="background: url('public/images/head.png'); height: 244px ; ">
                <div class="header-inner">
                    <h2><b style="color: #fff">Create Profile</b></h2>
                    <p style="color: #000000">
                    </p>
                </div>
            </div>
        </section><!-- sub header -->
        <div class="matcher_form">
            <form method="POST" action="{{route('uProfileCreate')}}" id="add_profile_form"
                  enctype="multipart/form-data">
                @csrf
                <section id="mm">
                    <div class="gap gray-bg">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="offsettabpanel-lg-1 col-lg-12">
                                    <div class="row border-center">

                                        <div class="col-lg-6 col-md-6">
                                            <div class="already-log">
                                                <h4>
                                                    Hi, {{session()->get('user_web_data')['user_info']['username']}}</h4>
                                                <p style="font-weight: 500">Next Time you login click your picture. To
                                                    remove an account from this page click cross.</p>
                                                <div class="log-user">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                                            <div class="user-log">
                                                                <!--													<i class="ti-close" title="Remove Account"></i>-->
                                                                <a href="#" title=""><img
                                                                        style="height: 100px; width: 90px; margin-bottom: 10px"
                                                                        id="img_src"
                                                                        src="public/frontend/images/resources/author.jpg"
                                                                        alt="">
                                                                </a>
                                                                <label class="fileContainer">
                                                                    <i class="fa fa-camera"> Upload image</i>
                                                                    <input type="file" id="file"
                                                                           onchange="return readURL(this);"
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
                    </div>
                </section>
                <section style="background-image: url('public/images/profile.png'); background-size: cover;">
                    <div class="container">
                        <ul class="nav nav-tabs tbf" style="border-bottom:1px solid #ddd">
                            <li class="active"><a class="meu matcher_manu" data-toggle="tab" href="#home"><strong>Match
                                        Macker</strong></a></li>
                            <li><a class="meu agent_menu" data-toggle="tab" href="#menu1"><strong>Agent</strong></a>
                            </li>
                            <li><a class="meu parent_menu" data-toggle="tab" href="#menu2"><strong>Parent</strong></a>
                            </li>
                            <li><a class="meu" data-toggle="tab" href="#menu3"><strong>Customer</strong></a></li>
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

                                            <li class="nav-item">
                                                <a class="nav-link" id="permission-tabs" href="#permission" role="tab"
                                                   aria-controls="permission" aria-selected="true"
                                                   data-original-title="" title="">
                                            <span class="round-tab">
												<i class="glyphicon glyphicon-pencil"></i>
											</span>
                                                </a>
                                                <p class="wizrd"><b> Professional Details </b></p>
                                            </li>


                                            <li role="presentation" class="disabled">
                                                <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"
                                                   title="Step 3">
											<span class="round-tab">
												<i class="glyphicon glyphicon-picture"></i>
											</span>
                                                </a>
                                                <p class="wizrd"><b> Education Details </b></p>
                                            </li>

                                            <li role="presentation" class="disabled">
                                                <a href="#complete" data-toggle="tab" aria-controls="complete"
                                                   role="tab" title="Complete">
											<span class="round-tab">
												<i class="glyphicon glyphicon-ok"></i>
											</span>
                                                </a>
                                                <p class="wizrd"><b> looking for </b></p>
                                            </li>
                                        </ul>
                                    </div>


                                    <div class="tab-content">
                                        <div class="tab-pane active" role="tabpanel" id="step1">

                                            <div class="container-fluid" style="padding-right: 30px; padding-left: 30px;">


                                                <div style="float: right;margin: -15px;margin-right: 3%;">
                                                    <label class="switch switch-green">
                                                        <input type="checkbox" class="switch-input" name="is_active"
                                                               value="1" id="customSwitch1" checked>
                                                        <span class="switch-label" style="height: 24px; width: 75px;"
                                                              data-on="Active" data-off="Inactive"></span>
                                                        <span class="switch-handle"></span>
                                                    </label>
                                                </div>


                                                <div class="row">

                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input type="text" class="pf swicth" name="first_name" readonly
                                                               value="{{session()->get('user_web_data')['user_info']['username']}}"
                                                               placeholder="Enter First Name">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input type="text" class="form-control swicth required"
                                                               id="sur_name"
                                                               value="{{isset($agentProfile[0]) ? $agentProfile[0]->sur_name : ''}}"
                                                               name="sur_name" placeholder="Enter Middle Name">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input type="text" class="pf swicth" name="middle_name"
                                                               value="{{session()->get('user_web_data')['user_info']['lastname']}}"
                                                               placeholder="Enter Sur Name">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input type="text" class="pf swicth" readonly
                                                               value="{{session()->get('user_web_data')['user_info']['user_web_email']}}"
                                                               name="email" placeholder="Enter Email">
                                                    </div>

                                                </div>
                                                <br>

                                                <div class="row">


                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input type="text" class="pf required swicth" name="cast"
                                                               value="{{isset($agentProfile[0]) ? $agentProfile[0]->cast : ''}}"
                                                               placeholder="Enter Cast">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input class="mb-2 pf pfh required swicth" type="date"
                                                               value="{{isset($agentProfile[0]) ? $agentProfile[0]->dob : ''}}"
                                                               id="birthday" name="dob">
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input type="number" class="required form-control swicth"
                                                               pattern="[0-9]*"
                                                               value="{{isset($agentProfile[0]) ? $agentProfile[0]->age : ''}}"
                                                               name="age" placeholder="Enter Age">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>

                                                        <select class="form-control required swicth" name="religion">
                                                            <option disabled selected>Religion</option>
                                                            @foreach(array_flip($religions) as $key => $value)

                                                                <option
                                                                    value="{{$key}}" @php if( isset($agentProfile[0]) ? $agentProfile[0]->religion == $key : '' ){ echo "selected"; } @endphp>{{$value}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                </div>

                                                <br>

                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input type="text" class="pf required swicth" name="nationality"
                                                               value="{{isset($agentProfile[0]) ? $agentProfile[0]->nationality : ''}}"
                                                               placeholder="Enter Nationality">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>

                                                        <select class="form-control required swicth" id="country_id"
                                                                name="country_id">
                                                            <option selected disabled>Country Name</option>
                                                            @foreach($countries as $country)
                                                                <option
                                                                    value="{{$country->country_id}}" @php if( isset($agentProfile[0]) ? $agentProfile[0]->country_id == $country->country_id : '' ){ echo "selected"; } @endphp>{{$country->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>


                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <select class="form-control required swicth" id="city_id"
                                                                name="city_id">
                                                            <option selected disabled>City Name</option>
                                                            @foreach($cities as $city)
                                                                <option
                                                                    value="{{$city->city_id}}" @php if( isset($agentProfile[0]) ? $agentProfile[0]->city_id == $city->city_id : '' ){ echo "selected"; } @endphp>{{$city->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <!-- <input type="text" class="pf" placeholder="Enter Workplace City"> -->
                                                        <select class="form-control required swicth" id="work_city"
                                                                name="work_city">
                                                            <option selected disabled>Workplace City</option>
                                                            @foreach($cities as $city)
                                                                <option
                                                                    value="{{$city->city_id}}" @php if( isset($agentProfile[0]) ? $agentProfile[0]->work_city == $city->city_id : '' ){ echo "selected"; } @endphp>{{$city->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <br>

                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input class="mb-2 pf pfh required swicth" type="number"
                                                               value="{{isset($agentProfile[0]) ? $agentProfile[0]->mobile : ''}}"
                                                               placeholder="Enter Mobile Number" name="mobile"
                                                               id="numb">
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <!-- <input type="text" class="pf" name="residential_city" placeholder="Enter Residential"> -->
                                                        <select class="form-control required swicth"
                                                                id="residential_city" name="residential_city">
                                                            <option selected disabled>Residentail City</option>
                                                            @foreach($cities as $city)
                                                                <option
                                                                    value="{{$city->city_id}}" @php if( isset($agentProfile[0]) ? $agentProfile[0]->residential_city == $city->city_id : '' ){ echo "selected"; } @endphp>{{$city->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input type="text" class="pf required swicth"
                                                               value="{{old('hair_color')}}" name="hair_color"
                                                               placeholder="Enter Hair Color">
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label>Select Eye Color </label><span
                                                            style="float: right; color: red;">*</span>
                                                        <select class="form-control required swicth" name="eye_color"
                                                                class="form-control">
                                                            <option selected disabled>Select Eye Color</option>
                                                            @foreach(array_flip($eyescolors) as $key => $value)
                                                                <option value="{{$key}}"> {{$value}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                </div>
                                                <br>
                                                <div class="row">

                                                    <div class="col-md-3">
                                                        <label>Complexion</label><span
                                                            style="float: right; color: red;">*</span>

                                                        <select class="form-control required swicth" name="complexion">
                                                            <option selected disabled>Select Complexion</option>
                                                            @foreach(array_flip($complexions) as $key => $value)
                                                                <option value="{{$key}}">{{$value}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label>Body Shape</label><span
                                                            style="float: right; color: red;">*</span>
                                                        <select class="form-control required swicth" name="body_shape"
                                                                class="form-control">
                                                            <option selected disabled>Select Body Shape</option>
                                                            @foreach(array_flip($body_shapes) as $key => $value)
                                                                <option value="{{$key}}">{{$value}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="col-md-3">

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Height</label><span
                                                                    style="float: right; color: red;">*</span>
                                                                <select class="form-control required swicth"
                                                                        name="height" class="form-control">
                                                                    <option selected disabled>feet</option>
                                                                    @foreach(array_flip($heights) as $key => $value)
                                                                        <option value="{{$value}}">{{$value}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label style="float: right;color: red;" for="">*</label>
                                                                <select class="form-control required swicth" name="inch"
                                                                        class="form-control">
                                                                    <option disabled selected>Inches</option>
                                                                    @foreach(array_flip($inches) as $key => $value)
                                                                        <option value="{{$value}}">{{$value}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-3">
                                                        <label>Select Ethnicity</label><span
                                                            style="float: right; color: red;">*</span>
                                                        <select class="form-control required swicth" name="ethnicity"
                                                                class="form-control">
                                                            <option selected disabled>Select Ethnicity</option>
                                                            @foreach(array_flip($ethnicities) as $key => $value)
                                                                <option
                                                                    value="{{$key}}" @php if( isset($agentProfile[0]) ? $agentProfile[0]->ethnicity == $key : '' ){ echo "selected"; } @endphp>{{$value}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                </div>

                                                <br>

                                                <div class="row">

                                                    <div class="col-md-3">
                                                        <label>Select Skin Color</label><span
                                                            style="float: right; color: red;">*</span>
                                                        <select class="form-control required swicth" name="skin_color"
                                                                class="form-control">
                                                            <option selected disabled>Select Skin Color</option>
                                                            @foreach(array_flip($skincolors) as $key => $value)

                                                                <option value="{{$key}}">{{$value}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <select class="form-control required swicth"
                                                                name="marital_status">
                                                            <option selected disabled>Marital Status</option>
                                                            @foreach(array_flip($marital_status) as $key => $value)

                                                                <option value="{{$key}}">{{$value}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="" style="float: right; color: red;">*</label>

                                                        <select class="form-control required swicth" name="mother_lang">
                                                            <option selected disabled>Mother Language</option>
                                                            @foreach(array_flip($languages) as $key => $value)

                                                                <option
                                                                    value="{{$key}}" @php if( isset($agentProfile[0]) ? $agentProfile[0]->mother_lang == $key : '' ){ echo "selected"; } @endphp >{{$value}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label>Other Language</label><span
                                                            style="float: right; color: red;">*</span>
                                                        <select class="form-control required swicth" name="other_lang">
                                                            <option selected disabled>Select Other Language</option>
                                                            @foreach(array_flip($languages) as $key => $value)
                                                                <option
                                                                    value="{{$key}}" @php if( isset($agentProfile[0]) ? $agentProfile[0]->other_lang == $key : '' ){ echo "selected"; } @endphp>{{$value}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">

                                                    <div class="col-md-3">
                                                        <label>Physique</label><span
                                                            style="float: right; color: red;">*</span>
                                                        <select class="form-control required swicth" name="physique_id">
                                                            <option selected disabled>Select Physique</option>
                                                            @foreach(array_flip($physiques) as $key => $value)

                                                                <option value="{{$key}}">{{$value}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label>Life Style Standard</label><span
                                                            style="float: right; color: red;">*</span>
                                                        <select class="form-control required swicth" name="life_style">
                                                            <option selected disabled>Select Life Style Standard
                                                            </option>
                                                            @foreach(array_flip($life_styles) as $key => $value)

                                                                <option value="{{$key}}">{{$value}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label style="float: right" for=""><span
                                                                style="float: right; color: red;">*</span>
                                                            <small></small></label>
                                                        <input type="number" name="no_of_children"
                                                               value="{{old('no_of_children')}}"
                                                               class="pf form-control swicth"
                                                               placeholder="Enter Number Of Childrens">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="">Ages of Child</label><span
                                                            style="float: right; color: red;">*</span>
                                                        <input type="number" class="pf form-control swicth"
                                                               value="{{old('child_age')}}" name="child_age "
                                                               placeholder="Ages of Child">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">

                                                    <div class="col-md-3">
                                                        <label>Salary</label><span
                                                            style="float: right; color: red;">*</span>
                                                        <select class="form-control required swicth"
                                                                name="salary_range">
                                                            <option selected disabled>Select Salary range</option>
                                                            @foreach(array_flip($salarys) as $key => $value)

                                                                <option value="{{$key}}">{{$value}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="gender mb-2">
                                                            <label>Do You Drink?</label>
                                                            <div class="form-radio">
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="drink_status"
                                                                               value="1" checked="checked"><i
                                                                            class="check-box"></i>Yes
                                                                    </label>
                                                                </div>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="drink_status"
                                                                               value="0"><i class="check-box"></i>No
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
                                                                        <input type="radio" name="smoke_status"
                                                                               value="1" checked="checked"><i
                                                                            class="check-box"></i>Yes
                                                                    </label>
                                                                </div>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="smoke_status"
                                                                               value="0"><i class="check-box"></i>No
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
                                                                        <input type="radio" name="pet_status" value="1"
                                                                               checked="checked"><i
                                                                            class="check-box"></i>Yes
                                                                    </label>
                                                                </div>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="pet_status" value="0"><i
                                                                            class="check-box"></i>No
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
                                                                        <input type="radio" name="chat" value="1"
                                                                               checked="checked"><i
                                                                            class="check-box"></i>Yes/OK
                                                                    </label>
                                                                </div>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="chat" value="0"><i
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
                                                                        <input type="radio" name="phone_cell" value="1"
                                                                               checked="checked"><i
                                                                            class="check-box"></i>Yes/OK
                                                                    </label>
                                                                </div>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="phone_cell" value="0"><i
                                                                            class="check-box"></i>No
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <br>
                                            <ul class="list-inline pull-right">
                                                <li>
                                                    <button type="button" id="save_continue"
                                                            class="btn btn-primary next-step"
                                                            style="margin-right: 25px;">Save and continue
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="tab-pane fade" id="permission" role="tabpanel"
                                             aria-labelledby="permission-tabs">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input type="text" class="pf" value="{{old('profession')}}"
                                                               name="profession" placeholder="Enter Profession">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input type="text" class="pf" value="{{old('job_title')}}"
                                                               name="job_title" placeholder="Enter Job Title">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input type="text" class="pf"
                                                               value="{{isset($agentProfile[0]) ? $agentProfile[0]->skill : ''}}"
                                                               name="skill" placeholder="Enter Skill">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-12"><span
                                                            style="float: right; color: red;">*</span>
                                                        <textarea class="pf" rows="4" value="{{old('description')}}"
                                                                  name="description"
                                                                  placeholder="Order Note"></textarea>
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                            <br><br>
                                            <ul class="list-inline pull-right">
                                                <li>
                                                    <button type="button" class="btn btn-primary prev-step">Previous
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" id="save_continue2"
                                                            class="btn btn-primary next-step"
                                                            style="margin-right: 25px;">Save and continue
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="step3">

                                            {{--                                            <div class="tab-pane fade" id="permission2" role="tabpanel" aria-labelledby="permission-tabs2">--}}

                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input type="text" class="pf"
                                                               value="{{old('elementry_school')}}"
                                                               name="elementry_school"
                                                               placeholder="Enter Elementary Schools Name">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="" style="float: right; color: red;">*</label>
                                                        <input type="text" class="pf" value="{{old('heigh_school')}}"
                                                               name="heigh_school" placeholder="Enter High School Name">
                                                    </div>
                                                    <div class="col-md-4" style="margin-top: 2%">
                                                        <label for="" style="float: right; color: red;"></label>
                                                        <input type="text" class="pf" value="{{old('bachelor_school')}}"
                                                               name="bachelor_school"
                                                               placeholder="Enter Bachelors Degree Name">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">

                                                    <div class="col-md-4">
                                                        <label for="" style="float: right; color: red;"></label>
                                                        <input type="text" class="pf" value="{{old('master_school')}}"
                                                               name="master_school"
                                                               placeholder="Enter Master Degree Name">
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="" style="float: right; color: red;"></label>
                                                        <input type="text" class="pf" value="{{old('docor_degree')}}"
                                                               name="docor_degree" placeholder="Enter Doctor's Degree">
                                                    </div>

                                                    <div class="col-md-4">
                                                        <label for="" style="float: right; color: red;"></label>
                                                        <input type="text" class="pf" value="{{old('university')}}"
                                                               name="university"
                                                               placeholder="Enter University Education Name">
                                                    </div>

                                                </div>
                                                <br>
                                            </div>
                                            <br><br>
                                            <ul class="list-inline pull-right">
                                                <li>
                                                    <button type="button" class="btn btn-primary prev-step">Previous
                                                    </button>
                                                </li>
                                                {{--   <li><button type="button" class="btn btn-default next-step">Skip</button></li>--}}
                                                <li>
                                                    <button type="button"
                                                            class="btn btn-primary btn-info-full next-step"
                                                            style="margin-right: 25px;">Save and continue
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" role="tabpanel" id="complete">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-sm-8">
                                                                <p>Does it matter for you that if your partner drinks
                                                                    alcohol?</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-radio">
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="partner_alcohol"
                                                                                   value="1" checked="checked"><i
                                                                                class="check-box"></i>Yes
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="partner_alcohol"
                                                                                   value="0"><i class="check-box"></i>No
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
                                                                            <input type="radio" name="second_marriage"
                                                                                   value="1" checked="checked"><i
                                                                                class="check-box"></i>Yes
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="second_marriage"
                                                                                   value="0"><i class="check-box"></i>No
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
                                                                <p>Does it matter for you that if your partner
                                                                    smokes</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-radio">
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="partner_smoke"
                                                                                   value="1" checked="checked"><i
                                                                                class="check-box"></i>Yes
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="partner_smoke"
                                                                                   value="0"><i class="check-box"></i>No
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-sm-8">
                                                                <p>Does it matter for you that if your partner has been
                                                                    previously Divorced Widower Married?</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <div class="form-radio">
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="partner_divorce"
                                                                                   value="1" checked="checked"><i
                                                                                class="check-box"></i>Yes
                                                                        </label>
                                                                    </div>
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="partner_divorce"
                                                                                   value="0"><i class="check-box"></i>No
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
                                                <li>
                                                    <button type="button" class="btn btn-primary prev-step">Previous
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="submit"
                                                            class="btn btn-primary btn-info-full next-step">Create
                                                        Profile
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </section>
                        </div>

                    </div>

                </section>
            </form>
    </div>
    </body>

    <div class="Agent_form">
        <form method="POST" action="{{route('agent.profile')}}" id="agent_profile_form" enctype="multipart/form-data">
            @csrf
            <section>
                <div class="gap gray-bg">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row border-center">

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
                </div>
            </section>
            <!-- wizerd form start-->
            <section style="background-image: url('public/images/profile.png'); background-size: cover;">
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
                                                                           {{isset($userProfile[0]) ? $userProfile[0]->chat == '1' : '' }} value="1"><i
                                                                        class="check-box"></i>Yes/OK
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="chat"
                                                                           {{isset($userProfile[0]) ? $userProfile[0]->chat == '0' : '' }}  value="0"><i
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
                                                                           {{isset($userProfile[0]) ? $userProfile[0]->phone_cell == '1' : '' }}  value="1"><i
                                                                        class="check-box"></i>Yes/OK
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="phone_cell"
                                                                           {{isset($userProfile[0]) ? $userProfile[0]->phone_cell == '0' : '' }}  value="0"><i
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

        <div class="parent_form">
            <form method="POST" action="{{route('parent.child')}}" id="parent_profile_form"
                  enctype="multipart/form-data">
                @csrf
                <section id="mm">
                    <div class="gap gray-bg">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="offsettabpanel-lg-1 col-lg-12">
                                    <div class="row border-center">

                                        <div class="col-lg-6 col-md-6">
                                            <div class="already-log">
                                                <h4>
                                                    Hi, {{session()->get('user_web_data')['user_info']['username']}}</h4>
                                                <p style="font-weight: 500">Next Time you login click your picture. To
                                                    remove an account from this page click cross.</p>
                                                <div class="log-user">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                                            <div class="user-log">
                                                                <!--													<i class="ti-close" title="Remove Account"></i>-->
                                                                <a href="#" title=""><img
                                                                        style="height: 100px; width: 90px; margin-bottom: 10px"
                                                                        id="img_src"
                                                                        src="public/frontend/images/resources/author.jpg"
                                                                        alt="">
                                                                </a>
                                                                <label class="fileContainer">
                                                                    <i class="fa fa-camera"> Upload image</i>
                                                                    <input type="file" id="file"
                                                                           onchange="return readURL(this);"
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
                    </div>
                </section>
                <section style="background-image: url('public/images/profile.png'); background-size: cover;">
                    <div class="container">

                        <ul class="nav nav-tabs tbf" style="border-bottom:1px solid #ddd">
                            <li><a class="meu matcher_manu" data-toggle="tab" href="#home">Match Macker</a></li>
                            <li><a class="meu agent_menu" data-toggle="tab" href="#menu1">Agent</a></li>
                            <li class="active"><a class="meu parent_menu" data-toggle="tab" href="#menu2">Parent</a></li>
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
                                            <div class="row">
                                                <div class="col-md-3" style="margin-left: 293px; margin-top: -2%">
                                                    <label for="" style="float: right; color: red;">*</label>
                                                    <input class="mb-2 pf pfh form-control agent_switch"
                                                           value=""
                                                           type="text" id="user_profile_id"
                                                           placeholder="Enter User ID / URL">
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="" style="float: right; color: red;">*</label>
                                                    <br>
                                                    <button style="margin-right: 62px; padding: 11px;width: 104px; margin-top: -13%" type="button" class="main-btn2" onclick="ChildProfile()" >Search</button>
                                                </div>
                                            </div>
                                            <div class="container-fluid" style="padding-right: 30px; padding-left: 30px;">
{{--                                                <div style="float: right;margin: -15px;margin-right: 3%;">--}}
{{--                                                    <label class="switch switch-green">--}}
{{--                                                        <input type="checkbox" class="switch-input" name="is_active"--}}
{{--                                                               value="1" id="customSwitch1" checked>--}}
{{--                                                        <span class="switch-label" style="height: 24px; width: 75px;"--}}
{{--                                                              data-on="Active" data-off="Inactive"></span>--}}
{{--                                                        <span class="switch-handle"></span>--}}
{{--                                                    </label>--}}
{{--                                             </div>--}}

                                                <div class="row text_error" style="display: none"  >


                                                    <p> <h4 style="color: red; text-align: center">There is no child available </h4>.</p>


                                                </div>
                                                <br>

                                                <div class="hidden_profile" style="display: none">
                                                    <input type="text" name="user_profile_id" id="child_profile_id" hidden>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="central-meta">

                                                                <div class="slider-for">
                                                                    <div class="slick-slide-item">
                                                                        <img style="width: 100%; height: 250px"   src="" id="img-fluid" class="img-fluid" >
                                                                    </div>
                                                                </div>


                                                            </div>

                                                        </div><div class="col-lg-1">
                                                        </div>

                                                        <div class="col-lg-7">
                                                            <div class="full-postmeta">
                                                                <div class="left-detail-meta">
                                                                    <span>Single / ID: 00000 <span class="id_profile"> </span> </span>
                                                                    <h4><i class="fa fa-check-circle-o"></i> <span class="name_parent">  </span></h4>
                                                                    <span><i class="fa fa-map-marker"></i> <span class="nationality_parent">  </span></span>
                                                                    <ins>Seeking Male <span class="age"> </span>For: Marriage</ins>
                                                                </div>
                                                                <div class="right-detailmeta">
                                                                    <span class="online"><i class="fa fa-circle"></i> Online</span>
                                                                    <ul>


                                                                    </ul>
                                                                </div>
                                                                <ul class="media-info">

                                                                </ul>
                                                                <div class="member-des">
                                                                    <h5>Member Overview</h5>
                                                                    <p>
                                                                        My name is <span class="name_parent"> </span>, I am single and looking for love, I believe in love
                                                                        and I would love to get married. I am calm, understanding and loving.
                                                                        I work in real estate and live with mom and brother. I love to travel, read,
                                                                        watch music, watch movies, swim, clean the house, take care of old people
                                                                        and children. I also love to cook for the less previledged.
                                                                    </p>
                                                                    <div class="bottom-meta">

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

                                            <br>
                                            <ul class="list-inline pull-right">
                                                <li>
                                                    <button id="send_request" type="submit"
                                                            class="btn btn-primary next-step"
                                                            style="margin-right: 25px;">Send Request
                                                    </button>
                                                </li>
                                            </ul>
                                            </div>
                                        </div>


                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </section>
                        </div>

                    </div>

                </section>
            </form>
        </div>
        </body>




    <script type="text/javascript">


        function ChildProfile() {
          var user_profile_id =   $('#user_profile_id').val();

          if (user_profile_id == ''  && user_profile_id == 0){
              alert("Please Enter User Url");
          }
          else
          {
              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
              $.post(route('parent.index'), {
                      contentType: 'application/json',
                      user_profile_id: user_profile_id,
                  },
                  function (data, status) {

                        if (data != '' )
                        {
                            $('.hidden_profile').show();
                            $('.text_error').hide();
                        }
                      else{
                            $('.text_error').show();
                            $('.hidden_profile').hide();
                            return false;
                        }
                        if (data[0].parent_child != ''){
                            $('#send_request').hide();
                        }else{
                            $('#send_request').show();
                        }

                       $('.name_parent').text(data[0].users.first_name);
                       $('#child_profile_id').val(data[0].users.web_user_id );
                       $('.nationality_parent').text(data[0].country.name);
                       $('.age').val(data[0].age);
                      $('.id_profile').text(data[0].user_profile_id);

                      $('#img-fluid').attr('src','public/uploads/profile/'+data[0].email+'/'+data[0].image_path);

                      //  $('#middle_name1').val(data[0].users.last_name);
                      //  $('#cast').val(data[0].cast);
                      //  $('#dob1').val(data[0].dob);
                      // $('#age').val(data[0].age);
                      // $('#country_id1').val(data[0].country_id);
                      // $('#city_id1').val(data[0].city_id);
                      // $('#work_city1').val(data[0].work_city);
                      // $('#parent_residential_city').val(data[0].residential_city);
                      // $('#parent_body_shape').val(data[0].body_shape);
                      // $('#parent_complexion').val(data[0].complexion);
                      // $('#parent_ethnicity').val(data[0].ethnicity);
                      // $('#parent_child_age').val(data[0].child_age);
                      // $('#parent_physique_id').val(data[0].physique_id);
                      // $('#parent_no_of_children').val(data[0].no_of_children);
                      // $('#parent_eye_color').val(data[0].eye_color);
                      // $('#parent_hair_color').val(data[0].hair_color);
                      // $('#parent_life_style').val(data[0].life_style);
                      // $('#parent_marital_status').val(data[0].marital_status);
                      // $('#parent_mother_lang').val(data[0].mother_lang);
                      // $('#parent_other_lang').val(data[0].other_lang);
                      // $('#parent_skin_color').val(data[0].skin_color);
                      // $('#parent_salary_range').val(data[0].salary_range);
                      // $('#parent_description').val(data[0].description);
                      // $('#parent_job_title').val(data[0].job_title);
                      // $('#parent_profession').val(data[0].profession);
                      // $('#parent_elementry_school').val(data[0].elementry_school);
                      // $('#parent_docor_degree').val(data[0].docor_degree);
                      // $('#parent_heigh_school').val(data[0].heigh_school);
                      // $('#parent_master_school').val(data[0].master_school);
                      // $('#parent_bachelor_school').val(data[0].bachelor_school);
                      // $('#parent_university').val(data[0].university);
                      // $('#parent_').val(data[0].university);
                      // if (data[0].chat == 1)
                      // { $('#chat_1').prop('checked', true).attr('checked', 'checked'); }
                      // else
                      // {   $('#chat_0').prop('checked', true).attr('checked', 'checked');}

                      // if (data[0].drink_statu == 1)
                      // { $('#drink_status_1').prop('checked', true).attr('checked', 'checked'); }
                      // else
                      // {   $('#drink_status_0').prop('checked', true).attr('checked', 'checked');}

                      // if (data[0].smoke_status == 1)
                      // { $('#smoke_status_1').prop('checked', true).attr('checked', 'checked'); }
                      // else
                      // {   $('#smoke_status_1').prop('checked', true).attr('checked', 'checked');}

                      // if (data[0].pet_status == 1)
                      // { $('#pet_status_1').prop('checked', true).attr('checked', 'checked'); }
                      // else
                      // {   $('#pet_status_0').prop('checked', true).attr('checked', 'checked');}

                      // if (data[0].partner_alcohol == 1)
                      // { $('#partner_alcohol_1').prop('checked', true).attr('checked', 'checked'); }
                      // else
                      // {   $('#partner_alcohol_0').prop('checked', true).attr('checked', 'checked');}

                      // if (data[0].partner_divorce == 1)
                      // { $('#partner_divorce_1').prop('checked', true).attr('checked', 'checked'); }
                      // else
                      // {   $('#partner_divorce_0').prop('checked', true).attr('checked', 'checked');}

                      // if (data[0].partner_smoke == 1)
                      // { $('#partner_smoke_1').prop('checked', true).attr('checked', 'checked'); }
                      // else
                      // {   $('#partner_smoke_0').prop('checked', true).attr('checked', 'checked');}

                      // if (data[0].second_marriage == 1)
                      // { $('#second_marriage_1').prop('checked', true).attr('checked', 'checked'); }
                      // else
                      // {   $('#second_marriage_0').prop('checked', true).attr('checked', 'checked');}


                      $('#parent_skil').val(data[0].skill);
                      $('#mobile1').val(data[0].mobile);
                      $('#religion1').val(data[0].religion);
                      $('#nationality1').val(data[0].nationality);

                  });

          }

        }


        //agent profile

        if ($('#Agent_switch_profile').is(":checked")) {
            $('input.agent_switch').prop('disabled', false);
            $('select.agent_switch').prop('disabled', false);
        } else {
            $('input.agent_switch').prop('disabled', true);
            $('select.agent_switch').prop('disabled', true);
        }
        $('#Agent_switch_profile').click(function () {
            if ($(this).is(':not(:checked)')) {
                $('input.agent_switch').prop('disabled', true);
                $('select.agent_switch').prop('disabled', true);
            } else if ($(this).is(":checked")) {
                $('input.agent_switch').prop('disabled', false);
                $('select.agent_switch').prop('disabled', false);
            }
        });

        //matcher profile
        if ($('#customSwitch1').is(":checked")) {
            $('input.swicth').prop('disabled', false);
            $('select.swicth').prop('disabled', false);
        } else {
            $('input.swicth').prop('disabled', true);
            $('select.swicth').prop('disabled', true);
        }
        $('#customSwitch1').click(function () {
            if ($(this).is(':not(:checked)')) {
                $('input.swicth').prop('disabled', true);
                $('select.swicth').prop('disabled', true);
            } else {
                $('input.swicth').prop('disabled', false);
                $('select.swicth').prop('disabled', false);
            }
        });


        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        });

        jQuery(document).ready(function ($) {

            $("#save_continue").click(function () {
                var isValid = true;
                var form = $("form#add_profile_form");
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
                    $("a#permission-tabs").attr("data-toggle", "tab").click();
                }
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
            //parentProfile
            $("#save_continue1").click(function () {
                var isValid = true;
                  var form = $("form#parent_profile_form");
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

                    $("a#permission-tabs1").attr("data-toggle", "tab").click();
                }
            });

        });


    </script>

    </html



@endsection
