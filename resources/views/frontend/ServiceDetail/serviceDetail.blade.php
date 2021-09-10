@extends('frontend.frontend')
@section('title') GlobalPuls | Service Detail @endsection

@section('content')
    @foreach($data as $service)
        @if($service['title'] == $service_title)
            <div class="image-cover hero-banner"
                 style="background:url({{$service['title'] == $service_title ? $service['img'] : ''}}) no-repeat;"
                 id="container">
                <div class="container">
                    <div class="row">

                        <div class="col-12 text-center">
                            <div>
                                <h1 id="regr"> {{$service['title']}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div id="metri" class="row animation fadeIn animated"
                     style="padding-bottom: 60px;padding-top: 60px; visibility: visible;">
                    {{--            <div class="col-md-6 no-padding">--}}
                    {{--                <img src="images/metrimonial1.png" height="375px" class="fullwidth" alt="">--}}
                    {{--            </div>--}}
                    <div class="col-md-12 no-padding">
                        <div style="background-color:#FFF; padding:46px">
                            <span>	Train Station<br><br></span>
                            <p>
                                {!! $service['description'] !!}
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
    {{--    </div>--}}
@endsection
<style>
    #container {
        position: relative;
    }

    #container::after {
        content: "";
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%; /* set to 100% for full overlay width */
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.8) 100%);
    }

    #carsl {
        padding: 0px 0px;
    }

    #tu {
        color: white;
    }
    #regr{
        color: white;
    }
</style>
