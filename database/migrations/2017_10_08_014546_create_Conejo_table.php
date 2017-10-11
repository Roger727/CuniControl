<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConejoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Conejo', function (Blueprint $table) {
            $table->string('Tatuaje_Derecho',5);
            $table->string('Tatuaje_Izquierdo',5);
            $table->integer('Id_Raza');
            $table->enum('Genero',['Macho','Hembra']);
            $table->integer('Peso_Conejo');
            $table->boolean('Status_Conejo');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Conejo');
    }
}
