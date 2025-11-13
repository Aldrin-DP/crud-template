<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title', 'Crud') </title>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-200 flex flex-col min-h-screen font-['Figtree']">
    
    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Main Content --}}
    <main class="grow px-10 py-5">
        @yield('content')
    </main>
    
    {{-- Footer --}}
    @include('components.footer')
</body>
</html>