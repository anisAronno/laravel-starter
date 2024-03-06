<x-frontend-layout>

    <div class="comtainer p-5"> 
        <div class="  grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach ($products as $product)
                <div>
                   
                    <img src="{{ $product->featuredMedia->url }}" alt="">
                    <h2 class="text-lg">{{ $product->title }}</h2>
                    <h2 class="text-xl">Price: <del>${{ $product->original_price }}</del>
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
</x-frontend-layout>