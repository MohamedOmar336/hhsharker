@extends('admin.layouts.app')

@section('content')
    <div class="page-content-tab">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">{{ __('general.home') }}</a></li>
                                <li class="breadcrumb-item"><a
                                        href="{{ url('/tickets') }}">{{ __('general.side.tickets') }}</a></li>
                                <li class="breadcrumb-item active">{{ __('general.actions.show') }}</li>
                            </ol>
                        </div>
                        <div class="col-md-12">
                            <a href="{{ URL::previous() }}">
                                @if (app()->isLocale('ar'))
                                    <i data-feather="arrow-right-circle"></i> <!-- Arabic locale -->
                                @else
                                    <i data-feather="arrow-left-circle"></i> <!-- Default locale -->
                                @endif
                            </a>
                            <h4 class="page-title">
                                {{ __('general.actions.show') }} {{ __('general.side.tickets') }}
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="card">
                        <div class="card-body invoice-head">
                            <div class="row">
                                <div class="col-md-4 align-self-center">
                                    <div class="media">

                                        <div class="media-body align-self-center">
                                            <h3 class="m-0 font-20">Ticket Title</h3>
                                        </div>
                                    </div>
                                    <p class="mt-2 mb-0 text-muted">{{ $ticket->Title }}.</p>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                        <div class="card-body">
                            <div class="row row-cols-3 d-flex justify-content-md-between my-4">
                                <div class="col-md-3 d-print-flex mb-3">
                                    <h6 class="mt-0"><b>{{ __('general.attributes.description') }}:</b>
                                        {{ e(strip_tags($ticket->Description)) }}</h6>
                                </div><!--end col-->
                                <div class="col-md-3 d-print-flex mb-3">
                                    <h6 class="mt-0"><b>{{ __('general.attributes.priority') }}:</b>
                                        {{ app()->isLocale('ar') ? $ticket->priority->Name_ar : $ticket->priority->Name_en }}
                                       </h6>
                                    <h6 class="m-0"><b>{{ __('general.attributes.status') }}:</b>
                                        {{ app()->isLocale('ar') ? $ticket->status->Name_ar : $ticket->status->Name_en }}
                                       </h6>
                                </div><!--end col-->
                                <div class="col-md-3 d-print-flex mb-3">
                                    <h6 class="m-0">
                                        <b>{{ __('general.attributes.assigned_to') }}:</b>{{ $ticket->assignedTo->user_name }}
                                    </h6>
                                    <h6 class="mb-0"><b>{{ __('general.attributes.created_by') }}:</b>
                                        {{ $ticket->createdBy->user_name }}</h6>
                                </div> <!--end col-->
                            </div><!--end row-->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive project-invoice">
                                        <table class="table table-bordered mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>{{ __('general.attributes.changed_by') }}
                                                    </th>
                                                    <th>{{ __('general.attributes.change_description') }}
                                                    </th>
                                                    <th>{{ __('general.attributes.assigned_to') }}
                                                    </th>
                                                    <th>{{ __('general.attributes.changed_at') }}
                                                    </th>
                                                </tr><!--end tr-->
                                            </thead>
                                            <tbody>
                                                @foreach ($histories as $history)
                                                    <tr>
                                                        <td>{{ $history->changedBy->user_name }}
                                                        </td>
                                                        <td>{{  e(strip_tags($history->ChangeDescription)) }}
                                                        </td>
                                                        <td>{{ isset($history->assignedTo->user_name) ? $history->assignedTo->user_name : null  }}
                                                        </td>
                                                        <td>{{ $history->ChangedAt }}</td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table><!--end table-->
                                    </div> <!--end /div-->
                                </div> <!--end col-->
                            </div><!--end row-->



                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->

        </div><!-- container -->
    @endsection
