<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('shop_carts', function(Blueprint $table)
            $table->id()->autoIncrement();
            $table->integer('user_id');
            $table->integer('product_id');
            $table->integer('quantity');
            $table->timestamps();
        )};
    
    
}