@extends('frontend.master')

@section('content')



<section>
<div class="gap2 gray-bg">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="row merged20" id="page-contents">
<div class="col-lg-12">
    <div class="search-meta">
        <span>Your search result for</span>
    </div>
</div>

<div class="col-lg-12">
    <div class="search-tab">
        <ul class="nav nav-tabs tab-btn">
<li class="nav-item"><a href="{{route('search.main', ['value' => $request->value])}}" >All</a></li>
<li class="nav-item"> <a href="{{route('search.main', ['value' => $request->value, 'type' => '1'])}}">Matcher</a></li>
<li class="nav-item"><a  href="{{route('search.main', ['value' => $request->value, 'type' => '2'])}}" >Agent's</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            @foreach($profile_searchs as $profile_search)

            <div class="tab-pane active fade show " id="All" >

                <div class="central-meta item">

                    <span class="create-post">{{$profile_search->users->first_name}}<a title="" href="#"></a></span>
                    <div class="user-post">
                          <div class="friend-info">
                            <figure>
                                @if(!empty($profile_search->image_path))
                                <img src="{{asset('public/uploads/profile').'/'.$profile_search->email.'/'.$profile_search->image_path }}" alt="">
                                @else
                                    <img src="{{asset('public/images/dummy.png') }}" alt="">
                                @endif
                            </figure>
                            <div class="friend-name">
                                <div class="more">
                                    <div class="more-post-optns"><i class="ti-more-alt"></i>
                                        <ul>
                                            <li class="send-mesg"><i class="fa fa-comment"></i>Send Message</li>
                                        </ul>
                                    </div>
                                </div>
                                <ins><a href="{{route('udetails',Hashids::encode($profile_search->user_profile_id))}}" title="">{{$profile_search->users->first_name}} {{$profile_search->users->last_name}}</a> </ins>
                                <span><i class="fa fa-globe"></i> Location:  {{$profile_search->nationality}}</span>

                            </div>
                            <div class="post-meta searched">
                                <div class="linked-image align-right">
                                    <a href="#" title=""><img src="images/resources/search-2.jpg" alt=""></a>
                                </div>
                                <div class="linked-image align-left">
                                  <p>Age: {{$profile_search->age}}  <span style="margin-left: 10px" > Cast :  {{$profile_search->cast}}</span></p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div><!-- post with image -->

            </div>
            @endforeach
            <div class="tab-pane fade" id="people" >
                <div class="central-meta item">
                    <span class="create-post">People<a title="" href="#">See All</a></span>
                    <div class="pit-friends">
                        <figure><a href="#" title=""><img src="images/resources/searching1.jpg" alt=""></a></figure>
                        <div class="pit-frnz-meta">
                            <a href="#" title="">Jack Carter</a>
                            <i>Tornoto</i>
                            <ul class="add-remove-frnd">
                                <li class="add-tofrndlist">
                                    <a title="Add friend" href="#"><i class="fa fa-user-plus"></i></a>
                                </li>
                                <li class="remove-frnd">
                                    <a title="Send Message" href="#"><i class="fa fa-comment"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="pit-friends">
                        <figure><a href="#" title=""><img src="images/resources/searching2.jpg" alt=""></a></figure>
                        <div class="pit-frnz-meta">
                            <a href="#" title="">Jack Carter jackson</a>
                            <i>Tornoto</i>
                            <ul class="add-remove-frnd">
                                <li class="add-tofrndlist">
                                    <a title="Add friend" href="#"><i class="fa fa-user-plus"></i></a>
                                </li>
                                <li class="remove-frnd">
                                    <a title="Send Message" href="#"><i class="fa fa-comment"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="pit-friends">
                        <figure><a href="#" title=""><img src="images/resources/searching3.jpg" alt=""></a></figure>
                        <div class="pit-frnz-meta">
                            <a href="#" title="">Jack jackson</a>
                            <i>manitoba</i>
                            <ul class="add-remove-frnd">
                                <li class="add-tofrndlist">
                                    <a title="Add friend" href="#"><i class="fa fa-user-plus"></i></a>
                                </li>
                                <li class="remove-frnd">
                                    <a title="Send Message" href="#"><i class="fa fa-comment"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="pit-friends">
                        <figure><a href="#" title=""><img src="images/resources/searching4.jpg" alt=""></a></figure>
                        <div class="pit-frnz-meta">
                            <a href="#" title="">Jack william</a>
                            <i>Nova Scotia</i>
                            <ul class="add-remove-frnd">
                                <li class="add-tofrndlist">
                                    <a title="Add friend" href="#"><i class="fa fa-user-plus"></i></a>
                                </li>
                                <li class="remove-frnd">
                                    <a title="Send Message" href="#"><i class="fa fa-comment"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- searched peoples -->
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

<script src="{{asset('/')}}public/frontend/assets/js/main.min.js"></script>


@endsection
