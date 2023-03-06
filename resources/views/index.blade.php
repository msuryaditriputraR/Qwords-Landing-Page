<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>{{ $title }}</title>
</head>

<body>
    @include('partials/header', $menu)

    <main>
        @include('sections/home')

        @include('sections/domain', $domains)
    </main>
</body>

</html>