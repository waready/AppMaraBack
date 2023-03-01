<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoVocabulariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_vocabularios', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('Nombre Tipo Vocabulario');
            $table->string('url_imagen');

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
        Schema::dropIfExists('tipo_vocabularios');
    }
}
