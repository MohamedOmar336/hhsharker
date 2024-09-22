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
                                <li class="breadcrumb-item active">{{ __('general.attributes.add-ticket') }}</li>
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
                            <h4 class="page-title">{{ __('general.attributes.add-ticket') }}</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-12 mx-auto">
                    <div class="card">
                        <div class="card-body content-area">
                            <form action="{{ route('tickets.store') }}" method="POST" enctype="multipart/form-data"
                                class="needs-validation" novalidate>
                                @csrf
                                <div class="mb-3">
                                    <label for="Title" class="form-label">{{ __('general.attributes.title') }}</label>
                                    <input id="Title" type="text"
                                        class="form-control @error('Title') is-invalid @enderror" name="Title"
                                        value="{{ old('Title') }}" required autocomplete="Title">
                                    @error('Title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="priority"
                                        class="form-label">{{ __('general.attributes.priority') }}</label>
                                    <select class="form-control" id="priority" name="priority" required>
                                        @foreach ($priorities as $priority)
                                            <option value="{{ $priority->id }}">
                                                {{ app()->isLocale('ar') ? $priority->Name_ar : $priority->Name_en }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="status" class="form-label">{{ __('general.attributes.status') }}</label>
                                    <select class="form-control" id="status" name="status" required>
                                        @foreach ($statuses as $status)
                                            <option value="{{ $status->id }}">
                                                {{ app()->isLocale('ar') ? $status->Name_ar : $status->Name_en }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="AssignedTo"
                                        class="form-label">{{ __('general.attributes.assigned_to') }}</label>
                                    <select class="form-control" id="AssignedTo" name="AssignedTo" required>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->user_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="categories" class="form-label">{{ __('general.attributes.categories') }}</label>
                                    <select id="categories" name="categories[]" class="form-control @error('members') is-invalid @enderror" multiple>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ in_array($category->id, old('categories', [])) ? 'selected' : '' }}>
                                                {{ app()->isLocale('ar') ? $category->name_ar : $category->name_en }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('categories')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                              
                                <div class="mb-3">
                                    <label for="note" class="form-label">{{ __('general.attributes.notes') }}</label>
                                    <textarea class="form-control @error('note') is-invalid @enderror" id="note" name="note" rows="4">{{ old('note') }}</textarea>
                                    @error('note')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="Description"
                                        class="form-label">{{ __('general.attributes.description') }}</label>
                                    <textarea class="ticket_description form-control" id="Description" name="Description"></textarea>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-sm btn-de-primary">{{ __('general.btn.create') }}</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function(){
            var multipleCancelButton = new Choices('#categories', {
                removeItemButton: true,
                maxItemCount:100,
                searchResultLimit:5,
                renderChoiceLimit:5
            });
        });

        // document.addEventListener("DOMContentLoaded", function(){
        //     function generateTicketNumber() {
        //         const prefix = "TK-";  // Example prefix
        //         const suffix = new Date().getFullYear();  // Using the current year as the suffix
        //         const randomNumber = Math.floor(Math.random() * 9000) + 1000;  // Random number simulating an incrementing sequence
        //         return prefix + randomNumber + '-' + suffix;
        //     }

        //     // Set the generated ticket number to the Title input field on page load
        //     document.getElementById('Title').value = generateTicketNumber();

        //     // Optional: Regenerate the ticket number on some event, like changing a category
        //     document.getElementById('categories').addEventListener('change', function() {
        //         document.getElementById('Title').value = generateTicketNumber(); // Regenerate when category changes
        //     });
        // });
    </script>
 
@endpush
