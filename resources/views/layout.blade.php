<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Laravel simple PagesController')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>

<body>

@yield('content')

    <div class="links">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/contact">Contact</a> us to learn more.</li>
            <li><a href="/about">About us</a></li>
        </ul>

    </div>
</body>

</html>
