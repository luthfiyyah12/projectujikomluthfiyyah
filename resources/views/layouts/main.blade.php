<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
    @include('layouts.navbar')  <!-- Optional navbar -->
    <div class="container mt-5">
        @yield('content')
    </div>
    @include('layouts.footer')  <!-- Optional footer -->
    <div class="container mt-5">
        @yield('content')
</body>
</html>
