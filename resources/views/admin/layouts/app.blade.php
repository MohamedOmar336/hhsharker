<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->isLocale('ar') ? 'rtl' : 'ltr' }}">

<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!--/Added by HTTrack -->

<head>


    <meta charset="utf-8" />
    <title>HH-shaker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link href="{{ asset('assets-admin/libs/litepicker/css/litepicker.css') }}" rel="stylesheet" type="text/css" />
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"> --}}
    <link href="{{ asset('assets-admin/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
    <link href="{{ asset('assets-admin/css/choices.min.css') }}" rel="stylesheet" type="text/css" />
{{--
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/css/fontawesome-iconpicker.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fontawesome-iconpicker/3.2.0/js/fontawesome-iconpicker.min.js"></script> --}}



    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets-admin/images/IMG_1465.png') }}">
    <link href="{{ asset('assets-admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets-admin/css/admin.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets-admin/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets-admin/libs/animate.css/animate.min.css') }}" rel="stylesheet" type="text/css" />

    @if (app()->isLocale('ar'))
        <link href="{{  asset('assets-admin/css/bootstrap-rtl.min.css') }}" rel="stylesheet" type="text/css" id="bootstrapStylesheet" />
        <link href="{{ asset('assets-admin/css/app-rtl.min.css') }}" rel="stylesheet" type="text/css" id="appStylesheet" />
    @else
        <link href="{{ asset('assets-admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrapStylesheet" />
        <link href="{{ asset('assets-admin/css/app.min.css') }}" rel="stylesheet" type="text/css" id="appStylesheet" />
    @endif



    <link href="{{ asset('assets-admin/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets-admin/libs/fullcalendar/main.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets-admin/libs/tabulator-tables/css/tabulator_bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body id="body">
    <div style="position: fixed; top: 20px; right: 20px; z-index: 1000;" id="popUpAlert">
        @if (session()->has('success'))
            <div class="alert alert-primary alert-dismissible fade show custom-class-for-success" role="alert">
                <strong>Success:</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show custom-class-for-error" role="alert">
                <strong>Error:</strong> {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <!-- Add more alert types as needed -->
    </div>

    <!-- leftbar-tab-menu -->
    @include('admin.layouts.side-nav')

    <!-- end leftbar-tab-menu-->

    <!-- Top Bar Start -->
    <!-- Top Bar Start -->
    <!-- Navbar -->
    @include('admin.layouts.top-nav')
    <!-- end navbar-->
    <!-- Top Bar End -->
    <!-- Top Bar End -->

    <div class="page-wrapper">
        @yield('content')

        {{-- @include('admin.layouts.footer') --}}
    </div>
    <!-- end page-wrapper -->



    <!-- Include JavaScript files -->

    <!-- Javascript  -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    {{-- <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script> --}}


    <!-- vendor js -->
      <script src="{{ asset('assets-admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets-admin/js/pages/form-wizard.js') }}"></script>

    <script src="{{ asset('assets-admin/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets-admin/js/pages/analytics-index.init.js') }}"></script>
    <script src="{{ asset('assets-admin/js/pages/helpdesk-index.init.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/litepicker/litepicker.js') }}"></script>
    <script src="{{ asset('assets-admin/js/pages/projects-index.init.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/tabulator-tables/js/tabulator.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets-admin/js/pages/sweet-alert.init.js') }}"></script>
    <script src="{{ asset('assets-admin/js/pages/analytics-customers.init.js')}}"></script>

    <script src="{{ asset('assets-admin/js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets-admin/js/pages/form-editor.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets-admin/js/app.js') }}"></script>
    <!-- App js -->
    <script src="{{ asset('assets-admin/js/jquery.dataTables.min.js') }}"></script>

    <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-database.js"></script>
    @stack('scripts')

    <script>
        function confirmDelete(event) {
            event.preventDefault(); // Prevent the default form submission
            Swal.fire({
                title: '{{ __("general.messages.confirm_delete_title") }}',
                text: '{{ __("general.messages.confirm_delete_text") }}',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#EE9A8F',
                cancelButtonColor: '#4AD7AA',
                confirmButtonText: '{{ __("general.messages.confirm_delete_confirm_button") }}',
                cancelButtonText: '{{ __("general.messages.confirm_delete_cancel_button") }}'
            }).then((result) => {
                if (result.isConfirmed) {
                    event.target.closest('form').submit(); // Submit the form
                }
            });
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const darkModeToggle = document.getElementById("darkModeToggle");
            const body = document.body;
            const darkModeIcon = document.getElementById("darkModeIcon");
            const lightModeIcon = document.getElementById("lightModeIcon");
            const appStylesheet = document.getElementById("appStylesheet");
            const bootstrapStylesheet = document.getElementById("bootstrapStylesheet");

            // Define the light and dark mode stylesheet URLs
            const lightModeStylesheetURL1 = "{{ app()->isLocale('ar') ? asset('assets-admin/css/app-rtl.min.css') : asset('assets-admin/css/app.min.css') }}";
            const lightModeStylesheetURL2 = "{{ app()->isLocale('ar') ? asset('assets-admin/css/bootstrap-rtl.min.css') : asset('assets-admin/css/bootstrap.min.css') }}";

            const darkModeStylesheetURL1 = "{{ app()->isLocale('ar') ? asset('assets-admin/css/app-dark-rtl.min.css') : asset('assets-admin/css/app-dark.min.css') }}";
            const darkModeStylesheetURL2 = "{{ app()->isLocale('ar') ? asset('assets-admin/css/bootstrap-dark-rtl.min.css') : asset('assets-admin/css/bootstrap-dark.min.css') }}";

            // Check if the user has a saved preference
            const savedDarkMode = localStorage.getItem("dark-mode");
            if (savedDarkMode && savedDarkMode === "enabled") {
                body.classList.add("dark-mode");
                darkModeIcon.classList.add("d-none");
                lightModeIcon.classList.remove("d-none");
                appStylesheet.href = darkModeStylesheetURL1;
                bootstrapStylesheet.href = darkModeStylesheetURL2;
            }

            darkModeToggle.addEventListener("click", function() {
                body.classList.toggle("dark-mode");

                // Toggle icons
                darkModeIcon.classList.toggle("d-none");
                lightModeIcon.classList.toggle("d-none");

                // Toggle stylesheets
                if (body.classList.contains("dark-mode")) {
                    appStylesheet.href = darkModeStylesheetURL1;
                    bootstrapStylesheet.href = darkModeStylesheetURL2;
                    localStorage.setItem("dark-mode", "enabled");
                } else {
                    appStylesheet.href = lightModeStylesheetURL1;
                    bootstrapStylesheet.href = lightModeStylesheetURL2;
                    localStorage.removeItem("dark-mode");
                }
            });
        });
    </script>


    <script>
        // Initialize Firebase
        firebase.initializeApp({
            apiKey: "AIzaSyDXrOKuqnjDvWm8IZ2r3wM8ZY_fG_QamOg",
            authDomain: "hhshaker-282b0.firebaseapp.com",
            projectId: "hhshaker-282b0",
            storageBucket: "hhshaker-282b0.appspot.com",
            messagingSenderId: "567064391154",
            appId: "1:567064391154:web:40574f6824350b17764f6b",
            measurementId: "G-N2VKVTGWMX"
        });

        // Retrieve Firebase Messaging object.
        const messaging = firebase.messaging();

        // Get a reference to the database service
        const database = firebase.database();

        // Register your service worker
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('{{ asset('firebase-messaging-sw.js') }}')
                .then((registration) => {
                    console.log('Service worker registered:', registration);
                    messaging.useServiceWorker(registration);
                    requestPermission();
                })
                .catch((error) => {
                    console.error('Service worker registration failed:', error);
                });
        }

        // Handle incoming messages
        messaging.onMessage((payload) => {
            console.log('Message received:', payload);
            setTimeout(function() {
                // newOrderNotification(payload);
            }, 1000);
        });

        function requestPermission() {
            console.log('Requesting permission...');
            Notification.requestPermission().then((permission) => {
                if (permission === 'granted') {
                    console.log('Notification permission granted.');

                    // Inside your web page script
                    navigator.serviceWorker.onmessage = function(event) {
                        console.log('Received a message from the service worker:', event.data);
                        // window.location.href = event.data.notification.click_action;
                    };

                    // Get registration token
                    messaging.getToken({
                        vapidKey: 'BEvsO2ckiVb_ZqmqRXOUl1hOqlpFVVMnX1s1tIZsQ8btPsvm9iPoFFFErpU4VaZO9eMiJzs4dEixMnyM-jg3PnI'
                    }).then((currentToken) => {
                        if (currentToken) {
                            console.log('Registration token:', currentToken);
                            console.log( currentToken);

                            // Send token to server or perform any action with the token
                        } else {
                            console.log('No registration token available.');
                        }
                    }).catch((error) => {
                        console.error('Error getting registration token:', error);
                    });
                } else {
                    console.log('Unable to get permission to notify.');
                }
            }).catch((error) => {
                console.error('Error requesting permission:', error);
            });
        }

        function listenForMessages(chatId) {
            firebase.database().ref('chats/' + chatId).on('child_added', function(snapshot) {
                const messageData = snapshot.val();
                displayMessage(messageData);
            });
        }

        function displayMessage(messageData) {
            const messageElement = document.createElement('div');
            messageElement.textContent = messageData.sender + ': ' + messageData.message;
            document.getElementById('messages').appendChild(messageElement);
        }

        function sendMessage(chatId, senderId, message) {
            firebase.database().ref('chats/' + chatId).push({
                senderId: senderId,
                message: message,
                timestamp: firebase.database.ServerValue.TIMESTAMP
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            const chatId = document.getElementById('chatId').value; // Get the chat ID from the HTML
            const senderId = '{{ Auth::user()->id }}';

            listenForMessages(chatId);

            document.getElementById('sendButton').addEventListener('click', function() {
                const message = document.getElementById('messageInput').value;
                sendMessage(chatId, senderId, message);
                document.getElementById('messageInput').value = '';
            });
        });
    </script>

    <script>
        // Wait for the document to load
        document.addEventListener('DOMContentLoaded', function() {
            // Select the pop-up alert
            var popUpAlert = document.getElementById('popUpAlert');

            // Set timeout to hide the alert after 5 seconds
            setTimeout(function() {
                // Check if pop-up alert exists
                if (popUpAlert) {
                    // Hide the pop-up alert
                    popUpAlert.style.display = 'none';
                }
            }, 5000);
        });
    </script>
</body>
<!--end body-->

<!-- Mirrored from mannatthemes.com/metrica/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Apr 2024 17:45:40 GMT -->

</html>
