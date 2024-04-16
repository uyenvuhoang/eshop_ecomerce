<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- plugins:css -->
    <link rel="stylesheet" href="/admin/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/admin/vendors/base/vendor.bundle.base.css">
    <link rel="stylesheet" href="/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="/admin/css/style.css">
    <link rel="shortcut icon" href="/admin/images/favicon.png" />

    {{-- Font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- Scripts -->
    <style>
        .sidebar.nav.nav-item.active {
            background-color: #e9e9e9;
        }

        ::-webkit-scrollbar {
            width: 0;
        }

        ::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background: #888;
        }

        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 10px;
        }
    </style>
    @livewireStyles
</head>

<body>
    <div class="container-scroller">
        @include('layouts.inc.admin.navbar')

        <div class="container-fluid page-body-wrapper">
            @include('layouts.inc.admin.sidebar')
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <script src="/admin/vendors/base/vendor.bundle.base.js"></script>
    <script src="/admin/vendors/chart.js/Chart.min.js"></script>
    <script src="/admin/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="/admin/js/off-canvas.js"></script>
    <script src="/admin/js/hoverable-collapse.js"></script>
    <script src="/admin/js/template.js"></script>
    <script src="/admin/js/dashboard.js"></script>
    <script src="/admin/js/data-table.js"></script>
    <script src="/admin/js/jquery.dataTables.js"></script>
    <script src="/admin/js/dataTables.bootstrap4.js"></script>
    <script src="/admin/js/jquery.cookie.js" type="text/javascript"></script>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    @yield('scripts')
    @livewireScripts
    @stack('script')
</body>

</html>
