<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDetalleDocumento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_documentos', function (Blueprint $table) {
            
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id');
            $table->string('descripcion');
            $table->integer('cantidad');
            $table->integer('monto');
            $table->integer('iva');
            $table->integer('exento');
            $table->integer('descuento');
            $table->integer('recargo');
            $table->integer('total');
            $table->unsignedInteger('documentos_id')->unsigned();
            $table->foreign('documentos_id')->references('id')->on('documentos')->onDelete('cascade');
            $table->unsignedInteger('iva_id')->unsigned();
            $table->foreign('iva_id')->references('id')->on('iva')->onDelete('cascade');
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
