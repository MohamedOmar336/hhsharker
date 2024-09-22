@extends('admin.layouts.app')

@section('content')
    <div class="page-content-tab">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">{{ __('general.home') }}</a></li>
                                <li class="breadcrumb-item active">{{ __('general.chat') }}</li>
                            </ol>
                        </div>
                        <h4 class="page-title">{{ __('general.chat') }}</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12">
                    <div class="chat-box-left">
                        <ul class="nav nav-tabs mb-3 nav-justified" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="general_chat_tab" data-bs-toggle="tab" href="#general_chat"
                                    role="tab">{{ __('general.attributes.general') }}</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="group_chat_tab" data-bs-toggle="tab" href="#group_chat"
                                    role="tab">{{ __('general.attributes.groups') }}</a>
                            </li>
                            <!-- Remove the duplicate ID and fix the Whatsapp tab if needed -->
                            {{-- <li class="nav-item" role="presentation">
                                <a class="nav-link" id="whatsapp_chat_tab" data-bs-toggle="tab" href="#whatsapp_chat"
                                    role="tab">Whatsapp business</a>
                            </li> --}}
                        </ul>
                        <div class="chat-body-left" data-simplebar>
                            <div class="tab-content chat-list" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="general_chat">
                                    @foreach ($users as $user)
                                        <a href="#" class="media user" data-user-id="{{ $user->id }}">
                                            <div class="media-left">
                                                @if (isset($user->image) && $user->image)
                                                    <img src="{{ asset('images/') . '/' . $user->image }}"
                                                        data-user-image="{{ asset('images/') . '/' . $user->image }}"
                                                        alt="user" class="rounded-circle thumb-md" id="imageUser">
                                                @else
                                                    <img src="{{ asset('assets-admin\images\users\user-vector.png') }}"
                                                        data-user-image="{{ asset('assets-admin\images\users\user-vector.png') }}"
                                                        alt="user" class="rounded-circle thumb-md" id="imageUser">
                                                @endif
                                                <span class="round-10 {{ $user->is_online ? 'bg-success' : 'bg-secondary' }}"></span>
                                            </div><!-- media-left -->
                                            <div class="media-body">
                                                <div class="d-inline-block">
                                                    <h6>{{ $user->first_name . '  ' . $user->last_name }}</h6>
                                                </div>
                                                <div>
                                                    {{-- Additional user details --}}
                                                </div>
                                            </div><!-- end media-body -->
                                        </a> <!--end media-->
                                    @endforeach
                                </div><!--end general chat-->
                                <div class="tab-pane fade" id="group_chat">
                                    @foreach ($groups as $group)
                                        <a href="#" class="media group" data-group-id="{{ $group->id }}">
                                            <div class="media-left">
                                                <div class="avatar-box thumb-md align-self-center me-2">
                                                    <span
                                                        class="thumb-md justify-content-center d-flex align-items-center bg-soft-info rounded-circle me-2">
                                                        <i class="fas fa-globe"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h6>{{ $group->name }}</h6>
                                                <h6>{!! $group->description !!}</h6>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                                <div class="tab-pane fade" id="whatsapp_chat">
                                    @foreach ($whatsapps as $whatsapp)
                                        <a href="#" class="media whatsapp" data-whatsapp-id="{{ $whatsapp->id }}">
                                            <div class="media-left">
                                                <div class="avatar-box thumb-md align-self-center me-2">
                                                    <span
                                                        class="thumb-md justify-content-center d-flex align-items-center bg-soft-info rounded-circle me-2">
                                                        <i class="fas fa-globe"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <h6>{{ $whatsapp->phone_number }}</h6>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div><!--end tab-content-->
                        </div>
                    </div><!--end chat-box-left -->

                    <div class="chat-box-right">
                        <div class="chat-header">
                            <input type="hidden" name="receiver_id" id="receiver_id">
                            <a href="#" class="media">
                                <div class="media-left">
                                    <img src="{{ asset('assets-admin/images/users/user-vector.png') }}" alt="user"
                                        class="rounded-circle thumb-sm">
                                </div><!-- media-left -->
                                <div class="media-body">
                                    <div>
                                        <h6 class="m-0"></h6>
                                        <p class="mb-0"></p>
                                    </div>
                                </div><!-- end media-body -->
                            </a><!--end media-->

                        </div><!-- end chat-header -->


                        <div class="chat-body" data-simplebar>
                            <div class="chat-detail">

                            </div> <!-- end chat-detail -->
                        </div><!-- end chat-body -->

                        <div class="chat-footer">
                            <div class="row">
                                <div class="col-12 col-md-10">
                                    <input dir="auto" type="text" class="form-control" id="messageInput"
                                    placeholder="{{ __('general.attributes.placeholder_type_something_here') }}"></div> <div class="col-12 col-md-1">
                                    <button id="sendUserMessageButton"
                                        class="custom-send-button  btn btn-sm btn-de-primary">{{ __('general.btn.send') }}</button>
                                    <button id="sendGroupMessageButton"
                                        class="custom-send-button d-none btn btn-sm btn-de-primary">{{ __('general.btn.send') }}</button>
                                    <button id="sendWhatsappMessageButton"
                                        class="custom-send-button d-none btn btn-sm btn-de-primary">{{ __('general.btn.send') }}</button>
                                </div><!-- col-8 -->
                            </div><!-- end row -->
                        </div><!-- end chat-footer -->
                    </div><!--end chat-box-right -->

                </div> <!-- end col -->
            </div><!-- end row -->

        </div><!-- container -->

    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            var authenticatedUserId = '{{ auth()->id() }}';

            var currentUserImage = '{{ isset(auth()->user()->image) ? asset('images/' . auth()->user()->image) : asset('assets-admin/images/users/user-vector.png') }}';

            var phoneNumber = null;

            $('.user').click(function(e) {
                e.preventDefault();
                handleUserChat($(this).data('user-id'));
            });

            $('.group').click(function(e) {
                e.preventDefault();
                handleGroupChat($(this).data('group-id'), $(this).find('.media-body h6').text());
            });

            $('.whatsapp').click(function(e) {
                e.preventDefault();
                handleWhatsAppChat($(this).data('whatsapp-id'), $(this).find('.media-body h6').text());
            });

            function handleUserChat(otherUserId) {
                var chatHeader = $('.chat-header');
                var chatBody = $('.chat-detail');
                $('#receiver_id').val(otherUserId);

                $('#sendUserMessageButton').removeClass('d-none');
                $('#sendGroupMessageButton').addClass('d-none');
                $('#sendWhatsappMessageButton').addClass('d-none');

                $.ajax({
                    url: '{{ route('chat.checkRoom') }}',
                    method: 'POST',
                    data: {
                        other_user_id: otherUserId,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        chatHeader.find('h6').text(response.user.first_name + ' ' + response.user.last_name);
                        chatHeader.find('.media-left img').attr('src', response.image);

                        if (response.room_exists) {
                            var messages = response.messages;
                            var roomId = response.room_id;
                            listenForMessages(roomId);
                            displayMessages(chatBody, messages);
                        } else {
                            createRoom(otherUserId, chatBody);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error checking room:', error);
                    }
                });
            }

            function handleGroupChat(groupId, groupName) {
                var chatHeader = $('.chat-header');
                var chatBody = $('.chat-detail');
                $('#receiver_id').val(groupId);
                chatBody.empty();

                $('#sendGroupMessageButton').removeClass('d-none');
                $('#sendUserMessageButton').addClass('d-none');
                $('#sendWhatsappMessageButton').addClass('d-none');

                chatHeader.find('h6').text(groupName);
                chatHeader.find('.media-left img').remove(); // Remove user image for group chat

                listenForGroupMessages(groupId);
            }

            function createRoom(otherUserId, chatBody) {
                $.ajax({
                    url: '{{ route('chat.create') }}',
                    method: 'POST',
                    data: {
                        other_user_id: otherUserId,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        var roomId = response.room_id;
                        listenForMessages(roomId);
                        chatBody.empty(); // Clear chat body for new conversation
                    },
                    error: function(xhr, status, error) {
                        console.error('Error creating room:', error);
                    }
                });
            }

            function generateRoomId(userId1, userId2) {
                return userId1 < userId2 ? userId1 + '_' + userId2 : userId2 + '_' + userId1;
            }

            function listenForMessages(roomId) {
                var chatBody = $('.chat-detail');
                var receiver_id_value = $('#receiver_id').val();
                var roomIdNew = generateRoomId(authenticatedUserId, receiver_id_value);
                var messagesRef = firebase.database().ref('chatrooms/' + roomIdNew + '/messages');

                messagesRef.off(); // Remove any existing listeners

                messagesRef.on('child_added', function(snapshot) {
                    var message = snapshot.val();
                    displayMessage(chatBody, message);
                });
            }

            function listenForGroupMessages(groupId) {
                var chatBody = $('.chat-detail');
                var messagesRef = firebase.database().ref('grouprooms/' + groupId + '/messages');

                messagesRef.off(); // Remove any existing listeners

                messagesRef.on('child_added', function(snapshot) {
                    var message = snapshot.val();
                    displayMessage(chatBody, message, true);
                });
            }

            function displayMessages(chatBody, messages, isGroup = false) {
                chatBody.empty();
                messages.forEach(function(message) {
                    displayMessage(chatBody, message, isGroup);
                });
            }

            function displayMessage(chatBody, message, isGroup = false) {
                var mediaClass = message.sender_id === authenticatedUserId ? 'reverse' : '';
                var otherUserImage = $('#imageUser').data('user-image');
                var messageStatus = message.seen ? '' : '<span class="badge bg-primary">New</span>';
                var senderImage = isGroup ? getUserImage(message.sender_id) : otherUserImage;
                var senderName = isGroup ? getUserName(message.sender_id) : '';

                var media = `
                    <div class="media">
                        ${message.sender_id !== authenticatedUserId ? `
                        <div class="media-img">
                            <img src="${senderImage}" alt="user" class="rounded-circle thumb-sm">
                        </div>
                        ` : ''}
                        <div class="media-body ${mediaClass}">
                            <div class="chat-msg">
                                ${isGroup ? `<p><strong>${senderName}</strong></p>` : ''}
                                <p>${message.message} ${messageStatus}</p>
                            </div>
                        </div>
                        ${message.sender_id === authenticatedUserId ? `
                        <div class="media-img">
                            <img src="${currentUserImage}" alt="user" class="rounded-circle thumb-sm">
                        </div>
                        ` : ''}
                    </div>`;
                chatBody.append(media);
            }

            // Placeholder function to get user image (implement this based on your user data structure)
            function getUserImage(userId) {
                return '{{ asset('assets-admin/images/IMG_1520.png') }}';
            }

            // Placeholder function to get user name (implement this based on your user data structure)
            function getUserName(userId) {
                var userName = '';
                @foreach ($users as $user)
                    if (userId == {{ $user->id }}) {
                        userName = '{{ $user->first_name . ' ' . $user->last_name }}';
                    }
                @endforeach
                return userName;
            }

            // Handle send message button click for user chat
            $('#sendUserMessageButton').click(function() {
                var messageText = $('#messageInput').val();
                if (!messageText.trim()) {
                    return; // Do not send empty messages
                }
                var receiverIdValue = $('#receiver_id').val();
                var roomId = generateRoomId(authenticatedUserId, receiverIdValue);
                sendMessage(roomId, messageText);
                $('#messageInput').val(''); // Clear the input field
            });

            // Handle send message button click for group chat
            $('#sendGroupMessageButton').click(function() {
                var messageText = $('#messageInput').val();
                if (!messageText.trim()) {
                    return; // Do not send empty messages
                }
                var groupId = $('#receiver_id').val();
                sendMessage(groupId, messageText, true); // true indicates group message
                $('#messageInput').val(''); // Clear the input field
            });

            // Handle pressing Enter key to send message
            $('#messageInput').keypress(function(event) {
                if (event.which === 13) { // Check if the pressed key is Enter (key code 13)
                    event.preventDefault(); // Prevent the default behavior of the Enter key
                    if (!$('#sendGroupMessageButton').hasClass('d-none')) {
                        $('#sendGroupMessageButton').click(); // Trigger the sendGroupMessageButton click event
                    } else {
                        $('#sendUserMessageButton').click(); // Trigger the sendUserMessageButton click event
                    }
                }
            });

            function sendMessage(roomId, messageText, isGroup = false) {
                var messagesRef = firebase.database().ref((isGroup ? 'grouprooms/' : 'chatrooms/') + roomId + '/messages');
                var newMessageRef = messagesRef.push();
                newMessageRef.set({
                    sender_id: authenticatedUserId,
                    message: messageText,
                    timestamp: firebase.database.ServerValue.TIMESTAMP,
                    seen: false // Default to false
                });
            }

            // Mark message as seen when the user reads it
            function markMessageAsSeen(messageId) {
                $.ajax({
                    url: '{{ route('chat.markAsSeen') }}',
                    method: 'POST',
                    data: {
                        message_id: messageId,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        console.log('Message marked as seen');
                    },
                    error: function(xhr, status, error) {
                        console.error('Error marking message as seen:', error);
                    }
                });
            }

            // Call this function when user opens the chat window
            $('.user').click(function() {
                var otherUserId = $(this).data('user-id');
                var receiver_id_value = $('#receiver_id').val();
                var roomId = generateRoomId(authenticatedUserId, receiver_id_value);
                var messagesRef = firebase.database().ref('chatrooms/' + roomId + '/messages');

                messagesRef.once('value', function(snapshot) {
                    snapshot.forEach(function(childSnapshot) {
                        var message = childSnapshot.val();
                        if (message.sender_id !== authenticatedUserId && !message.seen) {
                            markMessageAsSeen(childSnapshot.key);
                            messagesRef.child(childSnapshot.key).update({
                                seen: true
                            });
                        }
                    });
                });
            });

            function sendwhatsapp(messageText) {
                $.ajax({
                    url: '{{ route('send-whatsapp-message') }}',
                    method: 'POST',
                    data: {
                        phone: this.phoneNumber,
                        message : messageText,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        var chatBody = $('.chat-detail');
                        console.log(response);
                        var media = `
                            <div class="media reverse ">
                                <div class="media-body">
                                    <div class="chat-msg">
                                        ${`<p><strong>${this.phoneNumber}</strong></p>`}
                                        <p>${response.message.message}</p>
                                    </div>
                                </div>
                            </div>`;
                        chatBody.append(media); // Append each message as it's created
                    },
                    error: function(xhr, status, error) {
                        console.error('Error creating room:', error);
                    }
                });
            }

            function handleWhatsAppChat(whatsAppRoomId, groupName) {
                // assign the phone number to the chat room
                this.phoneNumber = groupName;

                var chatHeader = $('.chat-header');
                var chatBody = $('.chat-detail');
                $('#receiver_id').val(whatsAppRoomId);
                chatBody.empty();

                $('#sendWhatsappMessageButton').removeClass('d-none');
                $('#sendUserMessageButton').addClass('d-none');
                $('#sendGroupMessageButton').addClass('d-none');

                chatHeader.find('h6').text(groupName);
                chatHeader.find('.media-left img').remove(); // Remove user image for group chat

                listenForWhatsAppMessages(whatsAppRoomId , groupName);
            }

            function listenForWhatsAppMessages(roomId){
                $.ajax({
                    url: '{{ route('whatsapp.room') }}', // Ensure this route is correctly defined in your Laravel routes
                    method: 'GET',
                    data: {
                        roomId: roomId,
                        _token: '{{ csrf_token() }}' // Correct way to include CSRF token in a Laravel project
                    },
                    success: function(response) {
                        console.log(response.message);
                        var chatBody = $('.chat-detail');
                        var messages = response.message.messages;
                        var otherUserImage = $('#imageUser').data('user-image');

                        messages.forEach(function(message) {
                            var mediaClass = message.direction === 'outgoing' ? 'reverse' : '';
                            var media = `
                                <div class="media ${mediaClass}">
                                    ${message.direction !== 'outgoing' ? `
                                    <div class="media-img">
                                        <img src="${otherUserImage}" alt="user" class="rounded-circle thumb-sm">
                                    </div>
                                    ` :  ''}
                                    <div class="media-body">
                                        <div class="chat-msg">
                                            ${`<p><strong>${response.message.phone_number}</strong></p>`}
                                            <p>${message.message}</p>
                                        </div>
                                    </div>
                                    ${message.sender_id !== 'outgoing' ? `
                                    <div class="media-img">
                                        <img src="${currentUserImage}" alt="user" class="rounded-circle thumb-sm">
                                    </div>
                                    ` : ''}
                                </div>`;
                            chatBody.append(media); // Append each message as it's created
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error creating room:', error);
                    }
                });

            }

            // Handle send message button click for user chat
            $('#sendWhatsappMessageButton').click(function() {
                var messageText = $('#messageInput').val();
                if (!messageText.trim()) {
                    return; // Do not send empty messages
                }
                sendwhatsapp(messageText);
                $('#messageInput').val(''); // Clear the input field
            });

        });
    </script>
@endpush
