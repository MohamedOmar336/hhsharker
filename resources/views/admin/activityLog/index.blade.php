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
                                <li class="breadcrumb-item active">{{ __('general.list') }}</li>
                            </ol>
                        </div>
                        <div class="col-md-12">
                            <a href="{{ URL::previous() }}" class="btn btn-xs btn-primary">
                                <span class="fa {{ app()->isLocale('ar') ? 'fa-forward' : 'back-backward' }}"></span>
                            </a>
                            <h4 class="page-title">{{ __('general.list') }}</h4>
                        </div>
                        
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <x-table tableId="DataTables">
                <x-slot name="header">
                    <tr>
                        <th scope="col">{{ __('general.attributes.id') }}</th>
                        <th scope="col">{{ __('general.attributes.description') }}</th>
                        <th scope="col">{{ __('general.attributes.subject') }}</th>
                        <th scope="col">{{ __('general.attributes.causer') }}</th>
                        <th scope="col">{{ __('general.attributes.properties') }}</th>
                        <th scope="col">{{ __('general.attributes.created_at') }}</th>
                    </tr>
                </x-slot>
                @foreach ($activities as $activity)
                    <tr>
                        <td>{{ $activity->id }}</td>
                        <td>{{ $activity->description }}</td>
                        <td>{{ class_basename($activity->subject_type) }} (ID: {{ $activity->subject_id }})</td>
                        <td>{{ $activity->causer ? $activity->causer->first_name .' '. $activity->causer->last_name : 'N/A' }}</td>
                        <td>{{ json_encode($activity->properties->toArray(), JSON_PRETTY_PRINT) }}</td>
                        <td>{{ $activity->created_at }}</td>
                    </tr>
                @endforeach

                <x-slot name="pagination">
                    {{ $activities->links('admin.pagination.bootstrap') }}
                </x-slot>
            </x-table>
        </div><!-- container -->
    </div><!-- container -->
@endsection
