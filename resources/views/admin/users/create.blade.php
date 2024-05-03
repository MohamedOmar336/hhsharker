@extends('admin.layouts.app')

@section('content')


<div class="page-wrapper">

    <!-- Page Content-->
    <div class="page-content-tab">

        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">{{ __('general.home') }}</a></li>
                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                <li class="breadcrumb-item active">Validation</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Validation</h4>
                    </div>
                    <!--end page-title-box-->
                </div>
                <!--end col-->
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Custom Validation Form</h4>
                            <p class="text-muted mb-0">Custom javascript form validation
                                library.
                            </p>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <form id="form-validation-2" class="form">
                                <div class="mb-2">
                                    <label for="username" class="mb-2">Username</label>
                                    <input class="form-control" type="text" id="username" placeholder="Enter Username">
                                    <small>Error Message</small>
                                </div>
                                <div class="mb-2">
                                    <label for="email" class="mb-2">Email</label>
                                    <input class="form-control" type="text" id="email" placeholder="Enter email">
                                    <small>Error Message</small>
                                </div>
                                <div class="mb-2">
                                    <label for="password" class="mb-2">Password</label>
                                    <input class="form-control" type="password" id="password" placeholder="Enter password">
                                    <small>Error Message</small>
                                </div>
                                <div class="mb-2">
                                    <label for="password2" class="mb-2">Confirm Password</label>
                                    <input class="form-control" type="password" id="password2" placeholder="Enter password again">
                                    <small>Error Message</small>
                                </div>
                                <button type="submit" class="btn btn-de-primary">Submit form</button>
                            </form><!--end form-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div> <!-- end col -->


            </div> <!-- end row -->

        </div><!-- container -->

       <!--Start Footer-->
       <!-- Footer Start -->
       <footer class="footer text-center text-sm-start">
           &copy; <script>
               document.write(new Date().getFullYear())
           </script> Metrica <span class="text-muted d-none d-sm-inline-block float-end">Crafted with <i
                   class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
       </footer>
       <!-- end Footer -->
       <!--end footer-->
    </div>
    <!-- end page content -->
</div>
<!-- end page-wrapper -->


@endsection
