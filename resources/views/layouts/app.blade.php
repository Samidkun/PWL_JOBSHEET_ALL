<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'POS App')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Add Bootstrap (optional) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}">POS App</a>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Add scripts if needed -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
