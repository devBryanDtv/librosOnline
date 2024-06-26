<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofertas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('producto_id');
            $table->string('titulo', 100);
            $table->text('descripcion')->nullable();
            $table->decimal('descuento', 5, 2);
            $table->decimal('precio_oferta', 10, 2);
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('codigo_promocional', 50)->nullable();
            $table->text('restricciones')->nullable();
            $table->string('url_oferta', 255)->nullable();
            $table->string('imagen_url', 255)->nullable();
            $table->timestamp('fecha_creacion')->default(DB::raw('CURRENT_TIMESTAMP'))->change();
            $table->timestamp('fecha_ultima_actualizacion')->nullable();
            $table->boolean('activo')->default(true);
            $table->string('vendedor', 100)->nullable();
            $table->string('tipo_oferta', 50)->nullable();
            $table->integer('cantidad_limite')->nullable();
            $table->decimal('rating_promedio', 3, 2)->nullable();
            $table->integer('numero_ratings')->nullable();
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
        Schema::dropIfExists('ofertas');
    }
}
