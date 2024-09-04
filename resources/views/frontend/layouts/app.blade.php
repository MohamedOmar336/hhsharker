<!doctype html>
<html lang="en" dir="ltr">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HH SHAKER</title>
        @include('frontend.layouts.includes.favicon')
        @include('frontend.layouts.includes.css')

    </head>

    <body>

        @include('frontend.layouts.includes.header')  
        @yield('content')    
        @include('frontend.layouts.includes.footer')  
        @include('frontend.layouts.includes.js')  

        @stack('extra-js')
    </body>

</html>