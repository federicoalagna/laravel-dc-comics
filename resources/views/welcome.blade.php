<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel DC Comics</title>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route('comics.index') }}">DC Comics</a>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
