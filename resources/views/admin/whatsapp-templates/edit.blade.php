@extends('admin.layouts.app')

@section('content')
<div class="page-content-tab">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('whatsapp-templates.index') }}">WhatsApp Templates</a></li>
                            <li class="breadcrumb-item active">Edit Template</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Edit WhatsApp Template</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('whatsapp-templates.update', $template->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Template Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $template->name) }}">
                                @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="language_code" class="form-label">Language Code</label>
                                <input type="text" class="form-control @error('language_code') is-invalid @enderror" id="language_code" name="language_code" value="{{ old('language_code', $template->language_code) }}">
                                @error('language_code')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="components" class="form-label">Components (JSON Format)</label>
                                <textarea class="form-control @error('components') is-invalid @enderror" id="components" name="components" rows="5">{{ old('components', $template->components) }}</textarea>
                                @error('components')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Update Template</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
