<div class="card">
    <div class="card-body content-area">
        <form id="bulk-delete-form" method="get" action="{{ isset($createButton->attributes['action'] ) ?  $createButton->attributes['action'] : null }}">
            @csrf
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
                @if(isset($createButton))
                    <div class="col">
                        <button class="btn btn-outline-light btn-sm px-4" id="bulk-delete-btn">{{ __('general.bulk-delete') }}</button>
                        {{ $createButton }}
                    </div>
                @endif
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
        });
    </script>
    <script>
        document.getElementById('select-all').addEventListener('click', function() {
            var checkboxes = document.querySelectorAll('input[name="ids[]"]');
            for (var checkbox of checkboxes) {
                checkbox.checked = this.checked;
            }
        });

        document.getElementById('bulk-delete-form').addEventListener('submit', function(event) {
            if (!confirm('Are you sure you want to delete selected records?')) {
                event.preventDefault();
            }
        });
    </script>
@endpush