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
                                <li class="breadcrumb-item active">{{ __('general.side.ticket_statuses') }}</li>
                            </ol>
                        </div>
                        <div class="col-md-12">
                            <a href="{{ route('ticket-statuses.index') }}" class="btn btn-secondary"><span class="fa fa-backward"></span></a>
                            <h4 class="page-title">{{ __('general.actions.new') . ' ' . __('general.side.ticket_status') }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body content-area">
                            <form action="{{ route('ticket-statuses.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="Name_ar" class="form-label">{{ __('Name (Arabic)') }}</label>
                                    <input id="Name_ar" type="text" class="form-control @error('Name_ar') is-invalid @enderror" name="Name_ar" value="{{ old('Name_ar') }}" required>
                                    @error('Name_ar')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="Name_en" class="form-label">{{ __('Name (English)') }}</label>
                                    <input id="Name_en" type="text" class="form-control @error('Name_en') is-invalid @enderror" name="Name_en" value="{{ old('Name_en') }}" required>
                                    @error('Name_en')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="Description_ar" class="form-label">{{ __('Description (Arabic)') }}</label>
                                    <textarea id="Description_ar" class="form-control @error('Description_ar') is-invalid @enderror" name="Description_ar">{{ old('Description_ar') }}</textarea>
                                    @error('Description_ar')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="Description_en" class="form-label">{{ __('Description (English)') }}</label>
                                    <textarea id="Description_en" class="form-control @error('Description_en') is-invalid @enderror" name="Description_en">{{ old('Description_en') }}</textarea>
                                    @error('Description_en')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">{{ __('general.actions.create') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
