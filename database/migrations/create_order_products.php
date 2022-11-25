<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('orders_products', function (Blueprint $table){
            $table->id()->autoIncrement();
            $table->integer('user_id');
            $table->string('order_id');
            $table->string('product_id');
            $table->string('price');
            $table->string('quantity');
            $table->integer('amount');
            $table->string('note',150)->nullable();
            $table->string('status',30)->default('New');
            $table->timestamps();
    }

}