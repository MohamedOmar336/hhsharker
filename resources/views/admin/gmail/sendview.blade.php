<!-- resources/views/admin/gmail/sendview.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $subject }}</title>
    <style>
        /* Add any custom styles for the email here */
    </style>
</head>
<body>
    <h1>{{ $subject }}</h1>
    <div>
        {!! nl2br($body) !!} <!-- Convert new lines to <br> and escape HTML -->
    </div>
</body>
</html>
