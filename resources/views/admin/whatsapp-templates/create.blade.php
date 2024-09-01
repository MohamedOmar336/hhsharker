@extends('admin.layouts.app')

@section('content')
<div class="page-content-tab">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('whatsapp-templates.index') }}">WhatsApp Templates</a></li>
                            <li class="breadcrumb-item active">Create Template</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Create New WhatsApp Template</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('whatsapp-templates.store') }}" method="post" id="templateForm">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Template Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <div class="mb-3">
                                <label for="language_code" class="form-label">Language Code</label>
                                <input type="text" class="form-control" id="language_code" name="language_code" required>
                            </div>

                            <div class="mb-3">
                                <button type="button" class="btn btn-primary" onclick="addComponent()">Add Component</button>
                            </div>

                            <div id="componentsContainer"></div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Create Template</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function addComponent() {
        const container = document.getElementById('componentsContainer');
        const index = container.children.length;
        const html = `
            <div class="component mb-3" data-index="${index}">
                <label>Type:</label>
                <select name="components[${index}][type]" class="form-control">
                    <option value="header">Header</option>
                    <option value="body">Body</option>
                    <option value="button">Button</option>
                    <option value="footer">Footer</option>
                </select>
                <label>Value:</label>
                <input type="text" name="components[${index}][value]" class="form-control" required>
                <button type="button" class="btn btn-danger mt-2" onclick="removeComponent(this)">Remove</button>
            </div>
        `;
        container.insertAdjacentHTML('beforeend', html);
    }

    function removeComponent(button) {
        const component = button.closest('.component');
        component.remove();
    }
</script>
<script>
    document.getElementById('templateForm').addEventListener('submit', function() {
        var componentsInput = document.getElementById('components');
        componentsInput.value = JSON.stringify(yourComponentsArray); // Convert your array to a JSON string
    });
    </script>
@endpush
