<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Examen')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>

<style>
    .navbar {
        background-color: #cce5ff !important;
    }

    .nav-link {
        color: #003366 !important;
    }

    .nav-link.activo {
        font-weight: bold;
        text-decoration: underline;
        color: #cc0000 !important;
    }
</style>



<body>
    @include('partials.nav')

    <div class="container mt-4">
        @include('partials.flash')
        @yield('content')
    </div>
</body>
</html>
