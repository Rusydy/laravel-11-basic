<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite([
        'resources/css/app.css',
    ])
    <title>About Page</title>
</head>
<body class="bg-gray-800 text-white">
    <div class="flex flex-col items-center justify-center min-h-screen space-y-4">
        <a
        href="{{ route('welcome') }}"
        class="bg-blue-500 text-white px-4 py-2 rounded-lg"
        >
            Home
        </a>

        <h1 class="text-3xl bg-blue-500 p-4 rounded-xl">
            About Page
        </h1>
    </div>
</body>
</html>