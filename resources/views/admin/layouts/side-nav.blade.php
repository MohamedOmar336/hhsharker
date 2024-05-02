
  <!-- leftbar-tab-menu -->
  <div class="leftbar-tab-menu">
    <div class="main-icon-menu">
        <a href="{{ url('/home') }}" class="logo logo-metrica d-block text-center">
            <span>
<<<<<<< HEAD
                <img src="{{ asset('assets/images/logo-sm.png') }}" alt="logo-small" class="logo-sm">
=======
                <img src="{{ asset('assets-admin/images/logo-sm.png') }}" alt="logo-small" class="logo-sm">
>>>>>>> 088d0899d75ec8799ed092a2bc34374d64b41f04
            </span>
        </a>
        <div class="main-icon-menu-body">
            <div class="position-reletive h-100" data-simplebar style="overflow-x: hidden;">
                <ul class="nav nav-tabs" role="tablist" id="tab-menu">
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboard" data-bs-trigger="hover">
                        <a href="{{ url('#MetricaDashboard') }}" id="dashboard-tab" class="nav-link">
                            <i class="ti ti-smart-home menu-icon"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Apps" data-bs-trigger="hover">
                        <a href="{{ url('#MetricaApps') }}" id="apps-tab" class="nav-link">
                            <i class="ti ti-apps menu-icon"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->

<<<<<<< HEAD
                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Pages" data-bs-trigger="hover">
                        <a href="{{ url('#MetricaPages') }}" id="pages-tab" class="nav-link">
                            <i class="ti ti-files menu-icon"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->

                    <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Authentication" data-bs-trigger="hover">
                        <a href="{{ url('#MetricaAuthentication') }}" id="authentication-tab" class="nav-link">
                            <i class="ti ti-shield-lock menu-icon"></i>
                        </a><!--end nav-link-->
                    </li><!--end nav-item-->
=======
>>>>>>> 088d0899d75ec8799ed092a2bc34374d64b41f04
                </ul><!--end nav-->
            </div><!--end /div-->
        </div><!--end main-icon-menu-body-->
        <div class="pro-metrica-end">
<<<<<<< HEAD
            <a href="{{ url('') }}" class="profile">
                <img src="{{ asset('assets/images/users/user-4.jpg') }}" alt="profile-user" class="rounded-circle thumb-sm">
=======
            <a href="#" class="profile">
                <img src="{{ asset('assets-admin/images/users/user-4.jpg ') }}" alt="profile-user" class="rounded-circle thumb-sm">
>>>>>>> 088d0899d75ec8799ed092a2bc34374d64b41f04
            </a>
        </div><!--end pro-metrica-end-->
    </div>
    <!--end main-icon-menu-->

    <div class="main-menu-inner">
        <!-- LOGO -->
        <div class="topbar-left">
<<<<<<< HEAD
            <a href="{{ url('/home') }}" class="logo">
                <span>
                    <img src="{{ asset('assets/images/logo-dark.png') }}" alt="logo-large" class="logo-lg logo-dark">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="logo-large" class="logo-lg logo-light">
=======
            <a class='logo' href='{{ route('home') }}'>
                <span>
                    <img src="{{ asset('assets-admin/images/logo-dark.png') }}" alt="logo-large" class="logo-lg logo-dark">
                    <img src="{{ asset('assets-admin/images/logo-dark') }}" alt="logo-=large" class="logo-lg logo-light">
>>>>>>> 088d0899d75ec8799ed092a2bc34374d64b41f04
                </span>
            </a><!--end logo-->
        </div><!--end topbar-left-->
        <!--end logo-->
        <div class="menu-body navbar-vertical tab-content" data-simplebar>
            <div id="MetricaDashboard" class="main-icon-menu-pane tab-pane" role="tabpanel"
                aria-labelledby="dasboard-tab">
                <div class="title-box">
                    <h6 class="menu-title"></h6>
                </div>

                <ul class="nav flex-column">
                    <li class="nav-item">
<<<<<<< HEAD
                        <a class="nav-link" href="{{ url('/home') }}">Analytics</a>
                    </li><!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('crm-index.html') }}">CRM</a>
                    </li><!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('projects-index.html') }}">Project</a>
                    </li><!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('ecommerce-index.html') }}">Ecommerce</a>
                    </li><!--end nav-item-->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('helpdesk-index.html') }}">Helpdesk</a>
=======
                        <a class='nav-link' href="{{ route('home') }}">{{ __('general.dashboard') }}</a>
