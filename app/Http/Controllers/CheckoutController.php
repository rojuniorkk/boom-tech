<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Checkout;
use App\Models\CheckoutItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $checkouts = Checkout::where('user_id', Auth::user()->id)->get();
        return view('profile.checkout', compact('checkouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        if ($request->method() == 'POST') {
            try {

                $user = Auth::user();

                if($user->address() == null) {
                    return redirect()->route('profile.edit')->with('alert-error', ['message' => 'Adicione um endereço para finalizar a compra!', 'color'=>'yellow']);
                }

               $checkout = Checkout::create([
                    'user_id' => $user->id,
                    'address' => $user->address()->getfulladdress(),
                    'total' => \Cart::getTotal(),
                ]);

                foreach (\Cart::getContent() as $item) {
                    $product = $item->associatedModel;

                    CheckoutItems::create([
                        'product_id' => $product->id,
                        'quantity' => $item->quantity,
                        'checkout_id' => $checkout->id,
                    ]);

                    // DB::table('checkouts_items')->insert([
                    //     'product_id' => $product->id,
                    //     'quantity' => $item->quantity,
                    //     'checkout_id' => $checkout->id,
                    //     'created_at' => now(),
                    //     'updated_at' => now(),
                    // ]);
                }

                \Cart::clear();

            } catch (\Exception $exception) {
                dd($exception);
                return redirect()->back();
            }
        }

        return redirect()->route('checkout.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Checkout $checkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Checkout $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Checkout $checkout)
    {
        //
    }
}
