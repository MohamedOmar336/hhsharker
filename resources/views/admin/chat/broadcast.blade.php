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
                                <!--end nav-item-->
                                <li class="breadcrumb-item active">{{ __('Bulk Messages') }}</li>
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
                            <h4 class="page-title">{{ __('Bulk Messages') }}</h4>
                        </div>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12 col-lg-11 mx-auto">
                    <div class="card">
                        <div class="card-body content-area">
                            <form action="{{ route('whatsapp.broadcast.post') }}" method="POST" enctype="multipart/form-data"
                                class="needs-validation" novalidate>
                                @csrf
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label for="contacts"
                                            class="form-label">{{ __('general.attributes.contacts') }}</label>
                                        <select id="choices-multiple-remove-button" class="form-control"
                                            placeholder="{{ __('general.select.choose') }}" multiple name="phones[]">
                                            @foreach ($contacts as $contact)
                                                <option value="{{ $contact->phone }}">{{ $contact->name }} - {{ $contact->phone }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{-- <div class="mb-3">
                                    <label for="message" class="form-label">Product
                                        {{ __() }}</label>
                                    <textarea id="message" class="form-control @error('message') is-invalid @enderror"
                                        name="message">{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div> --}}
                                <div class="mb-3">
                                    <label for="message"
                                        class="form-label">{{ __('general.attributes.message') }}</label>
                                    <textarea id="content_en" class="form-control @error('message') is-invalid @enderror" name="message"
                                        rows="6" required>{{ old('message') }}</textarea>
                                    @error('message')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Add this inside your form in broadcast.blade.php -->
                                <div class="mb-3">
                                    <label for="scheduled_time" class="form-label">{{ __('general.attributes.scheduled_time') }}</label>
                                    <input type="datetime-local" class="form-control @error('scheduled_time') is-invalid @enderror" id="scheduled_time" name="scheduled_time" value="{{ old('scheduled_time') }}" required>
                                    @error('scheduled_time')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-sm btn-de-primary">{{ __('general.btn.create') }}</button>
                            </form>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!-- container -->
    </div><!-- container -->
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
                removeItemButton: true,
                maxItemCount: 100,
                searchResultLimit: 5,
                renderChoiceLimit: 5
            });
        });
    </script>

    <script src="{{ asset('assets-admin/js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets-admin/js/pages/form-editor.init.js') }}"></script>
@endpush
