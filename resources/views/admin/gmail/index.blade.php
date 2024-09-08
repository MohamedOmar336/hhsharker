@extends('admin.layouts.app') <!-- Main layout -->

@section('content')
<div class="page-content-tab">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-end">
                      
                            <a href="{{ route('gmail.compose') }}" type="button" class="btn btn-primary btn-sm w-100">
                                <i class="fas fa-feather-alt me-2"></i>{{ __('general.btn.compose') }}
                            </a>   
                    </div>
                    <div class="col-md-12">
                        <a href="{{ URL::previous() }}">
                            @if (app()->isLocale('ar'))
                                <i data-feather="arrow-right-circle"></i> <!-- Arabic locale -->
                            @else
                                <i data-feather="arrow-left-circle"></i> <!-- Default locale -->
                            @endif
                        </a>
                        <h4 class="page-title">{{ __('general.side.email_list') }}</h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Title and Email List -->
        <div class="row">
            <div class="col-md-12 card-body">
               
                <ul class="list-group" id="email-list">
                    @foreach ($messages as $message)
                        <li class="list-group-item email-item" 
                            data-message="{{ $message['message'] }}" 
                            data-subject="{{ $message['subject'] }}" 
                            data-from="{{ $message['from'] }}" 
                            data-date="{{ $message['date'] }}">
                            <strong dir="auto">{{ $message['subject'] }}</strong><br>
                            <small>{{ __('general.from') }}: {{ $message['from'] }}</small><br>
                            <small>{{ __('general.date') }}: {{ $message['date'] }}</small>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <!-- Loading and Load More Button -->
        <div id="loading" class="text-center mt-3" style="display: none;">
            <p>{{ __('general.loading') }}</p>
        </div>
        <div id="load-more" class="text-center mt-3">
            <button id="load-more-btn" class="btn btn-sm btn-de-primary">{{ __('general.load_more') }}</button>
        </div>
    </div>
</div>
</div>
    <!-- Email Modal -->
    <div class="modal fade" id="emailModal" tabindex="-1" aria-labelledby="emailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="emailModalLabel">{{ __('general.labels.email_body') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>{{ __('general.from') }}:</strong> <span id="modal-from"></span></p>
                    <p><strong>{{ __('general.date') }}:</strong> <span id="modal-date"></span></p>
                    <h5><strong>{{ __('general.subject') }}:</strong> <span id="modal-subject"></span></h5>
                    <div id="modal-message"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-de-primary" data-bs-dismiss="modal">{{ __('general.close') }}</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        let offset = 25; // Start after the first 25 emails

        function loadMoreEmails() {
            $('#loading').show();
            
            fetch('{{ route('emails.get-more') }}?offset=' + offset)
                .then(response => response.json())
                .then(data => {
                    $('#loading').hide();
                    
                    if (data.emails.length === 0) {
                        $('#load-more-btn').hide(); // Hide button if no more emails
                    } else {
                        offset = data.nextOffset; // Update the offset for the next load
                        data.emails.forEach(function (email) {
                            const emailItem = `
                                <li class="list-group-item email-item" 
                                    data-message="${email.message.replace(/"/g, '&quot;')}" 
                                    data-subject="${email.subject.replace(/"/g, '&quot;')}" 
                                    data-from="${email.from.replace(/"/g, '&quot;')}" 
                                    data-date="${email.date.replace(/"/g, '&quot;')}">
                                    <strong>${email.subject}</strong><br>
                                    <small>{{ __('general.from') }}: ${email.from}</small><br>
                                    <small>{{ __('general.date') }}: ${email.date}</small>
                                </li>`;
                            $('#email-list').append(emailItem);
                        });

                        // Re-apply click listeners to new email items
                        addEmailClickListeners();
                    }
                })
                .catch(error => console.error('Error:', error));
        }

        function addEmailClickListeners() {
            $('.email-item').off('click').on('click', function () {
                const subject = $(this).data('subject');
                const from = $(this).data('from');
                const date = $(this).data('date');
                const message = $(this).data('message');

                $('#modal-subject').text(subject);
                $('#modal-from').text(from);
                $('#modal-date').text(date);
                $('#modal-message').html(message);

                var emailModal = new bootstrap.Modal(document.getElementById('emailModal'));
                emailModal.show();
            });
        }

        $(document).ready(function () {
            $('#load-more-btn').on('click', loadMoreEmails);
            addEmailClickListeners();
        });
    </script>
@endpush
