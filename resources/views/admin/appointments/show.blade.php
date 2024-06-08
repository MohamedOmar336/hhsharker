@extends('admin.layouts.app')

@section('content')
    <div class="page-content-tab">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ url('/home') }}">{{ __('general.home') }}</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ url('/appointments') }}">
                                        {{ __('general.attributes.appointments') }}
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">
                                    {{ $appointment->id }}
                                </li>
                            </ol>
                        </div>
                        <div class="col-md-12">
                            <a href="{{ URL::previous() }}" class="btn btn-xs btn-primary">
                                <span class="fa {{ app()->isLocale('ar') ? 'fa-forward' : 'fa-backward' }}"></span>
                            </a>
                            <h4 class="page-title">
                                {{ __('general.attributes.appointment') }} - {{ $appointment->id }}
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
          </div>

            <div class="row">
                <div class="col-12">
                  <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="card">
                            <div class="card-body invoice-head">
                                <div class="row">
                                    <div class="col-md-4 align-self-center">
                                        <div class="media">

                                            <div class="media-body align-self-center">
                                                <h3 class="m-0 font-20">Appointment Title :</Title></h3>
                                            </div>
                                        </div>
                                        <p class="mt-2 mb-0 text-muted">{{ $appointment->title }}.</p>
                                    </div><!--end col-->
                                    <div class="col-md-8">


                                        </ul>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end card-body-->
                            <div class="card-body">
                                <div class="row row-cols-3 d-flex justify-content-md-between my-4">
                                    <div class="col-md-3 d-print-flex mb-3">
                                        <h6 class="mt-0"><b>Appointment Creator :</b> {{ $appointment->user->user_name }}</h6>
                                        <h6 class="mt-0"><b>Appointment with :</b> {{ $appointment->withUser->user_name }}</h6>
                                    </div><!--end col-->
                                    <div class="col-md-3 d-print-flex mb-3">
                                        <h6 class="m-0"><b>Appointment Start Time :</b>{{ $appointment->start_time }}</h6>
                                        <h6 class="mb-0"><b>Appointment Finish Time :</b> {{ $appointment->finish_time }}</h6>
                                    </div><!--end col-->
                                    <div class="col-md-3 d-print-flex mb-3">
                                        <h6 class="m-0"><b>Appointment Status :</b> {{ $appointment->status }}</h6>
                                        <h6 class="mb-0"><b>Appointment Notes :</b> {{ $appointment->notes }}</h6>

                                    </div> <!--end col-->
                                </div><!--end row-->

                                <div class="row d-flex justify-content-center">
                                  <div class="col-lg-12 col-xl-4 ms-auto align-self-center">
                                      <div class="text-center"><small class="font-12"></small></div>
                                  </div><!--end col-->
                                  <div class="col-lg-12 col-xl-4">
                                      <div class="float-end d-print-none mt-2 mt-md-0">
                                        <a href="{{ route('appointments.edit', $appointment) }}" class="btn btn-sm btn-primary">
                                          {{ __('general.btn.edit') }}
                                      </a>
                                      <form action="{{ route('appointments.destroy', $appointment) }}" method="POST"
                                          style="display:inline-block;">
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="btn btn-sm btn-danger">
                                              {{ __('general.btn.delete') }}
                                          </button>
                                      </form>
                                      </div>
                                  </div><!--end col-->
                              </div><!--end row-->

                            </div><!--end card-body-->
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->

            </div>
        </div>
    </div>

    </div><!-- container -->
@endsection
