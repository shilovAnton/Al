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
    public function up(): void
    {
        Schema::create('orders',
            function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->integer('number');
                $table->integer('dept');
                $table->string('name', 120);
                $table->enum('status', ['готов', 'в работе']);
                $table->float('product_area'); //Площадь изделия
                $table->float('sliding'); // Раздвижка
                $table->float('blind'); // Глухарь
                $table->integer('impost'); // Импост
                $table->float('P400_02'); // Р400/02
                $table->float('blind_angle'); // Глухарь углы
                $table->float('m/n'); // м/с
                $table->float('door_mono_cold'); // Дверь хол одно створка
                $table->float('door_double_cold'); // Дверь хол двух створка
                $table->float('stained_glass_cold'); // Витраж холодный
                $table->float('door_mono_warm'); // Дверь тёплая одно створка
                $table->float('door_double_warm'); // Дверь тёплая двух створка
                $table->float('stained_glass_warm'); // Витраж тёплый
                $table->float('non-standard'); // Не стандарт
                $table->float('facade'); // Фасад
                $table->float('sandwich'); // Сэндвич
                $table->float('cost')->nullable(); // Стоимость заказа
                $table->float('product_area_fact'); // Стоимость заказа
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
}
