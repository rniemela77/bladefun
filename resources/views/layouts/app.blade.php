<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My App')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    {{-- Global site header --}}
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    {{-- Global site footer --}}
    {{-- @include('partials.footer') --}}

    @stack('scripts')
</body>
</html>
