<!-- resources/views/admin/appointments/edit.blade.php -->

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
                                <li class="breadcrumb-item">
                                    <a href="{{ url('/home') }}">{{ __('general.home') }}</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ url('/appointments') }}">{{ __('general.attributes.appointments') }}</a>
                                </li>
                                <li class="breadcrumb-item active">{{ __('general.attributes.edit-appointment') }}</li>
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
                            <h4 class="page-title">{{ __('general.attributes.edit-appointment') }}</h4>
                        </div>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->

            <div class="row">
                <div class="col-12 col-lg-11 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('appointments.update', $appointment) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="title" class="form-label">{{ __('general.attributes.title') }}</label>
                                    <input id="title" type="text"
                                        class="form-control @error('title') is-invalid @enderror" name="title"
                                        value="{{ old('title', $appointment->title ) }}" required>
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="with_user_id" class="form-label">{{ __('general.attributes.with') }}</label>
                                    <select id="with_user_id" class="form-control @error('with_user_id') is-invalid @enderror" name="with_user_id" required>
                                        <option value="">{{ __('general.attributes.select_user') }}</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}" {{ old('with_user_id', $appointment->with_user_id) == $user->id ? 'selected' : '' }}>
                                                {{ $user->user_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('with_user_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="start_time" class="form-label">{{ __('general.attributes.start_time') }}</label>
                                    <input id="start_time" type="datetime-local" class="form-control @error('start_time') is-invalid @enderror" name="start_time" value="{{ old('start_time', $appointment->start_time->format('Y-m-d\TH:i')) }}" required>
                                    @error('start_time')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="finish_time" class="form-label">{{ __('general.attributes.finish_time') }}</label>
                                    <input id="finish_time" type="datetime-local" class="form-control @error('finish_time') is-invalid @enderror" name="finish_time" value="{{ old('finish_time', $appointment->finish_time->format('Y-m-d\TH:i')) }}" required>
                                    @error('finish_time')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="status" class="form-label">{{ __('general.attributes.status') }}</label>
                                    <input id="status" type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status', $appointment->status) }}" required>
                                    @error('status')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="notes" class="form-label">{{ __('general.attributes.notes') }}</label>
                                    <textarea id="notes" class="form-control @error('notes') is-invalid @enderror" name="notes">{{ old('notes', $appointment->notes) }}</textarea>
                                    @error('notes')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-sm btn-de-primary">{{ __('general.btn.edit') }}</button>
                                </div>
                            </form>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </div><!--end page-content-tab-->
@endsection
