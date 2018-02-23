<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva', function (Blueprint $table) {
            $table->increments('id_reserva');
            $table->date('fecha_reserva');
            $table->time('hora_reserva');
            $table->boolean('estado');
            $table->integer('asiento')->unsigned();
            $table->integer('cantidad')->unsigned();


             $table->integer('id')->unsigned();
             $table->foreign('id')->references('id')->on('users')
             ->onDelete('cascade');


             $table->integer('id_viaje')->unsigned();
             $table->foreign('id_viaje')->references('id_viaje')->on('viaje')
             ->onDelete('cascade');

                 $table->integer('id_cooperativa')->length(10)->unsigned();
            $table->foreign('id_cooperativa')->references('id_cooperativa')->on('cooperativa')
            ->onDelete('cascade');

            

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
        Schema::dropIfExists('reserva');
    }
}
