<html>
<head>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col min-h-screen">

<nav class="border-b shadow">
    <div class="max-w-6xl mx-auto">
        <div class="flex flex-row gap-2 h-12 items-center">
            <a href="/profile" class="hover:text-indigo-500 hover:underline">Profile</a>
            <a href="/table" class="hover:text-indigo-500 hover:underline">Table</a>
        </div>
    </div>
</nav>

<main class="bg-gray-100 grow">
    {{ $slot }}
</main>

<footer class="border-t">
    <div class="flex flex-row items-center justify-end h-12 max-w-6xl mx-auto">
        <div>{{ date('Y') }}</div>
    </div>
</footer>
</body>
</html>
