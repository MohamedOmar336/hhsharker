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
                                <li class="breadcrumb-item"><a href="{{ url('/blogs') }}">{{ __('general.attributes.blog') }}</a></li>
                                <li class="breadcrumb-item active">{{ __('general.attributes.edit-blog') }}</li>
                            </ol>
                        </div>
                        <div class="col-md-12">
                            <a href="{{ URL::previous() }}" class="btn btn-secondary">
                                <span class="fa {{ app()->isLocale('ar') ? 'fa-forward' : 'fa-backward' }}"></span>
                            </a>
                            <h4 class="page-title">{{ __('general.attributes.edit-blog') }}</h4>
                        </div>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12 col-lg-11 mx-auto">
                    <div class="card">
                        <div class="card-body content-area">
                            <form action="{{ route('blogposts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="title_en" class="form-label">{{ __('general.attributes.title_en') }}</label>
                                    <input id="title_en" type="text" class="form-control @error('title_en') is-invalid @enderror" name="title_en" value="{{ old('title_en', $post->title_en) }}" required autofocus>
                                    @error('title_en')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="title_ar" class="form-label">{{ __('general.attributes.title_ar') }}</label>
                                    <input id="title_ar" type="text" class="form-control @error('title_ar') is-invalid @enderror" name="title_ar" value="{{ old('title_ar', $post->title_ar) }}" required>
                                    @error('title_ar')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="content_en" class="form-label">{{ __('general.attributes.content_en') }}</label>
                                    <textarea id="content_en" class="form-control @error('content_en') is-invalid @enderror" name="content_en" rows="6" required>{{ old('content_en', $post->content_en) }}</textarea>
                                    @error('content_en')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="content_ar" class="form-label">{{ __('general.attributes.content_ar') }}</label>
                                    <textarea id="content_ar" class="form-control @error('content_ar') is-invalid @enderror" name="content_ar" rows="6" required>{{ old('content_ar', $post->content_ar) }}</textarea>
                                    @error('content_ar')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="author_id" class="form-label">{{ __('general.attributes.author') }}</label>
                                    <select id="author_id" class="form-control @error('author_id') is-invalid @enderror" name="author_id" required>
                                        <option value="">{{ __('general.select.select_author') }}</option>
                                        @foreach ($authors as $author)
                                            <option value="{{ $author->id }}" {{ old('author_id', $post->author_id) == $author->id ? 'selected' : '' }}>{{ $author->user_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('author_id')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">{{ __('general.attributes.current_image') }}</label><br>
                                    <img src="{{ asset('images/' . $post->image) }}" alt="" width="100"><br>
                                    <label for="image" class="form-label mt-2">{{ __('general.attributes.update_image') }}</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label for="tags" class="form-label">{{ __('general.attributes.tags') }}</label>
                                        <select id="choices-multiple-remove-button" class="form-control" placeholder="{{ __('general.select.choose') }}" multiple name="tags[]">
                                            @foreach ($tags as $tag)
                                                <option value="{{ $tag->id }}" {{ in_array($tag->id, $post->tags->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $tag->name_en }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">{{ __('general.attributes.status') }}</label>
                                    <select id="status" class="form-control @error('status') is-invalid @enderror" name="status" required>
                                        <option value="draft" {{ old('status', $post->status) == 'draft' ? 'selected' : '' }}>{{ __('general.select.draft') }}</option>
                                        <option value="published" {{ old('status', $post->status) == 'published' ? 'selected' : '' }}>{{ __('general.select.published') }}</option>
                                    </select>
                                    @error('status')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">{{ __('general.btn.update_post') }}</button>
                            </form>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->
        </div>

    </div><!-- container -->
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
                removeItemButton: true,
                maxItemCount: 100,
                searchResultLimit: 5,
                renderChoiceLimit: 5
            });
        });
    </script>
@endpush
