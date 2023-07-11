<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css'])
    @vite(['resources/js/app.js'])

    <script type="text/javascript" src="../node_modules/tw-elements/dist/js/tw-elements.umd.min.js"></script>


    <title>@yield('title')</title>


    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/logo.png') }}">
    <title>RetroRogilo</title>
</head>

<body>
    @include('layouts.header')

    <main>
        @yield('content')

    </main>
    @include('layouts.footer')

</body>

</html>
