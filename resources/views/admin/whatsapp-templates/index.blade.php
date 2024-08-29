@extends('admin.layouts.app')

@section('content')
<div class="page-wrapper">
    <!-- Page Content-->
    <div class="page-content-tab">

        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                                <li class="breadcrumb-item active">WhatsApp Templates</li>
                                <li class="breadcrumb-item active">List</li>
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
                            <h4 class="page-title">List of WhatsApp Templates</h4>
                        </div>

                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->

            <x-table tableId="DataTables">
                <x-slot name="header">
                    <tr>
                        <th><input type="checkbox" id="select-all"></th>
                        <th scope="col">Template Name</th>
                        <th scope="col">Language Code</th>
                        <th scope="col">Components</th>
                        <th style="width: 15%;">Actions</th>
                    </tr>
                </x-slot>

                @foreach ($records as $template)
                <tr class="table-body">
                    <td><input type="checkbox" name="ids[]" value="{{ $template->id }}"></td>
                    <td>{{ $template->name }}</td>
                    <td>{{ $template->language_code }}</td>
                    <td>{{ $template->components }}</td>
                    <td>
                        <a href="{{ route('whatsapp-templates.edit', $template->id) }}" class="btn btn-info">Edit</a>
                        <form action="{{ route('whatsapp-templates.destroy', $template->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this template?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach

                <x-slot name="createButton">
                    <a href="{{ route('whatsapp-templates.create') }}" class="btn btn-outline-light btn-sm px-4">+ Create New Template</a>
                </x-slot>

                <x-slot name="pagination">
                    {{ $records->links('admin.pagination.bootstrap') }}
                </x-slot>
            </x-table>

        </div><!-- container -->
    </div>
    <!-- end page content -->
</div>
@endsection
