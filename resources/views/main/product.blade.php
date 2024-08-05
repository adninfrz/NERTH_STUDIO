<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Product {{ $product->title }} | Nerth Studio</title>

    <link rel="shortcut icon" href="favicon.ico" type="img/logo.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-cover bg-center h-screen" style="background-image: url('{{ Storage::url($product->background) }}');">

    <div class="m-20">
        <div class="flex justify-between">
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/Nerth_black.png') }}" alt="Logo">
                </img>
            </a>
            <div class="">
                <button class="font-medium text-xl px-5 py-2.5 mb-2" type="button" data-drawer-target="drawer-right"
                    data-drawer-show="drawer-right" data-drawer-placement="right" aria-controls="drawer-right">
                    <img src="{{ asset('img/cart(0)_icon.png') }}" alt="logo">
                </button>

                <!-- Cart Details -->
                <div id="drawer-right"
                    class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-96"
                    tabindex="-1" aria-labelledby="drawer-right-label">
                    <h5 id="drawer-right-label"
                        class="inline-flex items-center mb-4 text-base font-semibold text-gray-500">
                        CART (<span id="cart-count">0</span>)
                    </h5>
                    <div id="cart-items" class="space-y-4">
                        <!-- Cart items will be dynamically added here -->
                    </div>
                    <div
                        class="mt-24 rounded-lg py-3 px-3 flex flex-row gap-x-2 justify-evenly bg-gray-300 items-center">
                        <a class="" href="https://shopee.co.id/shop/794956777?is_from_login=true">
                            <img src="{{ asset('img/shope.png') }}" alt="Shopee Logo" class="w-12 h-12">
                        </a>
                        <h1 class="text-xl font-bold text-gray-800">or</h1>
                        <a href="https://tokopedia.com">
                            <img src="{{ asset('img/tokopedia.png') }}" alt="Tokopedia Logo" class="w-12 h-12">
                        </a>
                    </div>
                    <button type="button" data-drawer-hide="drawer-right" aria-controls="drawer-right"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="flex">
        <div class="w-1/2 ml-12">
            <h3 class="text-9xl font-bold">
                {{ $product->title }}
            </h3>
            <p class="text-lg mt-4 font-bold text-justify">
                {{ $product->description }}
            </p>

            <div class="mt-8">
                <form id="add-to-cart-form">
                    @csrf
                    <button id="add-to-cart" type="button"
                        class="rounded-lg bg-black text-white px-6 py-3 text-lg mr-4">
                        Add to Cart
                    </button>
                </form>
                <button id="selectSizeButton"
                    class="rounded-lg bg-slate-50 border border-black px-6 py-3 text-lg">Select Size</button>
            </div>

            <p class="text-xl mt-4">Idr. {{ number_format($product->price, 0, ',', '.') }}-</p>
            <div class="mt-5">
                <button type="button" data-modal-target="authentication-size" data-modal-toggle="authentication-size"
                    class="bg-zinc-400 rounded-lg text-white px-6 py-3 text-lg mr-4">Size Chart</button>
            </div>
        </div>
        <div class="relative mr-72">
            <img src="{{ Storage::url($product->image) }}" alt="{{ $product->title }}" class="w-full h-auto">
            <div class="absolute top-80 right-20 bg-white px-4 py-2 text-sm">Only 20 Pieces Worldwide</div>
        </div>
    </div>

    <div id="authentication-size" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="size_chart">
            <img src="{{ asset('img/size_chart.png') }}" alt="">
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

    <script>
        const selectSizeButton = document.getElementById('selectSizeButton');
        let isSizeOptionsVisible = false;

        selectSizeButton.addEventListener('click', () => {
            if (!isSizeOptionsVisible) {
                selectSizeButton.innerHTML = `
                        <div class="flex space-x-2">
                            <button class="size-option px-2 py-1 bg-slate-50 border border-black rounded-lg hover:bg-gray-200 active:bg-gray-300">S</button>
                            <button class="size-option px-2 py-1 bg-slate-50 border border-black rounded-lg hover:bg-gray-200 active:bg-gray-300">M</button>
                            <button class="size-option px-2 py-1 bg-slate-50 border border-black rounded-lg hover:bg-gray-200 active:bg-gray-300">L</button>
                            <button class="size-option px-2 py-1 bg-slate-50 border border-black rounded-lg hover:bg-gray-200 active:bg-gray-300">XL</button>
                        </div>
                    `;
                isSizeOptionsVisible = true;

                document.querySelectorAll('.size-option').forEach(option => {
                    option.addEventListener('click', (event) => {
                        selectSizeButton.textContent = event.target.textContent;
                        isSizeOptionsVisible = false;
                    });
                });
            }
        });

        document.getElementById('add-to-cart').addEventListener('click', () => {
            const cartItems = document.getElementById('cart-items');
            const cartCount = document.getElementById('cart-count');
            const itemTitle = '{{ $product->title }}';
            const itemPrice = '{{ number_format($product->price, 0, ',', '.') }}';

            // Add new item to the cart
            const newItem = document.createElement('div');
            newItem.className = 'max-w-sm rounded overflow-hidden shadow-lg bg-white';
            newItem.innerHTML = `<img class="w-full" src="{{ Storage::url($product->image) }}" alt="${itemTitle}">
                <div class="flex flex-row justify-between px-6 py-4 text-center bg-gray-200">
                    <div class="text-gray-800 text-lg">${itemTitle} (L)</div>
                    <div class="text-gray-800 text-lg font-semibold">Idr. ${itemPrice}</div>
                </div>`;

            cartItems.appendChild(newItem);

            // Update cart count
            cartCount.textContent = parseInt(cartCount.textContent) + 1;

            // Show the drawer
            const drawer = document.getElementById('drawer-right');
            drawer.classList.remove('translate-x-full');
        });
    </script>

</body>

</html>
