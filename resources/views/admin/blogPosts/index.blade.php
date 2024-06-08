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
                                <li class="breadcrumb-item"><a href="{{ route('blogposts.index') }}">{{ __('general.blogs') }}</a></li>
                                <li class="breadcrumb-item active">{{ __('general.list') }}</li>
                            </ol>
                        </div>
                        <div class="col-md-12">
                            <a href="{{ URL::previous() }}" class="btn btn-xs btn-primary">
                                <span class="fa {{ app()->isLocale('ar') ? 'fa-forward' : 'fa-backward' }}"></span>
                            </a>
                            <h4 class="page-title">{{ __('general.side.blogs-list') }}</h4>
                        </div>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title and breadcrumb -->
            <x-table tableId="DataTables">
                <x-slot name="header">
                    <tr>
                        <th><input type="checkbox" id="select-all"></th>
                        <th>{{ __('general.attributes.image') }}</th>
                        <th>{{ __('general.attributes.title_en') }}</th>
                        <th>{{ __('general.attributes.title_ar') }}</th>
                        <th>{{ __('general.attributes.author') }}</th>
                        <th>{{ __('general.attributes.status') }}</th>
                        <th>{{ __('general.actions.actions') }}</th>
                    </tr>
                </x-slot>
                @foreach ($records as $record)
                    <tr>
                        <td><input type="checkbox" name="ids[]" value="{{ $record->id }}"></td>
                        <td><img src="{{ asset('images/' . $record->image) }}" alt="{{ $record->title_en }}" width="50"></td>
                        <td>{{ $record->title_en }}</td>
                        <td>{{ $record->title_ar }}</td>
                        <td>{{ $record->author->user_name }}</td>
                        <td>{{ $record->status }}</td>
                        <td>
                            <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#postModal{{ $record->id }}">{{ __('general.actions.view') }}</button>
                            <a href="{{ route('blogposts.edit', $record->id) }}" class="btn btn-sm btn-primary">{{ __('general.actions.edit') }}</a>
                            <form action="{{ route('blogposts.destroy', $record->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('{{ __('general.confirm.delete') }}')">{{ __('general.btn.delete') }}</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                <x-slot name="createButton">
                    <a href="{{ route('blogposts.create') }}" class="btn btn-outline-light btn-sm px-4">+ {{ __('general.actions.new') }}</a>
                </x-slot>

                <x-slot name="pagination">
                    {{ $records->links('admin.pagination.bootstrap') }}
                </x-slot>
            </x-table>

            <!-- Modals -->
            @foreach ($records as $record)
                <div class="modal fade" id="postModal{{ $record->id }}" tabindex="-1" role="dialog" aria-labelledby="postModal{{ $record->title_en }}Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="postModal{{ $record->id }}Label">{{ $record->title_en }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p><strong>{{ __('general.attributes.title_en') }}:</strong> {{ $record->title_en }}</p>
                                <p><strong>{{ __('general.attributes.title_ar') }}:</strong> {{ $record->title_ar }}</p>
                                <p><strong>{{ __('general.attributes.content_en') }}:</strong></p>
                                <p>{{ $record->content_en }}</p>
                                <p><strong>{{ __('general.attributes.content_ar') }}:</strong></p>
                                <p>{{ $record->content_ar }}</p>
                                <p><strong>{{ __('general.attributes.author') }}:</strong> {{ $record->author->name }}</p>
                                <p><strong>{{ __('general.attributes.status') }}:</strong> {{ $record->status }}</p>
                                <p><strong>{{ __('general.attributes.post_date') }}:</strong> {{ $record->post_date }}</p>
                                <img src="{{ asset('images/' . $record->image) }}" alt="{{ $record->title_en }}" width="50">
                                <!-- Add other post details here -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-xs btn-primary" data-dismiss="modal">{{ __('general.actions.close') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div><!-- container -->
    </div><!-- container -->
@endsection
