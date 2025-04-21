<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - PictPocket</title> <!-- Menggunakan Blade untuk judul dinamis -->

    <!-- Menggunakan CDN untuk FontAwesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Menggunakan fungsi asset() untuk referensi file CSS di Laravel -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">

</head>

<body>
    {{-- Navigation dan Footer ada di folder partials. Body adalah konten halaman. --}}

    @include('partials.navigation') <!-- Memastikan file navigation.blade.php ada di resources/views/partials -->


    <main role="main">
        <!-- Bagian ini akan diisi dengan konten dari masing-masing view -->
        @yield('content') <!-- Bagian ini akan diisi dengan konten dinamis dari halaman yang menggunakan layout ini -->
    </main>

    <!-- Footer juga disertakan menggunakan Blade -->
    @include('partials.footer') <!-- Memastikan file footer.blade.php ada di resources/views/partials -->

</body>

</html>
