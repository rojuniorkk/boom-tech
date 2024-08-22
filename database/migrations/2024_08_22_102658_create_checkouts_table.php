<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('checkout', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->cascade('delete')->cascade('update');
            $table->text('address');
            $table->float('total');
            $table->string('payment')->default('Pix');
            $table->text('status')->default('em andamento');
            $table->timestamps();
        });

        Schema::create('checkouts_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('checkout_id')->cascade('delete')->cascade('update');
            $table->foreignId('product_id')->cascade('delete')->cascade('update');
            $table->integer('quantity')->min(1)->max(999);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkouts');
        Schema::dropIfExists('checkouts_items');
    }
};
