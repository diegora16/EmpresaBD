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
        Schema::create('personas', function (Blueprint $table) {
            $table->bigIncrements('nPerCodigo');
            $table->char('cPerApellido', 50);
            $table->char('cPerNombre', 50);
            $table->string('cPerDireccion', 100)->nullable();
            $table->date('dPerFecNac');
            $table->integer('nPerEdad');
            $table->char('cPerSexo', 15)->nullable()->default('Masculino');
            $table->decimal('nPerSueldo', 6, 2);
            $table->string('cPerRnd', 50);
            $table->char('nPerEstado', 1)->default('1');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persona');
    }
};
