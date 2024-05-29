<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }} - User</title>

    <!-- nura pagla -->
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/adminui/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/adminui/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/adminui/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/adminui/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/adminui/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/adminui/js/select.dataTables.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/adminui/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('assets/adminui/images/favicon.png') }}" />


</head>

<body>
    <div class="container-scroller">

        @include('inc.admin-navbar')

        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            @include('inc.admin-theme-setting')
            <!-- partial:partials/_rightbar.html -->
              @include('inc.admin-rightbar')
            <!-- partial:partials/_sidebar.html -->
            @include('inc.admin-sidebar')
            <!-- partial -->
            <div class="main-panel">
                {{ $slot }}
            </div>
        </div>
    </div>

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

</body>

</html>
