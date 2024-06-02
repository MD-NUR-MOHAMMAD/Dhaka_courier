<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo csrf_token(); ?>" id="token">
    <title>{{$title}} - User</title>
    @yield('head')
    <link rel="stylesheet" href="{{ asset('assets/adminui/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/adminui/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/adminui/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/adminui/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/adminui/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/adminui/js/select.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/adminui/css/vertical-layout-light/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/adminui/images/favicon.png') }}" />
</head>
<body>
    
    <script src="{{ asset('assets/adminui/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('assets/adminui/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/adminui/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/adminui/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('assets/adminui/js/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('assets/adminui/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/adminui/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/adminui/js/template.js') }}"></script>
    <script src="{{ asset('assets/adminui/js/settings.js') }}"></script>
    <script src="{{ asset('assets/adminui/js/todolist.js') }}"></script>
    <script src="{{ asset('assets/adminui/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/adminui/js/Chart.roundedBarCharts.js') }}"></script>
    @yield('script')
  </body>
  
  </html>
  
  