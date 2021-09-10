@if(!empty($uProfiles))
    @foreach($uProfiles as $profile)
        <div class="col-lg-3 col-md-4 col-sm-4 item">
            <div class="pitdate-user">

                @if(!empty($profile->image_path))
                    <figure>
                        <a href="{{route('udetails',Hashids::encode($profile->user_profile_id))}}" >
                            <img style="height: 200px; max-width: 100%;" src="{{asset('public/uploads/profile').'/'.$profile->email.'/'.$profile->image_path }}" alt="">
                        </a>
                        @else
                            <figure>
                                <img style="height: 200px; max-width: 100%;" src="{{asset('public/images/dummy.png') }}" alt="">
                                @endif
                                <span class="status f-online"></span>

                                @if(isset($profile->my_favourite[0]))
                                    <div class="likes heart"  title="Remove Favourite" onclick="removefavourite({{$profile->user_profile_id}})" style="color: darkred; font-size: 30px; bottom: 22px;">❤<span style="margin: 8px"  >{{ $profile->fav_count }}</span></div>
                                @else
                                    <div class="likes heart" title="Add Favourite" onclick="addfavourite({{$profile->user_profile_id}})" style="font-size: 30px; bottom: 22px;" >❤<span style="margin: 8px" >{{ $profile->fav_count }}</span></div>
                                @endif

                                <div class="more">
                                    <div class="more-post-optns"><i class="ti-more-alt"></i>
                                        <ul>
                                            <li class="send-mesg" style="color: #0b0b0b"><i class="fa fa-comment"></i>Send Message</li>
                                            <li class="bad-report" style="color: #0b0b0b" data-id ="user_id-{{$profile->user_profile_id}}" >
                                                <i  class="fa fa-flag"></i>Report User</li>
                                         </ul>
                                    </div>
                                </div>
                            </figure>
                    </figure>
                    <h4><a href="{{route('udetails',Hashids::encode($profile->user_profile_id))}}"    title="">{{$profile->users->first_name}}</a></h4>
                    <span><i class="fa fa-map-marker"></i> {{$profile->Country->name}}</span>
            </div>
        </div>
    @endforeach
@endif

<script>
    $('.bad-report').on('click', function () {
        var web_user = $(this).attr('data-id');
        var web_user_id = web_user.split("-");
        $('#to_user_id').val(web_user_id[1]);
        $('.popup-wraper3').addClass('active');
        return false;
    });
</script>



