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
                                <li class="breadcrumb-item"><a href="{{ route('contacts.index') }}">{{ __('general.attributes.contacts') }}</a></li>
                                <li class="breadcrumb-item active">{{ __('general.attributes.add-contact') }}</li>
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
                            <h4 class="page-title">{{ __('general.attributes.add-contact') }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12 col-lg-11 mx-auto">
                    <div class="card">
                        <div class="card-body content-area">
                            <form method="POST" action="{{ route('contacts.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">{{ __('general.attributes.name') }}</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">{{ __('general.attributes.email') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">{{ __('general.attributes.phone') }}</label>
                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}">
                                    @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">{{ __('general.attributes.address') }}</label>
                                    <textarea id="address" class="form-control @error('address') is-invalid @enderror" name="address" rows="3">{{ old('address') }}</textarea>
                                    @error('address')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="segment" class="form-label">{{ __('general.attributes.segment') }}</label>
                                    <input id="segment" type="text" class="form-control @error('segment') is-invalid @enderror" name="segment" value="{{ old('segment') }}">
                                    @error('segment')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label for="groups" class="form-label">{{ __('general.attributes.groups') }}</label>
                                        <select id="choices-multiple-remove-button" class="form-control"
                                            placeholder="Choose ..." multiple name="groups[]">
                                            @foreach($groups as $group)
                                            <option value="{{ $group->id }}" {{ in_array($group->id, old('groups', [])) ? 'selected' : '' }}>
                                                {{ $group->name }}
                                            </option>
                                        @endforeach
                                        </select>
                                        @error('groups')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="last_interaction" class="form-label">{{ __('general.attributes.last_interaction') }}</label>
                                    <input id="last_interaction" type="datetime-local" class="form-control @error('last_interaction') is-invalid @enderror" name="last_interaction" value="{{ old('last_interaction') }}">
                                    @error('last_interaction')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                               
                            
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">{{ __('general.btn.create') }}</button>
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
            var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
                removeItemButton: true,
                maxItemCount:100,
                searchResultLimit:5,
                renderChoiceLimit:5
            });
        });
    </script>
@endpush
