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
                                <li class="breadcrumb-item"><a href="#">Metrica</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item"><a href="#">Analytics</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item active">Customers</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Customers</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">NPS (Net Promoter Score) Survey Automatio</h4>
                                </div><!--end col-->
                            </div>  <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="chart-demo">
                                <div id="apex_line1" class="apex-charts"></div>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col align-self-center">
                                    <h6 class="font-15 m-0 mb-1">Returning Customers</h6>
                                    <p class="text-muted mb-0">Last Month : 150 <i class="mdi mdi-menu-up text-success"></i></p>
                                </div><!--end col-->
                                <div class="col-auto align-self-center">
                                    <div class="">
                                        <div id="bar-1" class="apex-charts mb-n4"></div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col align-self-center">
                                    <h6 class="font-15 m-0 mb-1">New Customers</h6>
                                    <p class="text-muted mb-0">Last Month : 10 <i class="mdi mdi-menu-down text-danger"></i></p>
                                </div><!--end col-->
                                <div class="col-auto align-self-center">
                                    <div class="">
                                        <div id="line-1" class="apex-charts"></div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col align-self-center">
                                    <h6 class="font-15 m-0 mb-1">Bounce Rate</h6>
                                    <p class="text-muted mb-0">Last Month : 50% <i class="mdi mdi-menu-up text-success"></i></p>
                                </div><!--end col-->
                                <div class="col-auto align-self-center">
                                    <div class="">
                                        <div id="radialBar-1" class="apex-charts my-n2"></div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Customer Feedback </h4>
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="datatable-1"></div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
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
    </div>
    <!-- end page content -->
@endsection

