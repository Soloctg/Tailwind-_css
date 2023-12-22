
<html>
    <head>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gray-900">
    <div class="max-w-[3000px] mx-auto">
        <main class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 gap-4 m-4">
            @for($i = 1; $i <= 60; $i++)
                <div class="overflow-hidden">
                    <a href="#">
                        <img src="https://picsum.photos/seed/{{ $i }}/482/271" alt="" class="rounded-xl aspect-video w-full object-cover hover:rounded-none hover:scale-105 transition">
                    </a>
                </div>
            @endfor
        </main>
    </div>
</body>
</html>
