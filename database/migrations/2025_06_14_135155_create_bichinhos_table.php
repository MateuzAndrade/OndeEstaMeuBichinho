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
            $table->string('nome')->nullable();
            $table->string('raca')->nullable();
            $table->string('cor')->nullable();
            $table->string('detalhesAdicionais')->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bichinhos');
    }
};