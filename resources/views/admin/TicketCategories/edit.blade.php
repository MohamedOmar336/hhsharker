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
                                <li class="breadcrumb-item"><a href="{{ url('/ticket_categories') }}">{{ __('general.attributes.ticket_categories') }}</a></li>
                                <li class="breadcrumb-item active">{{ __('general.attributes.edit') }}</li>
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
                            <h4 class="page-title">{{ __('general.attributes.edit') }} - {{ __('general.attributes.ticket_categories') }}</h4>
                        </div>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12 col-md-11 mx-auto">
                    <div class="card">
                        <div class="card-body content-area">
                            <form action="{{ route('ticket_categories.update', ['ticket_category' => $ticket_category->id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label for="name_ar" class="form-label">{{ __('general.attributes.name_ar') }}</label>
                                    <input id="name_ar" type="text" class="form-control @error('name_ar') is-invalid @enderror" name="name_ar" value="{{ old('name_ar',  $ticket_category->name_ar) }}" required autocomplete="name_ar" autofocus>
                                    @error('name_ar')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="name_en" class="form-label">{{ __('general.attributes.name_en') }}</label>
                                    <input id="name_en" type="text" class="form-control @error('name_en') is-invalid @enderror" name="name_en" value="{{ old('name_en',  $ticket_category->name_en) }}" required autocomplete="name_en">
                                    @error('name_en')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="image" class="form-label">{{ __('general.attributes.image') }}</label>
                                    <img src="{{ isset( $ticket_category->image) ? asset('images/' .  $ticket_category->image) : asset('assets-admin/images/no_image.png') }}" alt="{{  $ticket_category->name_en }}" width="100"><br>
                                    <label for="image" class="form-label mt-2">Update Image</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="parent_id" class="form-label">{{ __('general.attributes.parent_id') }}</label>
                                    <select id="parent_id" class="form-control @error('parent_id') is-invalid @enderror" name="parent_id" autocomplete="parent_id">
                                        <option value="">{{ __('general.select.select') }}</option>
                                        @foreach ($ticketCategories as $cat)
                                            <option value="{{ $cat->id }}" {{  $ticket_category->parent_id == $cat->id ? 'selected' : '' }}>{{ $cat->name_en }}</option>
                                        @endforeach
                                    </select>
                                    @error('parent_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="active" class="form-label">{{ __('general.attributes.active') }}</label>
                                    <select id="active" class="form-control @error('active') is-invalid @enderror" name="active" required autocomplete="active">
                                        <option value="1" {{  $ticket_category->active ? 'selected' : '' }}>{{ __('general.select.yes') }}</option>
                                        <option value="0" {{ ! $ticket_category->active ? 'selected' : '' }}>{{ __('general.select.no') }}</option>
                                    </select>
                                    @error('active')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">{{ __('general.btn.edit') }}</button>
                                </div>
                            </form>
                        </div> <!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
            </div><!--end row-->
        </div><!-- container -->
    </div>
@endsection
