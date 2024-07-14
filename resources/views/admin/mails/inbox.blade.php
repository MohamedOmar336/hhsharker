@extends('admin.layouts.app')

@section('content')
    <h1>Inbox</h1>
    <div>
        @foreach ($mails as $mail)
            <div>
                <h3>{{ $mail->subject }}</h3>
                <p>{{ $mail->body }}</p>
                <p>From: {{ $mail->sender->name }}</p>
                <p>Received at: {{ $mail->created_at->format('M d, Y H:i A') }}</p>
                <!-- Add buttons for actions like reply, forward, mark as important/starred, etc. -->
            </div>
            <hr>
        @endforeach
    </div>
@endsection