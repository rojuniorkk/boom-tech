<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Checkout extends Model
{
    use HasFactory;

    protected $table = 'checkout';
    protected $fillable = ['user_id', 'address','total'];

    public function list(){

        return $this->hasMany(CheckoutItems::class)->get();

        // $checkout_list = DB::table('checkouts_items')->where('checkout_id', $this->id)->get();

        // return Product::where(function($query) use ($checkout_list){
        //     foreach ($checkout_list as $item) {
        //         $query->orWhere('id', $item->product_id);
        //     }
        // })->get();
    }

}
