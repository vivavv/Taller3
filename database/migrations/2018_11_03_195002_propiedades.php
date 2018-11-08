<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Propiedades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propiedades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre'); 
            $table->integer('id_ubicacion')->unsigned(); 
            $table->string('nombre_ubicacion');
            $table->integer('id_estado')->unsigned(); 
            $table->string('estado');
            $table->string('ruta');
            $table->double('precio');
            $table->string('descripcion');  
        });

        Schema::table('propiedades', function($table){
            $table->foreign('id_ubicacion')->references('id')->on('ubicaciones')->onDelete('cascade');
            $table->foreign('id_estado')->references('id')->on('estados')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('propiedades', function($table)
        {
            Schema::dropIfExists('propiedades');
            $table->dropForeign('propiedades_id_ubicacion_foreign');
            $table->dropForeign('propiedades_id_estado_foreign');

        });
    }
}
