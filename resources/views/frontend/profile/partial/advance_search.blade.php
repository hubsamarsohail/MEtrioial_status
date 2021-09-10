<div class="create-post ">Best Matches for you</div>
@if(!empty($uProfiles))
@foreach($uProfiles as $profile)
<div class="rlted-video">
    @if(!empty($profile->image_path))
    <figure><img style="max-width: 100%; height: 105px; width: 130px" src="{{asset('public/uploads/profile').'/'.$profile->email.'/'.$profile->image_path }}" alt="">
        @else
        <figure><img style="height: 200px; max-width: 100%;" src="{{asset('public/images/dummy.png') }}" alt="">
        @endif
        <div class="save-post save" title="Match Mark"><i class="fa fa-check-circle"></i></div>
    </figure>
    <div class="tube-pst-meta">
        <h5><a href="#" title="">{{$profile->users->first_name}} - {{$profile->users->last_name}}</a></h5>
        <span>{{$profile->nationality}}</span>
        <div class="user-fig">
            <span>{{$profile->cast}}</span>
            <a href="#" title=""></a>
        </div>
    </div>
</div>
@endforeach
@endif
