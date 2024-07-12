@extends('admin.layouts.app')

@section('content')
    <iframe src="{{ route('whatsapp.index') }}" width="100%" height="700px" frameborder="0" style="padding-top: 72px;padding-left: 270px;">
        Your browser does not support iframes.
    </iframe>
@endsection
