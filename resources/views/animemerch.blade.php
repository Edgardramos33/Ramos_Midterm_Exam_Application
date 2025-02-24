<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Products</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">
    <h1 class="text-3xl font-bold text-center mt-4">Anime Products</h1>
    <div class="container mx-auto">
        @foreach($products as $product)
            <div class="border border-gray-300 p-4 m-4 rounded shadow">
                <h2 class="text-2xl font-semibold">{{ $product['name'] }}</h2>
                <p class="mt-2">{{ $product['description'] }}</p>
                <strong class="block mt-4">Price: PHP {{ number_format($product['price'], 2) }}</strong>
            </div>
        @endforeach
    </div>
</body>
</html>
