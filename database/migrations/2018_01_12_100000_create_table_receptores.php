<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReceptores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receptors', function (Blueprint $table) {
            
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id');
            $table->string('rut')->unique();
            $table->string('razonsocial');
            $table->string('direccion');
            $table->string('responsable');
            $table->string('rut_responsable');
            $table->string('telefono');
            $table->string('mail');
            //$table->string('cod_sii');
            //$table->integer('resolusion');
            //$table->date('fecha_resolucion');
            //$table->integer('ateco');
            $table->unsignedInteger('comunas_id')->unsigned();
            $table->foreign('comunas_id')->references('id')->on('comunas')->onDelete('cascade');
            //$table->integer('tipo_empresas_id')->unsigned();
            //$table->foreign('tipo_empresas_id')->references('id')->on('tipo_empresas')->onDelete('cascade');
            $table->rememberToken();
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
        //
    }
}
