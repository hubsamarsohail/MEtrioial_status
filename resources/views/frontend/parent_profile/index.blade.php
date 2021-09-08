@extends('frontend.master')

@section('content')


    {{--	<script src="{{asset('/')}}public/frontend/assets/js/main.min.js"></script>--}}
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="{{asset('/')}}public/frontend/assets/js/script.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

{{--    <!-- jQuery library -->--}}
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}

{{--    <!-- Popper JS -->--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>--}}

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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

                                <div class="gap no-bottom">
                                    <div class="more-about">
                                        <div class="central-meta">
                                            <span class="title2">Parent Child Relation</span>
                                            <table class="overview table table-striped table-bordered table-responsive">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Child First Name</th>
                                                    <th>Child Last Name</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($childdata as $child)
                                                <tr>

                                                    <td>{{$child->user_profile_id}}</td>

                                                        <td>{{$child->users->first_name}}</td>
                                                        <td>{{$child->users->last_name}}</td>
                                                    @if($child->is_active == '1')
                                                        <td>
                                                                Active
                                                        </td>
                                                    @else
                                                        <td>
                                                            Inactive
                                                        </td>
                                                    @endif
                                                        <td><a href="{{route('parent.child',Hashids::encode($child->users->web_user_id))}}" title="" class="btn-active" data-ripple=""><i class="icofont-star"></i> Follow</a></td>

                                                </tr>
                                                @endforeach

                                                </tbody>


                                            </table>
                                                <br>
                                            <div class="d-flex justify-content-center">
                                                {{ $childdata->links() }}
                                            </div>

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
            .btn-active {
                background: #088dcd none repeat scroll 0 0;
                border-radius: 16px;
                color: #fff;
                display: inline-block;
                font-size: 12px;
                margin-top: 10px;
                padding: 5px 14px;
            }
        </style>


    </div>
    <script src="http://wpkixx.com/html/pitnik/js/main.min.js"></script>
    <script src="http://wpkixx.com/html/pitnik/js/script.js"></script>
    </body>
    </html>


@endsection
