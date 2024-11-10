<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Basic</title>
    @vite([
        'resources/css/app.css',
    ])
</head>
<body class="bg-gray-900 text-white">
    <div class="flex flex-col items-center justify-center min-h-screen space-y-4">
        <a 
        href="{{ route('about.index') }}" 
        class="bg-blue-500 text-white px-4 py-2 rounded-lg"
        >
            About
        </a>

        <a
        href="{{ route('coffee.index') }}"
        class="bg-blue-500 text-white px-4 py-2 rounded-lg"
        >
            Coffee
        </a>
        <h1 class="text-3xl bg-blue-500 p-4 rounded-xl">
            Welcome to Laravel Basic
        </h1>
    </div>

</body>
</html>