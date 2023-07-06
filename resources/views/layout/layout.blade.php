<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css'])
    @vite(['resources/js/app.js'])


    <title> @yield('title')</title>

</head>
<body>

    @include('layout.header')

    @yield('HomeImage')

    @yield('Homecontent')
    
    @yield('cardEquipe')

    @yield('productDetail')
    @yield('allProducts')
    @yield('toolbar')

    @include('layout.footer')





</body>
</html>
