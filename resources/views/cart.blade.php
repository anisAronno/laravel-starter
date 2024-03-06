<x-frontend-layout>

    <div class="comtainer p-5 mt-10">
        <h2 class="text-center">Cart items</h2>
        @if (count($cart) > 0)
            <div class="  grid grid-cols-1  ml-10 gap-5">
                <table class="table my-10">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Product Image</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cart as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>
                                    @if ($item->attributes)
                                        <img src="{{ $item->attributes['image'] }}" class="w-20 h-auto" alt="">
                                    @endif
                                </td>
                                <td>
                                    <div class="flex gap-3 justify-center items-center">
                                        <form action="{{ route('cart.update', $item->id) }}" method="POST">
                                            @method('POST')
                                            @csrf
                                            <input type="hidden" name="action" value="subtraction">
                                            <button class="btn btn-primary my-3">-</button>
                                        </form>
                                        <span class="text-md font-bold">{{ $item->quantity }}</span>
                                        <form action="{{ route('cart.update', $item->id) }}" method="POST">
                                            @method('POST')
                                            @csrf
                                            <input type="hidden" name="action" value="add">
                                            <button class="btn btn-primary my-3">+</button>
                                        </form>
                                    </div>

                                </td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->price * $item->quantity }}</td>
                                <td>
                                    <a href="#"
                                        onclick="event.preventDefault(); 
                                        if(confirm('Are you sure you want to delete this file?')) { 
                                            document.getElementById('cartDestroy_{{ $item->id }}').submit();
                                        }"
                                        class="font-medium text-red-500 hover:text-red-700 dark:hover:text-red-400 flex items-center">
                                        <i class="h-5 text-red-500 hover:text-red-700 dark:hover:text-red-400 mr-1"
                                            data-feather="trash">
                                        </i>
                                        Delete
                                    </a>

                                    <form action="{{ route('cart.destroy', $item->id) }}" method="POST"
                                        id="cartDestroy_{{ $item->id }}">
                                        @method('DELETE')
                                        @csrf
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4"><span class="text-md font-bold">Total amount</span></td>
                            <td colspan="2"><span class=" text-lg font-bold">{{ $total }}</span></td>
                        </tr>
                    </tfoot>
                </table>

            </div>
        @else
            <div class="text-center mt-10 text-red-500">
                <p>There have no items.</p>
            </div>
        @endif
    </div>
</x-frontend-layout>
