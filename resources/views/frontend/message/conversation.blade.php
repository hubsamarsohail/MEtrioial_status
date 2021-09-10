@extends('frontend.master')

@section('content')




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
{{--                                                                                            <a class="active" href="#link1" data-toggle="tab">--}}
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
                                    <div class="col-lg-12 col-md-12">
                                        <div class="chat-header">
                                            <div class="chat-image">
                                                {!! $user->first_name !!}
                                            </div>
                                            <div class="chat-name font-weight-bold">
                                                {{ ucfirst($user->first_name) }}
                                                <i class="fa fa-circle user-status-head" id="userStatusHead{{ $friendInfo->web_user_id }}"></i>
                                            </div>
                                        </div>
                                        <div class="chat-body" id="chatBody">
                                            <div class="message-listing" id="messageWrapper">
                                            </div>
                                        </div>
                                        <div class="chat-box">
                                            <div class="chat-input bg-white" id="chatInput" contenteditable="">
                                            </div>
                                            <div class="chat-input-toolbar">
                                                <button title="Add File" class="btn btn-light btn-sm btn-file-upload">
                                                    <i class="fa fa-paperclip"></i>
                                                </button> |
                                                <button title="Bold" class="btn btn-light btn-sm tool-items" onclick="document.execCommand('bold', false, '')">
                                                    <i class="fa fa-bold tool-icon"></i>
                                                </button>
                                                <button title="Italic" class="btn btn-light btn-sm tool-items" onclick="document.execCommand('italic', false, '')">
                                                    <i class="fa fa-italic tool-icon"></i>
                                                </button>
                                            </div>
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
{{--                            <li class="chat-user-list @if($user->web_user_id == $friendInfo->web_user_id) active @endif">--}}
{{--                                <a href="{{ route('message.conversation', $user->web_user_id) }}">--}}
{{--                                    <div class="chat-image">--}}
{{--                                        {!! ($user->first_name) !!}--}}
{{--                                        <i class="fa fa-circle user-status-icon user-icon-{{ $user->web_user_id }}"></i>--}}
{{--                                    </div>--}}
{{--                                    <div class="chat-name font-weight-bold">--}}
{{--                                        {{ ucfirst($user->first_name) }}--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        @endforeach--}}
{{--                    @endif--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-9 chat-section">--}}

{{--        </div>--}}
{{--    </div>--}}

@endsection

@section('scripts')
    <script>
        $(function () {
            let $chatInput = $('.chat-input');
            let $chatInputToolbar = $('.chat-input-toolbar');
            let $chatBody = $('.chat-body');
            let $messageWrapper = $('#messageWrapper');

            let user_id = "{{ session()->get('user_web_data')['user_info']['web_user_id'] }}";
            let ip_address = '127.0.0.1';
            let socket_port = '8005';
            let socket = io(ip_address + ':' + socket_port);
            let friendId = "{{ $friendInfo->web_user_id }}";

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

            $chatInput.keypress(function (e) {
                let message = $(this).html();
                if(e.which == 13 && !e.shiftKey){
                    $chatInput.html("");
                    sendMessage(message);
                    return false;
                }
            });

            function sendMessage(message){
                let url = "{{ route('message.send-message') }}";
                let form = $(this);
                let formData = new FormData();

                let token = "{{ csrf_token() }}";

                formData.append('message', message);
                formData.append('_token', token);
                formData.append('receiver_id', friendId);

                appendMessageToSender(message);

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    dataType: 'JSON',
                    success: function (response) {
                        if(response.success){
                            const res = response;
                            console.log(res.data);
                        }
                    }
                });
            }

            function appendMessageToSender(message){
                let name = "{{ $myInfo->first_name }}";
                let image = '{!! $myInfo->first_name !!}';
                let userInfo = '<div class="col-md-12 user-info">\n' +
                    '<div class="chat-image">\n' + image +
                    '</div>\n' +
                    '<div class="chat-name font-weight-bold">\n' + name +
                    '<span class="small time text-gray-500" title="2021-08-23 10:30 PM">\n' +
                    '10:30 PM\n' +
                    '</span>\n' +
                    '</div>\n' +
                    '</div>\n';

                let messageContent = '<div class="col-md-12 message-content">\n' +
                    '<div class="message-text">\n' + message +
                    '</div>\n' +
                    '</div>';

                let newMessage = '<div class="row message align-items-center mb-2">'+ userInfo + messageContent +'</div>'
                $messageWrapper.append(newMessage);
            }

            function appendMessageToReceiver(message){
                let name = "{{ $friendInfo->first_name }}";
                let image = '{!! $friendInfo->first_name !!}';

                let userInfo = '<div class="col-md-12 user-info">\n' +
                    '<div class="chat-image">\n' + image +
                    '</div>\n' +
                    '<div class="chat-name font-weight-bold">\n' + name +
                    '<span class="small time text-gray-500" title="2021-08-23 10:30 PM">\n' +
                    '10:30 PM\n' +
                    '</span>\n' +
                    '</div>\n' +
                    '</div>\n';

                let messageContent = '<div class="col-md-12 message-content">\n' +
                    '<div class="message-text">\n' + message.content +
                    '</div>\n' +
                    '</div>';

                let newMessage = '<div class="row message align-items-center mb-2">'+ userInfo + messageContent +'</div>'
                $messageWrapper.append(newMessage);
            }

            socket.on("private-channel:App\\Events\\PrivateMessageEvent", function (message) {
                appendMessageToReceiver(message);
            });

        });
    </script>
@endsection
