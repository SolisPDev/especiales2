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
        Schema::create('especial', function (Blueprint $table) {
            $table->increments('id');
            $table->string('folio', 5)->index();
            $table->string('nombre', 50);
            $table->string('calle', 40);
            $table->string('numero', 10);
            $table->string('colonia', 40);
            $table->string('ciudad', 40);
            $table->string('telefono', 15);
            $table->string('email', 25);
            $table->date('fecent');
            $table->string('observa', 100);
            $table->decimal('base', 12, 2);
            $table->decimal('pastel', 12, 2);
            $table->decimal('total', 12, 2);
            $table->string('elaboro', 25);
            $table->unsignedInteger('id_tienda');
            $table->date('fecha');
            $table->string('imagen', 100);
            $table->string('tamano', 30);
            $table->string('sabor', 30);
            $table->string('operacion', 15);

            $table->foreign('id_tienda')->references('id')->on('tiendas');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('especial');
    }
};
