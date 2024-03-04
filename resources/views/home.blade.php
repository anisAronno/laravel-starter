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

</head>

<body class="antialiased text-black bg-white dark:text-white dark:bg-gray-900">
    <div class="comtainer p-5">
        @if (!empty($cart))
            <div>
                <h3>{{ count($cart) }}</h3>
            </div>
        @endif
        <div class="  grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach ($products as $product)
                <div>
                   
                    <img src="{{ $product->featuredMedia->url }}" alt="">
                    <h2 class="text-lg">{{ $product->title }}</h2>
                    <h2 class="text-xl text-black">Price: <del>${{ $product->original_price }}</del>
                        ${{ $product->price }}
                    </h2>
                    <form action="add-to-cart" method="POST">
                        @method('POST')
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <button class="btn btn-primary my-3">Add to Cart</button>
                    </form>
                </div>
            @endforeach
        </div>

        {{ $products->links() }}
    </div>
</body>

</html>
