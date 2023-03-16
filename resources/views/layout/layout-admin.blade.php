<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Freedom | {{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('icon/css/all.min.css') }}">
    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/shared/iconly.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="app">
        @include('admin.sidebar')
    </div>
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>{{ $judul }}</h3>
        </div>

        @yield('bebas')

        @include('admin.footer')
    </div>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
    <script src="assets/js/pages/simple-datatables.js"></script>
</body>

</html>
