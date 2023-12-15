<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>

<body>
    <main>
        <header>
            <h1>movies</h1>
        </header>
        @yield('content')
    </main>
    <footer>
        contattaci
    </footer>
</body>

</html>