

            <!-- Page Content-->
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
                                        <li class="breadcrumb-item"><a href="#">Admins</a>
                                        </li><!--end nav-item-->
                                        <li class="breadcrumb-item active">Add Admin</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Add Admin</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12 col-lg-8 mx-auto">
                            <div class="card">
                                <div class="card-body">
                                    <form>
                                        <div class="form-group mb-3">
                                            <img src="assets/images/users/dr-pro.png" alt="" class="thumb-lg rounded me-2">
                                            <label class="btn btn-de-primary btn-sm text-light">
                                                Add Avatar <input type="file" hidden>
                                            </label>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6 mb-3">
                                                <input type="text" placeholder="First Name" class="form-control" name="First_Name" id="First_Name">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <input type="text" placeholder="Last Name" class="form-control" name="Last_Name" id="Last_Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12 mb-3">
                                                <input type="email" placeholder="Email" class="form-control" name="Email" id="Email">
                                            </div>
                                           
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-md-6 mb-3">
                                                <input type="text" placeholder="Date of Birth" class="form-control" name="DOB" id="DOB">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <input type="text" placeholder="Speciality" class="form-control" name="Speciality" id="Speciality">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <input type="text" placeholder="Phone No" class="form-control" name="Phone_No" id="Phone_No">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <select class="form-select">
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                       
                                        <div class="form-group">
                                            <textarea rows="5" placeholder="About Me..." class="form-control"></textarea>
                                            <button class="btn btn-de-primary btn-sm text-light px-4 mt-3 mb-0">Save</button> 
                                            <button class="btn btn-de-danger btn-sm text-light px-4 mt-3 mb-0">Cancel</button>                                                                                           
                                        </div>
                                    </form>
                                </div> <!--end card-body-->                                           
                            </div><!--end card-->
                        </div> <!--end col-->                                          
                    </div><!--end row-->

                </div><!-- container -->

                <!--Start Rightbar-->
                <!--Start Rightbar/offcanvas-->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
                    <div class="offcanvas-header border-bottom">
                      <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
                      <button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
               
