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
                                <li class="breadcrumb-item">
                                    <a href="{{ url('/home') }}">{{ __('general.home') }}</a>
                                </li>
                                <!--end nav-item-->
                                <li class="breadcrumb-item">
                                    <a href="{{ url('/products') }}">{{ __('general.attributes.product') }}</a>
                                </li>
                                <!--end nav-item-->
                                <li class="breadcrumb-item active">Add</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Add Product</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <!-- Place the first <script> tag in your HTML's <head> -->
            <div class="row">
                <div class="col-12 col-lg-11 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('blogposts.store') }}" method="POST" enctype="multipart/form-data"  class="needs-validation" novalidate>
                                @csrf
                                <div class="mb-3">
                                    <label for="title_en" class="form-label">{{ __('Title (English)') }}</label>
                                    <input id="title_en" type="text" class="form-control @error('title_en') is-invalid @enderror" name="title_en" value="{{ old('title_en') }}" required autofocus>
                                    @error('title_en')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="title_ar" class="form-label">{{ __('Title (Arabic)') }}</label>
                                    <input id="title_ar" type="text" class="form-control @error('title_ar') is-invalid @enderror" name="title_ar" value="{{ old('title_ar') }}" required>
                                    @error('title_ar')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="content_en" class="form-label">{{ __('Content (English)') }}</label>
                                    <textarea id="content_en" class="form-control @error('content_en') is-invalid @enderror" name="content_en" rows="6" required>{{ old('content_en') }}</textarea>
                                    @error('content_en')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="content_ar" class="form-label">{{ __('Content (Arabic)') }}</label>
                                    <textarea id="content_ar" class="form-control @error('content_ar') is-invalid @enderror" name="content_ar" rows="6" required>{{ old('content_ar') }}</textarea>
                                    @error('content_ar')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="author_id" class="form-label">{{ __('Author') }}</label>
                                    <select id="author_id" class="form-control @error('author_id') is-invalid @enderror" name="author_id" required>
                                        <option value="">Select Author</option>
                                        @foreach ($authors as $author)
                                            <option value="{{ $author->id }}" {{ old('author_id') == $author->id ? 'selected' : '' }}>
                                                {{ $author->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('author_id')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">{{ __('Image') }}</label>
                                    <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" required>
                                    @error('image')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                 <div class="form-group">
            <label for="tags" class="form-label">{{ __('Tags') }}</label>
          
<select id="choices-multiple-remove-button" class="form-control" placeholder="Choose ..." multiple name="tags[]">
        @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->tag_name_en }}</option>
                    @endforeach
                </select>   
                 </div> </div> 
        
                                <div class="mb-3">
                                    <label for="status" class="form-label">{{ __('Status') }}</label>
                                    <select id="status" class="form-control @error('status') is-invalid @enderror" name="status" required>
                                        <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                                        <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>
                                    </select>
                                    @error('status')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Create Post</button>
                            </form>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->

<script>
$(document).ready(function(){
    
     var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
        removeItemButton: true,
        maxItemCount:100,
        searchResultLimit:5,
        renderChoiceLimit:5
      }); 
     
     
 });</script>
        </div><!-- container -->
    </div><!-- container -->
@endsection
