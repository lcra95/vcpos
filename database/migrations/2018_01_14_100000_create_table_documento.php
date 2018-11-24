<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDocumento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id');
            $table->integer('folio');
            $table->date('fecha');
            $table->unsignedInteger('receptors_id')->unsigned();
            $table->foreign('receptors_id')->references('id')->on('receptors')->onDelete('cascade');
            $table->unsignedInteger('empresas_id')->unsigned();
            $table->foreign('empresas_id')->references('id')->on('empresas')->onDelete('cascade');
            $table->unsignedInteger('doc_types_id')->unsigned();
            $table->foreign('doc_types_id')->references('id')->on('doc_types')->onDelete('cascade');
            $table->unsignedInteger('status_id')->unsigned();
            $table->foreign('status_id')->references('id')->on('status')->onDelete('cascade');
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
