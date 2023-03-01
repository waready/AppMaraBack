<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePalabrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('palabras', function (Blueprint $table) {
            $table->id();
            $table->string('aimara');
            $table->string('traduccion');
            $table->string('url_imagen')->nullable();

            $table->unsignedBigInteger('id_estado')->nullable()->comment('estado');
            $table->foreign('id_estado')->references('id')->on('estados');

            $table->unsignedBigInteger('id_categoria')->nullable()->comment('categoria');
            $table->foreign('id_categoria')->references('id')->on('categorias');

            $table->unsignedBigInteger('id_user')->nullable()->comment('usuario creador');
            $table->foreign('id_user')->references('id')->on('users');
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
        Schema::dropIfExists('palabras');
    }
}
