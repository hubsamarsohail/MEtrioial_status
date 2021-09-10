@extends('frontend.master')

@section('content')

    <style>
        .msg-pepl-list .nav-item > a {
            display: inline-block;
            width: 100%;
            padding: 12px 15px;
            position: relative;
        }
        a, a:hover, a:focus, a:active {
            color: inherit;
            outline: none;
            -webkit-text-decoration: none;
            -moz-text-decoration: none;
            -ms-text-decoration: none;
            -o-text-decoration: none;
            text-decoration: none;
        }
        .nav {
            list-style: none;
        }

        element {

        }
        .msg-pepl-list .nav-item {

            border-bottom: 1px solid #eaeaea;
            display: inline-block;
            margin-bottom: 0;
            position: relative;
            width: 100%;

        }
        .nav-tabs .nav-item {

            margin-bottom: 5px;

        }
        .nav-tabs .nav-item {

            margin-bottom: -1px;

        }
        *, ::after, ::before {

            box-sizing: border-box;

        }
        .nav {

            list-style: none;

        }
        body {

            color: #757a95;
            font-size: 14px;
            letter-spacing: 0.2px;

        }
        html, body {
             font-family: "Roboto", "Segoe Ui";
         }
        .msg-pepl-list .nav-item > a:hover, .msg-pepl-list .nav-item > a.active {
            background: rgba(0,0,0,.05);
        }
    </style>


    <section>
        <div class="gap2 no-gap gray-bg">
            <div class="container-fluid no-padding">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="message-users">
                            <div class="message-head">
                                <h4>Chat Messages</h4>

                            </div>
                            <div class="message-people-srch">
                                <div class="btn-group add-group" role="group">
                                    <button id="btnGroupDrop2" type="button" class="btn group dropdown-toggle user-filter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        All
                                    </button>

                                </div>

                            </div>
                            <div class="mesg-peple" style=" overflow:scroll;">
                                <ul class="nav nav-tabs nav-tabs--vertical msg-pepl-list">
                                    @if($users->count())
                                        @foreach($users as $user)

                                        <li class="nav-item unread">
                                            <a href="{{ route('message.conversation', $user->web_user_id) }}">
{{--                                        <a class="active" href="#link1" data-toggle="tab">--}}
                                            <figure><img src="images/resources/friend-avatar3.jpg" alt="">
                                                <span class="status f-online"></span>
                                            </figure>
                                            <div class="user-name">
                                                <h6 class="">{{$user->first_name}} </h6>
                                                <div class="chat-image">

                                                    {!! $user->first_name !!}
                                                    <i class="fa fa-circle user-status-icon user-icon-{{ $user->web_user_id }}"
                                                       title="Away"></i>
                                                </div>
                                                <div class="chat-name font-weight-bold">
                                                    {{ ucfirst($user->first_name) }}
                                                </div>
                                            </div>

                                        </a>
                                    </li>
                                        @endforeach
                                    @endif

                                </ul>
                            </div>
                        </div>
                        <div class="tab-content messenger">
                            <div class="tab-pane active fade show " id="link1" >
                                <div class="row merged">
                                    <div class="col-lg-12">
                                        <div class="mesg-area-head">
                                            <div class="active-user">
{{--                                                <figure><img src="images/resources/friend-avatar3.jpg" alt="">--}}
{{--                                                    <span class="status f-online"></span>--}}
{{--                                                </figure>--}}
{{--                                                <div>--}}
{{--                                                    <h6 class="unread">Andrew</h6>--}}
{{--                                                    <span>Online</span>--}}
{{--                                                </div>--}}
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="mesge-area">
                                            <ul class="conversations">

                                                    Chat conversation

                                            </ul>
                                        </div>
                                        <div class="message-writing-box " >
                                            <form method="post">
                                                <div class="text-area">
                                                    <input type="text" placeholder="write your message here..">
                                                    <button type="submit"><i class="fa fa-paper-plane-o"></i></button>
                                                </div>

                                            </form>
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

{{--    <div class="row chat-row">--}}
{{--        <div class="col-md-3">--}}
{{--            <div class="users">--}}
{{--                <h5>Users</h5>--}}

{{--                <ul class="list-group list-chat-item">--}}
{{--                    @if($users->count())--}}
{{--                        @foreach($users as $user)--}}

{{--                            <li class="chat-user-list">--}}
{{--                                <a href="{{ route('message.conversation', $user->web_user_id) }}">--}}
{{--                                    <div class="chat-image">--}}

{{--                                        {!! $user->first_name !!}--}}
{{--                                        <i class="fa fa-circle user-status-icon user-icon-{{ $user->web_user_id }}"--}}
{{--                                           title="Away"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="chat-name font-weight-bold">--}}
{{--                                        {{ ucfirst($user->name) }}--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        @endforeach--}}
{{--                    @endif--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-9">--}}
{{--            <h1>--}}
{{--                Message Section--}}
{{--            </h1>--}}

{{--            <p class="lead">--}}
{{--                Select User from the list to begin conversation--}}
{{--            </p>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection

@section('scripts')
    <script>
        $(function () {
            let user_id = "{{ session()->get('user_web_data')['user_info']['web_user_id'] }}";
            let ip_address = '127.0.0.1';
            let socket_port = '8005';
            let socket = io(ip_address + ':' + socket_port);

            socket.on('connect', function () {
                socket.emit('user_connected', user_id);
            });

            socket.on('userUpdateStatus', (data) => {
                let $userStatusIcon = $('user-status-icon');
                $userStatusIcon.removeClass('text-success');
                $userStatusIcon.attr('title', 'Away');
                $.each(data, function (key, val) {
                    console.log(val)
                    if (val !== null && val !== 0) {
                        let $userIcon = $('.user-icon-' + key);
                        $userIcon.addClass('text-success');
                        $userIcon.attr('title', 'Online');
                    }
                });
            });
        });
    </script>
@endsection
