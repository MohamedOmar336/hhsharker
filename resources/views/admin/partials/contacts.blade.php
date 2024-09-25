@foreach ($contacts as $contact)
<li>
    <a href="#" class="whatsapp"
        data-whatsapp-id="{{ $contact->id }}"
        data-user-name="{{ $contact->name }}"
        data-user-email="{{ $contact->email }}" data-user-status="Active"
        data-user-image="{{ asset('storage/' . $contact->image) }}"
        data-user-location="{{ $contact->address }}"
        data-last-interaction="{{ $contact->last_interaction }}">
        <div class="d-flex">
            <div class="chat-user-img align-self-center online me-3 ms-0">
                <div class="avatar-xs">
                    <span
                        class="avatar-title rounded-circle bg-primary-subtle text-primary">
                        {{ strtoupper($contact->name[0]) }}
                        <!-- Displays the first letter of the name, capitalized -->
                    </span>
                </div>
                <span class="user-status"></span>
            </div>
            <div class="flex-grow-1 overflow-hidden">
                <h5 class="text-truncate font-size-15 mb-1 user-name">
                    {{ $contact->name }}</h5>
                <p class="chat-user-message text-truncate mb-0 phone-number">
                    {{ $contact->phone }} </p>
            </div>
            <div class="font-size-11">12/07</div>
        </div>
    </a>
</li>
@endforeach
