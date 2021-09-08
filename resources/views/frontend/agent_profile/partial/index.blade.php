@if(!empty($uagentProfiles))
    @foreach($uagentProfiles as $profile)

        <div class="col-lg-3 col-md-4 col-sm-4 item">
            <div class="pitdate-user">
                @if(!empty($profile->image_path))

                <figure><img style="height: 200px; max-width: 100%;" src="{{asset('public/uploads/profile').'/'.$profile->email.'/'.$profile->image_path }}" alt="">
                    @else
                    <figure><img style="height: 200px; max-width: 100%;" src="{{asset('public/images/dummy.png') }}" alt="">
                            @endif

                    <span class="status f-online"></span>
                    <div class="save-post" title="Match Mark"><i class="fa fa-check-circle"></i></div>

                    <div class="more">
                        <div class="more-post-optns"><i class="ti-more-alt"></i>
                            <ul>
                                <li class="send-mesg" style="color: black"><i class="fa fa-comment"></i>Send Message</li>
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
