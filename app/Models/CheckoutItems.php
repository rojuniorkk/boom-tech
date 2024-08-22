<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckoutItems extends Model
{
    use HasFactory;

    protected $table = 'checkouts_items';
    protected $fillable = ['checkout_id', 'product_id', 'quantity'];


    public function product(){
        return $this->belongsTo(Product::class, 'product_id', 'id')->first();
    }
}
