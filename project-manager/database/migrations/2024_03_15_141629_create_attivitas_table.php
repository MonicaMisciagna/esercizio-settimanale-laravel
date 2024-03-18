<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttivitasTable extends Migration
{
    public function up()
    {
        Schema::create('attivitas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('descrizione')->nullable();
            $table->enum('stato', ['attivo', 'concluso', 'in_corso'])->default('attivo');
            $table->unsignedBigInteger('progetto_id');
            $table->foreign('progetto_id')->references('id')->on('progettos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('attivitas');
    }
}
