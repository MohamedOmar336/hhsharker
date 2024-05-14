<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->isLocale('ar') ? 'rtl' : 'ltr' }}">

<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!--/Added by HTTrack -->

<head>


    <meta charset="utf-8" />
    <title>H & H Shacker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  
 
      <script src="{{ asset('assets-admin/js/tinymce/tinymce.min.js') }}"></script>
      <script src="{{ asset('assets-admin/js/pages/form-editor.init.js') }}"></script>
  
    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets-admin/images/favicon.ico') }}">


    <link href="{{ asset('assets-admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets-admin/css/admin.css') }}" rel="stylesheet" type="text/css" />
    

    @if (app()->isLocale('ar'))
        <link href="{{ asset('assets-admin/css/app-rtl.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets-admin/css/bootstrap-rtl.min.css') }}" rel="stylesheet" type="text/css" />
    @else
        <link href="{{ asset('assets-admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets-admin/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    @endif

  
    <link href="{{ asset('assets-admin/css/style.css') }}" rel="stylesheet" type="text/css" />

</head>

<body id="body">
    <div style="position: fixed; top: 20px; right: 20px; z-index: 1000;">
        @if(session()->has('success'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>Success:</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
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

    <!-- vendor js -->
    <script src="{{ asset('assets-admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets-admin/libs/feather-icons/feather.min.js') }}"></script>

    <script src="{{ asset('assets-admin/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets-admin/js/pages/analytics-index.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ asset('assets-admin/js/app.js') }}"></script>

    <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-messaging.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-database.js"></script>
    @stack('scripts')

    <script>
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
                //newOrderNotification(payload);
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
                        //window.location.href = event.data.notification.click_action;
                    };
                    // Get registration token
                    messaging.getToken({
                        vapidKey: 'BEvsO2ckiVb_ZqmqRXOUl1hOqlpFVVMnX1s1tIZsQ8btPsvm9iPoFFFErpU4VaZO9eMiJzs4dEixMnyM-jg3PnI'
                    }).then((currentToken) => {
                        console.log(currentToken);
                        // if (currentToken) {
                        //     sendTokenToServer(currentToken);
                        // } else {
                        //     console.log('No registration token available.');
                        // }
                    }).catch((error) => {
                        console.error('Error getting registration token:', error);
                    });
                } else {
                    console.log('Unable to get permission to notify.');
                }
            });
        }
    </script>
</body>
<!--end body-->

<!-- Mirrored from mannatthemes.com/metrica/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Apr 2024 17:45:40 GMT -->

</html>
