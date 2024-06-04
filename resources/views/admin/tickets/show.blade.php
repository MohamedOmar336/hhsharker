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
                <li class="breadcrumb-item"><a href="{{ url('/tickets') }}">{{ __('general.side.tickets') }}</a></li>
                <li class="breadcrumb-item active">{{ __('general.actions.edit') }}</li>
              </ol>
            </div>
            <div class="col-md-12">
              <a href="{{ URL::previous() }}" class="btn btn-secondary">
                <span class="fa {{ app()->isLocale('ar') ? 'fa-forward' : 'fa-backward' }}"></span>
              </a>
              <h4 class="page-title">
                {{ __('general.actions.edit') }} {{ __('general.side.tickets') }}
              </h4>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h2>{{ $ticket->Title }}</h2>
            </div>
            <div class="card-body">
              <p><strong>{{ __('general.attributes.description') }}:</strong> {{ $ticket->Description }}</p>
              <p><strong>{{ __('general.attributes.priority') }}:</strong> {{ $ticket->priority->name }}</p>
              <p><strong>{{ __('general.attributes.status') }}:</strong> {{ $ticket->status->name }}</p>
              <p><strong>{{ __('general.attributes.assigned_to') }}:</strong> {{ $ticket->assignedTo->name }}</p>
              <p><strong>{{ __('general.attributes.created_by') }}:</strong> {{ $ticket->createdBy->name }}</p>
            </div>
          </div>

          <h2>{{ __('general.history') }}</h2>
          <table class="table">
            <thead>
              <tr>
                <th>{{ __('general.attributes.changed_by') }}</th>
                <th>{{ __('general.attributes.change_description') }}</th>
                <th>{{ __('general.attributes.changed_at') }}</th>
              </tr>
            </thead>
            <tbody>
              @foreach($histories as $history)
                <tr>
                  <td>{{ $history->changedBy->user_name }}</td>
                  <td>{{ $history->ChangeDescription }}</td>
                  <td>{{ $history->ChangedAt }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection