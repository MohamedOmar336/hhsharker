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
                                <li class="breadcrumb-item"><a
                                        href="{{ route('contacts.index') }}">{{ __('general.attributes.contacts') }}</a>
                                </li>
                                <li class="breadcrumb-item active">{{ __('general.side.list') }}</li>
                            </ol>
                        </div>
                        <div class="col-md-12">
                            <a href="{{ URL::previous() }}" class="btn btn-secondary"><span class="fa fa-backward"></a>
                            <h4 class="page-title">{{ __('general.side.contacts-list') }}</h4>
                        </div>

                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title and breadcrumb -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body content-area">
                            <div class="table-responsive browser_users">
                                <table class="table mb-0">

                                    <thead class="thead-light">
                                        <tr>
                                            <th>{{ __('general.attributes.name') }}</th>
                                            <th>{{ __('general.attributes.email') }}</th>
                                            <th>{{ __('general.attributes.phone') }}</th>
                                            <th>{{ __('general.attributes.address') }}</th>
                                            <th>{{ __('general.attributes.segment') }}</th>
                                            <th>{{ __('general.attributes.last_interaction') }}</th>
                                            <th>{{ __('general.attributes.actions') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contacts as $contact)
                                            <tr>
                                                <td>{{ $contact->name }}</td>
                                                <td>{{ $contact->email }}</td>
                                                <td>{{ $contact->phone }}</td>
                                                <td>{{ $contact->address }}</td>
                                                <td>{{ $contact->segment }}</td>
                                                <td>{{ $contact->last_interaction }}</td>
                                                <td>
                                                    <a href="{{ route('contacts.edit', $contact->id) }}"
                                                        class="btn btn-sm btn-primary">{{ __('general.btn.edit') }}</a>
                                                    <form action="{{ route('contacts.destroy', $contact->id) }}"
                                                        method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Are you sure you want to delete this contact?')">{{ __('general.btn.delete') }}</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <a href="{{ route('contacts.create') }}" class="btn btn-outline-light btn-sm px-4">+
                                        New Contact</a>
                                </div><!--end col-->
                                <div class="col-auto">
                                    <!-- Pagination Links -->
                                </div> <!--end col-->
                            </div><!--end row-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div><!-- container -->
    </div><!-- container -->
@endsection
