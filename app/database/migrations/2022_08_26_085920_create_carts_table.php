<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();

            $table->foreignId('order_id')   // столбец вторичный ключ id с таблицы orders
                ->comment('FK id from "orders" table');
            
            $table->foreign('order_id', 'order_id_FK')->references('idorders')->on('orders');
                
            $table->foreignId('item_id')    // столбец вторичный ключ id с таблицы items
                ->comment('FK id from "items" table');

            $table->foreign('item_id', 'item_id_FK')->references('iditems')->on('items');

            $table->integer('qnt')          // столбец количество товара в корзине
                ->comment('quantity');
                
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
};
