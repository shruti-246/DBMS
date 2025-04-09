<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Management Dashboard</title>

    <link href="{{ asset('assets/css/vertical-layout-light/style.css') }}" rel="stylesheet">
</head>
<body>
    @include('layouts.sidebar')

    <div class="main-panel">
        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>

    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-table.js') }}"></script>
</body>
</html>
