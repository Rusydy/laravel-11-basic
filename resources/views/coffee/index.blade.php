<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Coffee</h1>

    <ul>
        @foreach ($coffees as $coffee)
            <li>{{ $coffee['name'] }} - ${{ $coffee['price'] }}</li>
        @endforeach
    </ul>
</body>
</html>