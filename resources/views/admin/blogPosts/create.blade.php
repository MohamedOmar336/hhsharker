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
                                <li class="breadcrumb-item"><a href="{{ url('/home') }}">Metrica</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item"><a href="{{ url('/products') }}">Products</a>
                                </li><!--end nav-item-->
                                <li class="breadcrumb-item active">Add</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Add Product</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-body">

                        <form method="POST" action="{{ route('blog_posts.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="title_en" class="form-label">Title (English)</label>
        <input id="title_en" type="text" class="form-control @error('title_en') is-invalid @enderror" name="title_en" required>
        @error('title_en')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="title_ar" class="form-label">Title (Arabic)</label>
        <input id="title_ar" type="text" class="form-control @error('title_ar') is-invalid @enderror" name="title_ar" required>
        @error('title_ar')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="content_en" class="form-label">Content (English)</label>
        <textarea id="content_en" class="form-control @error('content_en') is-invalid @enderror" name="content_en" rows="5" required></textarea>
        @error('content_en')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="container-fluid">
			<div class="row">
				<h2 class="demo-text">A demo of jQuery / Bootstrap based editor</h2>
				<div class="container">
					<div class="row">
						<div class="col-lg-12 nopadding">
							<textarea id="demo-editor-bootstrap"> 
						</div>
					</div>
				</div>
			</div>
		</div>

    <div class="mb-3">
        <label for="content_ar" class="form-label">Content (Arabic)</label>
        <textarea id="content_ar" class="form-control @error('content_ar') is-invalid @enderror" name="content_ar" rows="5" required></textarea>
        @error('content_ar')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="container-fluid">
			<div class="row">
				<h2 class="demo-text">A demo of jQuery / Bootstrap based editor</h2>
				<div class="container">
					<div class="row">
						<div class="col-lg-12 nopadding">
							<textarea id="demo-editor-bootstrap"> 
						</div>
					</div>
				</div>
			</div>
		</div>

    <div class="mb-3">
        <label for="author_id" class="form-label">Author ID</label>
        <input id="author_id" type="number" class="form-control @error('author_id') is-invalid @enderror" name="author_id" required>
        @error('author_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="post_date" class="form-label">Post Date</label>
        <input id="post_date" type="date" class="form-control @error('post_date') is-invalid @enderror" name="post_date" required>
        @error('post_date')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="category_id" class="form-label">Category ID</label>
        <input id="category_id" type="number" class="form-control @error('category_id') is-invalid @enderror" name="category_id" required>
        @error('category_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="tags" class="form-label">Tags</label>
        <input id="tags" type="text" class="form-control @error('tags') is-invalid @enderror" name="tags">
        @error('tags')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

                        </div> <!--end card-body-->
                    </div><!--end card-->
                </div> <!--end col-->
            </div><!--end row-->
        </div>

    </div><!-- container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="js/editor/editor.js"></script>
		<script>
			$(document).ready(function() {
				$("#demo-editor-bootstrap").Editor();
			});
		</script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link href="css/editor/editor.css" type="text/css" rel="stylesheet"/>
    </div>
@endsection
