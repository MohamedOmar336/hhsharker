@extends('admin.layouts.app')
<!-- Main layout -->

@section('content')
<div class="page-wrapper">
    <div class="page-content-tab">
        <div class="container-fluid">
            <!-- Page Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-end">
                            {{-- <a href="{{ route('gmail.compose') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-feather-alt me-2"></i>{{ __('general.btn.compose') }}
                            </a> --}}
                        </div>
                        <h4 class="page-title">{{ __('general.side.email_list') }}</h4>
                    </div>
                </div>
            </div>
            <!-- End Page Title -->

            <div class="row">
                <div class="col-12">
                    <!-- Left Sidebar -->
                    <div class="email-leftbar">
                        <div class="card mt-3">
                            <a href="{{ route('gmail.compose') }}" type="button" class="btn btn-primary btn-sm w-100">
                                <i class="fas fa-feather-alt me-2"></i>{{ __('general.btn.compose') }}
                            </a>
                            <div class="card-body">
                                <div class="mail-list">
                                    <a href="{{ route('emails.inbox') }}" class="{{ request()->is('support.gmail') ? 'active' : '' }} pt-0">
                                        <i class="las la-inbox font-15 me-1"></i>{{ __('general.labels.inbox') }}
                                       
                                    </a>
                                    <a href="{{ route('emails.starred') }}" class="{{ request()->is('emails/starred') ? 'active' : '' }}">
                                        <i class="las la-star font-15 me-1"></i>{{ __('general.labels.starred') }}
                                       
                                    </a>
                                    {{-- <a href="{{ route('emails.important') }}" class="{{ request()->is('emails/important') ? 'active' : '' }}">
                                        <i class="las la-tag font-15 me-1"></i>Important
                                       
                                    </a>
                                    <a href="{{ route('emails.draft') }}" class="{{ request()->is('emails/draft') ? 'active' : '' }}">
                                        <i class="las la-pencil-alt font-15 me-1"></i>Draft
                                       
                                    </a>
                                    <a href="{{ route('emails.sent') }}" class="{{ request()->is('emails/sent') ? 'active' : '' }}">
                                        <i class="las la-paper-plane font-15 me-1"></i>Sent
                                      
                                    </a>
                                    <a href="{{ route('emails.trash') }}" class="{{ request()->is('emails/trash') ? 'active' : '' }}">
                                        <i class="las la-trash-alt font-15 me-1"></i>Trash
                                    </a>
                                    <a href="{{ route('emails.trash') }}" class="{{ request()->is('/emails/unread') ? 'active' : '' }}">
                                        <i class="las la-trash-alt font-15 me-1"></i>unread
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Left Sidebar -->

                    <!-- Right Sidebar -->
                    <div class="email-rightbar">
                        <!-- Email List -->
                        <div class="card">
                            <div class="card-body">
                                <ul class="message-list" id="email-list">
                                    @foreach ($messages as $index => $message)
                                    <li class="email-item">
                                        <div class="col-mail col-mail-1">
                                            <a href="#" class="subject" data-bs-toggle="modal" data-bs-target="#emailModal" data-from="{{ $message['from'] }}" data-subject="{{ $message['subject'] }}" data-date="{{ \Carbon\Carbon::parse($message['date'])->format('D, d M') }}" data-body="{{ $message['message'] }}">
                                                <!-- Sanitize -->
                                                <p class="title">{{ $message['from'] }}</p>
                                            </a>
                                        </div>
                                        <div class="col-mail col-mail-2">
                                            <a href="#" class="subject" data-bs-toggle="modal" data-bs-target="#emailModal" data-from="{{ $message['from'] }}" data-subject="{{ $message['subject'] }}" data-date="{{ \Carbon\Carbon::parse($message['date'])->format('D, d M') }}" data-body="{{ $message['message'] }}">
                                                <!-- Sanitize -->
                                                {{ $message['subject'] }}
                                            </a>
                                            <div class="date">{{ \Carbon\Carbon::parse($message['date'])->format('D, d M') }}</div>
                                        </div>
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
                    <!-- End Right Sidebar -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Email Details Modal -->
<div class="modal fade" id="emailModal" tabindex="-1" aria-labelledby="emailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="emailModalLabel">{{ __('general.labels.email_body') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5 id="emailFrom"></h5>
                <h6 id="emailSubject"></h6>
                <p id="emailDate"></p>
                <div id="emailBody"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-de-primary" data-bs-dismiss="modal">{{ __('general.close') }}</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const emailModal = document.getElementById('emailModal');

        // Modal show event to populate the email details
        emailModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget; // Button that triggered the modal

            // Extract info from data-* attributes
            const from = button.getAttribute('data-from');
            const subject = button.getAttribute('data-subject');
            const date = button.getAttribute('data-date');
            const body = button.getAttribute('data-body');

            // Update the modal's content
            document.getElementById('emailFrom').innerText = `From: ${from}`;
            document.getElementById('emailSubject').innerText = `Subject: ${subject}`;
            document.getElementById('emailDate').innerText = date;
            document.getElementById('emailBody').innerHTML = body; // Ensure it's sanitized
        });

        let offset = 25; // Start after the first 25 emails

        // Load more emails function
        function loadMoreEmails() {
            $('#loading').show();

            fetch('{{ route('support.emails.get-more') }}?offset=' + offset)
                .then(response => response.json())
                .then(data => {
                    $('#loading').hide();

                    if (data.emails.length === 0) {
                        $('#load-more-btn').hide(); // Hide button if no more emails
                    } else {
                        offset = data.nextOffset; // Update the offset for the next load
                        data.emails.forEach(function(email) {
                            const emailDate = new Date(email.date);
                            const formattedDate = emailDate.toLocaleDateString('en-US', {
                                weekday: 'short'
                                , day: '2-digit'
                                , month: 'short'
                            });
                            let username = email.from;
                            let emailAddress = '';

                            if (email.from.includes('<') && email.from.includes('>')) {
                                const nameEmailRegex = /^(.*)<(.*)>$/;
                                const match = email.from.match(nameEmailRegex);

                                if (match) {
                                    username = match[1].trim(); // Extract name
                                    emailAddress = match[2].trim(); // Extract email address
                                }
                            } else {
                                // If it's just an email, extract the part before the @ as the username
                                const fromParts = email.from.split('@');
                                username = fromParts[0];
                                emailAddress = email.from;
                            }
                            const emailItem = `
                            <li class="email-item">
                                <div class="col-mail col-mail-1">
                                    <a href="#" class="subject" data-bs-toggle="modal" data-bs-target="#emailModal"
                                    data-from="${email.from.replace(/"/g, '&quot;')}" 
                                       data-subject="${email.subject.replace(/"/g, '&quot;')}" 
                                       data-date="${email.date.replace(/"/g, '&quot;')}"
                                       data-body="${email.message.replace(/"/g, '&quot;')}"> <!-- Sanitize -->
                                        <p class="title">${username} (${emailAddress})</p>
                                    </a>
                                </div>
                                <div class="col-mail col-mail-2">
                                    <a href="#" class="subject" data-bs-toggle="modal" data-bs-target="#emailModal"
                                    data-from="${email.from.replace(/"/g, '&quot;')}" 
                                       data-subject="${email.subject.replace(/"/g, '&quot;')}" 
                                       data-date="${email.date.replace(/"/g, '&quot;')}"
                                       data-body="${email.message.replace(/"/g, '&quot;')}"> <!-- Sanitize -->
                                        ${email.subject}
                                    </a>
                                    <div class="date">${formattedDate}</div>
                                </div>
                            </li>`;
                            $('#email-list').append(emailItem);
                        });

                        // Re-apply click listeners to new email items
                        addEmailClickListeners();
                    }
                })
                .catch(error => {
                    console.error('Error loading emails:', error);
                    $('#loading').hide();
                });
        }

        // Load more button click event
        $('#load-more-btn').click(loadMoreEmails);

        // Function to add click event listeners to email subjects
        function addEmailClickListeners() {
            $(document).on('click', '.subject', function(event) {
                const from = $(this).data('from');
                const subject = $(this).data('subject');
                const date = $(this).data('date');
                const body = $(this).data('body');

                // Update modal content
                $('#emailFrom').text(`From: ${from}`);
                $('#emailSubject').text(`Subject: ${subject}`);
                $('#emailDate').text(date);
                $('#emailBody').html(body); // Ensure it's sanitized
            });
        }

        // Initial load more
        loadMoreEmails();
    });

</script>
@endsection
