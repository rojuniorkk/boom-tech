<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $products = \Cart::getContent();
        return view('profile.cart', compact('products'));
    }

    public function store(Request $request)
    {

        $product = Product::find($request->id);

        \Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $request->quantity,
            'associatedModel' => $product
        ]);

        return redirect()->back();
    }

    public function edit(Request $request)
    {

        switch ($request->action) {

            case 'remove':
                \Cart::remove($request->id);
                break;

            case 'update':
                \Cart::update($request->id, [
                    'quantity' => [
                        'relative' => false,
                        'value' => $request->quantity
                    ]
                ]);
                break;
        }

        return redirect()->back();
    }

    public function checkout(Request $request)
    {

    }
}
