<div class="card">
    <div class="card-body content-area">

        <form id="bulk-delete-form" method="POST" action="{{ isset($createButton->attributes['action'] ) ?  $createButton->attributes['action'] : null }}">
        @csrf
   
            @if(isset($createButton))
                <div id="table-custom-actions">
                    <button class="btn btn-outline-light btn-sm px-4" id="bulk-delete-btn" >{{ __('general.bulk-delete') }}</button>
                    {{ $createButton }}
                </div>
            @endif
            
            <div class="table-responsive">
                <table class="table mb-0" id="{{ $tableId }}">
                    <thead class="thead-light">
                        {{ $header }}
                    </thead>
                    <tbody>
                        {{ $slot }}
                    </tbody>
                </table>
            </div>
            <div class="row">
                {{-- @if(isset($createButton))
                    <div class="col">
                        <button class="btn btn-outline-light btn-sm px-4" id="bulk-delete-btn">{{ __('general.bulk-delete') }}</button>
                        {{ $createButton }}
                    </div>
                @endif --}}
                {{-- <div class="col-auto">
                    {{ $pagination }}
                </div> --}}
            </div>
        </form>
    </div>
</div>

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#{{ $tableId }}').DataTable();

            // Initially disable the bulk delete button
            var bulkDeleteBtn = document.getElementById('bulk-delete-btn');
            bulkDeleteBtn.disabled = true;

            // Handle the "Select All" checkbox click event
            document.getElementById('select-all').addEventListener('click', function() {
                var checkboxes = document.querySelectorAll('input[name="ids[]"]');
                for (var checkbox of checkboxes) {
                    checkbox.checked = this.checked;
                }
                toggleBulkDeleteButton();
            });

            // Handle individual checkbox change events
            var checkboxes = document.querySelectorAll('input[name="ids[]"]');
            checkboxes.forEach(function(checkbox) {
                checkbox.addEventListener('change', toggleBulkDeleteButton);
            });

            // Function to toggle the bulk delete button state
            function toggleBulkDeleteButton() {
                var selectedCount = document.querySelectorAll('input[name="ids[]"]:checked').length;
                bulkDeleteBtn.disabled = (selectedCount === 0);
            }

            // Handle bulk delete form submission
            document.getElementById('bulk-delete-form').addEventListener('submit', function(event) {
                if (!confirm('Are you sure you want to delete selected records?')) {
                    event.preventDefault();
                }
            });
        });
    </script>
@endpush
