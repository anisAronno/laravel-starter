<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @use('AnisAronno\MediaHelper\Facades\Media')

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ hasSettings('logo') ? Media::getURL(getSettings('logo')) : Media::getDefaultLogo() }}"
        type="image/svg+xml" />
    <title>{{ getSettings('site_name') ?? config('app.name', 'Ecommerce') }}</title>
    <meta name="description"
        content="Admin Toolkit is a modern admin dashboard template based on Tailwindcss. It comes with a variety of useful ui components and pre-built pages" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <script>
        // if (
        //     localStorage.getItem('theme') === 'dark' ||
        //     (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)
        // ) {
        //     document.documentElement.classList.add('dark');
        // } else {
        //     document.documentElement.classList.remove('dark');
        // }
    </script>

    <script>
        window.currentRoute = '{{ Route::currentRouteName() }}';
    </script>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

    <style>
        .custom-data-table {
            display: none;
        }

        @media (min-width: 640px) {
            .custom-data-table {
                display: table;
            }
        }
    </style>
</head>

<body>
    <div id="frontend">
<div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">

    <div class="fixed inset-0 bg-black bg-opacity-25"></div>

    <div class="fixed inset-0 z-40 flex">

        <div class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl">
            <div class="flex px-4 pb-2 pt-5">
                <button type="button"
                    class="relative -m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Links -->
            <div class="mt-2">
                <div class="border-b border-gray-200">
                    <div class="-mb-px flex space-x-8 px-4" aria-orientation="horizontal" role="tablist">
                        <!-- Selected: "border-indigo-600 text-indigo-600", Not Selected: "border-transparent text-gray-900" -->
                        <button id="tabs-1-tab-1"
                            class="border-transparent text-gray-900 flex-1 whitespace-nowrap border-b-2 px-1 py-4 text-base font-medium"
                            aria-controls="tabs-1-panel-1" role="tab" type="button">Women</button>
                        <!-- Selected: "border-indigo-600 text-indigo-600", Not Selected: "border-transparent text-gray-900" -->
                        <button id="tabs-1-tab-2"
                            class="border-transparent text-gray-900 flex-1 whitespace-nowrap border-b-2 px-1 py-4 text-base font-medium"
                            aria-controls="tabs-1-panel-2" role="tab" type="button">Men</button>
                    </div>
                </div>

                <!-- 'Women' tab panel, show/hide based on tab state. -->
                <div id="tabs-1-panel-1" class="space-y-10 px-4 pb-8 pt-10" aria-labelledby="tabs-1-tab-1"
                    role="tabpanel" tabindex="0">
                    <div class="grid grid-cols-2 gap-x-4">
                        <div class="group relative text-sm">
                            <div
                                class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg"
                                    alt="Models sitting back to back, wearing Basic Tee in black and bone."
                                    class="object-cover object-center">
                            </div>
                            <a href="#" class="mt-6 block font-medium text-gray-900">
                                <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                New Arrivals
                            </a>
                            <p aria-hidden="true" class="mt-1">Shop now</p>
                        </div>
                        <div class="group relative text-sm">
                            <div
                                class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg"
                                    alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees."
                                    class="object-cover object-center">
                            </div>
                            <a href="#" class="mt-6 block font-medium text-gray-900">
                                <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                Basic Tees
                            </a>
                            <p aria-hidden="true" class="mt-1">Shop now</p>
                        </div>
                    </div>
                    <div>
                        <p id="women-clothing-heading-mobile" class="font-medium text-gray-900">Clothing</p>
                        <ul role="list" aria-labelledby="women-clothing-heading-mobile"
                            class="mt-6 flex flex-col space-y-6">
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Tops</a>
                            </li>
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Dresses</a>
                            </li>
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Pants</a>
                            </li>
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Denim</a>
                            </li>
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Sweaters</a>
                            </li>
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">T-Shirts</a>
                            </li>
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Jackets</a>
                            </li>
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Activewear</a>
                            </li>
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Browse All</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p id="women-accessories-heading-mobile" class="font-medium text-gray-900">Accessories
                        </p>
                        <ul role="list" aria-labelledby="women-accessories-heading-mobile"
                            class="mt-6 flex flex-col space-y-6">
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Watches</a>
                            </li>
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Wallets</a>
                            </li>
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Bags</a>
                            </li>
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Sunglasses</a>
                            </li>
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Hats</a>
                            </li>
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Belts</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p id="women-brands-heading-mobile" class="font-medium text-gray-900">Brands</p>
                        <ul role="list" aria-labelledby="women-brands-heading-mobile"
                            class="mt-6 flex flex-col space-y-6">
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Full Nelson</a>
                            </li>
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">My Way</a>
                            </li>
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Re-Arranged</a>
                            </li>
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Counterfeit</a>
                            </li>
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Significant Other</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- 'Men' tab panel, show/hide based on tab state. -->
                <div id="tabs-1-panel-2" class="space-y-10 px-4 pb-8 pt-10" aria-labelledby="tabs-1-tab-2"
                    role="tabpanel" tabindex="0">
                    <div class="grid grid-cols-2 gap-x-4">
                        <div class="group relative text-sm">
                            <div
                                class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/product-page-04-detail-product-shot-01.jpg"
                                    alt="Drawstring top with elastic loop closure and textured interior padding."
                                    class="object-cover object-center">
                            </div>
                            <a href="#" class="mt-6 block font-medium text-gray-900">
                                <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                New Arrivals
                            </a>
                            <p aria-hidden="true" class="mt-1">Shop now</p>
                        </div>
                        <div class="group relative text-sm">
                            <div
                                class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-06.jpg"
                                    alt="Three shirts in gray, white, and blue arranged on table with same line drawing of hands and shapes overlapping on front of shirt."
                                    class="object-cover object-center">
                            </div>
                            <a href="#" class="mt-6 block font-medium text-gray-900">
                                <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                Artwork Tees
                            </a>
                            <p aria-hidden="true" class="mt-1">Shop now</p>
                        </div>
                    </div>
                    <div>
                        <p id="men-clothing-heading-mobile" class="font-medium text-gray-900">Clothing</p>
                        <ul role="list" aria-labelledby="men-clothing-heading-mobile"
                            class="mt-6 flex flex-col space-y-6">
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Tops</a>
                            </li>
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Pants</a>
                            </li>
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Sweaters</a>
                            </li>
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">T-Shirts</a>
                            </li>
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Jackets</a>
                            </li>
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Activewear</a>
                            </li>
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Browse All</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p id="men-accessories-heading-mobile" class="font-medium text-gray-900">Accessories
                        </p>
                        <ul role="list" aria-labelledby="men-accessories-heading-mobile"
                            class="mt-6 flex flex-col space-y-6">
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Watches</a>
                            </li>
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Wallets</a>
                            </li>
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Bags</a>
                            </li>
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Sunglasses</a>
                            </li>
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Hats</a>
                            </li>
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Belts</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p id="men-brands-heading-mobile" class="font-medium text-gray-900">Brands</p>
                        <ul role="list" aria-labelledby="men-brands-heading-mobile"
                            class="mt-6 flex flex-col space-y-6">
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Re-Arranged</a>
                            </li>
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Counterfeit</a>
                            </li>
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">Full Nelson</a>
                            </li>
                            <li class="flow-root">
                                <a href="#" class="-m-2 block p-2 text-gray-500">My Way</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="space-y-6 border-t border-gray-200 px-4 py-6">
                <div class="flow-root">
                    <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Company</a>
                </div>
                <div class="flow-root">
                    <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Stores</a>
                </div>
            </div>

            <div class="space-y-6 border-t border-gray-200 px-4 py-6">
                @guest
                    <div class="flow-root">
                        <a href="{{ route('login') }}" class="-m-2 block p-2 font-medium text-gray-900">Sign in</a>
                    </div>
                @endguest
                @auth
                    <div class="flow-root">
                        <a href="{{ route('admin.dashboard') }}"
                            class="-m-2 block p-2 font-medium text-gray-900">Dashboard</a>
                    </div>
                @endauth
            </div>

            <div class="border-t border-gray-200 px-4 py-6">
                <a href="#" class="-m-2 flex items-center p-2">
                    <img src="https://tailwindui.com/img/flags/flag-canada.svg" alt=""
                        class="block h-auto w-5 flex-shrink-0">
                    <span class="ml-3 block text-base font-medium text-gray-900">CAD</span>
                    <span class="sr-only">, change currency</span>
                </a>
            </div>
        </div>
    </div>
</div>

<header class="relative overflow-hidden">
        <!-- Main Content Starts -->
        <x-frontend.header />
        <main>
            {{ $slot }}
            <x-frontend.footer />
        </main>
        <!-- Main Content Ends -->
    </div>
</body>

</html>
