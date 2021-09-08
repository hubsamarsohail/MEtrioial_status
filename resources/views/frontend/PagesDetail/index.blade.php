@extends('frontend.frontend')
@section('title') GlobalPuls | Pages Detail @endsection
@section('content')

    @if($pagesDetail['title'])


        <div class="container" style="padding-left: 0px;padding-right: 0px;margin-top: 127px;">
            <br>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" style="height: 400px;" role="listbox">
                    @foreach($pagesDetail->Pages_image as $images )
                        <div class="item active">
                            <img
                                src="{{asset('public/uploads/Pages').'/'.$images['page_id'].'/'.$images['image_path']}}"
                                alt="Chania" width="460" height="345">
                            <div class="carousel-caption">

                            </div>
                        </div>
                    @endforeach
                    @foreach($pagesDetail->Pages_image as $images )
                        <div class="item">
                            <img
                                src="{{asset('public/uploads/Pages').'/'.$images['page_id'].'/'.$images['image_path']}}"
                                alt="Chania" width="460" height="345">
                            <div class="carousel-caption">

                            </div>
                        </div>
                    @endforeach

                </div>

                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        </div>
        <div class="container-fluid">
            <div id="metri" style="padding-top: 0px;" class="row animation fadeIn animated"
                 style="padding-bottom: 60px;padding-top: 60px; visibility: visible;">
                <div class="col-md-12 no-padding">
                    <div style="background-color:#FFF; padding:46px">
                        <span>{{$pagesDetail['title']}}<br><br></span>
                        <p>
                            {!! $pagesDetail['body'] !!}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection
<style>
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 100%;
        margin: auto;
        height: 50%;
    }

    .container {
        width: 100% !important;
    }

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

    #regr {
        color: white;
    }
</style>
