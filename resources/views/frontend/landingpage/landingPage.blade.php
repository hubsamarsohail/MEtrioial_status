@extends('frontend.frontend')
@section('title') GlobalPuls  @endsection

@section('content')

<div class="image-cover hero-banner" style="background:url({{asset('public/frontend/images/slide-image-1920-d.jpg')}}) no-repeat;" id="container">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="section-head">
{{--                    {{dd($cms_data)}}--}}
                    <h4 class="text-uppercase" id="tu">Our Attractions</h4>
                    <div class="wt-separator-outer">
                        <div class="wt-separator style-square">
                            <span class="separator-left bg-primary"></span>
                            <span class="separator-right bg-primary"></span>
                        </div>
                    </div>
                </div>
                <!-- OUR GALLERY BLOCK START -->
                <div class="wt-box bg-gray p-a30">
                    <ul class="list-checked black">
                        <li>No.1 & most trusted matrimony service</li>
                        <li>100% verified mobile numbers</li>
                        <li>Millions have found their life partner here</li>
                        <li>Great interpersonal communication skills</li>
                        <li>Providing legal and scholarly research;</li>
                        <li>Assisting senior consultants</li>
                        <li>Arranging client coordination</li>
                        <li>Trusted service for more than 20 years</li>
                    </ul>
                </div>
                <!-- OUR GALLERY BLOCK END -->
            </div>
            <div class="col-md-6 text-center" id="text">
                <div>
{{--                    <iframe width="560" height="315" src="https://www.youtube.com/embed/sCbbMZ-q4-I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                    <iframe width="100%" height="350" src="{{$cms_data['video_url']}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
{{--                    <iframe width="100%" height="350" src="https://www.youtube.com/embed/-Dbwg5oG6RU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
                    <iframe width="100%" height="315" src="{{$cms_data['video_url']}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

 <!-- ============================ Hero Banner  End ================================== -->

{{-- +++++++++++++++++++++++ Main Content Start here +++++++++++++++++++++++++++--}}
<!--CONTENT SECTION-->
<section id="content">
    <section id="whyus" class="wprt-section why-choose-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60" style="height:70px"></div>
                    <h2 class="text-center margin-bottom-10">WHAT MAKES US DIFFERENT</h2>
                    <div class="wprt-lines style-2 custom-1">
                        <div class="line-1"></div>
                    </div>

                    <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="20" style="height:25px"></div>

                    <p class="wprt-subtitle text-center">We are providing the best metrimonial services all our the world. We’ve formed three divisions specifically designed to serve their respective markets</p>

                    <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40" style="height:50px"></div>
                </div><!-- /.col-md-12 -->

                <div class="col-md-4">
                    <div class="wprt-icon-box outline rounded icon-effect-3 width-90">
                        <div class="icon-wrap">
                            <span class="dd-icon icon-engineer"></span>
                        </div>
                        <div class="content-wrap">
                            <h3 class="dd-title font-size-18"><a href="#">OUR MISSION</a></h3>
                            <p>Most Trusted Matrimony service, has helped Millions like you find matches from across different communities such as Agarwal.</p>
                        </div>
                    </div>

                    <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30" style="height:0px"></div>
                </div>
                <div class="col-md-4">
                    <div class="wprt-icon-box outline rounded icon-effect-3 width-90">
                        <div class="icon-wrap">
                            <span class="dd-icon icon-engineer"></span>
                        </div>
                        <div class="content-wrap">
                            <h3 class="dd-title font-size-18"><a href="#">OUR VISION</a></h3>
                            <p>Most Trusted Matrimony service, has helped Millions like you find matches from across different communities such as Agarwal.</p>
                        </div>
                    </div>

                    <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30" style="height:0px"></div>
                </div>
                <div class="col-md-4">
                    <div class="wprt-icon-box outline rounded icon-effect-3 width-90">
                        <div class="icon-wrap">
                            <span class="dd-icon icon-engineer"></span>
                        </div>
                        <div class="content-wrap">
                            <h3 class="dd-title font-size-18"><a href="#">CORE VALUES</a></h3>
                            <p>Most Trusted Matrimony service, has helped Millions like you find matches from across different communities such as Agarwal.</p>
                        </div>
                    </div>

                    <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30" style="height:0px"></div>
                </div>

                <div class="col-md-12">
                    <div class="wprt-spacer" data-desktop="60" data-mobi="60" data-smobi="60" style="height:60px"></div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <div class="container-fluid">
        <div class="text-center" id="serv"><h2>Our Services</h2>
            <div class="wprt-lines style-2 custom-1">
                <div class="line-1"></div>
            </div>
        </div>

        <!--ACCOMODTION-2-->
        @foreach($data as $s)
                {{--+++++++++++++++++++++++++++  Matrimonial Section Start Here ++++++++++++++++++++++++++++++++++--}}
                @if($s['title'] == 'Matrimonial')
            <div id="Matrimonial" class="row animation fadeIn animated" style="padding-bottom: 60px;padding-top: 60px; visibility: visible;">
                <div class="col-md-6 no-padding">
                    @if($s['title'] == 'Matrimonial')
                        <img src="{{asset($s['img'])}}" height="375px" class="fullwidth" alt="">
                    @endif
                </div>
                <div class="col-md-6 no-padding">
                    <div style="background-color:#FFF; padding:46px">
                        @if($s['title'] == 'Matrimonial')
                            <h3>{{$s['title']}}</h3>
                        @endif
                        <span>Train Station<br><br></span>
                        <p>
                            @if($s['title'] == 'Matrimonial')
                                {{$s['excerpt']}}
                            @endif
                        </p>
                            <a href="{{route('ServiceDetail', ['service_title' => $s['title'] == 'Matrimonial' ? $s['title'] : ''])}}" id="readmore">
                                Read More...
                            </a>
                    </div>
                </div>
            </div>
            @endif

                {{--+++++++++++++++++++++++++++  Tours & Trip Section Start Here ++++++++++++++++++++++++++++++++++--}}
                @if($s['title'] == 'Tours & Trips')
                    <div id="Tours & Trips" class="row animation fadeIn animated" style="padding-bottom: 60px;padding-top: 60px; visibility: visible;">
                        <div class="col-md-6 no-padding">
                            <div style="background-color:#FFF; padding:46px">
                                @if($s['title'] == 'Tours & Trips')
                                    <h3>{{$s['title']}}</h3>
                                @endif
                                <span>Train Station<br><br></span>
                                <p>
                                    @if($s['title'] == 'Tours & Trips')
                                        {{$s['excerpt']}}
                                    @endif
                                </p>
                                <a href="{{route('ServiceDetail', ['service_title' => $s['title'] == 'Tours & Trips' ? $s['title'] : ''])}}" id="readmore">
                                    Read More...
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 no-padding">
                            @if($s['title'] == 'Tours & Trips')
                                <img src="{{asset($s['img'])}}" height="375px" class="fullwidth" alt="">
                            @endif
                        </div>
                    </div>
            @endif

                {{--+++++++++++++++++++++++++++  Ads Section Start Here ++++++++++++++++++++++++++++++++++--}}
                @if($s['title'] == 'Ads')
                    <div id="Ads" class="row animation fadeIn animated" style="padding-bottom: 60px;padding-top: 60px; visibility: visible;">
                        <div class="col-md-6 no-padding">
                            @if($s['title'] == 'Ads')
                                <img src="{{asset($s['img'])}}" height="375px" class="fullwidth" alt="">
                            @endif
                        </div>
                        <div class="col-md-6 no-padding">
                            <div style="background-color:#FFF; padding:46px">
                                @if($s['title'] == 'Ads')
                                    <h3>{{$s['title']}}</h3>
                                @endif
                                <span>Train Station<br><br></span>
                                <p>
                                    @if($s['title'] == 'Ads')
                                        {{$s['excerpt']}}
                                    @endif
                                </p>
                                    <a href="{{route('ServiceDetail', ['service_title' => $s['title'] == 'Ads' ? $s['title'] : ''])}}" id="readmore">
                                        Read More...
                                    </a>
                            </div>
                        </div>
                    </div>
                @endif

                {{--+++++++++++++++++++++++++++  Courses Section Start Here ++++++++++++++++++++++++++++++++++--}}
                @if($s['title'] == 'Courses')
                    <div id="Courses" class="row animation fadeIn animated" style="padding-bottom: 60px;padding-top: 60px; visibility: visible;">
                        <div class="col-md-6 no-padding">
                            <div style="background-color:#FFF; padding:46px">
                                @if($s['title'] == 'Courses')
                                    <h3>{{$s['title']}}</h3>
                                @endif
                                <span>Train Station<br><br></span>
                                <p>
                                    @if($s['title'] == 'Courses')
                                        {{$s['excerpt']}}
                                    @endif
                                </p>
                                    <a href="{{route('ServiceDetail', ['service_title' => $s['title'] == 'Courses' ? $s['title'] : ''])}}" id="readmore">
                                        Read More...
                                    </a>
                            </div>
                        </div>
                        <div class="col-md-6 no-padding">
                            @if($s['title'] == 'Courses')
                                <img src="{{asset($s['img'])}}" height="375px" class="fullwidth" alt="">
                            @endif
                        </div>
                    </div>
                @endif

                {{--+++++++++++++++++++++++++++  Jobs Ads Section Start Here ++++++++++++++++++++++++++++++++++--}}
                @if($s['title'] == 'Job Ads')
                    <div id="Job Ads" class="row animation fadeIn animated" style="padding-bottom: 60px;padding-top: 60px; visibility: visible;">
                        <div class="col-md-6 no-padding">
                            @if($s['title'] == 'Job Ads')
                                <img src="{{asset($s['img'])}}" height="375px" class="fullwidth" alt="">
                            @endif
                        </div>
                        <div class="col-md-6 no-padding">
                            <div style="background-color:#FFF; padding:46px">
                                @if($s['title'] == 'Job Ads')
                                    <h3>{{$s['title']}}</h3>
                                @endif
                                <span>Train Station<br><br></span>
                                <p>
                                    @if($s['title'] == 'Job Ads')
                                        {{$s['excerpt']}}
                                    @endif
                                </p>
                                    <a href="{{route('ServiceDetail', ['service_title' => $s['title'] == 'Job Ads' ? $s['title'] : ''])}}" id="readmore">
                                        Read More...
                                    </a>
                            </div>
                        </div>
                    </div>
            @endif

                {{--+++++++++++++++++++++++++++  Religious Events Section Start Here ++++++++++++++++++++++++++++++++++--}}
                @if($s['title'] == 'Religious Events')
                    <div id="Religious Events" class="row animation fadeIn animated" style="padding-bottom: 60px;padding-top: 60px; visibility: visible;">
                        <div class="col-md-6 no-padding">
                            <div style="background-color:#FFF; padding:46px">
                                @if($s['title'] == 'Religious Events')
                                    <h3>{{$s['title']}}</h3>
                                @endif
                                <span>Train Station<br><br></span>
                                <p>
                                    @if($s['title'] == 'Religious Events')
                                        {{$s['excerpt']}}
                                    @endif
                                </p>
                                    <a href="{{route('ServiceDetail', ['service_title' => $s['title'] == 'Religious Events' ? $s['title'] : ''])}}" id="readmore">
                                        Read More...
                                    </a>
                            </div>
                        </div>
                        <div class="col-md-6 no-padding">
                            @if($s['title'] == 'Religious Events')
                                <img src="{{asset($s['img'])}}" height="375px" class="fullwidth" alt="">
                            @endif
                        </div>
                    </div>
            @endif

                {{--+++++++++++++++++++++++++++  Videos Section Start Here ++++++++++++++++++++++++++++++++++--}}
                @if($s['title'] == 'Videos')
                    <div id="Videos" class="row animation fadeIn animated" style="padding-bottom: 60px;padding-top: 60px; visibility: visible;">
                        <div class="col-md-6 no-padding">
                            @if($s['title'] == 'Videos')
                                <img src="{{asset($s['img'])}}" height="375px" class="fullwidth" alt="">
                            @endif
                        </div>
                        <div class="col-md-6 no-padding">
                            <div style="background-color:#FFF; padding:46px">
                                @if($s['title'] == 'Videos')
                                    <h3>{{$s['title']}}</h3>
                                @endif
                                <span>Train Station<br><br></span>
                                <p>
                                    @if($s['title'] == 'Videos')
                                        {{$s['excerpt']}}
                                    @endif
                                </p>
                                    <a href="{{route('ServiceDetail', ['service_title' => $s['title'] == 'Videos' ? $s['title'] : ''])}}" id="readmore">
                                        Read More...
                                    </a>
                            </div>
                        </div>
                    </div>
            @endif

         @endforeach
        <!--END of TEXT SECTION-->

    </div>

    <section class="statistics">
        <!--start blur-->
        <div class="stat-blur">
            <!--start container-->
            <div class="container text-center">
                <h2 style="margin-bottom: 40px;margin-top: 10px;">
                    our statistics
                    <span class="underline">
                            <span class="sq-r"></span>
                            <span class="sq-l"></span>
                        </span>
                </h2>
                <!--start row-->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <p class="stat-p">
                            <i class="fas fa-cloud-download-alt fa-lg"></i>
                            <span class="attr">Downloads</span>
                        </p>
                        <span class="timer margin-sp-sm" data-from="0" data-to="35000000" data-speed="6000" data-refresh-interval="50">35,000,000</span>
                    </div> <!--col(1)-->

                    <div class="col-lg-3 col-md-6">
                        <p class="stat-p">
                            <i class="far fa-grin-stars fa-lg"></i>
                            <span class="attr">Happy clients</span>
                        </p>
                        <span class="timer margin-sp-sm" data-from="0" data-to="24000000" data-speed="6000" data-refresh-interval="50">24,000,000</span>
                    </div> <!--col(2)-->

                    <div class="col-lg-3 col-md-6">
                        <p class="stat-p">
                            <i class="far  fa-lg"></i>
                            <span class="attr">Reviews</span>
                        </p>
                        <span class="timer" data-from="0" data-to="500000" data-speed="6000" data-refresh-interval="50">500,000</span>
                    </div> <!--col(3)-->

                    <div class="col-lg-3 col-md-6">
                        <p class="stat-p">
                            <i class="fab fa-phabricator fa-lg"></i>
                            <span class="attr">followers</span>
                        </p>
                        <span class="timer no-margin-xs" data-from="0" data-to="78300" data-speed="6000" data-refresh-interval="50">78,300</span>
                    </div> <!--col(4)-->

                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </div>
        <!--end blur-->
    </section>
</section>
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
        background: linear-gradient(to bottom, rgba(0,0,0,0.3) 0%,rgba(0,0,0,0.8) 100%);
    }
    #carsl{
        padding:0px 0px;
    }
    #tu{
        color: white;
    }

</style>
<style>
    .statistics {
        background: url('https://minato-application.netlify.app/images/statistics/statistics.jpeg') no-repeat center center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        -ms-background-size: cover;
        background-size: cover;
        padding: 0;
        color: #fff;
    }
    .statistics .stat-blur {
        background-image: -webkit-linear-gradient(
            -225deg
            , rgba(255, 5, 124, 0.7) 0%, rgba(124, 100, 213, 0.7) 48%, rgba(76, 195, 255, 0.7) 100%);
        background-image: -moz-linear-gradient(-225deg, rgba(255, 5, 124, 0.7) 0%, rgba(124, 100, 213, 0.7) 48%, rgba(76, 195, 255, 0.7) 100%);
        background-image: -o-linear-gradient(-225deg, rgba(255, 5, 124, 0.7) 0%, rgba(124, 100, 213, 0.7) 48%, rgba(76, 195, 255, 0.7) 100%);
        background-image: -ms-linear-gradient(-225deg, rgba(255, 5, 124, 0.7) 0%, rgba(124, 100, 213, 0.7) 48%, rgba(76, 195, 255, 0.7) 100%);
        background-image: linear-gradient(
            -225deg
            , rgba(255, 5, 124, 0.7) 0%, rgba(124, 100, 213, 0.7) 48%, rgba(76, 195, 255, 0.7) 100%);
    }
    .statistics .stat-blur {
        padding: 70px 0;
    }
    .statistics .stat-blur h2 {
        background-image: none !important;
        -webkit-text-fill-color: unset;
        color: #fff;
    }
    .statistics .stat-blur h2 span.underline {
        background-image: none;
        background-color: #fff;
    }
    section h2 span.underline {
        width: 100%;
        height: 2px;
        bottom: 0;
        left: 0;
    }
    section h2 span.underline {
        width: 100%;
        height: 2px;
        bottom: 0;
        left: 0;
    }
    .statistics .stat-blur h2 span.underline span {
        border: 2px solid #fff;
    }
    section h2 span.underline span.sq-r {
        /*right: -27px;*/
    }
    section h2 span.underline span {
        display: block;
        width: 25px;
        height: 25px;
        position: absolute;
        top: calc(50% - 12.5px);
        -webkit-transform: rotate(
            45deg
        );
        -moz-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        transform: rotate(
            45deg
        );
    }
    .statistics .stat-blur h2 span.underline span {
        border: 2px solid #fff;
    }
    section h2 span.underline span.sq-l {
        left: -27px;
    }

    .statistics .stat-blur p.stat-p {
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 0;
    }
    .statistics .stat-blur span.timer {
        text-align: center;
        font-size: 30px;
        font-weight: 700;
        display: block;
    }
    .statistics .stat-blur p.stat-p {
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 10px;
    }
    .statistics .stat-blur span.timer {
        text-align: center;
        font-size: 30px;
        font-weight: 700;
        display: block;
        margin-bottom: 10px;
    }
    a{
        color: #fff;
    }
</style>
<style>
    .wprt-section {
        position: relative;
        background-color: #fff;
    }
    section {
        display: block;
        margin: 0;
        padding: 0;
        border: 0;
        outline: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
        font-family: inherit;
        font-size: 100%;
        font-style: inherit;
        font-weight: inherit;
    }
    .wprt-spacer {
        clear: both;
    }
    .margin-bottom-10 {
        margin-bottom: 10px;
    }
    .wprt-lines.custom-1 {
        height: 3px;
    }

    .wprt-lines {
        position: relative;
    }
    .wprt-lines.custom-1 .line-1 {
        height: 3px;
        width: 60px;
        background-color: #000;
        margin-left: -30px;
        margin-top: -1.5px;
    }

    .wprt-lines.style-2 .line-1, .wprt-lines.style-2 .line-2 {
        left: 50%;
    }
    .wprt-lines .line-1, .wprt-lines .line-2 {
        position: absolute;
        left: 0;
        top: 50%;
        z-index: 2;
    }
    .wprt-spacer {
        clear: both;
    }
    .wprt-subtitle {
        font-size: 1.142em;
        line-height: 1.8em;
        max-width: 770px;
        margin: 0 auto;
        text-align: center;
    }
    .wprt-spacer {
        clear: both;
    }
    .wprt-icon-box.icon-left {
        text-align: left;
        position: relative;
    }
    .wprt-icon-box.icon-left.outline .icon-wrap {
        font-size: 38px;
        margin-bottom: 0;
    }

    .wprt-icon-box.icon-left .icon-wrap {
        position: absolute;
        left: 0;
        top: 0;
        line-height: 50px;
        width: auto;
    }
    .wprt-icon-box.icon-left.outline .dd-icon {
        box-shadow: inset 0 0 0 2px #fecd00;
        display: inline-block;
        width: 70px;
        height: 70px;
        line-height: 70px;
        text-align: center;
        margin-top: 4px;
    }
    .wprt-icon-box.outline.icon-effect-2 .dd-icon {
        -webkit-transition: background 0.3s, color 0.3s, box-shadow 0.3s;
        -moz-transition: background 0.3s, color 0.3s, box-shadow 0.3s;
        transition: background 0.3s, color 0.3s, box-shadow 0.3s;
    }
    .wprt-icon-box.outline .dd-icon {
        box-shadow: inset 0 0 0 2px #fecd00;
    }
    .wprt-icon-box.rounded .dd-icon, .wprt-icon-box.rounded.icon-effect-1 .dd-icon:after, .wprt-icon-box.rounded.icon-effect-3 .dd-icon:after {
        border-radius: 50%;
    }
    .wprt-icon-box .dd-icon {
        display: inline-block;
        position: relative;
        z-index: 1;
        color: #fecd00;
        -webkit-transition: color 0.3s;
        -moz-transition: color 0.3s;
        transition: color 0.3s;
    }
    .icon-drawing:before {
        content: '\e955';
    }
    [class^="icon-"]:before, [class*=" icon-"]:before {
        font-family: "fontello";
        font-style: normal;
        font-weight: normal;
        speak: none;
        display: inline-block;
        text-decoration: inherit;
        width: 1em;
        margin-right: .2em;
        text-align: center;
        /* opacity: .8; */
        font-variant: normal;
        text-transform: none;
        line-height: 2em;
        margin-left: .2em;
        /* font-size: 120%; */
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        /* text-shadow: 1px 1px 1px rgb(127 127 127 / 30%); */
    }
    .wprt-icon-box.icon-left.outline .content-wrap {
        padding-left: 100px;
    }
    .wprt-icon-box.icon-left .content-wrap {
        padding-left: 80px;
    }
    .wprt-icon-box.icon-left .dd-title {
        margin-bottom: 8px;
    }

    .font-size-18 {
        font-size: 18px;
    }
    .wprt-icon-box p {
        margin-bottom: 8px;
    }
    .wprt-spacer {
        clear: both;
    }
    .wprt-icon-box.icon-left {
        text-align: left;
        position: relative;
    }
    .wprt-icon-box.icon-left.outline .icon-wrap {
        font-size: 38px;
        margin-bottom: 0;
    }

    .wprt-icon-box.icon-left .icon-wrap {
        position: absolute;
        left: 0;
        top: 0;
        line-height: 50px;
        width: auto;
    }
    .wprt-icon-box.icon-left.outline .dd-icon {
        box-shadow: inset 0 0 0 2px #fecd00;
        display: inline-block;
        width: 70px;
        height: 70px;
        line-height: 70px;
        text-align: center;
        margin-top: 4px;
    }

    .wprt-icon-box.outline.icon-effect-2 .dd-icon {
        -webkit-transition: background 0.3s, color 0.3s, box-shadow 0.3s;
        -moz-transition: background 0.3s, color 0.3s, box-shadow 0.3s;
        transition: background 0.3s, color 0.3s, box-shadow 0.3s;
    }
    .wprt-icon-box.outline .dd-icon {
        box-shadow: inset 0 0 0 2px #fecd00;
    }
    .wprt-icon-box.rounded .dd-icon, .wprt-icon-box.rounded.icon-effect-1 .dd-icon:after, .wprt-icon-box.rounded.icon-effect-3 .dd-icon:after {
        border-radius: 50%;
    }
    .wprt-icon-box .dd-icon {
        display: inline-block;
        position: relative;
        z-index: 1;
        color: #fecd00;
        -webkit-transition: color 0.3s;
        -moz-transition: color 0.3s;
        transition: color 0.3s;
    }
    .icon-engineer:before {
        content: '\e846';
    }
    [class^="icon-"]:before, [class*=" icon-"]:before {
        font-family: "fontello";
        font-style: normal;
        font-weight: normal;
        speak: none;
        display: inline-block;
        text-decoration: inherit;
        width: 1em;
        margin-right: .2em;
        text-align: center;
        /* opacity: .8; */
        font-variant: normal;
        text-transform: none;
        line-height: 1em;
        margin-left: .2em;
        /* font-size: 120%; */
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        /* text-shadow: 1px 1px 1px rgb(127 127 127 / 30%); */
    }
    .wprt-icon-box.icon-left.outline .content-wrap {
        padding-left: 100px;
    }

    .wprt-icon-box.icon-left .content-wrap {
        padding-left: 80px;
    }
    .wprt-icon-box.icon-left .dd-title {
        margin-bottom: 8px;
    }
    .font-size-18 {
        font-size: 18px;
    }
    .wprt-spacer {
        clear: both;
    }
    .wprt-icon-box {
        text-align: center;
    }
    .wprt-icon-box.outline .icon-wrap {
        margin-bottom: 25px;
    }
    .wprt-icon-box.outline .dd-icon {
        box-shadow: inset 0 0 0 2px #fecd00;
    }

    .wprt-icon-box.rounded .dd-icon, .wprt-icon-box.rounded.icon-effect-1 .dd-icon:after, .wprt-icon-box.rounded.icon-effect-3 .dd-icon:after {
        border-radius: 50%;
    }

    .wprt-icon-box.width-90 .dd-icon {
        line-height: 90px;
        width: 90px;
        height: 90px;
        font-size: 45px;
    }

    .wprt-icon-box .dd-icon {
        display: inline-block;
        position: relative;
        z-index: 1;
        color: #fecd00;
        -webkit-transition: color 0.3s;
        -moz-transition: color 0.3s;
        transition: color 0.3s;
    }
    .icon-engineer:before {
        content: '\e846';
    }
    [class^="icon-"]:before, [class*=" icon-"]:before {
        font-family: "fontello";
        font-style: normal;
        font-weight: normal;
        speak: none;
        display: inline-block;
        text-decoration: inherit;
        width: 1em;
        margin-right: .2em;
        text-align: center;
        /* opacity: .8; */
        font-variant: normal;
        text-transform: none;
        line-height: 1em;
        margin-left: .2em;
        /* font-size: 120%; */
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        /* text-shadow: 1px 1px 1px rgb(127 127 127 / 30%); */
    }
    .wprt-icon-box.outline.icon-effect-3 .dd-icon:after {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
        opacity: 1;
        z-index: -1;
        background-color: transparent;
    }
    .wprt-icon-box.rounded .dd-icon, .wprt-icon-box.rounded.icon-effect-1 .dd-icon:after, .wprt-icon-box.rounded.icon-effect-3 .dd-icon:after {
        border-radius: 50%;
    }
    .wprt-icon-box.outline .dd-icon:after {
        background-color: #fecd00;
        -webkit-transform: scale(1.3);
        -moz-transform: scale(1.3);
        -ms-transform: scale(1.3);
        transform: scale(1.3);
        opacity: 0;
        -webkit-transition: -webkit-transform 0.2s, opacity 0.3s;
        -moz-transition: -moz-transform 0.2s, opacity 0.3s;
        transition: transform 0.2s, opacity 0.3s;
    }
    .wprt-icon-box .dd-icon:after {
        pointer-events: none;
        position: absolute;
        width: 100%;
        height: 100%;
        content: '';
        -webkit-box-sizing: content-box;
        -moz-box-sizing: content-box;
        box-sizing: content-box;
        top: 0;
        left: 0;
        z-index: -1;
    }
    .font-size-18 {
        font-size: 18px;
    }
    .wprt-icon-box p {
        margin-bottom: 8px;
    }

    .wprt-spacer {
        clear: both;
    }
    .wprt-icon-box.outline.icon-effect-3:hover .dd-icon {
        color: #fff;
        background-color: #fecd00;
    }


    .wprt-icon-box.outline .dd-icon {
        box-shadow: inset 0 0 0 2px #fecd00;
    }
    #serv {
        padding-top: 30px;
    }

</style>
<style>
    .section-head {
        margin-bottom: 10px;
    }
    .text-uppercase {
        text-transform: uppercase;
    }
    .wt-separator-outer {
        overflow: hidden;
    }
    .wt-separator.style-square {
        width: 10px;
        height: 10px;
        background-color: transparent;
        border-width: 3px;
        border-style: solid;
        border-color: #fecd00;
    }

    .wt-separator {
        display: inline-block;
        height: 3px;
        width: 50px;
        position: relative;
    }
    .wt-separator.style-square .separator-left, .wt-separator.style-square .separator-right {
        height: 3px;
    }
    .wt-separator .separator-left {
        left: -80px;
    }
    .wt-separator .separator-left, .wt-separator .separator-right {
        position: absolute;
        top: 50%;
        width: 70px;
        height: 2px;
        margin-top: -1px;
    }
    .wt-separator.style-square .separator-left, .wt-separator.style-square .separator-right {

        height: 3px;
        background-color: #fff;
        border: none;
    }
    .wt-separator .separator-right {
        right: -80px;
    }
    .wt-separator .separator-left, .wt-separator .separator-right {
        position: absolute;
        top: 50%;
        width: 70px;
        height: 2px;
        margin-top: -1px;
    }
    .wt-box, .wt-info, .wt-tilte, .wt-tilte-inner {
        position: relative;
    }

    .wt-box {
        position: relative;
    }
    .rounded-bx, .wt-box, .wt-icon-box, .wt-icon-box-small, .wt-thum-bx, .wt-post-thum {
        position: relative;
    }
    .bg-gray {
        background-color: #f5f6f6;
    }
    .p-a30 {
        padding: 30px;
    }
    .list-checked {
        margin: 0 0 20px 0;
        padding: 0;
        list-style: none;
    }
    .list-checked li {
        padding: 5px 5px 5px 20px;
        position: relative;
    }
    ul.black li:before {
        color: #fecd00;
    }
    .list-checked li:before {
        content: "\f046";
    }
    .list-checked li:before {
        font-family: "FontAwesome";
        position: absolute;
        left: 0;
        top: 6px;
        display: block;
        font-size: 15px;
        color: #777;
    }
    #text{
        margin: 55px 0 0 0;
    }

</style>
