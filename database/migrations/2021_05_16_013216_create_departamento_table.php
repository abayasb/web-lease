<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departamento', function (Blueprint $table) {
            $table->increments('id_departamento');
            $table->string('direccion',255);
            $table->text('descripcion');
            $table->float('precio');
            $table->string('servicio');
            $table->string('foto_principal');
            //$table->foreign('id_foto')->references('id_foto')->on('gallery')->onDelete('cascade')->onUpdate('cascade');
        });

            Schema::table('departamento', function (Blueprint $table) {
                $table->unsignedBigInteger('id');
                $table->integer('id_provincia');
                $table->integer('id_ciudad');
                $table->integer('id_universidad');
                
                //CLAVES FORANEAS

                $table->foreign('id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

                $table->foreign('id_provincia')
                                ->references('id_provincia')
                                ->on('provincia')
                                ->onDelete('cascade')
                                ->onUpdate('cascade');

            $table->foreign('id_ciudad')
                                ->references('id_ciudad')
                                ->on('ciudad')
                                ->onDelete('cascade')
                                ->onUpdate('cascade');

            $table->foreign('id_universidad')
                                ->references('id_universidad')
                                ->on('universidad')
                                ->onDelete('cascade')
                                ->onUpdate('cascade');
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
        Schema::dropIfExists('departamento');
    }
}
