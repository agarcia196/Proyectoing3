<?php

use Illuminate\Support\Facades\Schema;
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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->increments('id_usuario')->primary();
            $table->string('nombre');
            $table->string('apellidos');
            $table->date('fecha_nacimiento');  
            $table->string('email')->unique();
            $table->string('celular',20);
            $table->string('password');
            $table->integer('estado')->default(1);
            $table->string('universidad');
            $table->string('carrera');
            $table->string('nivel',100);
            $table->date('inicio');
            $table->string('cursos');
            $table->string('intereses');
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
        Schema::dropIfExists('users');
    }
}
