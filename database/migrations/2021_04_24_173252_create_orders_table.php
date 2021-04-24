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
                $table->integer('number')->unique();
                $table->integer('dept');
                $table->string('name', 120);
                $table->enum('status', ['готов', 'в работе']);
                $table->float('product area', 8, 2);
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