>>>>>>> 088d0899d75ec8799ed092a2bc34374d64b41f04
                    </li><!--end nav-item-->
                </ul><!--end nav-->
            </div><!-- end Dashboards -->

            <div id="MetricaApps" class="main-icon-menu-pane tab-pane" role="tabpanel"
                aria-labelledby="apps-tab">
                <div class="title-box">
                    <h6 class="menu-title"></h6>
                </div>

                <div class="collapse navbar-collapse" id="sidebarCollapse">
                    <!-- Navigation -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
<<<<<<< HEAD
                            <a class="nav-link" href="{{ url('#sidebarAnalytics') }}" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarAnalytics">
                                Analytics
=======
                            <a class="nav-link" href="#sidebarEcommerce" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarEcommerce">
                                {{ __('general.attributes.product') }}
>>>>>>> 088d0899d75ec8799ed092a2bc34374d64b41f04
                            </a>
                            <div class="collapse " id="sidebarAnalytics">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
<<<<<<< HEAD
                                        <a href="{{ url('analytics-customers.html') }}" class="nav-link ">Customers</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a href="{{ url('analytics-reports.html') }}" class="nav-link ">Reports</a>
=======
                                        <a class='nav-link' href='{{ route('products.index') }}'>{{ __('general.side.products-list') }}</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class='nav-link' href='{{ route('products.create') }}'>{{ __('general.actions.new') }}</a>
>>>>>>> 088d0899d75ec8799ed092a2bc34374d64b41f04
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarAnalytics-->
            </li><!--end nav-item-->

<<<<<<< HEAD
            <li class="nav-item">
                <a class="nav-link" href="{{ url('#sidebarCRM') }}" data-bs-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="sidebarCRM">
                    CRM
                </a>
                <div class="collapse" id="sidebarCRM">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('crm-contacts.html') }}">Contacts</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('crm-opportunities.html') }}">Opportunities</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('crm-leads.html') }}">Leads</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('crm-customers.html') }}">Customers</a>
                        </li><!--end nav-item-->
                    </ul><!--end nav-->
                </div><!--end sidebarCRM-->
            </li><!--end nav-item-->


<li class="nav-item">
    <a class="nav-link" href="{{ url('#sidebarProjects') }}" data-bs-toggle="collapse" role="button"
        aria-expanded="false" aria-controls="sidebarProjects">
        Projects
    </a>
    <div class="collapse" id="sidebarProjects">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('projects-clients.html') }}">Clients</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('projects-team.html') }}">Team</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('projects-project.html') }}">Project</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('projects-task.html') }}">Task</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('projects-kanban-board.html') }}">Kanban Board</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('projects-chat.html') }}">Chat</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('projects-users.html') }}">Users</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('projects-create.html') }}">Project Create</a>
            </li><!--end nav-item--> 
        </ul><!--end nav-->
    </div><!--end sidebarProjects-->
</li><!--end nav-item-->

<li class="nav-item">
    <a class="nav-link" href="{{ url('#sidebarEcommerce') }}" data-bs-toggle="collapse" role="button"
        aria-expanded="false" aria-controls="sidebarEcommerce">
        Ecommerce
    </a>
    <div class="collapse" id="sidebarEcommerce">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('ecommerce-products.html') }}">Products</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('ecommerce-product-list.html') }}">Product List</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('ecommerce-product-detail.html') }}">Product Detail</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('ecommerce-cart.html') }}">Cart</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('ecommerce-checkout.html') }}">Checkout</a>
            </li><!--end nav-item-->
        </ul><!--end nav-->
    </div><!--end sidebarEcommerce-->
</li><!--end nav-item-->

<li class="nav-item">
    <a class="nav-link" href="{{ url('#sidebarHelpdesk') }}" data-bs-toggle="collapse" role="button"
        aria-expanded="false" aria-controls="sidebarHelpdesk">
        Helpdesk
    </a>
    <div class="collapse" id="sidebarHelpdesk">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('helpdesk-tickets.html') }}">Tickets</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('helpdesk-reports.html') }}">Reports</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('helpdesk-agents.html') }}">Agents</a>
            </li><!--end nav-item-->
        </ul><!--end nav-->
    </div><!--end sidebarHelpdesk-->
</li><!--end nav-item-->


