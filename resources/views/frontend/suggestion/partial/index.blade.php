@if(!empty($usuggestionProfiles))
    @foreach($usuggestionProfiles as $profile)

        <div class="col-lg-3 col-md-4 col-sm-4 item">
            <div class="pitdate-user">
                <figure><img style="height: 200px; max-width: 100%;" src="{{asset('public/uploads/profile').'/'.$profile->email.'/'.$profile->image_path }}" alt="">
                    <span class="status f-online"></span>
                    <div class="save-post" title="Match Mark"><i class="fa fa-check-circle"></i></div>
                    <div class="likes heart" title="Like/Dislike">❤ <span>1.6M</span></div>
                    <div class="more">
                        <div class="more-post-optns"><i class="ti-more-alt"></i>
                            <ul>
                                <li class="send-mesg"><i class="fa fa-comment"></i>Send Message</li>
                                <li class="bad-report"><i class="fa fa-flag"></i>Report Post</li>
                                <li class="share-pst"><i class="fa fa-share-alt"></i>Share</li>
                                <li class="get-link"><i class="fa fa-link"></i>Copy Link</li>
                            </ul>
                        </div>
                    </div>
                </figure>
                <h4><a href="{{route('udetails',Hashids::encode($profile->user_profile_id))}}"    title="">{{$profile->users->first_name}}</a></h4>
                <span><i class="fa fa-map-marker"></i> {{$profile->Country->name}}</span>
            </div>
        </div>
    @endforeach
@endif
