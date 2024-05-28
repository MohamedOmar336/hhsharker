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
                                <li class="breadcrumb-item"><a href="#">Metrica</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item"><a href="#">Projects</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item active">Chat</li>
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
                                <a class="nav-link active"id="general_chat_tab" data-bs-toggle="tab" href="#general_chat"
                                    role="tab">General</a>
                            </li>
                        </ul>

                        <div class="chat-body-left" data-simplebar>
                            <div class="tab-content chat-list" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="general_chat">
                                    @foreach ($users as $user)
                                        <a href="#" class="media user" data-user-id="{{ $user->id }}">
                                            <div class="media-left">
                                                @if (isset($user->image) && $user->image)
                                                    <img src="{{ asset('images/') . '/' . $user->image }}" data-user-image="{{ asset('images/') . '/' . $user->image }}" alt="user"
                                                        class="rounded-circle thumb-md" id="imageUser">
                                                @else
                                                    <img src="{{ asset('assets-admin\images\users\user-vector.png') }}" data-user-image="{{ asset('assets-admin\images\users\user-vector.png') }}"
                                                        alt="user" class="rounded-circle thumb-md" id="imageUser">
                                                @endif
                                                <span class="round-10 bg-success"></span>
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
                            </div><!--end tab-content-->
                        </div>
                    </div><!--end chat-box-left -->

                    <div class="chat-box-right">
                        <div class="chat-header">
                            <input type="hidden" name="receiver_id" id="receiver_id">
                            <a href="#" class="media">
                                <div class="media-left">
                                    <img src="assets/images/users/user-4.jpg" alt="user"
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
                                <div class="col-12 col-md-9">
                                    <input type="text" class="form-control" id="messageInput"
                                        placeholder="Type something here...">
                                    <button id="sendButton">Send</button>
                                </div><!-- col-8 -->
                            </div><!-- end row -->
                        </div><!-- end chat-footer -->
                    </div><!--end chat-box-right -->

                </div> <!-- end col -->
            </div><!-- end row -->

        </div><!-- container -->

        <!--Start Rightbar-->
        <!--Start Rightbar/offcanvas-->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
            <div class="offcanvas-header border-bottom">
                <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
                <button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <h6>Account Settings</h6>
                <div class="p-2 text-start mt-3">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch1">
                        <label class="form-check-label" for="settings-switch1">Auto updates</label>
                    </div><!--end form-switch-->
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                        <label class="form-check-label" for="settings-switch2">Location Permission</label>
                    </div><!--end form-switch-->
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="settings-switch3">
                        <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                    </div><!--end form-switch-->
                </div><!--end /div-->
                <h6>General Settings</h6>
                <div class="p-2 text-start mt-3">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch4">
                        <label class="form-check-label" for="settings-switch4">Show me Online</label>
                    </div><!--end form-switch-->
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                        <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                    </div><!--end form-switch-->
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="settings-switch6">
                        <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                    </div><!--end form-switch-->
                </div><!--end /div-->
            </div><!--end offcanvas-body-->
        </div>
        <!--end Rightbar/offcanvas-->
        <!--end Rightbar-->
    </div>
@endsection


@push('scripts')
    <script>
        $(document).ready(function() {
            var authenticatedUserId = '{{ auth()->id() }}';
            var otherUserId = null; // Declare a global variable to store the clicked user ID
            var currentUserImage = '{{ isset(auth()->user()->image) ? asset('images/' . auth()->user()->image) : asset('assets-admin/images/users/user-vector.png') }}';

            $('.user').click(function(e) {
                e.preventDefault();

                var otherUserId = $(this).data('user-id');
                var chatHeader = $('.chat-header');
                var chatBody = $('.chat-detail');
                $('#receiver_id').val(otherUserId);

                $.ajax({
                    url: '{{ route('chat.checkRoom') }}',
                    method: 'POST',
                    data: {
                        other_user_id: otherUserId,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        chatHeader.find('h6').text(response.user.first_name + ' ' + response
                            .user.last_name);
                        chatHeader.find('.media-left img').attr('src', response.image);

                        if (response.room_exists) {
                            var messages = response.messages;
                            var roomId = response.room_id;
                            listenForMessages(roomId);
                            console.log(roomId);
                            displayMessages(chatBody, messages);
                        } else {
                            createRoom(otherUserId, chatBody);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error checking room:', error);
                    }
                });
            });

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

            function displayMessages(chatBody, messages) {
                chatBody.empty();
                messages.forEach(function(message) {
                    displayMessage(chatBody, message);
                });
            }

            function displayMessage(chatBody, message) {
                var mediaClass = message.sender_id === authenticatedUserId ? 'reverse' : '';
                var otherUserImage = $('#imageUser').data('user-image');
                console.log(chatBody, message);

                if(message.sender_id !== authenticatedUserId){
                    var media = `
                        <div class="media">
                            <div class="media-img">
                                <img src="${otherUserImage}" alt="user" class="rounded-circle thumb-sm">
                            </div>
                            <div class="media-body">
                                <div class="chat-msg">
                                    <p>${message.message}</p>
                                </div>
                            </div>
                        </div>`;
                        chatBody.append(media);
                }else{
                    var media = `
                    <div class="media">
                        <div class="media-body reverse">
                            <div class="chat-msg">
                                <p>${message.message}</p>
                            </div>
                        </div><!--end media-body-->
                        <div class="media-img">
                            <img src="${currentUserImage}" alt="user" class="rounded-circle thumb-sm">
                        </div>
                    </div><!--end media--> `;
                    chatBody.append(media);
                }
            }

            $('#sendButton').click(function() {
                var messageText = $('#messageInput').val();
                var receiver_id_value = $('#receiver_id').val();
                var roomId = generateRoomId(authenticatedUserId, receiver_id_value);
                sendMessage(roomId, messageText);
                $('#messageInput').val(''); // Clear the input field
            });

            function sendMessage(roomId, messageText) {
                var messagesRef = firebase.database().ref('chatrooms/' + roomId + '/messages');
                var newMessageRef = messagesRef.push();
                newMessageRef.set({
                    sender_id: authenticatedUserId,
                    message: messageText,
                    timestamp: firebase.database.ServerValue.TIMESTAMP
                });
            }
        });
    </script>
@endpush
