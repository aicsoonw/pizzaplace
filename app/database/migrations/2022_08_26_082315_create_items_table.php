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
        Schema::create('items', function (Blueprint $table) {
            $table->id('iditems');                       // столбец id

            $table->string('name', 45)          // столбец name имя товара
                ->comment('name of an item');

            $table->string('pic', 999)          // столбец pic путь к картинке
                ->comment('path to a picture')
                ->nullable();

            $table->float('price', 6, 2)        // столбец price цена товара
                ->comment('price of an item');

            $table->string('desc')              // столбец desc описание товара
                ->comment('item description')
                ->nullable();

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
        Schema::dropIfExists('items');
    }
};
