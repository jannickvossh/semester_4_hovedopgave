<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? "$title | Hovedopgave på 4. semester" : 'Hovedopgave på 4. semester' }}</title>
    <link rel="stylesheet" href="{{ URL::asset('/css/main.css') }}">
    <script src="{{ URL::asset('/js/main.js') }}" defer></script>
    @yield('head')
</head>
<body>
