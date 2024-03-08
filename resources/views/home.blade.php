<x-frontend-layout>
    <!-- Category section -->
    <section aria-labelledby="category-heading" class="bg-gray-50 dark:bg-gray-900">
        <div class="mx-auto max-w-7xl px-4 py-24 sm:px-6 sm:py-32 lg:px-8">
            <div class="sm:flex sm:items-baseline sm:justify-between">
                <h2 id="category-heading" class="text-2xl font-bold tracking-tight ">Shop by
                    Category</h2>
                <a href="#" class="hidden text-sm font-semibold text-indigo-600 hover:text-indigo-500 sm:block">
                    Browse all categories
                    <span aria-hidden="true"> &rarr;</span>
                </a>
            </div>

            <div class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:grid-rows-2 sm:gap-x-6 lg:gap-8">
                <div
                    class="group aspect-h-1 aspect-w-2 overflow-hidden rounded-lg sm:aspect-h-1 sm:aspect-w-1 sm:row-span-2">
                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-featured-category.jpg"
                        alt="Two models wearing women's black cotton crewneck tee and off-white cotton crewneck tee."
                        class="object-cover object-center group-hover:opacity-75">
                    <div aria-hidden="true" class="bg-gradient-to-b from-transparent to-black opacity-50">
                    </div>
                    <div class="flex items-end p-6">
                        <div>
                            <h3 class="font-semibold text-white">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    New Arrivals
                                </a>
                            </h3>
                            <p aria-hidden="true" class="mt-1 text-sm text-white">Shop now</p>
                        </div>
                    </div>
                </div>
                <div
                    class="group aspect-h-1 aspect-w-2 overflow-hidden rounded-lg sm:aspect-none sm:relative sm:h-full">
                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-01.jpg"
                        alt="Wooden shelf with gray and olive drab green baseball caps, next to wooden clothes hanger with sweaters."
                        class="object-cover object-center group-hover:opacity-75 sm:absolute sm:inset-0 sm:h-full sm:w-full">
                    <div aria-hidden="true"
                        class="bg-gradient-to-b from-transparent to-black opacity-50 sm:absolute sm:inset-0">
                    </div>
                    <div class="flex items-end p-6 sm:absolute sm:inset-0">
                        <div>
                            <h3 class="font-semibold text-white">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Accessories
                                </a>
                            </h3>
                            <p aria-hidden="true" class="mt-1 text-sm text-white">Shop now</p>
                        </div>
                    </div>
                </div>
                <div
                    class="group aspect-h-1 aspect-w-2 overflow-hidden rounded-lg sm:aspect-none sm:relative sm:h-full">
                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-02.jpg"
                        alt="Walnut desk organizer set with white modular trays, next to porcelain mug on wooden desk."
                        class="object-cover object-center group-hover:opacity-75 sm:absolute sm:inset-0 sm:h-full sm:w-full">
                    <div aria-hidden="true"
                        class="bg-gradient-to-b from-transparent to-black opacity-50 sm:absolute sm:inset-0">
                    </div>
                    <div class="flex items-end p-6 sm:absolute sm:inset-0">
                        <div>
                            <h3 class="font-semibold text-white">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Workspace
                                </a>
                            </h3>
                            <p aria-hidden="true" class="mt-1 text-sm text-white">Shop now</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 sm:hidden">
                <a href="#" class="block text-sm font-semibold text-indigo-600 hover:text-indigo-500">
                    Browse all categories
                    <span aria-hidden="true"> &rarr;</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Featured section -->
    <section aria-labelledby="trending-heading">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="md:flex md:items-center md:justify-between">
                <h2 id="favorites-heading" class="text-2xl font-bold tracking-tight ">Feature Products
                </h2>
                <a href="#" class="hidden text-sm font-medium text-indigo-600 hover:text-indigo-500 md:block">
                    Shop the collection
                    <span aria-hidden="true"> &rarr;</span>
                </a>
            </div>

            <div class="mt-8 grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
                @foreach ($products as $product)
                    <div>
                        <div class="relative">
                            <div class="relative h-72 w-full overflow-hidden rounded-lg">
                                <img src="{{ $product->featuredMedia->url }}" alt="{{ $product->title }}"
                                    class="h-full w-full object-cover object-center">
                            </div>
                            <div class="relative mt-4">
                                <h3 class="text-sm font-medium text-gray-900">{{ $product->title }}</h3>
                                <p class="mt-1 text-sm text-gray-500">{{ $product->category->title }}</p>
                            </div>
                            <div
                                class="absolute inset-x-0 top-0 flex h-72 items-end justify-end overflow-hidden rounded-lg p-4">
                                <div aria-hidden="true"
                                    class="absolute inset-x-0 bottom-0 h-36 bg-gradient-to-t from-black opacity-50">
                                </div>
                                <p class="relative text-lg font-semibold text-white">{{ $product->price }}</p>
                            </div>
                        </div>
                        <div class="mt-6">
                            <form action="add-to-cart" method="POST">
                                @method('POST')
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $product->id }}">

                                <button type="submit"
                                    class="relative flex items-center justify-center rounded-md border border-transparent bg-gray-100 px-8 py-2 text-sm font-medium text-gray-900 hover:bg-gray-200 w-full">Add
                                    to bag<span class="sr-only">, Zip Tote Basket</span></button>
                            </form>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="mt-8 text-sm md:hidden">
                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                    Shop the collection
                    <span aria-hidden="true"> &rarr;</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Trending products -->
    <section aria-labelledby="trending-heading" class="bg-white dark:bg-gray-900">
        <div class="py-16 sm:py-24 lg:mx-auto lg:max-w-7xl lg:px-8 ">
            <div class="flex items-center justify-between px-4 sm:px-6 lg:px-0">
                <h2 id="trending-heading" class="text-2xl font-bold tracking-tight ">Trending products</h2>
                <a href="#" class="hidden text-sm font-semibold text-indigo-600 hover:text-indigo-500 sm:block">
                    See everything
                    <span aria-hidden="true"> &rarr;</span>
                </a>
            </div>

            <div class="relative mt-8">
                <div class="relative w-full overflow-x-auto">
                    <div class="mt-8 grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
                        <div>
                            <div class="relative">
                                <div class="relative h-72 w-full overflow-hidden rounded-lg">
                                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-03-related-product-01.jpg"
                                        alt="Front of zip tote bag with white canvas, black canvas straps and handle, and black zipper pulls."
                                        class="h-full w-full object-cover object-center">
                                </div>
                                <div class="relative mt-4">
                                    <h3 class="text-sm font-medium text-gray-900">Zip Tote Basket</h3>
                                    <p class="mt-1 text-sm text-gray-500">White and black</p>
                                </div>
                                <div
                                    class="absolute inset-x-0 top-0 flex h-72 items-end justify-end overflow-hidden rounded-lg p-4">
                                    <div aria-hidden="true"
                                        class="absolute inset-x-0 bottom-0 h-36 bg-gradient-to-t from-black opacity-50">
                                    </div>
                                    <p class="relative text-lg font-semibold text-white">$140</p>
                                </div>
                            </div>
                            <div class="mt-6">
                                <a href="#"
                                    class="relative flex items-center justify-center rounded-md border border-transparent bg-gray-100 px-8 py-2 text-sm font-medium text-gray-900 hover:bg-gray-200">Add
                                    to bag<span class="sr-only">, Zip Tote Basket</span></a>
                            </div>
                        </div>
                        <div>
                            <div class="relative">
                                <div class="relative h-72 w-full overflow-hidden rounded-lg">
                                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-03-related-product-01.jpg"
                                        alt="Front of zip tote bag with white canvas, black canvas straps and handle, and black zipper pulls."
                                        class="h-full w-full object-cover object-center">
                                </div>
                                <div class="relative mt-4">
                                    <h3 class="text-sm font-medium text-gray-900">Zip Tote Basket</h3>
                                    <p class="mt-1 text-sm text-gray-500">White and black</p>
                                </div>
                                <div
                                    class="absolute inset-x-0 top-0 flex h-72 items-end justify-end overflow-hidden rounded-lg p-4">
                                    <div aria-hidden="true"
                                        class="absolute inset-x-0 bottom-0 h-36 bg-gradient-to-t from-black opacity-50">
                                    </div>
                                    <p class="relative text-lg font-semibold text-white">$140</p>
                                </div>
                            </div>
                            <div class="mt-6">
                                <a href="#"
                                    class="relative flex items-center justify-center rounded-md border border-transparent bg-gray-100 px-8 py-2 text-sm font-medium text-gray-900 hover:bg-gray-200">Add
                                    to bag<span class="sr-only">, Zip Tote Basket</span></a>
                            </div>
                        </div>
                        <div>
                            <div class="relative">
                                <div class="relative h-72 w-full overflow-hidden rounded-lg">
                                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-03-related-product-01.jpg"
                                        alt="Front of zip tote bag with white canvas, black canvas straps and handle, and black zipper pulls."
                                        class="h-full w-full object-cover object-center">
                                </div>
                                <div class="relative mt-4">
                                    <h3 class="text-sm font-medium text-gray-900">Zip Tote Basket</h3>
                                    <p class="mt-1 text-sm text-gray-500">White and black</p>
                                </div>
                                <div
                                    class="absolute inset-x-0 top-0 flex h-72 items-end justify-end overflow-hidden rounded-lg p-4">
                                    <div aria-hidden="true"
                                        class="absolute inset-x-0 bottom-0 h-36 bg-gradient-to-t from-black opacity-50">
                                    </div>
                                    <p class="relative text-lg font-semibold text-white">$140</p>
                                </div>
                            </div>
                            <div class="mt-6">
                                <a href="#"
                                    class="relative flex items-center justify-center rounded-md border border-transparent bg-gray-100 px-8 py-2 text-sm font-medium text-gray-900 hover:bg-gray-200">Add
                                    to bag<span class="sr-only">, Zip Tote Basket</span></a>
                            </div>
                        </div>
                        <div>
                            <div class="relative">
                                <div class="relative h-72 w-full overflow-hidden rounded-lg">
                                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-03-related-product-01.jpg"
                                        alt="Front of zip tote bag with white canvas, black canvas straps and handle, and black zipper pulls."
                                        class="h-full w-full object-cover object-center">
                                </div>
                                <div class="relative mt-4">
                                    <h3 class="text-sm font-medium text-gray-900">Zip Tote Basket</h3>
                                    <p class="mt-1 text-sm text-gray-500">White and black</p>
                                </div>
                                <div
                                    class="absolute inset-x-0 top-0 flex h-72 items-end justify-end overflow-hidden rounded-lg p-4">
                                    <div aria-hidden="true"
                                        class="absolute inset-x-0 bottom-0 h-36 bg-gradient-to-t from-black opacity-50">
                                    </div>
                                    <p class="relative text-lg font-semibold text-white">$140</p>
                                </div>
                            </div>
                            <div class="mt-6">
                                <a href="#"
                                    class="relative flex items-center justify-center rounded-md border border-transparent bg-gray-100 px-8 py-2 text-sm font-medium text-gray-900 hover:bg-gray-200">Add
                                    to bag<span class="sr-only">, Zip Tote Basket</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12 px-4 sm:hidden">
                <a href="#" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">
                    See everything
                    <span aria-hidden="true"> &rarr;</span>
                </a>
            </div>
        </div>
    </section>
    <section aria-labelledby="perks-heading" class="border-t border-gray-200 bg-white dark:bg-gray-900">
        <h2 id="perks-heading" class="sr-only">Our perks</h2>

        <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 sm:py-20 lg:px-8">
            <div class="grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 lg:gap-x-8 lg:gap-y-0">
                <div class="text-center md:flex md:items-start md:text-left lg:block lg:text-center">
                    <div class="md:flex-shrink-0">
                        <div class="flow-root">
                            <img class="-my-1 mx-auto h-24 w-auto"
                                src="https://tailwindui.com/img/ecommerce/icons/icon-returns-light.svg"
                                alt="">
                        </div>
                    </div>
                    <div class="mt-6 md:ml-4 md:mt-0 lg:ml-0 lg:mt-6">
                        <h3 class="text-base font-medium  text-gray-900 dark:text-white">Free returns</h3>
                        <p class="mt-3 text-sm text-gray-500">Not what you expected? Place it back in the parcel and
                            attach the pre-paid postage stamp.</p>
                    </div>
                </div>
                <div class="text-center md:flex md:items-start md:text-left lg:block lg:text-center">
                    <div class="md:flex-shrink-0">
                        <div class="flow-root">
                            <img class="-my-1 mx-auto h-24 w-auto"
                                src="https://tailwindui.com/img/ecommerce/icons/icon-calendar-light.svg"
                                alt="">
                        </div>
                    </div>
                    <div class="mt-6 md:ml-4 md:mt-0 lg:ml-0 lg:mt-6">
                        <h3 class="text-base font-medium  text-gray-900 dark:text-white">Same day delivery</h3>
                        <p class="mt-3 text-sm text-gray-500">We offer a delivery service that has never been done
                            before. Checkout today and receive your products within hours.</p>
                    </div>
                </div>
                <div class="text-center md:flex md:items-start md:text-left lg:block lg:text-center">
                    <div class="md:flex-shrink-0">
                        <div class="flow-root">
                            <img class="-my-1 mx-auto h-24 w-auto"
                                src="https://tailwindui.com/img/ecommerce/icons/icon-gift-card-light.svg"
                                alt="">
                        </div>
                    </div>
                    <div class="mt-6 md:ml-4 md:mt-0 lg:ml-0 lg:mt-6">
                        <h3 class="text-base font-medium  text-gray-900 dark:text-white">All year discount</h3>
                        <p class="mt-3 text-sm text-gray-500">Looking for a deal? You can use the code
                            &quot;ALLYEAR&quot; at checkout and get money off all year round.</p>
                    </div>
                </div>
                <div class="text-center md:flex md:items-start md:text-left lg:block lg:text-center">
                    <div class="md:flex-shrink-0">
                        <div class="flow-root">
                            <img class="-my-1 mx-auto h-24 w-auto"
                                src="https://tailwindui.com/img/ecommerce/icons/icon-planet-light.svg" alt="">
                        </div>
                    </div>
                    <div class="mt-6 md:ml-4 md:mt-0 lg:ml-0 lg:mt-6">
                        <h3 class="text-base font-medium  text-gray-900 dark:text-white">For the planet</h3>
                        <p class="mt-3 text-sm text-gray-500">We’ve pledged 1% of sales to the preservation and
                            restoration of the natural environment.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-frontend-layout>
