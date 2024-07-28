<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nerth Studio</title>

    <link rel="shortcut icon" href="favicon.ico" type="img/logo.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    @vite('resources/css/app.css')
</head>

<body class="bg-cover bg-center h-screen" style="background-image: url('/img/background.png');">

    <div class="border-gray-200 dark:bg-gray-900 h-full flex flex-col justify-between">
        <div class="mt-16 mx-24">

            <!-- Navigation -->
            <div class="flex justify-between">
                <button class="font-medium text-xl px-5 py-2.5 mb-2" type="button"
                    data-modal-target="authentication-modal" data-modal-toggle="authentication-modal">
                    <img src="{{ asset('img/login_icon.png') }}" alt="logo">
                </button>
                <div class="pt-10">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('img/logo.png') }}" alt="logo">
                    </a>
                </div>
                <button class="font-medium text-xl px-5 py-2.5 mb-2" type="button" data-drawer-target="drawer-right"
                    data-drawer-show="drawer-right" data-drawer-placement="right" aria-controls="drawer-right">
                    <img src="{{ asset('img/cart(0)_icon.png') }}" alt="logo">
                </button>
            </div>

            <!-- Login Form -->
            <div id="authentication-modal" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-lg max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div
                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Login To Your Account
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="authentication-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5">
                            <form class="space-y-4" action="#">
                                <div>
                                    <label for="email"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                    <input type="email" name="email" id="email"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="name@mail.com" required />
                                </div>
                                <div>
                                    <div class="flex justify-between">
                                        <label for="password"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                        <a href="#"
                                            class="text-sm text-blue-700 hover:underline dark:text-blue-500">Forgot?</a>
                                    </div>
                                    <input type="password" name="password" id="password" placeholder="••••••••"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        required />
                                </div>
                                <button type="submit"
                                    class="w-full text-white bg-stone-700 hover:bg-stone-800 focus:ring-4 focus:outline-none focus:ring-stone-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-stone-600 dark:hover:bg-stone-700 dark:focus:ring-stone-800">Login
                                    Now</button>
                                <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                                    Not registered? <a href="{{ route('create.account') }}"
                                        class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cart Details -->
            <div id="drawer-right"
                class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-96 dark:bg-gray-800"
                tabindex="-1" aria-labelledby="drawer-right-label">
                <h5 id="drawer-right-label"
                    class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 dark:text-gray-400">
                    CART (0)
                </h5>
                <button type="button" data-drawer-hide="drawer-right" aria-controls="drawer-right"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close</span>
                </button>
            </div>
        </div>

        <div class="ml-56">
            <a href="{{ route('product') }}">
                <img src="{{ asset('img/button.png') }}" alt="">
            </a>
        </div>

        <!-- Footer -->
        <div class="mx-24 mb-20">

            <div class="flex justify-between">
                <a href="{{ route('about') }}">
                    <img src="{{ asset('img/extras_icon.png') }}" alt="logo">
                </a>
                <a href="https://wa.me/087723050090" target="_blank">
                    <img src="{{ asset('img/customer_servive_icon.png') }}" alt="logo">
                </a>
                <button>
                    <img src="{{ asset('img/social_icon.png') }}" alt="logo">
                </button>
            </div>
        </div>
    </div>

    @vite('resources/js/app.js')
</body>

</html>
