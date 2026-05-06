<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <title>Konferencijų sistema</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark navbar-expand-lg mb-4">
    <div class="container">
        <a href="/" class="navbar-brand">
            Konferencijos
        </a>

        <div>
            <a href="/client/conferences" class="btn btn-outline-light btn-sm">
                Klientas
            </a>

            <a href="/employee/conferences" class="btn btn-outline-light btn-sm">
                Darbuotojas
            </a>

            <a href="/admin" class="btn btn-outline-light btn-sm">
                Administratorius
            </a>
        </div>
    </div>
</nav>

<div class="container">

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @yield('content')

</div>

</body>
</html>