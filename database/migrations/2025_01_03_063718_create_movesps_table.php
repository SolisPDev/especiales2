<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('movesp', function (Blueprint $table) {
            $table->increments('id');
            $table->string('folio', 5);
            $table->tinyInteger('tipo');
            $table->date('fecmov')->index();
            $table->date('fecha');
            $table->decimal('monto', 10, 2);
            $table->string('numtic', 15);
            $table->unsignedInteger('id_tienda');
            $table->string('elaboro', 40);

            $table->foreign('id_tienda')->references('id')->on('tiendas');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('movesp');
    }
};
