<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_producto', 100);
            $table->text('descripcion')->nullable();
            $table->decimal('precio', 10, 2);
            $table->string('categoria', 50);
            $table->string('marca', 50);
            $table->string('modelo', 50)->nullable();
            $table->string('sku', 50)->nullable();
            $table->string('upc', 50)->nullable();
            $table->integer('stock')->default(0);
            $table->string('url_producto', 255)->nullable();
            $table->string('imagen_url', 255)->nullable();
            $table->date('fecha_agregado');
            $table->timestamp('fecha_ultima_actualizacion')->nullable();
            $table->decimal('calificacion_promedio', 3, 2)->nullable();
            $table->integer('numero_resenas')->default(0);
            $table->decimal('peso', 5, 2)->nullable();
            $table->string('dimensiones', 50)->nullable();
            $table->string('color', 50)->nullable();
            $table->string('material', 50)->nullable();
            $table->string('fabricante', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}