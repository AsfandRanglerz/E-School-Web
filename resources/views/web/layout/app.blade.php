<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <!-- Mobile Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'My Website')</title>

    <!--  Performance Optimization -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome (optional icons) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('public/admin/assets/css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web/assets/css/style.css') }}">

    <!-- Extra CSS -->
    @stack('css')
</head>

<body>

    <!-- 🔄 Loader -->
    <div class="loader"></div>

    <div id="app">
        <div class="main-wrapper main-wrapper-1">

            <!-- Header -->
            @include('web.common.header')

            
            
                @yield('content')
            

            <!-- Footer -->
            @include('web.common.footer')

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap Bundle JS (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" defer></script>

    <!--  App JS -->
    <script src="{{ asset('public/admin/assets/js/app.min.js') }}" defer></script>
    <script src="{{ asset('web/assets/js/custom.js') }}" defer></script>

    <!-- Extra JS -->
    @stack('js')

</body>

</html>