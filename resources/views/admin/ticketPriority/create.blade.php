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
                <li class="breadcrumb-item"><a href="{{ url('/ticket-priorities') }}">{{ __('general.attributes.priorities') }}</a></li>
                <li class="breadcrumb-item active">{{ __('general.actions.new') }}</li>
              </ol>
            </div>
            <div class="col-md-12">
              <a href="{{ URL::previous() }}" class="btn btn-xs btn-primary">
                <span class="fa {{ app()->isLocale('ar') ? 'fa-forward' : 'fa-backward' }}"></span>
              </a>
              <h4 class="page-title">
                {{ __('general.actions.new') }} {{ __('general.attributes.priority') }}
              </h4>
            </div>
          </div></div></div><div class="row">
        <div class="col-12 col-lg-8 mx-auto">
          <div class="card">
            <div class="card-body content-area">
              <form action="{{ route('ticket-priorities.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="Name_en" class="form-label">{{ __('general.attributes.name_english') }}</label>
                  <input id="Name_en" type="text" class="form-control @error('Name_en') is-invalid @enderror" name="Name_en" value="{{ old('Name_en') }}" required autofocus>
                  @error('Name_en')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="Name_ar" class="form-label">{{ __('general.attributes.name_arabic') }}</label>
                  <input id="Name_ar" type="text" class="form-control @error('Name_ar') is-invalid @enderror" name="Name_ar" value="{{ old('Name_ar') }}" required>
                  @error('Name_ar')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="Status" class="form-label">{{ __('general.attributes.status') }}</label>
                  <select id="Status" class="form-control @error('Status') is-invalid @enderror" name="Status" required>
                    <option value="Active" {{ old('Status') == 'Active' ? 'selected' : '' }}>{{ __('Active') }}</option>
                    <option value="Inactive" {{ old('Status') == 'Inactive' ? 'selected' : '' }}>{{ __('Inactive') }}</option>
                  </select>
                  @error('Status')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>

                <button type="submit" class="btn btn-primary">{{ __('general.btn.create') }}</button>
              </form>
            </div></div></div></div></div></div>@endsection
