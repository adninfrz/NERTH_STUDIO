<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Product | Nerth Studio</title>

    <link rel="shortcut icon" href="favicon.ico" type="img/logo.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    @vite('resources/css/app.css')
</head>

<body class="bg-cover bg-center h-screen" style="background-image: url('/img/product_bg.jpeg');">

    <div class="m-20">
        <div class="flex justify-between">
            <a href="{{route ('home')}}">
            <img src="{{asset('img/Nerth_black.png') }}" alt="Logo">
            </img>
                </a>
            <div class="">
                <x-cart>
                </x-cart>
            </div> 
        </div>

        <div class="flex">
            <div class="w-1/2 ml-12">
                <img src="{{asset ('img/HOPE.PNG')}}" alt="logo">
                <p class="text-lg mt-4 font-bold">
                    Banyak harapan yang ada dipundak kita semua. Harapan orang-orang yang sebisa
                    mungkin harus kita usahakan meski hasil belum tentu sesuai dengan apa yang kita upayakan.
                </p>
                <div class="mt-8">
                    <button class="rounded-lg bg-black text-white px-6 py-3 text-lg mr-4">Buy Now</button>
                    <button class="rounded-lg bg-slate-50 border border-black px-6 py-3 text-lg">Select Size</button>
                </div>
                <p class="text-xl mt-4">Idr. 149.900,00,-</p>
                <div class="mt-5">
                    <button class="bg-zinc-400 rounded-lg text-white px-6 py-3 text-lg mr-4">Size Chart</button>
                </div>
            </div>
            <div class="relative mr-72">
                <img src="{{ asset('img/baju_hope.png') }}" alt="Hope T-shirt" class="w-full h-auto">
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
