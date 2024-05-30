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
                                <li class="breadcrumb-item"><a href="{{ route('groups.index') }}">{{ __('general.attributes.groups') }}</a></li>
                                <li class="breadcrumb-item active">{{ __('general.actions.new') }}</li>
                            </ol>
                        </div>
                        <div class="col-md-12">
                            <a href="{{ URL::previous() }}" class="btn btn-secondary">
                                <span class="fa fa-backward"></span>
                            </a>
                            <h4 class="page-title">{{ __('general.actions.new').' ' }}{{ __('general.attributes.groups') }}</h4>
                        </div>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title and breadcrumb -->

            <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-body content-area">
                            <form method="POST" action="{{ route('groups.store') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="created_by" value="{{ auth()->user()->id }}">
                                <div class="mb-3">
                                    <label for="name" class="form-label">{{ __('general.attributes.name') }}</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="Description" class="form-label">Description</label>
                                    <textarea class="ticket_description form-control" id="Description" name="description">{{ old('description') }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="members" class="form-label">{{ __('general.attributes.members') }}</label>
                                    <select id="choices-multiple-remove-button" name="members[]" class="form-control @error('members') is-invalid @enderror" multiple>
                                        @foreach($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->first_name .' '. $user->last_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('members')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">{{ __('general.btn.submit') }}</button>
                                </div>
                            </form>
                        </div> <!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
            </div><!--end row-->

        </div><!-- container -->
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function(){
            var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
                removeItemButton: true,
                maxItemCount:100,
                searchResultLimit:5,
                renderChoiceLimit:5
            });
        });
    </script>
@endpush
