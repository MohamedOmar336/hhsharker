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
                                    <li class="breadcrumb-item active">{{ __('general.attributes.users') }}</li>
                                </ol>
                            </div>
                            <h4 class="page-title">{{ __('general.attributes.users') }}</h4>
                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div>
                <!-- end page title end breadcrumb -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Our Reguler Users</h4>
                                    </div><!--end col-->
                                </div>  <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead class="thead-light">
                                        <tr>
                                            <th>Users</th>
                                            <th>Rols</th>
                                            <th>Email</th>
                                            <th>Contact No</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td><img src="assets/images/users/user-3.jpg" alt="" class="rounded-circle thumb-sm me-1"> Aaron Poulin</td>
                                            <td>Agent</td>
                                            <td>AaronPoulin@example.com</td>
                                            <td>+21 123456789</td>
                                            <td><span class="badge badge-soft-success">Active</span></td>
                                            <td>
                                                <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                                <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/users/user-4.jpg" alt="" class="rounded-circle thumb-sm me-1"> Richard Ali</td>
                                            <td>Administrator</td>
                                            <td>RichardAli@example.com</td>
                                            <td>+41 123456789</td>
                                            <td><span class="badge badge-soft-success">Active</span></td>
                                            <td>
                                                <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                                <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><img src="assets/images/users/user-5.jpg" alt="" class="rounded-circle thumb-sm me-1"> Juan Clark</td>
                                            <td>Contributor</td>
                                            <td>JuanClark@example.com</td>
                                            <td>+65 123456789</td>
                                            <td><span class="badge badge-soft-success">Active</span></td>
                                            <td>
                                                <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                                <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><img src="assets/images/users/user-6.jpg" alt="" class="rounded-circle thumb-sm me-1"> Albert Hull</td>
                                            <td>Agent</td>
                                            <td>AlbertHull@example.com</td>
                                            <td>+88 123456789</td>
                                            <td><span class="badge badge-soft-success">Active</span></td>
                                            <td>
                                                <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                                <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><img src="assets/images/users/user-7.jpg" alt="" class="rounded-circle thumb-sm me-1"> Crystal Darling</td>
                                            <td>Contributor</td>
                                            <td>CrystalDarling@example.com</td>
                                            <td>+56 123456789</td>
                                            <td><span class="badge badge-soft-danger">Deactivated</span></td>
                                            <td>
                                                <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                                <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><img src="assets/images/users/user-8.jpg" alt="" class="rounded-circle thumb-sm me-1"> Thomas Milligan</td>
                                            <td>Administrator</td>
                                            <td>homasMilligan@example.com</td>
                                            <td>+35 123456789</td>
                                            <td><span class="badge badge-soft-danger">Deactivated</span></td>
                                            <td>
                                                <a href="#"><i class="las la-pen text-secondary font-16"></i></a>
                                                <a href="#"><i class="las la-trash-alt text-secondary font-16"></i></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table><!--end /table-->
                                </div><!--end /tableresponsive-->
                                <div class="row">
                                    <div class="col">
                                        <a class="btn btn-outline-light btn-sm px-4" href="{{ route('users.create') }}">{{ __('general.actions.new') }}</a>
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <nav aria-label="...">
                                            <ul class="pagination pagination-sm mb-0">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul><!--end pagination-->
                                        </nav><!--end nav-->
                                    </div> <!--end col-->
                                </div><!--end row-->
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!-- end col -->
                </div><!--end row-->

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
@endsection