<li class="nav-item">
    <a class="nav-link" href="{{ url('#sidebarHospital') }}" data-bs-toggle="collapse" role="button"
        aria-expanded="false" aria-controls="sidebarHospital">
        Hospital
    </a>
    <div class="collapse" id="sidebarHospital">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="{{ url('#sidebarAppointments') }}" class="nav-link" data-bs-toggle="collapse"
                    role="button" aria-expanded="false" aria-controls="sidebarAppointments">
                    Appointments
                </a>
                <div class="collapse" id="sidebarAppointments">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('hospital-doctor-shedule.html') }}">Dr. Shedule</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('hospital-all-appointments.html') }}">All Appointments</a>
                        </li><!--end nav-item-->
                    </ul><!--end nav-->
                </div><!--end sidebarAppointments-->
            </li><!--end nav-item-->
            <li class="nav-item">
                <a href="{{ url('#sidebarDoctors') }}" class="nav-link" data-bs-toggle="collapse"
                    role="button" aria-expanded="false" aria-controls="sidebarDoctors">
                    Doctors
                </a>
                <div class="collapse" id="sidebarDoctors">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('hospital-all-doctors.html') }}">All Doctors</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('hospital-add-doctor.html') }}">Add Doctor</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('hospital-doctor-edit.html') }}">Doctor Edit</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('hospital-doctor-profile.html') }}">Doctor Profile</a>
                        </li><!--end nav-item-->
                    </ul><!--end nav-->
                </div><!--end sidebarDoctors-->
            </li><!--end nav-item-->
            <li class="nav-item">
                <a href="{{ url('#sidebarPatients') }}" class="nav-link" data-bs-toggle="collapse"
                    role="button" aria-expanded="false" aria-controls="sidebarPatients">
                    Patients
                </a>
                <div class="collapse" id="sidebarPatients">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('hospital-all-patients.html') }}">All Patients</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('hospital-add-patient.html') }}">Add Patient</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('hospital-patient-edit.html') }}">Patient Edit</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('hospital-patient-profile.html') }}">Patient Profile</a>
                        </li><!--end nav-item-->
                    </ul><!--end nav-->
                </div><!--end sidebarPatients-->
            </li><!--end nav-item-->
            <li class="nav-item">
                <a href="{{ url('#sidebarPayments') }}" class="nav-link" data-bs-toggle="collapse"
                    role="button" aria-expanded="false" aria-controls="sidebarPayments">
                    Payments
                </a>
                <div class="collapse" id="sidebarPayments">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('hospital-all-payments.html') }}">All Payments</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('hospital-payment-invoice.html') }}">Payment Invoice</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('hospital-cashless-payments.html') }}">Cashless Payments</a>
                        </li><!--end nav-item-->
                    </ul><!--end nav-->
                </div><!--end sidebarPayments-->
            </li><!--end nav-item-->
            <li class="nav-item">
                <a href="{{ url('#sidebarStaff') }}" class="nav-link" data-bs-toggle="collapse"
                    role="button" aria-expanded="false" aria-controls="sidebarStaff">
                    Staff
                </a>
                <div class="collapse" id="sidebarStaff">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('hospital-all-staff.html') }}">All Staff</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('hospital-add-member.html') }}">Add Member</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('hospital-edit-member.html') }}">Edit Member</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('hospital-member-profile.html') }}">Member Profile</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('hospital-salary.html') }}">Staff Salary</a>
                        </li><!--end nav-item-->
                    </ul><!--end nav-->
                </div><!--end sidebarStaff-->
            </li><!--end nav-item-->
            <li class="nav-item">
                <a href="{{ url('#sidebarGeneral') }}" class="nav-link" data-bs-toggle="collapse"
                    role="button" aria-expanded="false" aria-controls="sidebarGeneral">
                    General
                </a>
                <div class="collapse" id="sidebarGeneral">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('hospital-all-rooms.html') }}">Room Allotments</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('hospital-expenses.html') }}">Expenses Report</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('hospital-departments.html') }}">Departments</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('hospital-insurance-company.html') }}">Insurance Co.</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('hospital-events.html') }}">Events</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('hospital-leaves.html') }}">Leaves</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('hospital-holidays.html') }}">Holidays</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('hospital-attendance.html') }}">Attendance</a>
                        </li><!--end nav-item-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('hospital-chat.html') }}">Chat</a>
                        </li><!--end nav-item-->
                    </ul><!--end nav-->
                </div><!--end sidebarGeneral-->
            </li><!--end nav-item-->
        </ul><!--end navbar-nav-->
    </div><!--end sidebarCollapse-->
</li><!--end nav-item-->

<li class="nav-item">
    <a class="nav-link" href="{{ url('#sidebarEmail') }}" data-bs-toggle="collapse" role="button"
        aria-expanded="false" aria-controls="sidebarEmail">
        Email
    </a>
    <div class="collapse" id="sidebarEmail">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('apps-email-inbox.html') }}">Inbox</a>
            </li><!--end nav-item-->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('apps-email-read.html') }}">Read Email</a>
            </li><!--end nav-item-->
        </ul><!--end nav-->
    </div><!--end sidebarEmail-->
</li><!--end nav-item-->

