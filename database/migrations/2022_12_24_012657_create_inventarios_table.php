<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->string('codigo')->unique()->nullable();
            $table->decimal('precio_compra');
            $table->decimal('precio_venta');
            $table->string('stock');
            // $table->string('status');
            $table->timestamps();
        });
        // Id	Producto	Codigo	Precio_compra	Precio_venta	Stock	Estado
    }

    /**

     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventarios');
    }
}