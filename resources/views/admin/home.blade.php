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
                                    <li class="breadcrumb-item"><a href="#">{{ __('general.home') }}</a>
                                    </li><!--end nav-item-->
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a>
                                    </li><!--end nav-item-->
                                    <li class="breadcrumb-item active">Analytics</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Analytics</h4>
                        </div><!--end page-title-box-->
                    </div><!--end col-->
                </div>
                <!-- end page title end breadcrumb -->
                <!-- end page title end breadcrumb -->
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="card overflow-hidden">
                            <div class="row g-0">
                                <div class="col-md-6 col-lg-3 border-b border-e border-bo">
                                    <div class="card-body">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col">
                                                <div class="media">
                                                    <div
                                                        class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                                        <i data-feather="tag"
                                                            class="align-self-center text-muted icon-sm"></i>
                                                    </div>
                                                    <div class="media-body align-self-center ms-2">
                                                        <p class="text-dark mb-1 fw-semibold">New Tickets</p>
                                                        <p class="mb-0 text-truncate text-muted">From Average Yesterday</p>
                                                    </div><!--end media body-->
                                                </div><!--end media-->
                                            </div><!--end col-->
                                            <div class="col-auto align-self-center">
                                                <h4 class="my-1">155</h4>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div> <!--end col-->
                                <div class="col-md-6 col-lg-3 border-b border-e border-bo">
                                    <div class="card-body">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col">
                                                <div class="media">
                                                    <div
                                                        class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                                        <i data-feather="package"
                                                            class="align-self-center text-muted icon-sm"></i>
                                                    </div>
                                                    <div class="media-body align-self-center ms-2">
                                                        <p class="text-dark mb-1 fw-semibold">Open Tickets</p>
                                                        <p class="mb-0 text-truncate text-muted">From Average Yesterday</p>
                                                    </div><!--end media body-->
                                                </div><!--end media-->
                                            </div><!--end col-->
                                            <div class="col-auto align-self-center">
                                                <h4 class="my-1">102</h4>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div> <!--end col-->
                                <div class="col-md-6 col-lg-3 border-b border-e">
                                    <div class="card-body">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col">
                                                <div class="media">
                                                    <div
                                                        class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                                        <i data-feather="zap"
                                                            class="align-self-center text-muted icon-sm"></i>
                                                    </div>
                                                    <div class="media-body align-self-center ms-2">
                                                        <p class="text-dark mb-1 fw-semibold">On Hold</p>
                                                        <p class="mb-0 text-truncate text-muted">From Average Yesterday</p>
                                                    </div><!--end media body-->
                                                </div><!--end media-->
                                            </div><!--end col-->
                                            <div class="col-auto align-self-center">
                                                <h4 class="my-1">14</h4>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div> <!--end col-->
                                <div class="col-md-6 col-lg-3 ps-lg-0">
                                    <div class="card-body">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col">
                                                <div class="media">
                                                    <div
                                                        class="bg-light-alt d-flex justify-content-center align-items-center thumb-md  rounded-circle">
                                                        <i data-feather="lock"
                                                            class="align-self-center text-muted icon-sm"></i>
                                                    </div>
                                                    <div class="media-body align-self-center ms-2">
                                                        <p class="text-dark mb-1 fw-semibold">Unassigned</p>
                                                        <p class="mb-0 text-truncate text-muted">From Average Yesterday</p>
                                                    </div><!--end media body-->
                                                </div><!--end media-->
                                            </div><!--end col-->
                                            <div class="col-auto align-self-center">
                                                <h4 class="my-1">75</h4>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end card-body-->
                                </div> <!--end col-->
                            </div><!--end row-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->



                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Tickets Status</h4>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="">
                                    <div id="Tickets_Status" class="apex-charts" style="min-height: 340px;">
                                        <div id="apexchartsv1mrgaeck"
                                            class="apexcharts-canvas apexchartsv1mrgaeck apexcharts-theme-light"
                                            style="width: 668px; height: 325px;"><svg id="SvgjsSvg1367" width="668"
                                                height="325" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                                class="apexcharts-svg apexcharts-zoomable hovering-zoom"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                style="background: transparent;">
                                                <g id="SvgjsG1369" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(45.83535194396973, 30)">
                                                    <defs id="SvgjsDefs1368">
                                                        <clipPath id="gridRectMaskv1mrgaeck">
                                                            <rect id="SvgjsRect1375" width="605.6947259902954"
                                                                height="259.49519938278195" x="-2.75" y="-0.75"
                                                                rx="0" ry="0" opacity="1"
                                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMaskv1mrgaeck"></clipPath>
                                                        <clipPath id="nonForecastMaskv1mrgaeck"></clipPath>
                                                        <clipPath id="gridRectMarkerMaskv1mrgaeck">
                                                            <rect id="SvgjsRect1376" width="604.1947259902954"
                                                                height="261.99519938278195" x="-2" y="-2" rx="0"
                                                                ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff">
                                                            </rect>
                                                        </clipPath>
                                                        <linearGradient id="SvgjsLinearGradient1381" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop1382" stop-opacity="0.28"
                                                                stop-color="rgba(103,200,255,0.28)" offset="0.45"></stop>
                                                            <stop id="SvgjsStop1383" stop-opacity="0.05"
                                                                stop-color="rgba(255,255,255,0.05)" offset="1"></stop>
                                                            <stop id="SvgjsStop1384" stop-opacity="0.05"
                                                                stop-color="rgba(255,255,255,0.05)" offset="1"></stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient1390" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop1391" stop-opacity="0.28"
                                                                stop-color="rgba(109,129,245,0.28)" offset="0.45"></stop>
                                                            <stop id="SvgjsStop1392" stop-opacity="0.05"
                                                                stop-color="rgba(255,255,255,0.05)" offset="1"></stop>
                                                            <stop id="SvgjsStop1393" stop-opacity="0.05"
                                                                stop-color="rgba(255,255,255,0.05)" offset="1"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <line id="SvgjsLine1374" x1="490.56841217387813" y1="0"
                                                        x2="490.56841217387813" y2="257.99519938278195" stroke="#b6b6b6"
                                                        stroke-dasharray="3" stroke-linecap="butt"
                                                        class="apexcharts-xcrosshairs" x="490.56841217387813" y="0"
                                                        width="1" height="257.99519938278195" fill="#b1b9c4"
                                                        filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                    <g id="SvgjsG1396" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG1397" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"><text id="SvgjsText1399"
                                                                font-family="Helvetica, Arial, sans-serif" x="0"
                                                                y="286.99519938278195" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="12px"
                                                                font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1400">Jan</tspan>
                                                                <title>Jan</title>
                                                            </text><text id="SvgjsText1402"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="54.56315690820868" y="286.99519938278195"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1403">Feb</tspan>
                                                                <title>Feb</title>
                                                            </text><text id="SvgjsText1405"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="109.12631381641737" y="286.99519938278195"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1406">Mar</tspan>
                                                                <title>Mar</title>
                                                            </text><text id="SvgjsText1408"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="163.68947072462603" y="286.99519938278195"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1409">Apr</tspan>
                                                                <title>Apr</title>
                                                            </text><text id="SvgjsText1411"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="218.2526276328347" y="286.99519938278195"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1412">May</tspan>
                                                                <title>May</title>
                                                            </text><text id="SvgjsText1414"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="272.81578454104334" y="286.99519938278195"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1415">Jun</tspan>
                                                                <title>Jun</title>
                                                            </text><text id="SvgjsText1417"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="327.378941449252" y="286.99519938278195"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1418">Jul</tspan>
                                                                <title>Jul</title>
                                                            </text><text id="SvgjsText1420"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="381.9420983574607" y="286.99519938278195"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1421">Aug</tspan>
                                                                <title>Aug</title>
                                                            </text><text id="SvgjsText1423"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="436.50525526566935" y="286.99519938278195"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1424">Sep</tspan>
                                                                <title>Sep</title>
                                                            </text><text id="SvgjsText1426"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="491.068412173878" y="286.99519938278195"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1427">Oct</tspan>
                                                                <title>Oct</title>
                                                            </text><text id="SvgjsText1429"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="545.6315690820868" y="286.99519938278195"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1430">Nov</tspan>
                                                                <title>Nov</title>
                                                            </text><text id="SvgjsText1432"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="600.1947259902955" y="286.99519938278195"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan1433">Dec</tspan>
                                                                <title>Dec</title>
                                                            </text></g>
                                                        <line id="SvgjsLine1434" x1="0" y1="258.99519938278195"
                                                            x2="600.1947259902954" y2="258.99519938278195"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"
                                                            stroke-linecap="butt"></line>
                                                    </g>
                                                    <g id="SvgjsG1455" class="apexcharts-grid">
                                                        <g id="SvgjsG1456" class="apexcharts-gridlines-horizontal"></g>
                                                        <g id="SvgjsG1457" class="apexcharts-gridlines-vertical">
                                                            <line id="SvgjsLine1458" x1="0" y1="0"
                                                                x2="0" y2="257.99519938278195" stroke="#e0e6ed"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1460" x1="54.563156908208676"
                                                                y1="0" x2="54.563156908208676"
                                                                y2="257.99519938278195" stroke="#e0e6ed"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1462" x1="109.12631381641735"
                                                                y1="0" x2="109.12631381641735"
                                                                y2="257.99519938278195" stroke="#e0e6ed"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1464" x1="163.68947072462603"
                                                                y1="0" x2="163.68947072462603"
                                                                y2="257.99519938278195" stroke="#e0e6ed"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1466" x1="218.2526276328347"
                                                                y1="0" x2="218.2526276328347"
                                                                y2="257.99519938278195" stroke="#e0e6ed"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1468" x1="272.8157845410434"
                                                                y1="0" x2="272.8157845410434"
                                                                y2="257.99519938278195" stroke="#e0e6ed"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1470" x1="327.37894144925207"
                                                                y1="0" x2="327.37894144925207"
                                                                y2="257.99519938278195" stroke="#e0e6ed"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1472" x1="381.94209835746074"
                                                                y1="0" x2="381.94209835746074"
                                                                y2="257.99519938278195" stroke="#e0e6ed"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1474" x1="436.5052552656694"
                                                                y1="0" x2="436.5052552656694"
                                                                y2="257.99519938278195" stroke="#e0e6ed"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1476" x1="491.0684121738781"
                                                                y1="0" x2="491.0684121738781"
                                                                y2="257.99519938278195" stroke="#e0e6ed"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1478" x1="545.6315690820868"
                                                                y1="0" x2="545.6315690820868"
                                                                y2="257.99519938278195" stroke="#e0e6ed"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1480" x1="600.1947259902955"
                                                                y1="0" x2="600.1947259902955"
                                                                y2="257.99519938278195" stroke="#e0e6ed"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                        </g>
                                                        <line id="SvgjsLine1459" x1="0" y1="258.99519938278195"
                                                            x2="0" y2="264.99519938278195" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine1461" x1="54.563156908208676"
                                                            y1="258.99519938278195" x2="54.563156908208676"
                                                            y2="264.99519938278195" stroke="#e0e0e0" stroke-dasharray="0"
                                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine1463" x1="109.12631381641735"
                                                            y1="258.99519938278195" x2="109.12631381641735"
                                                            y2="264.99519938278195" stroke="#e0e0e0" stroke-dasharray="0"
                                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine1465" x1="163.68947072462603"
                                                            y1="258.99519938278195" x2="163.68947072462603"
                                                            y2="264.99519938278195" stroke="#e0e0e0" stroke-dasharray="0"
                                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine1467" x1="218.2526276328347"
                                                            y1="258.99519938278195" x2="218.2526276328347"
                                                            y2="264.99519938278195" stroke="#e0e0e0" stroke-dasharray="0"
                                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine1469" x1="272.8157845410434"
                                                            y1="258.99519938278195" x2="272.8157845410434"
                                                            y2="264.99519938278195" stroke="#e0e0e0" stroke-dasharray="0"
                                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine1471" x1="327.37894144925207"
                                                            y1="258.99519938278195" x2="327.37894144925207"
                                                            y2="264.99519938278195" stroke="#e0e0e0" stroke-dasharray="0"
                                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine1473" x1="381.94209835746074"
                                                            y1="258.99519938278195" x2="381.94209835746074"
                                                            y2="264.99519938278195" stroke="#e0e0e0" stroke-dasharray="0"
                                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine1475" x1="436.5052552656694"
                                                            y1="258.99519938278195" x2="436.5052552656694"
                                                            y2="264.99519938278195" stroke="#e0e0e0" stroke-dasharray="0"
                                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine1477" x1="491.0684121738781"
                                                            y1="258.99519938278195" x2="491.0684121738781"
                                                            y2="264.99519938278195" stroke="#e0e0e0" stroke-dasharray="0"
                                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine1479" x1="545.6315690820868"
                                                            y1="258.99519938278195" x2="545.6315690820868"
                                                            y2="264.99519938278195" stroke="#e0e0e0" stroke-dasharray="0"
                                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine1481" x1="600.1947259902955"
                                                            y1="258.99519938278195" x2="600.1947259902955"
                                                            y2="264.99519938278195" stroke="#e0e0e0" stroke-dasharray="0"
                                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine1483" x1="0" y1="257.99519938278195"
                                                            x2="600.1947259902954" y2="257.99519938278195"
                                                            stroke="transparent" stroke-dasharray="0"
                                                            stroke-linecap="butt"></line>
                                                        <line id="SvgjsLine1482" x1="0" y1="1"
                                                            x2="0" y2="257.99519938278195" stroke="transparent"
                                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    </g>
                                                    <g id="SvgjsG1377"
                                                        class="apexcharts-area-series apexcharts-plot-series">
                                                        <g id="SvgjsG1378" class="apexcharts-series" seriesName="Income"
                                                            data:longestSeries="true" rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath1385"
                                                                d="M 0 257.99519938278195L 0 180.59663956794736C 19.097104917873036 180.59663956794736 35.46605199033564 180.59663956794736 54.563156908208676 180.59663956794736C 73.66026182608171 180.59663956794736 90.02920889854431 223.5958394650777 109.12631381641735 223.5958394650777C 128.2234187342904 223.5958394650777 144.592365806753 223.5958394650777 163.68947072462603 223.5958394650777C 182.78657564249906 223.5958394650777 199.15552271496168 223.5958394650777 218.2526276328347 223.5958394650777C 237.34973255070776 223.5958394650777 253.71867962317035 85.99839979426065 272.8157845410434 85.99839979426065C 291.9128894589164 85.99839979426065 308.28183653137904 85.99839979426065 327.37894144925207 85.99839979426065C 346.4760463671251 85.99839979426065 362.8449934395877 85.99839979426065 381.94209835746074 85.99839979426065C 401.03920327533376 85.99839979426065 417.4081503477964 197.7963195267995 436.5052552656694 197.7963195267995C 455.6023601835425 197.7963195267995 471.97130725600505 197.7963195267995 491.06841217387813 197.7963195267995C 510.16551709175116 197.7963195267995 526.5344641642138 120.39775971196491 545.6315690820868 120.39775971196491C 564.7286739999598 120.39775971196491 581.0976210724224 120.39775971196491 600.1947259902954 120.39775971196491C 600.1947259902954 120.39775971196491 600.1947259902954 120.39775971196491 600.1947259902954 257.99519938278195M 600.1947259902954 120.39775971196491z"
                                                                fill="url(#SvgjsLinearGradient1381)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="0"
                                                                class="apexcharts-area" index="0"
                                                                clip-path="url(#gridRectMaskv1mrgaeck)"
                                                                pathTo="M 0 257.99519938278195L 0 180.59663956794736C 19.097104917873036 180.59663956794736 35.46605199033564 180.59663956794736 54.563156908208676 180.59663956794736C 73.66026182608171 180.59663956794736 90.02920889854431 223.5958394650777 109.12631381641735 223.5958394650777C 128.2234187342904 223.5958394650777 144.592365806753 223.5958394650777 163.68947072462603 223.5958394650777C 182.78657564249906 223.5958394650777 199.15552271496168 223.5958394650777 218.2526276328347 223.5958394650777C 237.34973255070776 223.5958394650777 253.71867962317035 85.99839979426065 272.8157845410434 85.99839979426065C 291.9128894589164 85.99839979426065 308.28183653137904 85.99839979426065 327.37894144925207 85.99839979426065C 346.4760463671251 85.99839979426065 362.8449934395877 85.99839979426065 381.94209835746074 85.99839979426065C 401.03920327533376 85.99839979426065 417.4081503477964 197.7963195267995 436.5052552656694 197.7963195267995C 455.6023601835425 197.7963195267995 471.97130725600505 197.7963195267995 491.06841217387813 197.7963195267995C 510.16551709175116 197.7963195267995 526.5344641642138 120.39775971196491 545.6315690820868 120.39775971196491C 564.7286739999598 120.39775971196491 581.0976210724224 120.39775971196491 600.1947259902954 120.39775971196491C 600.1947259902954 120.39775971196491 600.1947259902954 120.39775971196491 600.1947259902954 257.99519938278195M 600.1947259902954 120.39775971196491z"
                                                                pathFrom="M -1 257.99519938278195L -1 257.99519938278195L 54.563156908208676 257.99519938278195L 109.12631381641735 257.99519938278195L 163.68947072462603 257.99519938278195L 218.2526276328347 257.99519938278195L 272.8157845410434 257.99519938278195L 327.37894144925207 257.99519938278195L 381.94209835746074 257.99519938278195L 436.5052552656694 257.99519938278195L 491.06841217387813 257.99519938278195L 545.6315690820868 257.99519938278195L 600.1947259902954 257.99519938278195">
                                                            </path>
                                                            <path id="SvgjsPath1386"
                                                                d="M 0 180.59663956794736C 19.097104917873036 180.59663956794736 35.46605199033564 180.59663956794736 54.563156908208676 180.59663956794736C 73.66026182608171 180.59663956794736 90.02920889854431 223.5958394650777 109.12631381641735 223.5958394650777C 128.2234187342904 223.5958394650777 144.592365806753 223.5958394650777 163.68947072462603 223.5958394650777C 182.78657564249906 223.5958394650777 199.15552271496168 223.5958394650777 218.2526276328347 223.5958394650777C 237.34973255070776 223.5958394650777 253.71867962317035 85.99839979426065 272.8157845410434 85.99839979426065C 291.9128894589164 85.99839979426065 308.28183653137904 85.99839979426065 327.37894144925207 85.99839979426065C 346.4760463671251 85.99839979426065 362.8449934395877 85.99839979426065 381.94209835746074 85.99839979426065C 401.03920327533376 85.99839979426065 417.4081503477964 197.7963195267995 436.5052552656694 197.7963195267995C 455.6023601835425 197.7963195267995 471.97130725600505 197.7963195267995 491.06841217387813 197.7963195267995C 510.16551709175116 197.7963195267995 526.5344641642138 120.39775971196491 545.6315690820868 120.39775971196491C 564.7286739999598 120.39775971196491 581.0976210724224 120.39775971196491 600.1947259902954 120.39775971196491"
                                                                fill="none" fill-opacity="1" stroke="#67c8ff"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="1.5" stroke-dasharray="0"
                                                                class="apexcharts-area" index="0"
                                                                clip-path="url(#gridRectMaskv1mrgaeck)"
                                                                pathTo="M 0 180.59663956794736C 19.097104917873036 180.59663956794736 35.46605199033564 180.59663956794736 54.563156908208676 180.59663956794736C 73.66026182608171 180.59663956794736 90.02920889854431 223.5958394650777 109.12631381641735 223.5958394650777C 128.2234187342904 223.5958394650777 144.592365806753 223.5958394650777 163.68947072462603 223.5958394650777C 182.78657564249906 223.5958394650777 199.15552271496168 223.5958394650777 218.2526276328347 223.5958394650777C 237.34973255070776 223.5958394650777 253.71867962317035 85.99839979426065 272.8157845410434 85.99839979426065C 291.9128894589164 85.99839979426065 308.28183653137904 85.99839979426065 327.37894144925207 85.99839979426065C 346.4760463671251 85.99839979426065 362.8449934395877 85.99839979426065 381.94209835746074 85.99839979426065C 401.03920327533376 85.99839979426065 417.4081503477964 197.7963195267995 436.5052552656694 197.7963195267995C 455.6023601835425 197.7963195267995 471.97130725600505 197.7963195267995 491.06841217387813 197.7963195267995C 510.16551709175116 197.7963195267995 526.5344641642138 120.39775971196491 545.6315690820868 120.39775971196491C 564.7286739999598 120.39775971196491 581.0976210724224 120.39775971196491 600.1947259902954 120.39775971196491"
                                                                pathFrom="M -1 257.99519938278195L -1 257.99519938278195L 54.563156908208676 257.99519938278195L 109.12631381641735 257.99519938278195L 163.68947072462603 257.99519938278195L 218.2526276328347 257.99519938278195L 272.8157845410434 257.99519938278195L 327.37894144925207 257.99519938278195L 381.94209835746074 257.99519938278195L 436.5052552656694 257.99519938278195L 491.06841217387813 257.99519938278195L 545.6315690820868 257.99519938278195L 600.1947259902954 257.99519938278195">
                                                            </path>
                                                            <g id="SvgjsG1379" class="apexcharts-series-markers-wrap"
                                                                data:realIndex="0">
                                                                <g class="apexcharts-series-markers">
                                                                    <circle id="SvgjsCircle1489" r="0"
                                                                        cx="491.06841217387813" cy="197.7963195267995"
                                                                        class="apexcharts-marker w7cdq94wk no-pointer-events"
                                                                        stroke="#ffffff" fill="#67c8ff" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        default-marker-size="0"></circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1387" class="apexcharts-series"
                                                            seriesName="Expenses" data:longestSeries="true"
                                                            rel="2" data:realIndex="1">
                                                            <path id="SvgjsPath1394"
                                                                d="M 0 257.99519938278195L 0 257.99519938278195C 19.097104917873036 257.99519938278195 35.46605199033564 206.39615950622556 54.563156908208676 206.39615950622556C 73.66026182608171 206.39615950622556 90.02920889854431 240.79551942392982 109.12631381641735 240.79551942392982C 128.2234187342904 240.79551942392982 144.592365806753 189.19647954737343 163.68947072462603 189.19647954737343C 182.78657564249906 189.19647954737343 199.15552271496168 206.39615950622556 218.2526276328347 206.39615950622556C 237.34973255070776 206.39615950622556 253.71867962317035 154.79711962966917 272.8157845410434 154.79711962966917C 291.9128894589164 154.79711962966917 308.28183653137904 171.9967995885213 327.37894144925207 171.9967995885213C 346.4760463671251 171.9967995885213 362.8449934395877 120.39775971196491 381.94209835746074 120.39775971196491C 401.03920327533376 120.39775971196491 417.4081503477964 137.59743967081704 436.5052552656694 137.59743967081704C 455.6023601835425 137.59743967081704 471.97130725600505 85.99839979426065 491.06841217387813 85.99839979426065C 510.16551709175116 85.99839979426065 526.5344641642138 103.19807975311278 545.6315690820868 103.19807975311278C 564.7286739999598 103.19807975311278 581.0976210724224 34.39935991770426 600.1947259902954 34.39935991770426C 600.1947259902954 34.39935991770426 600.1947259902954 34.39935991770426 600.1947259902954 257.99519938278195M 600.1947259902954 34.39935991770426z"
                                                                fill="url(#SvgjsLinearGradient1390)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="0" stroke-dasharray="4"
                                                                class="apexcharts-area" index="1"
                                                                clip-path="url(#gridRectMaskv1mrgaeck)"
                                                                pathTo="M 0 257.99519938278195L 0 257.99519938278195C 19.097104917873036 257.99519938278195 35.46605199033564 206.39615950622556 54.563156908208676 206.39615950622556C 73.66026182608171 206.39615950622556 90.02920889854431 240.79551942392982 109.12631381641735 240.79551942392982C 128.2234187342904 240.79551942392982 144.592365806753 189.19647954737343 163.68947072462603 189.19647954737343C 182.78657564249906 189.19647954737343 199.15552271496168 206.39615950622556 218.2526276328347 206.39615950622556C 237.34973255070776 206.39615950622556 253.71867962317035 154.79711962966917 272.8157845410434 154.79711962966917C 291.9128894589164 154.79711962966917 308.28183653137904 171.9967995885213 327.37894144925207 171.9967995885213C 346.4760463671251 171.9967995885213 362.8449934395877 120.39775971196491 381.94209835746074 120.39775971196491C 401.03920327533376 120.39775971196491 417.4081503477964 137.59743967081704 436.5052552656694 137.59743967081704C 455.6023601835425 137.59743967081704 471.97130725600505 85.99839979426065 491.06841217387813 85.99839979426065C 510.16551709175116 85.99839979426065 526.5344641642138 103.19807975311278 545.6315690820868 103.19807975311278C 564.7286739999598 103.19807975311278 581.0976210724224 34.39935991770426 600.1947259902954 34.39935991770426C 600.1947259902954 34.39935991770426 600.1947259902954 34.39935991770426 600.1947259902954 257.99519938278195M 600.1947259902954 34.39935991770426z"
                                                                pathFrom="M -1 257.99519938278195L -1 257.99519938278195L 54.563156908208676 257.99519938278195L 109.12631381641735 257.99519938278195L 163.68947072462603 257.99519938278195L 218.2526276328347 257.99519938278195L 272.8157845410434 257.99519938278195L 327.37894144925207 257.99519938278195L 381.94209835746074 257.99519938278195L 436.5052552656694 257.99519938278195L 491.06841217387813 257.99519938278195L 545.6315690820868 257.99519938278195L 600.1947259902954 257.99519938278195">
                                                            </path>
                                                            <path id="SvgjsPath1395"
                                                                d="M 0 257.99519938278195C 19.097104917873036 257.99519938278195 35.46605199033564 206.39615950622556 54.563156908208676 206.39615950622556C 73.66026182608171 206.39615950622556 90.02920889854431 240.79551942392982 109.12631381641735 240.79551942392982C 128.2234187342904 240.79551942392982 144.592365806753 189.19647954737343 163.68947072462603 189.19647954737343C 182.78657564249906 189.19647954737343 199.15552271496168 206.39615950622556 218.2526276328347 206.39615950622556C 237.34973255070776 206.39615950622556 253.71867962317035 154.79711962966917 272.8157845410434 154.79711962966917C 291.9128894589164 154.79711962966917 308.28183653137904 171.9967995885213 327.37894144925207 171.9967995885213C 346.4760463671251 171.9967995885213 362.8449934395877 120.39775971196491 381.94209835746074 120.39775971196491C 401.03920327533376 120.39775971196491 417.4081503477964 137.59743967081704 436.5052552656694 137.59743967081704C 455.6023601835425 137.59743967081704 471.97130725600505 85.99839979426065 491.06841217387813 85.99839979426065C 510.16551709175116 85.99839979426065 526.5344641642138 103.19807975311278 545.6315690820868 103.19807975311278C 564.7286739999598 103.19807975311278 581.0976210724224 34.39935991770426 600.1947259902954 34.39935991770426"
                                                                fill="none" fill-opacity="1" stroke="#6d81f5"
                                                                stroke-opacity="1" stroke-linecap="round"
                                                                stroke-width="1.5" stroke-dasharray="4"
                                                                class="apexcharts-area" index="1"
                                                                clip-path="url(#gridRectMaskv1mrgaeck)"
                                                                pathTo="M 0 257.99519938278195C 19.097104917873036 257.99519938278195 35.46605199033564 206.39615950622556 54.563156908208676 206.39615950622556C 73.66026182608171 206.39615950622556 90.02920889854431 240.79551942392982 109.12631381641735 240.79551942392982C 128.2234187342904 240.79551942392982 144.592365806753 189.19647954737343 163.68947072462603 189.19647954737343C 182.78657564249906 189.19647954737343 199.15552271496168 206.39615950622556 218.2526276328347 206.39615950622556C 237.34973255070776 206.39615950622556 253.71867962317035 154.79711962966917 272.8157845410434 154.79711962966917C 291.9128894589164 154.79711962966917 308.28183653137904 171.9967995885213 327.37894144925207 171.9967995885213C 346.4760463671251 171.9967995885213 362.8449934395877 120.39775971196491 381.94209835746074 120.39775971196491C 401.03920327533376 120.39775971196491 417.4081503477964 137.59743967081704 436.5052552656694 137.59743967081704C 455.6023601835425 137.59743967081704 471.97130725600505 85.99839979426065 491.06841217387813 85.99839979426065C 510.16551709175116 85.99839979426065 526.5344641642138 103.19807975311278 545.6315690820868 103.19807975311278C 564.7286739999598 103.19807975311278 581.0976210724224 34.39935991770426 600.1947259902954 34.39935991770426"
                                                                pathFrom="M -1 257.99519938278195L -1 257.99519938278195L 54.563156908208676 257.99519938278195L 109.12631381641735 257.99519938278195L 163.68947072462603 257.99519938278195L 218.2526276328347 257.99519938278195L 272.8157845410434 257.99519938278195L 327.37894144925207 257.99519938278195L 381.94209835746074 257.99519938278195L 436.5052552656694 257.99519938278195L 491.06841217387813 257.99519938278195L 545.6315690820868 257.99519938278195L 600.1947259902954 257.99519938278195">
                                                            </path>
                                                            <g id="SvgjsG1388" class="apexcharts-series-markers-wrap"
                                                                data:realIndex="1">
                                                                <g class="apexcharts-series-markers">
                                                                    <circle id="SvgjsCircle1490" r="0"
                                                                        cx="491.06841217387813" cy="85.99839979426065"
                                                                        class="apexcharts-marker w2sapmq8gf no-pointer-events"
                                                                        stroke="#ffffff" fill="#6d81f5" fill-opacity="1"
                                                                        stroke-width="2" stroke-opacity="0.9"
                                                                        default-marker-size="0"></circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1380" class="apexcharts-datalabels"
                                                            data:realIndex="0"></g>
                                                        <g id="SvgjsG1389" class="apexcharts-datalabels"
                                                            data:realIndex="1"></g>
                                                    </g>
                                                    <line id="SvgjsLine1484" x1="0" y1="0"
                                                        x2="600.1947259902954" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1485" x1="0" y1="0"
                                                        x2="600.1947259902954" y2="0" stroke-dasharray="0"
                                                        stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1486" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1487" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1488" class="apexcharts-point-annotations"></g>
                                                    <rect id="SvgjsRect1491" width="0" height="0" x="0" y="0"
                                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                        class="apexcharts-zoom-rect"></rect>
                                                    <rect id="SvgjsRect1492" width="0" height="0" x="0" y="0"
                                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                        class="apexcharts-selection-rect"></rect>
                                                </g>
                                                <rect id="SvgjsRect1373" width="0" height="0" x="0" y="0"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                                <g id="SvgjsG1435" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(3.8353519439697266, 0)">
                                                    <g id="SvgjsG1436" class="apexcharts-yaxis-texts-g"><text
                                                            id="SvgjsText1438" font-family="Helvetica, Arial, sans-serif"
                                                            x="20" y="31.5" text-anchor="end" dominant-baseline="auto"
                                                            font-size="11px" font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1439">150</tspan>
                                                            <title>150</title>
                                                        </text><text id="SvgjsText1441"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="83.09903987655639" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1442">120</tspan>
                                                            <title>120</title>
                                                        </text><text id="SvgjsText1444"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="134.69807975311278" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1445">90</tspan>
                                                            <title>90</title>
                                                        </text><text id="SvgjsText1447"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="186.29711962966917" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1448">60</tspan>
                                                            <title>60</title>
                                                        </text><text id="SvgjsText1450"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="237.89615950622556" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1451">30</tspan>
                                                            <title>30</title>
                                                        </text><text id="SvgjsText1453"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="289.49519938278195" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1454">0</tspan>
                                                            <title>0</title>
                                                        </text></g>
                                                </g>
                                                <g id="SvgjsG1370" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend" style="max-height: 162.5px;"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-light"
                                                style="left: 402.604px; top: 200.796px;">
                                                <div class="apexcharts-tooltip-title"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">Oct
                                                </div>
                                                <div class="apexcharts-tooltip-series-group apexcharts-active"
                                                    style="order: 1; display: flex;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(103, 200, 255);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label">Income:
                                                            </span><span class="apexcharts-tooltip-text-y-value">35</span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-tooltip-series-group apexcharts-active"
                                                    style="order: 2; display: flex;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(109, 129, 245);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label">Expenses:
                                                            </span><span class="apexcharts-tooltip-text-y-value">100</span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"
                                                style="left: 516.116px; top: 289.995px;">
                                                <div class="apexcharts-xaxistooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; min-width: 18.2562px;">
                                                    Oct</div>
                                            </div>
                                            <div
                                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Customer Satisfaction</h4>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="position-absolute bottom-50 start-50 translate-middle mb-n2">
                                    <h3 class="mb-0">94.5%</h3>
                                    <p class="mb-0 text-uppercase fw-semibold text-muted">Happiness</p>
                                </div>
                                <div id="ana_device" class="apex-charts mb-2"></div>
                                <ul class="list-inline mb-0 text-center">
                                    <li class="list-inline-item mb-2 mb-lg-0 fw-semibold">
                                        <i class="far fa-grin-stars text-primary font-16 align-middle me-1"></i>Excellent
                                    </li>
                                    <li class="list-inline-item mb-2 mb-lg-0 fw-semibold">
                                        <i class="far fa-smile me-1 mb-lg-0 font-16 align-middle"
                                            style="color: #fdb5c8;"></i>Very Good
                                    </li>
                                    <li class="list-inline-item mb-2 fw-semibold">
                                        <i class="far fa-meh text-info me-1 font-16 align-middle"></i>Good
                                    </li>
                                    <li class="list-inline-item fw-semibold">
                                        <i class="far fa-frown  me-1 font-16 align-middle"
                                            style="color: #c693ff;"></i>Fair
                                    </li>
                                </ul>
                                <hr class="hr-dashed">
                                <div class="media">
                                    <span
                                        class="thumb-sm justify-content-center d-flex align-items-center bg-soft-warning rounded-circle me-2">MT</span>
                                    <div class="media-body align-self-center">
                                        <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum
                                            available...
                                            <a href="#" class="text-primary">Read more</a>
                                        </p>
                                    </div><!--end media-body-->
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->



                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Tasks Performance</h4>
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-dots-horizontal text-muted"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Purchases</a>
                                                <a class="dropdown-item" href="#">Emails</a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="text-center">
                                    <div id="task_status" class="apex-charts"></div>
                                    <h6 class="text-primary bg-soft-primary p-3 mb-0">
                                        <i data-feather="calendar" class="align-self-center icon-xs me-1"></i>
                                        01 January 2021 to 31 June 2021
                                    </h6>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link fw-semibold pt-0 active" data-bs-toggle="tab"
                                            href="#Project1_Tab" role="tab" aria-selected="true">Project1</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link fw-semibold pt-0" data-bs-toggle="tab" href="#Project2_Tab"
                                            role="tab" aria-selected="false" tabindex="-1">Project2</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link fw-semibold pt-0" data-bs-toggle="tab" href="#Project3_Tab"
                                            role="tab" aria-selected="false" tabindex="-1">Project3</a>
                                    </li>
                                </ul>
                            </div><!--end card-body-->
                            <div class="card-body pt-0">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active show" id="Project1_Tab" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="media mb-3">
                                                    <img src="assets/images/small/project-3.jpg" alt=""
                                                        class="thumb-md rounded-circle">
                                                    <div class="media-body align-self-center text-truncate ms-3">
                                                        <h4 class="m-0 fw-semibold text-dark font-16">Payment App</h4>
                                                        <p class="text-muted mb-0 font-13"><span class="text-dark">Client
                                                                : </span>Kevin J. Heal</p>
                                                    </div><!--end media-body-->
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-6 text-lg-end  mb-2 mb-lg-0">
                                                <h6 class="fw-semibold m-0">Start : <span class="text-muted fw-normal"> 02
                                                        June 2021</span></h6>
                                                <h6 class="fw-semibold  mb-0 mt-2">Deadline : <span
                                                        class="text-muted fw-normal"> 31 Oct 2021</span></h6>
                                            </div><!--end col-->
                                        </div><!--end row-->

                                        <div class="holder">
                                            <ul class="steppedprogress pt-1">
                                                <li class="complete"><span>Planing</span></li>
                                                <li class="complete"><span>Design</span></li>
                                                <li class="complete continuous"><span>Development</span></li>
                                                <li class=""><span>Testing</span></li>
                                            </ul>
                                        </div>
                                        <div class="task-box">
                                            <div class="task-priority-icon"><i class="fas fa-circle text-success"></i>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <h6 class="fw-semibold m-0 align-self-center">All Hours : <span
                                                        class="text-muted fw-normal"> 530 / 281:30</span></h6>
                                                <h6 class="fw-semibold">Today : <span class="text-muted fw-normal">
                                                        2:45</span><span class="badge badge-soft-pink fw-semibold ms-2"><i
                                                            class="far fa-fw fa-clock"></i> 35 days left</span></h6>
                                            </div>
                                            <p class="text-muted mb-1">There are many variations of passages of Lorem Ipsum
                                                available,
                                                but the majority have suffered alteration in some form.
                                            </p>
                                            <p class="text-muted text-end mb-1">34% Complete</p>
                                            <div class="progress mb-3" style="height: 4px;">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                    style="width: 34%;" aria-valuenow="34" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="img-group">
                                                    <a class="user-avatar" href="#">
                                                        <img src="assets/images/users/user-8.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                    <a class="user-avatar ms-n3" href="#">
                                                        <img src="assets/images/users/user-5.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                    <a class="user-avatar ms-n3" href="#">
                                                        <img src="assets/images/users/user-4.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                    <a class="user-avatar ms-n3" href="#">
                                                        <img src="assets/images/users/user-6.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                    <a href=""
                                                        class="btn btn-soft-primary btn-icon-circle btn-icon-circle-sm">
                                                        <i class="las la-plus"></i>6
                                                    </a>
                                                </div><!--end img-group-->
                                                <ul class="list-inline mb-0 align-self-center">
                                                    <li class="list-item d-inline-block me-2">
                                                        <a class="" href="#">
                                                            <i
                                                                class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                            <span class="text-muted fw-bold">34/100</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                            <span class="text-muted fw-bold">3</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="ms-2" href="#">
                                                            <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!--end task-box-->
                                        <hr class="hr-dashed">
                                        <div class="row mt-3">
                                            <div class="col-md">
                                                <div class="d-flex  mb-2 mb-lg-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-headphones align-self-center text-secondary icon-sm">
                                                        <path d="M3 18v-6a9 9 0 0 1 18 0v6"></path>
                                                        <path
                                                            d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z">
                                                        </path>
                                                    </svg>
                                                    <div class="d-block align-self-center ms-2">
                                                        <h6 class="m-0">Last Meeting</h6>
                                                        <p class="mb-0 text-muted">28 Oct 2021 / 10:30AM - 12:30PM</p>
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-auto">
                                                <div class="d-flex">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-headphones align-self-center text-secondary icon-sm">
                                                        <path d="M3 18v-6a9 9 0 0 1 18 0v6"></path>
                                                        <path
                                                            d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z">
                                                        </path>
                                                    </svg>
                                                    <div class="d-block align-self-center ms-2">
                                                        <h6 class="m-0">Next Meeting</h6>
                                                        <p class="mb-0 text-muted">06 Nov 2021 / 10:30AM - 12:30PM</p>
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end tab-pane-->

                                    <div class="tab-pane" id="Project2_Tab" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="media mb-3">
                                                    <img src="assets/images/small/project-2.jpg" alt=""
                                                        class="thumb-md rounded-circle">
                                                    <div class="media-body align-self-center text-truncate ms-3">

                                                        <h4 class="m-0 fw-semibold text-dark font-16">Banking</h4>
                                                        <p class="text-muted  mb-0 font-13"><span
                                                                class="text-dark">Client : </span>Hyman M. Cross</p>
                                                    </div><!--end media-body-->
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-6 text-lg-end mb-2 mb-lg-0">
                                                <h6 class="fw-semibold m-0">Start : <span class="text-muted fw-normal">
                                                        15 Nov 2021</span></h6>
                                                <h6 class="fw-semibold mb-0 mt-2">Deadline : <span
                                                        class="text-muted fw-normal"> 28 Fab 2021</span></h6>
                                            </div><!--end col-->
                                        </div><!--end row-->

                                        <div class="holder">
                                            <ul class="steppedprogress pt-1">
                                                <li class="complete"><span>Planing</span></li>
                                                <li class="complete continuous"><span>Design</span></li>
                                                <li class=""><span>Development</span></li>
                                                <li class=""><span>Testing</span></li>
                                            </ul>
                                        </div>
                                        <div class="task-box">
                                            <div class="task-priority-icon"><i class="fas fa-circle text-success"></i>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <h6 class="fw-semibold m-0 align-self-center">All Hours : <span
                                                        class="text-muted fw-normal"> 530 / 281:30</span></h6>
                                                <h6 class="fw-semibold">Today : <span class="text-muted fw-normal">
                                                        2:45</span><span class="badge badge-soft-pink fw-semibold ms-2"><i
                                                            class="far fa-fw fa-clock"></i> 35 days left</span></h6>
                                            </div>
                                            <p class="text-muted mb-1">There are many variations of passages of Lorem
                                                Ipsum available,
                                                but the majority have suffered alteration in some form.
                                            </p>
                                            <p class="text-muted text-end mb-1">15% Complete</p>
                                            <div class="progress mb-3" style="height: 4px;">
                                                <div class="progress-bar bg-purple" role="progressbar"
                                                    style="width: 15%;" aria-valuenow="15" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="img-group">
                                                    <a class="user-avatar" href="#">
                                                        <img src="assets/images/users/user-8.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                    <a class="user-avatar ms-n3" href="#">
                                                        <img src="assets/images/users/user-5.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                    <a class="user-avatar ms-n3" href="#">
                                                        <img src="assets/images/users/user-4.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                    <a class="user-avatar ms-n3" href="#">
                                                        <img src="assets/images/users/user-6.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                    <a href=""
                                                        class="btn btn-soft-primary btn-icon-circle btn-icon-circle-sm">
                                                        <i class="las la-plus"></i>4
                                                    </a>
                                                </div><!--end img-group-->
                                                <ul class="list-inline mb-0 align-self-center">
                                                    <li class="list-item d-inline-block me-2">
                                                        <a class="" href="#">
                                                            <i
                                                                class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                            <span class="text-muted fw-bold">15/100</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                            <span class="text-muted fw-bold">3</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="ms-2" href="#">
                                                            <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!--end task-box-->
                                        <hr class="hr-dashed">
                                        <div class="row mt-3">
                                            <div class="col-md">
                                                <div class="d-flex mb-2 mb-lg-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-headphones align-self-center text-secondary icon-sm">
                                                        <path d="M3 18v-6a9 9 0 0 1 18 0v6"></path>
                                                        <path
                                                            d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z">
                                                        </path>
                                                    </svg>
                                                    <div class="d-block align-self-center ms-2">
                                                        <h6 class="m-0">Last Meeting</h6>
                                                        <p class="mb-0 text-muted">28 Oct 2021 / 10:30AM - 12:30PM</p>
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-auto">
                                                <div class="d-flex">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-headphones align-self-center text-secondary icon-sm">
                                                        <path d="M3 18v-6a9 9 0 0 1 18 0v6"></path>
                                                        <path
                                                            d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z">
                                                        </path>
                                                    </svg>
                                                    <div class="d-block align-self-center ms-2">
                                                        <h6 class="m-0">Next Meeting</h6>
                                                        <p class="mb-0 text-muted">06 Nov 2021 / 10:30AM - 12:30PM</p>
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end tab-pane-->

                                    <div class="tab-pane" id="Project3_Tab" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="media mb-3">
                                                    <img src="assets/images/small/project-1.jpg" alt=""
                                                        class="thumb-md rounded-circle">
                                                    <div class="media-body align-self-center text-truncate ms-3">

                                                        <h4 class="m-0 fw-semibold text-dark font-16">Transfer Money</h4>
                                                        <p class="text-muted  mb-0 font-13"><span
                                                                class="text-dark">Client : </span>Kevin J. Heal</p>
                                                    </div><!--end media-body-->
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-6 text-lg-end  mb-2 mb-lg-0">
                                                <h6 class="fw-semibold m-0">Start : <span class="text-muted fw-normal">
                                                        01 Jan 2021</span></h6>
                                                <h6 class="fw-semibold mb-0 mt-2">Deadline : <span
                                                        class="text-muted fw-normal"> 15 Mar 2021</span></h6>
                                            </div><!--end col-->
                                        </div><!--end row-->

                                        <div class="holder">
                                            <ul class="steppedprogress pt-1">
                                                <li class="complete"><span>Planing</span></li>
                                                <li class="complete"><span>Design</span></li>
                                                <li class="complete"><span>Development</span></li>
                                                <li class="complete finish"><span>Testing</span></li>
                                            </ul>
                                        </div>
                                        <div class="task-box">
                                            <div class="task-priority-icon"><i class="fas fa-check text-danger"></i>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <h6 class="fw-semibold m-0 align-self-center">All Hours : <span
                                                        class="text-muted fw-normal"> 530 / 481:30</span></h6>
                                                <h6 class="fw-semibold">Today : <span class="text-muted fw-normal">
                                                        2:45</span><span class="badge badge-soft-pink fw-semibold ms-2"><i
                                                            class="far fa-fw fa-clock"></i> 2 days left</span></h6>
                                            </div>
                                            <p class="text-muted mb-1">There are many variations of passages of Lorem
                                                Ipsum available,
                                                but the majority have suffered alteration in some form.
                                            </p>
                                            <p class="text-muted text-end mb-1">100% Complete</p>
                                            <div class="progress mb-3" style="height: 4px;">
                                                <div class="progress-bar bg-danger" role="progressbar"
                                                    style="width: 100%;" aria-valuenow="100" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="img-group">
                                                    <a class="user-avatar" href="#">
                                                        <img src="assets/images/users/user-8.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                    <a class="user-avatar ms-n3" href="#">
                                                        <img src="assets/images/users/user-5.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                    <a class="user-avatar ms-n3" href="#">
                                                        <img src="assets/images/users/user-4.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                    <a class="user-avatar ms-n3" href="#">
                                                        <img src="assets/images/users/user-6.jpg" alt="user"
                                                            class="thumb-xs rounded-circle">
                                                    </a>
                                                    <a href=""
                                                        class="btn btn-soft-primary btn-icon-circle btn-icon-circle-sm">
                                                        <i class="las la-plus"></i>2
                                                    </a>
                                                </div><!--end img-group-->
                                                <ul class="list-inline mb-0 align-self-center">
                                                    <li class="list-item d-inline-block me-2">
                                                        <a class="" href="#">
                                                            <i
                                                                class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                            <span class="text-muted fw-bold">100/100</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                            <span class="text-muted fw-bold">3</span>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="ms-2" href="#">
                                                            <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-item d-inline-block">
                                                        <a class="" href="#">
                                                            <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!--end task-box-->
                                        <hr class="hr-dashed">
                                        <div class="row mt-3">
                                            <div class="col-md">
                                                <div class="d-flex  mb-2 mb-lg-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-headphones align-self-center text-secondary icon-sm">
                                                        <path d="M3 18v-6a9 9 0 0 1 18 0v6"></path>
                                                        <path
                                                            d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z">
                                                        </path>
                                                    </svg>
                                                    <div class="d-block align-self-center ms-2">
                                                        <h6 class="m-0">Last Meeting</h6>
                                                        <p class="mb-0 text-muted">28 Oct 2021 / 10:30AM - 12:30PM</p>
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-auto">
                                                <div class="d-flex">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-headphones align-self-center text-secondary icon-sm">
                                                        <path d="M3 18v-6a9 9 0 0 1 18 0v6"></path>
                                                        <path
                                                            d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z">
                                                        </path>
                                                    </svg>
                                                    <div class="d-block align-self-center ms-2">
                                                        <h6 class="m-0">Next Meeting</h6>
                                                        <p class="mb-0 text-muted">06 Nov 2021 / 10:30AM - 12:30PM</p>
                                                    </div>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end tab-pane-->
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                </div>














                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">All Tickets</h4>
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <button class="btn btn-sm btn-de-primary">Create Ticket</button>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="thead-light">
                                            <tr>
                                                <th style="max-width: 95px;">
                                                    <input class="form-check-input" type="checkbox" id="checkbox1"
                                                        value="" aria-label="...">
                                                </th>
                                                <th>ID</th>
                                                <th>Customers</th>
                                                <th>Subject</th>
                                                <th>Priority</th>
                                                <th>Status</th>
                                                <th>Respose Time</th>
                                            </tr><!--end tr-->
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input class="form-check-input" type="checkbox" id="checkbox2"
                                                        value="" aria-label="...">
                                                </td>
                                                <td>#1236</td>
                                                <td><img src="assets/images/users/user-10.jpg" alt=""
                                                        class="thumb-sm rounded-circle me-2">
                                                    Donald Gardner</td>
                                                <td>Bug-report simply dummy text of the printing and typesetting</td>
                                                <td>Medium</td>
                                                <td><span class="badge badge-soft-warning p-2">New</span></td>
                                                <td>14 min</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>
                                                    <input class="form-check-input" type="checkbox" id="checkbox3"
                                                        value="" aria-label="...">
                                                </td>
                                                <td>#3569</td>
                                                <td><img src="assets/images/users/user-9.jpg" alt=""
                                                        class="thumb-sm rounded-circle me-2">
                                                    Kevin J. Heal</td>
                                                <td>The application continuous is a long established fact that a reader.
                                                </td>
                                                <td class="text-danger">Critical</td>
                                                <td><span class="badge badge-soft-success p-2">Solved</span></td>
                                                <td>45 min</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>
                                                    <input class="form-check-input" type="checkbox" id="checkbox4"
                                                        value="" aria-label="...">
                                                </td>
                                                <td>#9874</td>
                                                <td><img src="assets/images/users/user-8.jpg" alt=""
                                                        class="thumb-sm rounded-circle me-2">
                                                    Frank M. Lyons</td>
                                                <td>See how it work start are many variations of passages of Lorem Ipsum
                                                    available.</td>
                                                <td>Low</td>
                                                <td><span class="badge badge-soft-primary p-2">Open</span></td>
                                                <td>1 houur</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>
                                                    <input class="form-check-input" type="checkbox" id="checkbox5"
                                                        value="" aria-label="...">
                                                </td>
                                                <td>#5412</td>
                                                <td><img src="assets/images/users/user-7.jpg" alt=""
                                                        class="thumb-sm rounded-circle me-2">
                                                    Robert C. Golding</td>
                                                <td>I can't upload file first line of Ipsum lorem ipsum dolor sit amet.</td>
                                                <td>Medium</td>
                                                <td><span class="badge badge-soft-warning p-2">New</span></td>
                                                <td>2 houur</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>
                                                    <input class="form-check-input" type="checkbox" id="checkbox6"
                                                        value="" aria-label="...">
                                                </td>
                                                <td>#3258</td>
                                                <td><img src="assets/images/users/user-6.jpg" alt=""
                                                        class="thumb-sm rounded-circle me-2">
                                                    Hyman M. Cross</td>
                                                <td>How do i upgrade my profile?</td>
                                                <td>Low</td>
                                                <td><span class="badge badge-soft-success p-2">Solved</span></td>
                                                <td>4 houur</td>
                                            </tr><!--end tr-->
                                            <tr>
                                                <td>
                                                    <input class="form-check-input" type="checkbox" id="checkbox7"
                                                        value="" aria-label="...">
                                                </td>
                                                <td>#6636</td>
                                                <td><img src="assets/images/users/user-5.jpg" alt=""
                                                        class="thumb-sm rounded-circle me-2">
                                                    Phillip T. Morse</td>
                                                <td>Can i help you in this project?</td>
                                                <td class="text-danger">Critical</td>
                                                <td><span class="badge badge-soft-primary p-2">Opan</span></td>
                                                <td>4 houur</td>
                                            </tr><!--end tr-->
                                        </tbody>
                                    </table>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div> <!--end col-->
                </div>








                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Activity</h4>
                                    </div><!--end col-->
                                    <div class="col-auto">
                                        <div class="dropdown">
                                            <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                All<i class="las la-angle-down ms-1"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Purchases</a>
                                                <a class="dropdown-item" href="#">Emails</a>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-bodyp-0">
                                <div class="p-3" data-simplebar style="height: 400px;">
                                    <div class="activity">
                                        <div class="activity-info">
                                            <div class="icon-info-activity">
                                                <i class="las la-user-clock bg-soft-primary"></i>
                                            </div>
                                            <div class="activity-info-text">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="text-muted mb-0 font-13 w-75"><span>Donald</span>
                                                        updated the status of <a href="#">Refund #1234</a> to
                                                        awaiting customer response
                                                    </p>
                                                    <small class="text-muted">10 Min ago</small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="activity-info">
                                            <div class="icon-info-activity">
                                                <i class="mdi mdi-timer-off bg-soft-primary"></i>
                                            </div>
                                            <div class="activity-info-text">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="text-muted mb-0 font-13 w-75"><span>Lucy Peterson</span>
                                                        was added to the group, group name is <a
                                                            href="#">Overtake</a>
                                                    </p>
                                                    <small class="text-muted">50 Min ago</small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="activity-info">
                                            <div class="icon-info-activity">
                                                <img src=" {{ asset('assets-admin/images/users/user-5.jpg') }} "
                                                    alt="" class="rounded-circle thumb-sm">
                                            </div>
                                            <div class="activity-info-text">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="text-muted mb-0 font-13 w-75"><span>Joseph Rust</span>
                                                        opened new showcase <a href="#">Mannat #112233</a> with
                                                        theme
                                                        market
                                                    </p>
                                                    <small class="text-muted">10 hours ago</small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="activity-info">
                                            <div class="icon-info-activity">
                                                <i class="mdi mdi-clock-outline bg-soft-primary"></i>
                                            </div>
                                            <div class="activity-info-text">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="text-muted mb-0 font-13 w-75"><span>Donald</span>
                                                        updated the status of <a href="#">Refund #1234</a> to
                                                        awaiting customer response
                                                    </p>
                                                    <small class="text-muted">Yesterday</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="activity-info">
                                            <div class="icon-info-activity">
                                                <i class="mdi mdi-alert-outline bg-soft-primary"></i>
                                            </div>
                                            <div class="activity-info-text">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="text-muted mb-0 font-13 w-75"><span>Lucy Peterson</span>
                                                        was added to the group, group name is <a
                                                            href="#">Overtake</a>
                                                    </p>
                                                    <small class="text-muted">14 Nov 2019</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end activity-->
                                </div><!--end analytics-dash-activity-->
                            </div> <!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Appointments</h4>
                                    </div><!--end col-->
                                </div> <!--end row-->
                            </div><!--end card-header-->
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item align-items-center d-flex">
                                        <div class="media">
                                            <img src="assets/images/small/project-1.jpg"
                                                class="me-3 thumb-sm align-self-center rounded-circle" alt="...">
                                            <div class="media-body align-self-center">
                                                <h6 class="mt-0 mb-1">Meeting with UI/UX Designers</h6>
                                                <p class="text-muted mb-0">Today 07:30 AM</p>
                                            </div><!--end media body-->
                                        </div>
                                    </li>
                                    <li class="list-group-item align-items-center ">
                                        <div class="media">
                                            <img src="assets/images/users/user-5.jpg"
                                                class="me-3 thumb-sm align-self-center rounded-circle" alt="...">
                                            <div class="media-body align-self-center">
                                                <h6 class="mt-0 mb-1">Lunch with my friend</h6>
                                                <p class="text-muted mb-0">Today 12:30 PM</p>
                                            </div><!--end media body-->
                                        </div>
                                    </li>
                                    <li class="list-group-item align-items-center">
                                        <div class="media">
                                            <img src="assets/images/small/project-3.jpg"
                                                class="me-3 thumb-sm align-self-center rounded-circle" alt="...">
                                            <div class="media-body align-self-center">
                                                <h6 class="mt-0 mb-1">Call for payment Project ID : #254136</h6>
                                                <p class="text-muted mb-0">Tomorrow 10:30 AM</p>
                                            </div><!--end media body-->
                                        </div>
                                    </li>
                                    <li class="list-group-item align-items-center ">
                                        <div class="media">
                                            <img src="assets/images/users/user-4.jpg"
                                                class="me-3 thumb-sm align-self-center rounded-circle" alt="...">
                                            <div class="media-body align-self-center">
                                                <h6 class="mt-0 mb-1">Picnic with my Family</h6>
                                                <p class="text-muted mb-0">01 June 2019 - 09:30 AM</p>
                                            </div><!--end media body-->
                                        </div>
                                    </li>
                                    <li class="list-group-item align-items-center">
                                        <div class="media">
                                            <img src="assets/images/small/project-4.jpg"
                                                class="me-3 thumb-sm align-self-center rounded-circle" alt="...">
                                            <div class="media-body align-self-center">
                                                <h6 class="mt-0 mb-1">Meeting with Developers</h6>
                                                <p class="text-muted mb-0">04 June 2019 - 07:30 AM</p>
                                            </div><!--end media body-->
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                <!--end col-->

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Calendar</h4>
                                </div><!--end col-->
                            </div> <!--end row-->
                        </div><!--end card-header-->
                        <div class="card-body">
                            <div class="dash-datepick">
                                <input type="hidden" id="light_datepicker" />

                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->


        </div>
        <!-- end page content -->

        <script src="{{ asset('assets-admin/libs/litepicker/litepicker.js') }}"></script>
        <script src="{{ asset('assets-admin/libs/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('assets-admin/js/pages/projects-index.init.js') }}"></script>


    </div>
@endsection
