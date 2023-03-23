<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCamionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camion', function (Blueprint $table) {
            $table->integer('id_placa')->primary();
            $table->String('placa_camion',6);
            $table->String('marca',45)->nullable();
            $table->String('color',25)->nullable();
            $table->DATE('modelo')->nullable();
            $table->integer('capacidad_toneladas');
            $table->foreignId('id_transporte')->references('id')->on('transporte');

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
        Schema::dropIfExists('camion');
    }
}