<li class="nav-item">
    <a class="nav-link" href="{{ url('apps-chat.html') }}">Chat</a>
</li><!--end nav-item-->
<li class="nav-item">
    <a class="nav-link" href="{{ url('apps-contact-list.html') }}">Contact List</a>
</li><!--end nav-item-->
<li class="nav-item">
    <a class="nav-link" href="{{ url('apps-calendar.html') }}">Calendar</a>
</li><!--end nav-item-->
<li class="nav-item">
    <a class="nav-link" href="{{ url('apps-invoice.html') }}">Invoice</a>
</li><!--end nav-item-->



                            </ul><!--end navbar-nav--->
                        </div><!--end sidebarCollapse-->
                    </div><!-- end Crypto -->



<div id="MetricaPages" class="main-icon-menu-pane tab-pane" role="tabpanel" aria-labelledby="pages-tab">
    <div class="title-box">
        <h6 class="menu-title">Pages</h6>
    </div>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('pages-profile.html') }}">Profile</a>
        </li><!--end nav-item-->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('pages-tour.html') }}">Tour</a>
        </li><!--end nav-item-->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('pages-timeline.html') }}">Timeline</a>
        </li><!--end nav-item-->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('pages-treeview.html') }}">Treeview</a>
        </li><!--end nav-item-->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('pages-starter.html') }}">Starter Page</a>
        </li><!--end nav-item-->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('pages-pricing.html') }}">Pricing</a>
        </li><!--end nav-item-->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('pages-blogs.html') }}">Blogs</a>
        </li><!--end nav-item-->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('pages-faq.html') }}">FAQs</a>
        </li><!--end nav-item-->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('pages-gallery.html') }}">Gallery</a>
        </li><!--end nav-item-->
    </ul><!--end nav-->
</div><!-- end Pages -->

<div id="MetricaAuthentication" class="main-icon-menu-pane tab-pane" role="tabpanel" aria-labelledby="authentication-tab">
    <div class="title-box">
        <h6 class="menu-title">Authentication</h6>
    </div>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('auth-login.html') }}">Log in</a>
        </li><!--end nav-item-->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('auth-login-alt.html') }}">Log in alt</a>
        </li><!--end nav-item-->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('auth-register.html') }}">Register</a>
        </li><!--end nav-item-->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('auth-register-alt.html') }}">Register-alt</a>
        </li><!--end nav-item-->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('auth-recover-pw.html') }}">Re-Password</a>
        </li><!--end nav-item-->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('auth-recover-pw-alt.html') }}">Re-Password-alt</a>
        </li><!--end nav-item-->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('auth-lock-screen.html') }}">Lock Screen</a>
        </li><!--end nav-item-->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('auth-lock-screen-alt.html') }}">Lock Screen-alt</a>
        </li><!--end nav-item-->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('auth-404.html') }}">Error 404</a>
        </li><!--end nav-item-->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('auth-404-alt.html') }}">Error 404-alt</a>
        </li><!--end nav-item-->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('auth-500.html') }}">Error 500</a>
        </li><!--end nav-item-->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('auth-500-alt.html') }}">Error 500-alt</a>
        </li><!--end nav-item-->
    </ul><!--end nav-->
</div><!-- end Authentication-->
</div><!-- end main-menu-inner-->
=======
                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarUsers" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarUsers">
                                {{ __('general.attributes.user') }}
                            </a>
                            <div class="collapse " id="sidebarUsers">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class='nav-link' href='{{ route('users.index') }}'>{{ __('general.side.users-list') }}</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class='nav-link' href='{{ route('users.create') }}'>{{ __('general.actions.new') }}</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarUsers-->
                        </li><!--end nav-item-->

                        <li class="nav-item">
                            <a class="nav-link" href="#sidebarCategories" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarCategories">
                                {{ __('general.attributes.categories') }}
                            </a>
                            <div class="collapse " id="sidebarCategories">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class='nav-link' href='{{ route('users.index') }}'>{{ __('general.attributes.categories-list') }}</a>
                                    </li><!--end nav-item-->
                                    <li class="nav-item">
                                        <a class='nav-link' href='{{ route('users.create') }}'>{{ __('general.actions.new') }}</a>
                                    </li><!--end nav-item-->
                                </ul><!--end nav-->
                            </div><!--end sidebarCategories-->
                        </li><!--end nav-item-->

                    </ul><!--end navbar-nav--->
                </div><!--end sidebarCollapse-->
            </div><!-- end Crypto -->

>>>>>>> 088d0899d75ec8799ed092a2bc34374d64b41f04
        </div>
        <!-- end leftbar-tab-menu-->

