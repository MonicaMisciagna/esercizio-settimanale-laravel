<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgettosTable extends Migration
{
    public function up()
    {
        Schema::create('progettos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('descrizione')->nullable();
            $table->enum('stato', ['attivo', 'concluso', 'in_corso'])->default('attivo');
            $table->unsignedBigInteger('utente_id');
            $table->foreign('utente_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('progettos');
    }
}
