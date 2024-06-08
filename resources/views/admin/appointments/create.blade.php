<!-- resources/views/admin/appointments/create.blade.php -->
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
                  {{ __('general.actions.new') }}
                </li>
              </ol>
            </div>
            <div class="col-md-12">
              <a href="{{ URL::previous() }}" class="btn btn-xs btn-primary">
                <span class="fa {{ app()->isLocale('ar') ? 'fa-forward' : 'fa-backward' }}"></span>
              </a>
              <h4 class="page-title">
                {{ __('general.attributes.appointments') }} - {{ __('general.actions.new') }}
              </h4>
            </div>
          </div></div></div><div class="row">
        <div class="col-12 col-lg-8 mx-auto">
          <div class="card">
            <div class="card-body">
              <form action="{{ route('appointments.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                  <label for="title" class="form-label">{{ __('general.attributes.title') }}</label>
                  <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required>
                  @error('title')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="with_user_id" class="form-label">{{ __('general.attributes.with') }}</label>
                  <select id="with_user_id" class="form-control @error('with_user_id') is-invalid @enderror" name="with_user_id" required>
                    <option value="">{{ __('general.select.empty') }}</option>
                    @foreach ($users as $user)
                      <option value="{{ $user->id }}" {{ old('with_user_id') == $user->id ? 'selected' : '' }}>
                        {{ $user->user_name }}
                      </option>
                    @endforeach
                  </select>
                  @error('with_user_id')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="start_time" class="form-label">{{ __('general.attributes.start_time') }}</label>
                  <input id="start_time" type="datetime-local" class="form-control @error('start_time') is-invalid @enderror" name="start_time" value="{{ old('start_time') }}" required>
                  @error('start_time')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="finish_time" class="form-label">{{ __('general.attributes.finish_time') }}</label>
                  <input id="finish_time" type="datetime-local" class="form-control @error('finish_time') is-invalid @enderror" name="finish_time" value="{{ old('finish_time') }}" required>
                  @error('finish_time')
                  <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>


                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <input id="status" type="text"
                                        class="form-control @error('status') is-invalid @enderror" name="status"
                                        value="{{ old('status', 'pending') }}" required>
                                    @error('status')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="notes" class="form-label">Notes</label>
                                    <textarea id="notes" class="form-control @error('notes') is-invalid @enderror" name="notes">{{ old('notes') }}</textarea>
                                    @error('notes')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Create Appointment</button>
                            </form>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </div><!--end page-content-tab-->
@endsection
