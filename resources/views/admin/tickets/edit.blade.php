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
              <a href="{{ URL::previous() }}" class="btn btn-xs btn-primary">
                <span class="fa {{ app()->isLocale('ar') ? 'fa-forward' : 'fa-backward' }}"></span>
              </a>
              <h4 class="page-title">{{ __('general.actions.edit') }} {{ __('general.attributes.ticket') }}</h4>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12 col-lg-12 mx-auto">
          <div class="card">
            <div class="card-body content-area">

              <form action="{{ route('tickets.update', $ticket->id) }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                @csrf
                @method('PUT')

                <div class="mb-3">
                  <label for="Title" class="form-label">{{ __('general.attributes.title') }}</label>
                  <input id="Title" type="text" class="form-control @error('Title') is-invalid @enderror" name="Title" value="{{ $ticket->Title }}" required autocomplete="Title">
                  @error('Title')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="priority" class="form-label">{{ __('general.attributes.priority') }}</label>
                  <select class="form-control" id="priority" name="priority" required>
                    @foreach ($priorities as $priority)
                      <option value="{{ $priority->id }}" {{ $ticket->priority_id == $priority->id ? 'selected' : '' }}>
                        {{ $priority->Name_en }}
                      </option>
                    @endforeach
                  </select>
                </div>

                <div class="mb-3">
                  <label for="status" class="form-label">{{ __('general.attributes.status') }}</label>
                  <select class="form-control" id="status" name="status" required>
                    @foreach ($statuses as $status)
                      <option value="{{ $status->id }}" {{ $ticket->status_id == $status->id ? 'selected' : '' }}>
                        {{ $status->Name_en }}
                      </option>
                    @endforeach
                  </select>
                </div>

                <div class="mb-3">
                  <label for="AssignedTo" class="form-label">{{ __('general.attributes.assigned_to') }}</label>
                  <select class="form-control" id="AssignedTo" name="AssignedTo" required>
                    @foreach ($users as $user)
                      <option value="{{ $user->id }}" {{ $ticket->assignedTo->id == $user->id ? 'selected' : '' }}>
                        {{ $user->user_name }}
                      </option>
                    @endforeach
                  </select>
                </div>

                <div class="mb-3">
                  <label for="Description" class="form-label">{{ __('general.attributes.description') }}</label>
                  <textarea class="ticket_description form-control" id="Description" name="Description">{{ $ticket->Description }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">{{ __('general.actions.update') }}</button>
              </form>
            </div> </div>
                </div> <!--end col-->
            </div><!--end row-->
        </div>

    </div><!-- container -->
@endsection
