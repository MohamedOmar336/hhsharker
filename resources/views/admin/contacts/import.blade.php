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

                                <div class="col-4" style="position: absolute;z-index: 2;left: 961px;">
                                    <a href="{{ route('contacts.export') }}" class="btn btn-xs btn-primary"
                                        style="margin-right: 20px; margin-bottom: 10px;">
                                        <i class="ti ti-file-download">{{ __('general.attributes.export') }}</i>
                                    </a>
                                </div>
                                <div class="col-4" style="position: absolute;z-index: 1;left: 891px;">
                                    <a href="{{ route('contacts.import.form') }}" class="btn btn-xs btn-primary"
                                        style="margin-right: 20px; margin-bottom: 10px;">
                                        <i class="ti ti-file-download">{{ __('general.attributes.import') }}</i>
                                    </a>
                                </div>
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">{{ __('general.home') }}</a></li>
                                <li class="breadcrumb-item"><a
                                        href="{{ route('contacts.index') }}">{{ __('general.attributes.contacts') }}</a>
                                </li>
                                <li class="breadcrumb-item active">{{ __('general.list') }}</li>
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
                            <h4 class="page-title">{{ __('general.side.contacts-list') }}</h4>
                        </div>

                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
               <div class="container">
                <h1>Import Contacts</h1>
                <form action="{{ route('contacts.import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="import_file" required>
                    <button type="submit" class="btn btn-primary">Import</button>
                </form>
                <!-- resources/views/your-view.blade.php -->

<a href="{{ asset('template.xlsx') }}" class="btn btn-primary" download>Download Template</a>

            </div>
        </div>
    </div>

@endsection
