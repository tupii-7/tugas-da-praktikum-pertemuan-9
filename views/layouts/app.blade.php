<!DOCTYPE html>
<html>
<head>
    <title>Perpustakaan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">

        <a class="navbar-brand"
           href="{{ route('kategori.index') }}">
            Sistem Perpustakaan
        </a>

    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>