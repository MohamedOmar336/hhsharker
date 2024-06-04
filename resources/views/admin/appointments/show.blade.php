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
              <a href="{{ URL::previous() }}" class="btn btn-secondary">
                <span class="fa {{ app()->isLocale('ar') ? 'fa-forward' : 'fa-backward' }}"></span>
              </a>
              <h4 class="page-title">
                {{ __('general.attributes.appointment') }} - {{ $appointment->id }}
              </h4>
            </div>
          </div></div></div>

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  {{ __('general.attributes.id') }}: {{ $appointment->id }}
                </div>
                <div class="card-body">
                  <h5 class="card-title">{{ __('general.details') }}</h5>
                  <p class="card-text">
                    <strong>{{ __('general.attributes.title') }}:</strong> {{ $appointment->title }}
                  </p>
                  <p class="card-text">
                    <strong>{{ __('general.attributes.creator') }}:</strong>
                    {{ $appointment->user->user_name}}
                  </p>
                  <p class="card-text">
                    <strong>{{ __('general.attributes.with') }}:</strong>
                    {{ $appointment->withUser->user_name }}
                  </p>
                  <p class="card-text">
                    <strong>{{ __('general.attributes.start_time') }}:</strong> {{ $appointment->start_time }}
                  </p>
                  <p class="card-text">
                    <strong>{{ __('general.attributes.finish_time') }}:</strong> {{ $appointment->finish_time }}
                  </p>
                  <p class="card-text">
                    <strong>{{ __('general.attributes.status') }}:</strong> {{ $appointment->status }}
                  </p>
                  <p class="card-text">
                    <strong>{{ __('general.attributes.notes') }}:</strong> {{ $appointment->notes }}
                  </p>
                  <a href="{{ route('appointments.edit', $appointment) }}" class="btn btn-warning">
                    {{ __('general.btn.edit') }}
                  </a>
                  <form action="{{ route('appointments.destroy', $appointment) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                      {{ __('general.btn.delete') }}
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
    </div>
  </div>
@endsection