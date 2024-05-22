<div class="card">
    <div class="card-body content-area">
        <form id="bulk-update-form" method="get" action="{{ route('categories.bulk-delete') }}">
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
                <div class="col">
                    <button class="btn btn-outline-light btn-sm px-4" id="bulk-update-btn">Bulk Update</button>
                    {{ $createButton }}
                </div>
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

        document.getElementById('bulk-update-form').addEventListener('submit', function(event) {
            if (!confirm('Are you sure you want to update selected records?')) {
                event.preventDefault();
            }
        });
    </script>
@endpush
