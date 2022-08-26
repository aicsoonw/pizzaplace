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
        Schema::create('orders', function (Blueprint $table) {
            $table->id('idorders');

            $table->string('name', 99)              // столбец имя клиента
                ->comment('name of a client');
            
            $table->string('where', 999)            // столбец адрес доставки
                ->comment('address');

            $table->integer('phone')                // столбец номер телефона
                ->comment('phone number');
            
            $table->string('payment_method')        // метод оплаты
                ->comment('payment method');
                
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
        Schema::dropIfExists('orders');
    }
};
