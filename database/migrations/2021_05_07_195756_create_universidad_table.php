<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universidad', function (Blueprint $table) {
            $table->integer('id_universidad');
            $table->primary('id_universidad');
            $table->string('nombre_universidad');
            $table->integer('id_ciudad');
            $table->foreign('id_ciudad')->
                                        references('id_ciudad')->
                                        on('ciudad')->
                                        onDelete('cascade')->
                                        onUpdate('cascade');
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
        Schema::dropIfExists('universidad');
    }
}
