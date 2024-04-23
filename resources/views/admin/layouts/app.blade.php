<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>


    <meta charset="utf-8" />
    <title>Metrica - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    @include('partials.head')

</head>

<body id="body">
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
    @include('admin.admins.edit_admin')
    @include('admin.layouts.footer')
    </div>
    <!-- end page-wrapper -->

  
    <!-- Include JavaScript files -->
  
    <!-- Include additional scripts -->
    @include('partials.scripts')

</body>
<!--end body-->

<!-- Mirrored from mannatthemes.com/metrica/default/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Apr 2024 17:45:40 GMT -->

</html>
