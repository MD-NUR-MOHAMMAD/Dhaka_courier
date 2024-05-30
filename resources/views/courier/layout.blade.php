<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <meta name="csrf-token" content="<?php echo csrf_token(); ?>" id="token">
    @yield('head')
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('courier/public/assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('courier/public/assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('courier/public/assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('courier/public/assets/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('courier/public/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('courier/public/assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">
    <link href="{{ asset('courier/public/assets/css/theme.css') }}" rel="stylesheet" />

<body>
    <main class="main" id="top">
        @yield('content') 
    </main>
    <script src="{{ asset('courier/public/vendors/@popperjs/popper.min.js') }}"></script>
    <script src="{{ asset('courier/public/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('courier/public/vendors/is/is.min.js') }}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('courier/public/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('courier/public/assets/js/theme.js') }}"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        })
    </script>
    @yield('script')
</body>
</html>