<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayunos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->datetime("inicioAyuno");
            $table->boolean("actualmenteAyunando");
            $table->datetime("finAyuno");
            $table->integer("tipoAyuno");
            $table->unsignedBigInteger("user_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ayunos');
    }
};
