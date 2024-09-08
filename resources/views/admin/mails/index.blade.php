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
                                <li class="breadcrumb-item"><a href="{{ url('/mails') }}">{{ __('general.attributes.mails') }}</a></li>
                                <li class="breadcrumb-item active">{{ __('general.labels.inbox') }}</li>
                            </ol>
                        </div>
                        <h4 class="page-title">{{ __('general.labels.inbox') }}</h4>
                    </div>
                </div>
            </div>
            <!-- end page title end breadcrumb -->

            <div class="row">
                <div class="col-12">
                    <!-- Left sidebar -->
                    <div class="email-leftbar">
                        <a href="{{ route('mails.compose') }}" type="button" class="btn btn-primary btn-sm w-100">
                            <i class="fas fa-feather-alt me-2"></i>{{ __('general.btn.compose') }}
                        </a>

                        <div class="card mt-3">
                            <div class="card-body">
                                <div class="mail-list">
                                    <a href="{{ route('mails.index', ['label' => null]) }}" class="{{ request('label') === null ? 'active' : '' }}">
                                        <i class="las la-inbox font-15 me-1"></i>{{ __('general.labels.inbox') }}
                                    </a>
                                    <a href="{{ route('mails.index', ['label' => 'starred']) }}" class="{{ request('label') === 'starred' ? 'active' : '' }}">
                                        <i class="las la-star font-15 me-1"></i>{{ __('general.labels.starred') }}
                                    </a>
                                    <a href="{{ route('mails.index', ['label' => 'important']) }}" class="{{ request('label') === 'important' ? 'active' : '' }}">
                                        <i class="las la-tag font-15 me-1"></i>{{ __('general.labels.important') }}
                                    </a>
                                    <a href="{{ route('mails.index', ['label' => 'draft']) }}" class="{{ request('label') === 'draft' ? 'active' : '' }}">
                                        <i class="las la-file-alt font-15 me-1"></i>{{ __('general.labels.draft') }}
                                    </a>
                                    <a href="{{ route('mails.index', ['label' => 'sent']) }}" class="{{ request('label') === 'sent' ? 'active' : '' }}">
                                        <i class="las la-paper-plane font-15 me-1"></i>{{ __('general.labels.sent') }}
                                    </a>
                                    <a href="{{ route('mails.index', ['label' => 'trash']) }}" class="{{ request('label') === 'trash' ? 'active' : '' }}">
                                        <i class="las la-trash-alt font-15 me-1"></i>{{ __('general.labels.trash') }}
                                    </a>
                                    
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div>
                    <!-- End Left sidebar -->

                    <!-- Email List -->
                    <div class="card">
                        <div class="card-body">
                            <div class="btn-toolbar" role="toolbar">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-de-secondary" onclick="submitBulkAction('delete')">
                                        <i class="fas fa-trash"></i>&nbsp;&nbsp;{{ __('general.btn.delete') }}
                                    </button>
                                </div>

                                <div class="btn-group ms-1">
                                    <button type="button" class="btn btn-sm btn-de-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ __('general.btn.more') }}<i class="mdi mdi-chevron-down ms-1"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#" onclick="submitBulkAction('mark_starred')">{{ __('general.btn.mark_starred') }}</a>
                                        <a class="dropdown-item" href="#" onclick="submitBulkAction('mark_important')">{{ __('general.btn.mark_important') }}</a>
                                        <a class="dropdown-item" href="#" onclick="submitBulkAction('move_trash')">{{ __('general.btn.move-to-trash') }}</a>
                                        <a class="dropdown-item" href="#" onclick="submitBulkAction('mark_draft')">{{ __('general.btn.mark_draft') }}</a>
                                    </div>
                                </div>
                            </div><!-- end toolbar -->

                            <form id="bulk-action-form" method="POST" action="{{ route('mails.bulkAction') }}">
                                @csrf
                                <input type="hidden" name="action" id="bulk-action">
                                <div class=" my-3">
                                    <ul class="message-list">
                                        @forelse ($records as $record)
                                            <li>
                                                <div class="col-mail col-mail-1">
                                                    <!-- Checkbox input -->
                                                    <div class="checkbox-wrapper-mail form-check">
                                                        <input class="form-check-input" type="checkbox" name="selected_mails[]" value="{{ $record->id }}" id="chk{{ $record->id }}">
                                                        <label for="chk{{ $record->id }}" class="toggle"></label>

                                                        
                                                        <div class="icons">
                                                            <!-- Starred -->
                                                            <form action="{{ route('mails.toggleState', ['email' => $record->id, 'type' => 'starred']) }}" method="POST" style="display:inline;">
                                                                @csrf
                                                                @method('POST')
                                                                <button type="submit" class="btn btn-link p-0">
                                                                    <i class=" {{ $record->is_starred ? 'star-toggle fas fa-star text-warning' : 'star-toggle far fa-star' }}" title="{{ __('general.labels.starred') }}"></i>
                                                                </button>
                                                            </form>
                                                
                                                            <!-- Important -->
                                                            <form action="{{ route('mails.toggleState', ['email' => $record->id, 'type' => 'important']) }}" method="POST" style="display:inline;">
                                                                @csrf
                                                                @method('POST')
                                                                <button type="submit" class="btn btn-link p-0">
                                                                    <i class=" {{ $record->is_important ? 'star-toggle  fas fa-bookmark  text-primary' : 'star-toggle far fa-bookmark' }}" title="{{ __('general.labels.important') }}"></i>
                                                                </button>
                                                            </form>
                                                
                                                            <!-- Draft -->
                                                            <form action="{{ route('mails.toggleState', ['email' => $record->id, 'type' => 'draft']) }}" method="POST" style="display:inline;">
                                                                @csrf
                                                                @method('POST')
                                                                <button type="submit" class="btn btn-link p-0">
                                                                    <i class=" {{ $record->is_draft ? 'star-toggle fas fa-file-alt text-secondary' : 'star-toggle far fa-file-alt ' }}" title="{{ __('general.labels.draft') }}"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    
                                                    <!-- Sender and subject -->
                                                    <a href="{{ route('mails.show', $record) }}">
                                                        <p class="title">&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;{{ $record->sender->user_name }} : &nbsp;&nbsp;{{ $record->recipient->user_name }}</p>
                                                    </a>
                                                </div>
                                                <div class="col-mail col-mail-2">
                                                    <!-- Email subject and body teaser -->
                                                    <a href="{{ route('mails.show', $record) }}" class="subject">
                                                        {{ $record->subject }} &nbsp;–&nbsp;
                                                        <span class="teaser">{{ Str::limit(strip_tags($record->body), 50) }}</span>
                                                    </a>
                                                    <!-- Email status icons -->
                                                   
                                                    <!-- Date received -->
                                                    @if ($record->received_at)
                                                        @php
                                                            $receivedDate = is_string($record->received_at)
                                                                ? new \DateTime($record->received_at)
                                                                : $record->received_at;
                                                        @endphp
                                                        <div class="date">{{ $receivedDate->format('M d') }}</div>
                                                    @endif
                                                </div>
                                            </li>
                                        @empty
                                            <li>
                                                <div class="col-12">
                                                    <p class="text-center">{{ __('general.placeholders.no_emails') }}</p>
                                                </div>
                                            </li>
                                        @endforelse
                                    </ul>
                                </div> <!-- end card -->
                            </form>

                            <div class="row mb-3">
                                <div class="col-2 ">
                                    Showing {{ $records->firstItem() }} - {{ $records->lastItem() }} of {{ $records->total() }}
                                </div>
                                <div class="col-10">
                                    <div class="btn-group float-end">
                                        {{ $records->links() }}
                                    </div>
                                </div>
                            </div> <!--end row-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!--end col-->
            </div> <!--end row-->
        </div> <!--end container-->
    </div> <!--end page-content-tab-->

    <script>
        function submitBulkAction(action) {
            document.getElementById('bulk-action').value = action;
            document.getElementById('bulk-action-form').submit();
        }
    </script>

    
@endsection
