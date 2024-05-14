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
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">{{ __('general.home') }}</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">{{ __('general.side.roles') }}</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item active">{{ __('general.btn.edit') }}</li>
                            </ol>
                        </div>
                        <h4 class="page-title">{{ __('general.side.roles-list') }}</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
                <div class="col-md-12">
                    <a href="{{ URL::previous() }}"
                    class="btn btn-secondary">{{__('general.btn.back')}}</a>
                </div>
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                    <div class="card">
                          <div class="card-body content-area">

                            <form id="quickForm" method="POST" action="{{ route('roles.update', $record->id) }}" enctype="multipart/form-data"
                                class="needs-validation" novalidate>
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="name" class="form-label">{{ __('general.attributes.name') }}</label>
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name', $record->name) }}" required autocomplete="name">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">{{ __('general.attributes.description') }}</label>
                                    <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description"
                                        required autocomplete="description">{{ old('description', $record->description) }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label for="permissions" class="form-label">{{ __('genral.attributes.permissions') }}</label>
                                        <select id="choices-multiple-remove-button" class="form-control" multiple name="permissions[]">
                                            @foreach ($acls as $acl)
                                                @php
                                                    // Check if the ACL is assigned to the role
                                                    $selected = in_array($acl['route'], $record->permissions) ? 'selected' : '';
                                                @endphp
                                                <option value="{{ $acl['route'] }}" {{ $selected }}>{{ $acl['key'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group mb-0">
                                    <x-btn name="{{ __('general.btn.submit') }}"></x-btn>
                                </div>
                            </form>
                        </div> <!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
            </div><!--end row-->
        </div>
    </div><!-- container -->
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
