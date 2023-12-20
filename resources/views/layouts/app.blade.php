<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/js/app.js')
</head>

<body class="d-flex flex-column vh-100 bg-secondary bg-opacity-25">
    <header class="bg-success bg-opacity-75 p-3 shadow text-white">
        @include('partials.header')
    </header>
    <main class="bg-success bg-opacity-25 p-5 flex-grow-1">
        @yield('content')
    </main>
    <footer class="bg-success bg-opacity-75 p-3 shadow text-white">
        @include('partials.footer')
    </footer>
    @include('partials.destroyModal')
</body>

</html>