@push('scripts')
<script>
    var options = {
        chart: {
            height: 375,
            type: "line",
            toolbar: {
                show: !1
            }
        },
        stroke: {
            width: 3,
            curve: "smooth"
        },
        series: [{
            name: "Likes",
            data: [4, 3, 10, 9, 29, 19, 22, 9, 12, 7, 19, 5, 13, 9, 17, 2, 7, 5]
        }],
        xaxis: {
            type: "datetime",
            categories: ["1/11/2000", "2/11/2000", "3/11/2000", "4/11/2000", "5/11/2000", "6/11/2000", "7/11/2000", "8/11/2000", "9/11/2000", "10/11/2000", "11/11/2000", "12/11/2000", "1/11/2001", "2/11/2001", "3/11/2001", "4/11/2001", "5/11/2001", "6/11/2001"],
            axisBorder: {
                show: !0,
                color: "#bec7e0"
            },
            axisTicks: {
                show: !0,
                color: "#bec7e0"
            }
        },
        colors: ["#5766da"],
        markers: {
            size: 3,
            opacity: .9,
            colors: ["#fdb5c8"],
            strokeColors: "#fff",
            strokeWidth: 1,
            style: "inverted",
            hover: {
                size: 5
            }
        },
        yaxis: {
            min: -10,
            max: 40,
            title: {
                text: "Engagement"
            }
        },
        grid: {
            row: {
                colors: ["transparent", "transparent"],
                opacity: .2
            },
            strokeDashArray: 3.5
        },
        responsive: [{
            breakpoint: 600,
            options: {
                chart: {
                    toolbar: {
                        show: !1
                    }
                },
                legend: {
                    show: !1
                }
            }
        }]
    },
    chart = new ApexCharts(document.querySelector("#apex_line1"), options),
    options5 = {
        series: [{
            name: "New Visitors",
            data: [68, 44, 55, 57, 56, 61, 58, 63, 60, 66]
        }, {
            name: "Unique Visitors",
            data: [51, 76, 85, 101, 98, 87, 105, 91, 114, 94]
        }],
        chart: {
            type: "bar",
            width: 200,
            height: 35,
            sparkline: {
                enabled: !0
            }
        },
        colors: ["#4d79f6", "#e0e7fd"],
        plotOptions: {
            bar: {
                columnWidth: "50%"
            }
        },
        labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
        xaxis: {
            crosshairs: {
                width: 2
            }
        },
        tooltip: {
            fixed: {
                enabled: !1
            },
            x: {
                show: !1
            },
            y: {
                title: {
                    formatter: function(e) {
                        return ""
                    }
                }
            },
            marker: {
                show: !1
            }
        }
    },
    chart5 = new ApexCharts(document.querySelector("#bar-1"), options5),
    options7 = {
        series: [45],
        chart: {
            type: "radialBar",
            width: 50,
            height: 50,
            sparkline: {
                enabled: !0
            }
        },
        dataLabels: {
            enabled: !1
        },
        plotOptions: {
            radialBar: {
                hollow: {
                    margin: 0,
                    size: "50%"
                },
                track: {
                    margin: 0
                },
                dataLabels: {
                    show: !1
                }
            }
        }
    },
    chart7 = new ApexCharts(document.querySelector("#radialBar-1"), options7),
    options1 = {
        series: [{
            data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
        }],
        chart: {
            type: "line",
            width: 200,
            height: 35,
            sparkline: {
                enabled: !0
            }
        },
        stroke: {
            show: !0,
            curve: "smooth",
            width: [2],
            lineCap: "round"
        },
        tooltip: {
            fixed: {
                enabled: !1
            },
            x: {
                show: !1
            },
            y: {
                title: {
                    formatter: function(e) {
                        return ""
                    }
                }
            },
            marker: {
                show: !1
            }
        }
    },
    chart1 = new ApexCharts(document.querySelector("#line-1"), options1),
    tabledata = [{
        id: 1,
        image: `<img alt="" style="width: 30px; height: 30px" class="rounded" src="{{ asset('assets-admin/images/users/user-1.jpg') }}">`,
        name: "Oli Bob",
        progress: 12,
        gender: "male",
        rating: 1,
        col: "red",
        dob: "19/02/1984",
        car: 1
    }, {
        id: 2,
        image: `<img alt='' style='width: 30px; height: 30px' class='rounded' src="{{ asset('assets-admin/images/users/user-2.jpg') }}">`,
        name: "Mary May",
        progress: 1,
        gender: "female",
        rating: 2,
        col: "blue",
        dob: "14/05/1982",
        car: !0
    }, {
        id: 3,
        image: `<img alt='' style='width: 30px; height: 30px' class='rounded' src="{{ asset('assets-admin/images/users/user-3.jpg') }}">`,
        name: "Christine Lobowski",
        progress: 42,
        gender: "female",
        rating: 0,
        col: "green",
        dob: "22/05/1982",
        car: "true"
    }, {
        id: 4,
        image: `<img alt='' style='width: 30px; height: 30px' class='rounded' src="{{ asset('assets-admin/images/users/user-4.jpg') }}">`,
        name: "Brendon Philips",
        progress: 100,
        gender: "male",
        rating: 1,
        col: "orange",
        dob: "01/08/1980"
    }, {
        id: 5,
        image: `<img alt='' style='width: 30px; height: 30px' class='rounded' src="{{ asset('assets-admin/images/users/user-5.jpg') }}">`,
        name: "Margret Marmajuke",
        progress: 16,
        gender: "female",
        rating: 5,
        col: "yellow",
        dob: "31/01/1999"
    }, {
        id: 6,
        image: `<img alt='' style='width: 30px; height: 30px' class='rounded' src="{{ asset('assets-admin/images/users/user-6.jpg') }}">`,
        name: "Frank Harbours",
        progress: 38,
        gender: "male",
        rating: 4,
        col: "red",
        dob: "12/05/1966",
        car: 1
    }, {
        id: 1,
        image: `<img alt='' style='width: 30px; height: 30px' class='rounded' src="{{ asset('assets-admin/images/users/user-7.jpg') }}">`,
        name: "Oli Bob",
        progress: 12,
        gender: "male",
        rating: 1,
        col: "red",
        dob: "19/02/1984",
        car: 1
    }, {
        id: 2,
        image: `<img alt='' style='width: 30px; height: 30px' class='rounded' src="{{ asset('assets-admin/images/users/user-8.jpg') }}">`,
        name: "Mary May",
        progress: 1,
        gender: "female",
        rating: 2,
        col: "blue",
        dob: "14/05/1982",
        car: !0
    }, {
        id: 3,
        image: `<img alt='' style='width: 30px; height: 30px' class='rounded' src="{{ asset('assets-admin/images/users/user-9.jpg') }}">`,
        name: "Christine Lobowski",
        progress: 42,
        gender: "female",
        rating: 0,
        col: "green",
        dob: "22/05/1982",
        car: "true"
    }, {
        id: 4,
        image: `<img alt='' style='width: 30px; height: 30px' class='rounded' src="{{ asset('assets-admin/images/users/user-10.jpg') }}">`,
        name: "Brendon Philips",
        progress: 100,
        gender: "male",
        rating: 1,
        col: "orange",
        dob: "01/08/1980"
    }, {
        id: 5,
        image: `<img alt='' style='width: 30px; height: 30px' class='rounded' src="{{ asset('assets-admin/images/users/user-2.jpg') }}">`,
        name: "Margret Marmajuke",
        progress: 16,
        gender: "female",
        rating: 5,
        col: "yellow",
        dob: "31/01/1999"
    }, {
        id: 6,
        image: `<img alt='' style='width: 30px; height: 30px' class='rounded' src="{{ asset('assets-admin/images/users/user-4.jpg') }}">`,
        name: "Frank Harbours",
        progress: 38,
        gender: "male",
        rating: 4,
        col: "red",
        dob: "12/05/1966",
        car: 1
    }],
    table = new Tabulator("#datatable-1", {
        data: tabledata,
        layout: "fitColumns",
        responsiveLayout: "collapse",
        tooltips: !0,
        addRowPos: "top",
        history: !0,
        pagination: "local",
        paginationSize: 10,
        movableColumns: !0,
        resizableRows: !0,
        initialSort: [{
            column: "name",
            dir: "asc"
        }],
        columns: [{
            title: "User",
            field: "image",
            formatter: "html",
            width: 70
        }, {
            title: "Name",
            field: "name",
            editor: "input"
        }, {
            title: "customer Satisfaction",
            field: "progress",
            hozAlign: "left",
            formatter: "progress",
            editor: !0
        }, {
            title: "Gender",
            field: "gender",
            width: 95,
            editor: "select",
            editorParams: {
                values: ["male", "female"]
            }
        }, {
            title: "Rating",
            field: "rating",
            formatter: "star",
            hozAlign: "center",
            width: 100,
            editor: !0
        }, {
            title: "Color",
            field: "col",
            width: 130,
            editor: "input"
        }, {
            title: "Date Of Birth",
            field: "dob",
            width: 130,
            sorter: "date",
            hozAlign: "center"
        }, {
            title: "Driver",
            field: "car",
            width: 90,
            hozAlign: "center",
            formatter: "tickCross",
            sorter: "boolean",
            editor: !0
        }]
    });
window.addEventListener("DOMContentLoaded", e => {
    chart.render(), chart1.render(), chart7.render(), chart5.render()
});

    </script>
@endpush
