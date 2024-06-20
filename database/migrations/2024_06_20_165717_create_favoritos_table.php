<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favoritos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('producto_id');
            $table->date('fecha_agregado');
            $table->string('comentario', 255)->nullable();
            $table->integer('rating')->nullable();
            $table->boolean('notificaciones')->default(false);
            $table->string('categoria', 50)->nullable();
            $table->string('marca', 50)->nullable();
            $table->decimal('precio', 10, 2)->nullable();
            $table->decimal('descuento', 5, 2)->nullable();
            $table->date('fecha_inicio_descuento')->nullable();
            $table->date('fecha_fin_descuento')->nullable();
            $table->string('url_producto', 255)->nullable();
            $table->string('imagen_url', 255)->nullable();
            $table->boolean('disponibilidad')->default(true);
            $table->timestamp('fecha_ultima_actualizacion')->nullable();
            $table->boolean('en_lista_deseos')->default(false);
            $table->integer('cantidad')->default(1);
            $table->integer('prioridad')->nullable();
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
        Schema::dropIfExists('favoritos');
    }
}
