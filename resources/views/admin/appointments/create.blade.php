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
                                  {{ __('general.attributes.add-appointment') }}
                                </li>
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
                            <h4 class="page-title">{{ __('general.attributes.add-appointment') }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-11 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('appointments.store') }}" method="POST">
                                @csrf

                                <div class="mb-3">
                                    <label for="title" class="form-label">{{ __('general.attributes.title') }}</label>
                                    <input id="title" type="text"
                                        class="form-control @error('title') is-invalid @enderror" name="title"
                                        value="{{ old('title') }}" required>
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="with_user_id"
                                        class="form-label">{{ __('general.attributes.with') }}</label>
                                    <select id="with_user_id"
                                        class="form-control @error('with_user_id') is-invalid @enderror" name="with_user_id"
                                        required>
                                        <option value="">{{ __('general.select.empty') }}</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}"
                                                {{ old('with_user_id') == $user->id ? 'selected' : '' }}>
                                                {{ $user->user_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('with_user_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="start_time"
                                        class="form-label">{{ __('general.attributes.start_time') }}</label>
                                    <input id="start_time" type="datetime-local"
                                        class="form-control @error('start_time') is-invalid @enderror" name="start_time"
                                        value="{{ old('start_time') }}" required>
                                    @error('start_time')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="finish_time"
                                        class="form-label">{{ __('general.attributes.finish_time') }}</label>
                                    <input id="finish_time" type="datetime-local"
                                        class="form-control @error('finish_time') is-invalid @enderror" name="finish_time"
                                        value="{{ old('finish_time') }}" required>
                                    @error('finish_time')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="mb-3">
    <label for="status" class="form-label">{{ __('general.attributes.status') }}</label>
    <select id="status" class="form-control @error('status') is-invalid @enderror" name="status" required>
        <option value="pending" {{ old('status', 'pending') == 'pending' ? 'selected' : '' }}>
            {{ __('general.attributes.pending') }}
        </option>
        <option value="confirmed" {{ old('status') == 'confirmed' ? 'selected' : '' }}>
            {{ __('general.attributes.confirmed') }}
        </option>
        <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>
            {{ __('general.attributes.completed') }}
        </option>
        <option value="cancelled" {{ old('status') == 'cancelled' ? 'selected' : '' }}>
            {{ __('general.attributes.cancelled') }}
        </option>
    </select>
    @error('status')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

                                <div class="mb-3">
                                    <label for="notes" class="form-label">{{ __('general.attributes.notes') }}</label>
                                    <textarea id="notes" class="form-control @error('notes') is-invalid @enderror" name="notes">{{ old('notes') }}</textarea>
                                    @error('notes')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-sm btn-de-primary">{{ __('general.btn.create') }}</button>
                            </form>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </div><!--end page-content-tab-->
@endsection
