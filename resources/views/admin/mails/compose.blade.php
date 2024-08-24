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
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">{{ __('general.home') }}</a></li>
                                <li class="breadcrumb-item"><a href="{{ url('/mails') }}">{{ __('general.attributes.mails') }}</a></li>
                                <li class="breadcrumb-item active">{{ __('general.actions.compose') }}</li>
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
                            <h4 class="page-title">{{ __('general.actions.compose') }}</h4>
                        </div>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12 col-lg-12 mx-auto">
                    <div class="card">
                        <div class="card-body content-area">
                            {{-- <!-- Debugging output -->
                            @if (isset($users))
                                <p>Users variable is set and has {{ $users->count() }} users.</p>
                            @else
                                <p>Users variable is not set.</p>
                            @endif --}}

                            <form action="{{ route('mails.send') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                                @csrf
                                <div class="mb-3">
                                    <label for="recipient_id" class="form-label">{{ __('general.attributes.recipient') }}</label>
                                    <input type="text" placeholder="{{ __('general.attributes.select') }}" name="recipient_id" id="recipient_id" class="form-control" list="cat" autocomplete="off">
                                    <datalist id="cat">
                                        @if (isset($users))
                                        @foreach ($users as $user)
                                            <option data-id="{{ $user->id }}" value="{{ $user->email }}"></option>
                                        @endforeach @endif
                                    </datalist>
                                    <input type="hidden" name="recipient_id" id="hidden_recipient_id">
                                    @error('recipient_id')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="subject" class="form-label">{{ __('general.attributes.subject') }}</label>
                                    <input id="subject" type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" value="{{ old('subject') }}" required>
                                    @error('subject')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="body" class="form-label">{{ __('general.attributes.body') }}</label>
                                    <textarea id="body" class="form-control @error('body') is-invalid @enderror" name="body" rows="6" required>{{ old('body') }}</textarea>
                                    @error('body')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">{{ __('general.actions.send') }}</button>
                            </form>
                        </div> <!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
            </div><!--end row-->
        </div><!-- container -->
    </div>
    <script>
        document.getElementById('recipient_id').addEventListener('input', function () {
            var input = this;
            var list = input.getAttribute('list');
            var options = document.querySelectorAll('#' + list + ' option');
            var hiddenInput = document.getElementById('hidden_recipient_id');
            hiddenInput.value = ''; // Clear the hidden input value
            options.forEach(function (option) {
                if (option.value === input.value) {
                    hiddenInput.value = option.getAttribute('data-id');
                }
            });
        });
    </script>
@endsection
