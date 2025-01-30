<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-900">

    {{-- Include Navbar --}}
    @include('components.header')

    {{-- Main Content --}}
    <main class="container mx-auto p-6 h-screen">
        @yield('content')
    </main>

    {{-- Include Footer --}}
    @include('components.footer')

</body>
</html>
