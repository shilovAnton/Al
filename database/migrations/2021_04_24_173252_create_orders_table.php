<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders',
            function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->integer('number');
                $table->integer('dept');
                $table->string('name', 120);
                $table->enum('status', ['готов', 'в работе']);
                $table->float('product_area', 8, 2); //Площадь изделия
                $table->float('sliding', 8, 2); // Раздвижка
                $table->float('blind', 8, 2); // Глухарь
                $table->float('impost', 8, 2); // Импост
                $table->float('P400/02', 8, 2); // Р400/02
                $table->float('blind_angle', 8, 2); // Глухарь углы
                $table->float('m/n', 8, 2); // м/с
                $table->float('door_mono_cold', 8, 2); // Дверь хол одно створка
                $table->float('door_double_cold', 8, 2); // Дверь хол двух створка
                $table->float('stained_glass_cold', 8, 2); // Витраж холодный
                $table->float('door_mono_warm', 8, 2); // Дверь тёплая одно створка
                $table->float('door_double_warm', 8, 2); // Дверь тёплая двух створка
                $table->float('stained_glass_warm', 8, 2); // Витраж тёплый
                $table->float('non-standard', 8, 2); // Не стандарт
                $table->float('facade', 8, 2); // Фасад
                $table->float('sandwich', 8, 2); // Сэндвич
                $table->float('cost', 8, 2); // Стоимость заказа
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
}
