@extends('admin.layouts.app')

@section('content')
<div class="page-content-tab">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('whatsapp-templates.index') }}">WhatsApp Templates</a></li>
                            <li class="breadcrumb-item active">Edit Template</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Edit WhatsApp Template</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('whatsapp-templates.update', $template->id) }}" method="post" id="templateForm">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="name" class="form-label">Template Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $template->name }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="language_code" class="form-label">Language Code</label>
                                <input type="text" class="form-control" id="language_code" name="language_code" value="{{ $template->language_code }}" required>
                            </div>

                            <div class="mb-3" id="componentsContainer">
                                @foreach(json_decode($template->components, true) as $index => $component)
                                    <div class="component mb-3" data-index="{{ $index }}">
                                        <label>Type:</label>
                                        <select name="components[{{ $index }}][type]" class="form-control component-type" onchange="toggleUrlField(this, {{ $index }})">
                                            <option value="header" @if($component['type'] == 'header') selected @endif>Header</option>
                                            <option value="body" @if($component['type'] == 'body') selected @endif>Body</option>
                                            <option value="button" @if($component['type'] == 'button') selected @endif>Button</option>
                                            <option value="footer" @if($component['type'] == 'footer') selected @endif>Footer</option>
                                        </select>
                                        <label>Value:</label>
                                        <input type="text" name="components[{{ $index }}][value]" class="form-control" value="{{ $component['value'] }}" required>
                                        @if($component['type'] == 'button')
                                        <!-- URL field for buttons -->
                                        <label>URL:</label>
                                        <input type="text" name="components[{{ $index }}][url]" class="form-control" value="{{ $component['url'] ?? '' }}">
                                        @endif
                                        <button type="button" class="btn btn-danger mt-2" onclick="removeComponent(this)">Remove</button>
                                    </div>
                                @endforeach
                            </div>

                            <div class="mb-3">
                                <button type="button" class="btn btn-primary" onclick="addComponent()">Add Component</button>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Update Template</button>
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
                <select name="components[${index}][type]" class="form-control component-type" onchange="toggleUrlField(this, ${index})">
                    <option value="header">Header</option>
                    <option value="body">Body</option>
                    <option value="button">Button</option>
                    <option value="footer">Footer</option>
                </select>
                <label>Value:</label>
                <input type="text" name="components[${index}][value]" class="form-control" required>
                <div class="url-field" style="display:none;">
                    <label>URL:</label>
                    <input type="text" name="components[${index}][url]" class="form-control">
                </div>
                <button type="button" class="btn btn-danger mt-2" onclick="removeComponent(this)">Remove</button>
            </div>
        `;
        container.insertAdjacentHTML('beforeend', html);
    }

    function toggleUrlField(select, index) {
        const componentType = select.value;
        const urlField = document.querySelector(`.component[data-index="${index}"] .url-field`);
        if (componentType === 'button') {
            urlField.style.display = 'block';
        } else {
            urlField.style.display = 'none';
        }
    }

    function removeComponent(button) {
        const component = button.closest('.component');
        component.remove();
    }
</script>
@endpush
