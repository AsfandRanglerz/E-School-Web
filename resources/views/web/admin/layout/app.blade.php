<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <!-- Mobile Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'My Website')</title>

    <!-- Performance Optimization -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery UI CSS -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/assets/css/style.css') }}">

    @stack('css')
</head>

<body>

<div class="loader"></div>

<div class="d-flex main-layout main-lofad">

    <div class="main-div-for-side-menu">
        @include('web.admin.common.sidemenu')
    </div>

    <div class="flex-grow-1">

        <div class="header-in-admin">
            @include('web.admin.common.header')
        </div>

        <div class="main-content">
            @yield('content')
        </div>

    </div>

</div>

<!-- ✅ JS ORDER (IMPORTANT FIX) -->

<!-- 1. jQuery FIRST -->
<!-- 1. jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- 2. Select2 🔥 (ADD THIS) -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- 3. jQuery UI -->
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>

<!-- 4. Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- 5. Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>

<!-- 6. CanvasJS -->
<script src="https://cdn.canvasjs.com/jquery.canvasjs.min.js"></script>

<!-- 7. App JS -->
<script src="{{ asset('public/admin/assets/js/app.min.js') }}"></script>

<!-- 8. Custom JS -->
<script src="{{ asset('web/assets/js/custom.js') }}"></script>

@stack('js')

<div class="sidebar-overlay"></div>

</body>
</html>