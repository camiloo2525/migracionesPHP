<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('migracion', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('correo')->unique();
            $table->integer('edad')->unsigned();
            $table->date('fechaNacimiento');
            $table->double('dineroDisponible');
            $table->boolean('estaActivo')->default(True);
            $table->text('biografiaCliente')->nullable();
            $table->dateTime('registroCliente')->useCurrent();
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('migracion');
    }
};
