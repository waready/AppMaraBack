<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('Nombre Categoria');

            $table->unsignedBigInteger('id_vocabulario')->comment('Tipo Vocabulario');
            $table->foreign('id_vocabulario')->references('id')->on('tipo_vocabularios');

            $table->unsignedBigInteger('id_user')->nullable()->comment('usuario creador');
            $table->foreign('id_user')->references('id')->on('users');

            $table->unsignedBigInteger('id_estado')->nullable()->comment('estado');
            $table->foreign('id_estado')->references('id')->on('estados');

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
        Schema::dropIfExists('categorias');
    }
}
