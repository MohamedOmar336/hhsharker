@extends('admin.layouts.app')

@section('content')
    <!-- Page Content-->
    <div class="page-content-tab">

        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Metrica</a></li>
                                <li class="breadcrumb-item"><a href="#">Apps</a></li>
                                <li class="breadcrumb-item active">Calendar</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Calendar</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="calendar"></div>
                            <div style="clear:both"></div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div><!-- End row -->
        </div><!-- container -->

        <script src="{{ asset('assets-admin/libs/fullcalendar/main.min.js') }}"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var calendarEl = document.getElementById("calendar");
                var events = @json($events);
                
                // Get the current date
                var today = new Date();
                var currentMonth = today.toISOString().split('T')[0]; // Format to YYYY-MM-DD

                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialDate: currentMonth,
                    timeZone: "UTC",
                    initialView: "dayGridMonth",
                    editable: true,
                    selectable: true,
                    events: events
                });

                calendar.render();
            });
        </script>
    </div>
@endsection
