<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/js/app.js')
</head>

<body class="d-flex flex-column vh-100">
    <header class="bg-dark bg-opacity-100 p-3 shadow text-light">
        @include('partials.header')
    </header>
    <main class="bg-dark bg-opacity-25 flex-grow-1">
        @yield('content')
    </main>
    <footer class="bg-dark bg-opacity-100 p-3 shadow text-light">
        @include('partials.footer')
    </footer>
    @include('partials.destroyModal')
</body>

</html>
