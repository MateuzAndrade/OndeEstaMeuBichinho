<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('bichinhos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('raca')->nullable();
            $table->text('descricao')->nullable();
            $table->text('ultimo_local')->nullable();
            $table->string('foto')->nullable();
            $table->string('nome_responsavel');
            $table->string('telefone');
            $table->string('email');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bichinhos');
    }
};
