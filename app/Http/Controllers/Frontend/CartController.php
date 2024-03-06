<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cartCollection = \Cart::session(auth()->id())->getContent(); 
        return view('cart', ['cart' => $cartCollection->sortByDesc('id'), 'total' => \Cart::session(auth()->id())->getTotal()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Product::findOrFail($request->product_id);

        \Cart::session(auth()->id())->add([
            'id'         => $product->id,
            'name'       => $product->title,
            'price'      => $product->price,
            'image'      => $product->featuredMedia->url,
            'quantity'   => 1,
            'attributes' => [
                'image' => $product->featuredMedia->url,
            ],
            'associatedModel' => $product,
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $action = $request->action;

        if ($action == 'add') {
            \Cart::session(auth()->id())->update($id, [
                'quantity' => 1,
            ]);
        } elseif ($action == 'subtraction') {
            \Cart::session(auth()->id())->update($id, [
                'quantity' => -1,
            ]);
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        \Cart::session(auth()->id())->remove($id);

        return back();
    }
}
