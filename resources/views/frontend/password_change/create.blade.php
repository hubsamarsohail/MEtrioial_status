@extends('frontend.master')

@section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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


        .form-control {
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

        .invalid {
            border-color: red;
        }




    </style>
    <script>
        $(document).ready(function () {
            function validatepasswordform(formid) {
                var isValid = true;
                var form = $("form#" + formid);
                form.find('select.required').each(function() {
                    if ($(this).val() === null || $(this).val() === "") {
                        $(this).addClass('invalid');
                        isValid = false;
                    }
                });
                form.find('input.required').each(function() {
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
                return isValid;
            }

        });

    </script>

    <section>
        <div class="page-header bg-opacity" style="background: url('https://localhost/matrimonial/public/images/head.png'); height: 244px ; ">
            <div class="header-inner">
                <h2><b style="color: #fff">Change Password </b></h2>
                <p style="color: #000000">
                </p>
            </div>
        </div>
    </section><!-- sub header -->

        <div class="matcher_form">
            <form method="POST" action="{{route('change.password')}}" id="add_password_form" >
                @csrf

                <section style="background-image: url('public/images/profile.png'); background-size: cover;">
                    <div class="container">


                        <div class="row" id="home">
                            <section>
                                <div class="wizard" style="border-radius: 20px">



                                    <div class="tab-content">
                                        <div class="tab-pane active" role="tabpanel" id="step1">
                                            <div class="container-fluid" style="padding-right: 30px; padding-left: 30px;">
                                                <input type='hidden' name ="user_id" value="{{session()->get('user_web_data')['user_info']['web_user_id']}}" >
                                                <div class="row">
                                                    <div class="col-md-3">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="" style="float: left;"> Current Password:*</label>
                                                        <input type="password" class="pf swicth" name="password"
                                                               value=""
                                                               placeholder="Enter Current Password">
                                                        @error('password')
                                                        <div class="alert alert-danger">Enter Current Password!</div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-3">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="" style="float: left;"> New Password:*</label>
                                                        <input type="password" class="pf swicth" name="new_password"
                                                               value=""
                                                               placeholder="Enter New Password">
                                                        @error('new_password')
                                                        <div class="alert alert-danger">Enter New Password!</div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-3">
                                                    </div>

                                                </div>
                                                <br>
                                                <div class="row">

                                                    <div class="col-md-3">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="" style="float: left;"> Confirmation Password:*</label>
                                                        <input type="password" class="pf swicth" name="password_confirmation"
                                                               value=""
                                                               placeholder="Enter Confirmation Password">
                                                        @error('password_confirmation')
                                                        <div class="alert alert-danger">{{ $message  }}!</div>
                                                        @enderror
                                                    </div>
                                                    <div class="col-md-3">
                                                    </div>

                                                </div>
                                                <br>

                                            </div>

                                            <br>
                                            <ul class="list-inline pull-center">
                                                <li>
                                                    <button type="submit" id="save_continue"
                                                            class="btn btn-primary next-step"
                                                            style="margin-right: 310px;">Save
                                                    </button>
                                                </li>
                                            </ul>
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


        </html


    <script>

    </script>

@endsection
