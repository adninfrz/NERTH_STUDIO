<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Product | Nerth Studio</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    @vite('resources/css/app.css')
</head>

<body class="bg-cover bg-center h-screen" style="background-image: url('/img/product_bg.jpeg');">

    <div class="m-24">
        <div class="flex justify-between">
            <h1 class="text-4xl font-bold">Nerth Studio</h1>
            <h2 class="flex items-center">
                Cart
                <img src="" alt="">
            </h2>
        </div>

        <div class="flex">
            <div class="w-1/2">
                <h2 class="text-8xl font-bold mt-8">HOPE</h2>
                <p class="text-lg mt-4">
                    Banyak harapan yang ada dipundak kita semua. Harapan orang-orang yang sebisa
                    mungkin harus kita usahakan meski hasil belum tentu sesuai dengan apa yang kita upayakan.
                </p>
                <div class="mt-8">
                    <button class="bg-black text-white px-6 py-3 text-lg mr-4">Buy Now</button>
                    <button class="border border-black px-6 py-3 text-lg">Add to Cart</button>
                </div>
                <p class="text-xl mt-4">Idr. 149.900,00,-</p>
            </div>
            <div class="w-1/2 relative">
                <img src="{{ asset('img/tshirt.png') }}" alt="Hope T-shirt" class="w-full h-auto">
                <div class="absolute top-80 right-20 bg-white px-4 py-2 text-sm">Only 20 Pieces Worldwide</div>
            </div>
        </div>

        <div class="flex mt-10 mb-20 justify-between">
            <div class="flex space-x-4">
                <a href="https://www.tiktok.com" class="text-black">TikTok</a>
                <a href="https://www.instagram.com" class="text-black">Instagram</a>
            </div>

            <div>
                <p>&copy; 2024 Nerth Studio. All rights reserved.</p>
            </div>
        </div>
    </div>

    @vite('resources/js/app.js')
</body>

</html>
