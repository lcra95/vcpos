<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('telephone');
            $table->string('direction');
            $table->integer('status_id')->unsigned();
            $table->foreign('status_id')->references('id')->on('status')->onDelete('cascade');
            $table->integer('rols_id')->unsigned();
            $table->foreign('rols_id')->references('id')->on('rols')->onDelete('cascade');
            $table->unsignedInteger('empresas_id')->unsigned();
            $table->foreign('empresas_id')->references('id')->on('empresas')->onDelete('cascade');
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
        Schema::drop('users');
    }
}
